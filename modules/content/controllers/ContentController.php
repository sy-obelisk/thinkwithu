<?php
/**
 * 内容管理控制器
 * @return string
 * @Obelisk
 */

namespace app\modules\content\controllers;

use app\modules\content\models\Category;
use app\modules\content\models\Content;
use app\modules\content\models\CategoryExtend;
use app\modules\content\models\ContentExtend;
use app\modules\content\models\ExtendData;
use app\modules\content\models\CategoryContent;
use yii;
use app\libs\AppControl;
use app\libs\Method;
class ContentController extends AppControl {
    public $layout = 'content';
    public $enableCsrfValidation = false;
    /**
     * 内容列表
     * @return string
     * @Obelisk
     */
    public function actionIndex(){
        $catId  = Yii::$app->request->get('catId','');
        $beginTime  = Yii::$app->request->get('beginTime','');
        $endTime  = Yii::$app->request->get('endTime','');
        $id  = Yii::$app->request->get('id','');
        $userId  = Yii::$app->request->get('userId','');
        $showId  = Yii::$app->request->get('showId','');
        $pid  = Yii::$app->request->get('pid',0);
        $where = "a.pid=$pid";
        $extendData = [];
        if($showId){
            $where .= " AND a.id in (select contentId from {{%category_content}} WHERE catId=$showId)";
            $extendData = CategoryExtend::find()->where("catId = $showId AND belong='content'")->orderBy('id ASC')->all();
        }elseif($catId){
            $where .= " AND a.id in (select contentId from {{%category_content}} WHERE catId=$catId)";
            $extendData = CategoryExtend::find()->where("catId = $catId AND belong='content'")->orderBy('id ASC')->all();
        }
        if($beginTime){
            $where .= " AND DATEDIFF(a.createTime,'$beginTime')>0";
        }
        if($endTime){
            $where .= " AND DATEDIFF(a.createTime,'$endTime')<0";
        }
        if($id){
            $where .= " AND a.id = $id";
        }

        if($userId){
            $where .= " AND a.userId = $userId";
        }
        $fields = "";
        foreach($extendData as $k =>$v){
            $name = chr(ord('A') + intval($k));
            $fields .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=a.id AND ce.code='$v->code') as $name";
        }
        $page = Yii::$app->request->get('page',1);
        $pageSize = 50;
        $limit = " limit ".($page-1)*$pageSize.",".$pageSize;
        $order = " order by a.sort ASC,a.id DESC" ;
        $data = Yii::$app->db->createCommand("select a.*,n.caName$fields from {{%content}} a LEFT JOIN (SELECT cc.contentId,GROUP_CONCAT(ca.`name`) caName  FROM {{%category_content}} cc LEFT JOIN {{%category}} ca on ca.id=cc.catId GROUP BY cc.contentId ) n ON n.contentId = a.id WHERE ".$where.$order.$limit)->queryAll();
        $count = count(Yii::$app->db->createCommand("select a.*,n.caName from {{%content}} a LEFT JOIN (SELECT cc.contentId,GROUP_CONCAT(ca.`name`) caName  FROM {{%category_content}} cc LEFT JOIN {{%category}} ca on ca.id=cc.catId GROUP BY cc.contentId ) n ON n.contentId = a.id WHERE ".$where)->queryAll());
        $page = Method::getPagedRows(['count'=>$count,'pageSize'=>$pageSize, 'rows'=>'models']);
        return $this->render('index',['extendData' => $extendData,'content' => $data,'page' => $page,'block' => $this->block]);
    }

    /**
     * 添加内容与其基本信息
     * @return string
     * @Obelisk
     */
    public function actionAdd(){
        if($_POST){
            $model = new content();
            $contentData = Yii::$app->request->post('content');
            $id = Yii::$app->request->post('id');
            $url = Yii::$app->request->post('url');
            $extendId = Yii::$app->request->post('key',[]);
            $extendValue = Yii::$app->request->post('value');
            $category = explode(",",Yii::$app->request->post('category'));
            if(empty($contentData['name'])){
                die('<script>alert("请输入内容名称");history.go(-1);</script>');
            }
            if(!in_array($contentData['catId'],$category)){
                die('<script>alert("主分类必须在副分类中");history.go(-1);</script>');
            }
            if($id){
                $re = $model->updateAll($contentData,'id = :id',[':id' => $id]);
                foreach($extendId as $k => $v){
                    $required = ContentExtend::findOne($v);
                    if($required->required == 1){
                        if(empty($extendValue[$k])){
                            die('<script>alert("属性值必填");history.go(-1);</script>');
                        }
                        if(!empty($required->requiredValue)){
                            if (!preg_match("$required->requiredValue",$extendValue[$k]) )
                            {
                                die('<script>alert("请输入合法值");history.go(-1);</script>');
                            }
                        }
                    }
                    if(!isset($extendValue[$k]{255})){
                        ContentExtend::updateAll(['value' => $extendValue[$k]],'id = :id',[':id' => $v]);
                        ExtendData::updateAll(['value' => ""],"extendId = $v");
                    }else{
                        ContentExtend::updateAll(['value' => ""],'id = :id',[':id' => $v]);
                        $sign = ExtendData::find()->where("extendId = $v")->one();
                        if($sign){
                            ExtendData::updateAll(['value' => $extendValue[$k]],"extendId = $v");
                        }else{
                            $dataModel = new ExtendData();
                            $dataModel->extendId = $v;
                            $dataModel->value = $extendValue[$k];
                            $dataModel->save();
                        }
                    }
                }
                CategoryContent::deleteAll('contentId = :contentId',array(':contentId' => $id));
                $this->secondClass($id,$category);
            }else{
                $model->createTime = date("Y-m-d H:i:s");
                $model->userId = Yii::$app->session->get('adminId');
                $model->name = $contentData['name'];
                $model->title = $contentData['title'];
                $model->pid = $contentData['pid'];
                $model->image = $contentData['image'];
                $model->catId = $contentData['catId'];
                $re = $model->save();
                //将分类的内容属性，转移到内容本身的扩展属性中
                $this->shiftExtend($model->primaryKey,$contentData['catId'],$extendValue);
                //将分类的内容的副分类存储
                $this->secondClass($model->primaryKey,$category);
            }
            if($re=1){
                $key = $model->primaryKey;
                echo '<script>alert("成功")</script>';
                $this->redirect($url);
            }else{
                echo '<script>alert("失败，请重试");history.go(-1);</script>';
                die;
            }
        }else{
            $catId = Yii::$app->request->get('id','');//判断是否选择了主分类
            $pid = Yii::$app->request->get('pid',0);
            $url = Yii::$app->request->get('url','');
            $showId = Yii::$app->request->get('showId','');
            if(!empty($url) && !empty($showId)){
                $url .= "&showId=$showId";
            }
            if($catId){
                $model = new CategoryExtend();
                $cateModel = new Category();
                $cateName = $cateModel->findOne($catId);
                $catContent = $model->find()->where("catId=$catId AND belong='content'")->orderBy('id ASC')->all();
                return $this->render('add',['url' => $url,'pid' => $pid,'catId' => $catId,'catContent' => $catContent,'catName' => $cateName->name]);
            }else{
                return $this->render('add',['url' => $url]);
            }
        }
    }

    /**
     * 修改内容
     * @return string
     * @Obelisk
     */
    public function actionUpdate(){
        $id = Yii::$app->request->get('id');
        $url = Yii::$app->request->get('url');
        $showId = Yii::$app->request->get('showId','');
        if(!empty($url) && !empty($showId)){
            $url .= "&showId=$showId";
        }
        $extendModel = new ContentExtend() ;
        $model = new Content();
        $contentData = $model->findOne($id);
        $catName = Category::findOne($contentData->catId);
        $extendData = Yii::$app->db->createCommand("select ce.name,ce.type,ce.id,ce.value,ed.value as dataValue,ce.typeValue from {{%content_extend}} ce LEFT JOIN {{%extend_data}} ed ON ce.id=ed.extendId WHERE contentId = $id")->queryAll();
        $category  = Yii::$app->db->createCommand("select catId from {{%category_content}} WHERE contentId = $id")->queryAll();
        foreach($category as $v){
            $catId[] = $v['catId'];
        }
        $catId = implode(",",$catId);
        return $this->render('add',['url' => $url,'data' => $contentData,'catContent' => $extendData,'catId' => $catId,'id' => $id,'catName' => $catName->name]);
    }

    /**
     * 删除内容，关联删除内容属性，内容副分类
     * @Obelisk
     */

    public function actionDelete(){
        $id = Yii::$app->request->get('id');
        $url = Yii::$app->request->get('url');
        $showId = Yii::$app->request->get('showId','');
        if(!empty($url) && !empty($showId)){
            $url .= "&showId=$showId";
        }
        CategoryContent::deleteAll('contentId = :contentId',array(':contentId' => $id));
        Content::deleteAll('id = :id',array(':id' => $id));
        ContentExtend::deleteAll('contentId = :contentId',array(':contentId' => $id));
        $this->redirect($url);
    }


    /**
     * 展示内容的属性
     * @Obelisk
     */

    public function actionExtend(){
        $id = Yii::$app->request->get('id');
        $catId = Yii::$app->request->get('catId');
        $data = Yii::$app->db->createCommand("select a.*,b.name as contName from x2_content_extend a LEFT JOIN x2_content b ON a.contentId=b.id WHERE a.contentId=".$id)->queryAll();
        return $this->render('extend',['id'=> $id,'data' => $data,'catId' => $catId]);
    }

    /**
     * 内容排序
     * @Obelisk
     */

    public function actionSort(){
        $id = Yii::$app->request->post('id');
        $sort = Yii::$app->request->post('sort');
        $url = Yii::$app->request->post('url');
        foreach($id as $k =>$v){
            Content::updateAll(['sort' => $sort[$k]],"id=$v");
        }
        $this->redirect($url);
    }

    /**
     * 分类内容模板copy
     * @param $contentId 内容ID
     * @param $catId 分类ID
     * @param $extendValue 属性的值
     * @Obelisk
     */
    public function shiftExtend($contentId,$catId,$extendValue){
        $cateExtend = Yii::$app->db->createCommand("select * from {{%category_extend}} WHERE catId=$catId AND belong='content' ORDER by id ASC")->queryAll();
        foreach($cateExtend as $k => $v){
            $contExtendModel = new ContentExtend();
            $contExtendModel->catExtendId = $v['id'];
            $contExtendModel->contentId = $contentId;
            $contExtendModel->name = $v['name'];
            $contExtendModel->title = $v['title'];
            $contExtendModel->image = $v['image'];
            $contExtendModel->description = $v['description'];
            $contExtendModel->type = $v['type'];
            $contExtendModel->userId = $v['userId'];
            $contExtendModel->createTime = $v['createTime'];
            $contExtendModel->inheritId = $v['inheritId'];
            $contExtendModel->canDelete = $v['canDelete'];
            $contExtendModel->code = $v['code'];
            $contExtendModel->typeValue = $v['typeValue'];
            $contExtendModel->required = $v['required'];
            $contExtendModel->requiredValue = $v['requiredValue'];
            if($v['required'] == 1){
                if(empty($extendValue[$k])){
                    die('<script>alert("属性值必填");history.go(-1);</script>');
                }
                if(!empty($contExtendModel->requiredValue)){
                    if (!preg_match("{$v['requiredValue']}",$extendValue[$k]) )
                    {
                        die('<script>alert("请输入合法值");history.go(-1);</script>');
                    }
                }
            }
            if(!isset($extendValue[$k]{255})){
                $contExtendModel->value = $extendValue[$k];
            }
            $contExtendModel->save();
            if(isset($extendValue[$k]{255})){
                $dataModel = new ExtendData();
                $dataModel->extendId = $contExtendModel->primaryKey;
                $dataModel->value = $extendValue[$k];
                $dataModel->save();
            }
        }
    }

    /**
     * 将分类的内容的副分类存储
     * @param $contentId 内容ID
     * @param $category 副分类
     * @Obelisk
     */
    public function secondClass($contentId,$category){
        foreach($category as $v){
            $model = new CategoryContent();
            $saveData = [
                'contentId' => $contentId,
                'catId' => $v
            ];
            $model->setAttributes($saveData);
            $model->save();
        }

        return $model->primaryKey;
    }
}