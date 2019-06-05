<?php
/**
 * 首页控制器
 * by Obelisk
 */
namespace app\modules\cn\controllers;
use yii;
use app\modules\cn\models\Content;
use app\modules\cn\models\Login;
use app\modules\cn\models\Collect;
use app\libs\ThinkUController;

class ClassController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    /**
     * 公开课列表页
     * @return string
     * @Obelisk
     */
    public function actionIndex(){
        $banner = Content::getContent(['fields' => 'url', 'category' => "269", 'order' => 'c.id desc', 'page'=>1,'pageSize' => 10]);//头条
        return $this->render('index',['banner'=>$banner]);
    }

    /**
     * 公开课详情
     * @Obelisk
     */
    public function actionDetails(){
        $id = Yii::$app->request->get('id');
        $data = Content::getContent(['fields' => "url,synopsis,time,score,place,description,speaker,keywords",'where' => "c.id = $id"]);
        $count = $data[0]['viewCount'];
        Content::updateAll(['viewCount' => ($count+1)],"id=$id");
        return $this->render('details',['data' => $data,'id' => $id]);
    }

    /**
     * 课程回放
     * @Obelisk
     */
    public function actionDetailsBack(){
        $id = Yii::$app->request->get('id');
        $data = Content::getContent(['fields' => "url,synopsis,time,score,place,description,speaker,keywords",'where' => "c.id = $id"]);
//        $count = $data[0]['viewCount'];
//        Content::updateAll(['viewCount' => ($count+1)],"id=$id");
        return $this->render('detailsBack',['data' => $data,'id' => $id]);
    }

    /**
     * 留学公开课列表
     * @Obelisk
     */
    public function actionAbroad(){
    $category = "178,107";
    $page = Yii::$app->request->get('page',1);
    $data = Content::getContent(['pageStr' =>1,'fields' => "score,speaker,abstract,time,place",'pageSize'=> 10,'category' => $category,'page' => $page]);
        $pageStr = $data['pageStr'];
        $count = $data['count'];
        $total = $data['total'];
        unset($data['count']);
        unset($data['total']);
        unset($data['pageStr']);
    return $this->render('list',['count' => $count,'total' => $total,'pageStr' => $pageStr,'data'=>$data,'page' =>$page,'category' => 'syabroad']);
}

    /**
     * 培训公开课列表
     * @return string
     * @Obelisk
     */

    public function actionCultivate(){
        $category = "177,107";
        $page = Yii::$app->request->get('page',1);
        $data = Content::getContent(['pageStr' =>1,'fields' => "score,speaker,abstract,time,place",'pageSize'=> 10,'category' => $category,'page' => $page]);
        $pageStr = $data['pageStr'];
        $count = $data['count'];
        $total = $data['total'];
        unset($data['count']);
        unset($data['total']);
        unset($data['pageStr']);
        return $this->render('cultivate',['count' => $count,'total' => $total,'pageStr' => $pageStr,'data'=>$data,'page' =>$page,'category' => 'syabroad']);
    }

    /**
     * 账号管理
     * @return string
     * @Obelisk
     */
    public function actionManage(){
        $userId = Yii::$app->session->get('userId');
        if(!$userId){
            die('<script>alert("请登录");history.go(-1);</script>');
        }
        $model = new Login();
        $data = $model->findOne($userId);
        return $this->render("manage",['data' => $data]);
    }

    /**
     * 账号管理
     * @return string
     * @Obelisk
     */
    public function actionCollect(){
        $userId = Yii::$app->session->get('userId');
        if(!$userId){
            die('<script>alert("请登录");history.go(-1);</script>');
        }
        $page = Yii::$app->request->get('page',1);
        $pageSize = 12;
        $model = new Collect();
        $data = $model->getCollect($userId,$page,$pageSize,1);
        return $this->render("collect",['data' => $data]);
    }

}