<?php
/**
 * 留学
 * Created by PhpStorm.
 * User: Fawn
 * Date: 15-11-23
 * Time: 上午10:51
 */
namespace app\modules\cn\controllers;
use yii;
use app\modules\cn\models\CategoryExtend;
use app\modules\cn\models\Content;
use app\modules\cn\models\Category;
use app\libs\ThinkUController;

class StudyController extends ThinkUController {
    public $layout = 'cn';
    public $enableCsrfValidation = false;
    public $layout_data;
    /**
     * 留学界面
     * by fawn
     * 2015-11-27
     * @return string
     */
    public function actionIndex(){
        $str = Yii::$app->request->get('str');
        $id = CategoryExtend::find()->where("value = '$str'")->one();
        $id = $id->catId;
        if($id == 92){
            $cstr = Yii::$app->request->get('cstr');
            if($cstr){
                $c = CategoryExtend::find()->where("value = '$cstr'")->one();
                $c = $c->catId;
            }else{
                $c = "";
            }
            $this->layout_data = $id;
            return $this->render('other',['id' => $id,'c' => $c]);
        }else{
            $caName = Category::findOne($id);
            $enName = CategoryExtend::find()->where("catId=$id AND belong='category' AND code='58008509110e385763db85b59523ae0b'")->one();
            $enName = $enName->value;
            $this->layout_data = $id;
            return $this->render('index',['id' => $id,'caName' => $caName->name,'enName' => $enName]);
        }
    }


    /**
     * 留学提升
     * @Obelisk
     */
    public function actionPromote(){
        $country = Yii::$app->request->get('country','USA');
        $degree = Yii::$app->request->get('degree','course');
        $countryId = CategoryExtend::find()->where("value = '$country'")->one();
        $degreeId = CategoryExtend::find()->where("value = '$degree'")->one();
        $countryId = $countryId->catId;
        $degreeId = $degreeId->catId;

        return $this->render('promote',['countryId' => $countryId,'degreeId' => $degreeId]);
    }

    /**
     * 留学申请
     * @Obelisk
     */
    public function actionApply(){
        $country = Yii::$app->request->get('country','USA');
        $degree = Yii::$app->request->get('degree','course');
        $countryId = CategoryExtend::find()->where("value = '$country'")->one();
        $degreeId = CategoryExtend::find()->where("value = '$degree'")->one();
        $countryId = $countryId->catId;
        $degreeId = $degreeId->catId;
        return $this->render('apply',['countryId' => $countryId,'degreeId' => $degreeId]);
    }

    /**
     * 留学规划
     * @Obelisk
     */
    public function actionProject(){
        $country = Yii::$app->request->get('country','USA');
        $degree = Yii::$app->request->get('degree','course');
        $countryId = CategoryExtend::find()->where("value = '$country'")->one();
        $degreeId = CategoryExtend::find()->where("value = '$degree'")->one();
        $countryId = $countryId->catId;
        $degreeId = $degreeId->catId;
        return $this->render('project',['countryId' => $countryId,'degreeId' => $degreeId]);
    }

    /**
     * 留学评估
     * @Obelisk
     */
    public function actionAssess(){
        if($_POST){
            $extendVal = Yii::$app->request->post('extendValue');
            $collagen = Yii::$app->request->post('collagen');
            $collagen = htmlspecialchars($collagen);
            Yii::$app->session->set('extendVal',$extendVal);
            Yii::$app->session->set('name','匿名');
            return $this->render('result',['collagen' => $collagen]);
        }else{
            $extendData = CategoryExtend::find()->where("catId=222 AND belong='content'")->orderBy('id ASC')->all();
            return $this->render('assess',['extendData' => $extendData]);
        }
    }


    /**
     * 留学产品
     * @Obelisk
     */
    public function actionAbroadProducts(){
        return $this->render('abroadProducts');
    }

    /**
     * 博士留学
     * @return string
     * @Obelisk
     */

    public function actionDoctorStudy(){
        return $this->render('doctorStudy');
    }

    /**
     * 硕士留学
     * @return string
     * @Obelisk
     */
    public function actionMasterBusiness(){
        return $this->render('masterBusiness');
    }

    /*
     * 单项服务
     * */
    public function actionSingle(){
        return $this->renderPartial('single');
    }


    /**
     * 本科留学
     * @return string
     * @Obelisk
     */
    public function actionUndergraduate(){
        return $this->render('undergraduate');
    }

    /**
     * 留学申请,博士
     * @return string
     * @Obelisk
     */
    public function actionApplyDoctor(){
        $id = Yii::$app->request->get('id',114);
        if($id == 114){
            $ids = 137;
        }
        $this->layout_data = $id;
        $hot = Content::getContent(['fields' => "time",'category' => "239",'pageSize' => 4,'page' => 1]);
        return $this->render('applyProject',['id' => $id,'ids' => $ids,'hot'=>$hot]);

    }

    /**
     * 留学申请,硕士
     * @return string
     * @Obelisk
     */
    public function actionApplyMaster()
    {
        $id = Yii::$app->request->get('id', 113);
        if ($id == 113) {
            $ids = 136;
        }
        $this->layout_data = $id;
        $hot = Content::getContent(['fields' => "time",'category' => "239",'pageSize' => 4,'page' => 1]);
        return $this->render('applyProject',['id' => $id,'ids' => $ids,'hot'=>$hot]);

    }
        /**
         * 留学申请,本科
         * @return string
         * @Obelisk
         */
        public function actionApplyCourse(){
            $id = Yii::$app->request->get('id',112);
            if($id == 112){
                $ids = 135;
            }
            $this->layout_data = $id;
            $hot = Content::getContent(['fields' => "time",'category' => "239",'pageSize' => 4,'page' => 1]);
            return $this->render('applyProject',['id' => $id,'ids' => $ids,'hot'=>$hot]);
        }

    /**
     * 留学服务
     * @return string
     * @Obelisk
     */
    public function actionService(){
        return $this->render('service');
    }

    /**
     * 去留学了
     * @return string
     * @Obelisk
     */
    public function actionGo(){
        return $this->render('go');
    }
    /**
     * 美国留学申请服务
     * @return string
     * @Obelisk
     */
    public function actionStudyingAbroad()
    {
        $caseList = Content::getContent(['category' => "104,207", 'pageSize' => 15, 'order' => 'c.id desc']);
        $banner = Content::getContent(['fields' => 'url','category' => "266", 'pageSize' => 8, 'order' => 'c.id desc']);
        $news['business'] = Content::getContent(['category' => "144", 'pageSize' => 15, 'order' => 'c.id desc']);
        $news['science'] = Content::getContent(['category' => "145", 'pageSize' => 15, 'order' => 'c.id desc']);
        $news['finance'] = Content::getContent(['category' => "149", 'pageSize' => 15, 'order' => 'c.id desc']);
        $news['arts'] = Content::getContent(['category' => "146", 'pageSize' => 15, 'order' => 'c.id desc']);
        $news['abroad'] = Content::getContent(['type' => 1, 'category' => "178,118", 'pageSize' => 4, 'where' => 'c.sort>0', 'order' => 'c.sort asc,c.id desc']);
        $news['major'] = Content::getContent(['type' => 1, 'category' => "143", 'pageSize' => 5, 'where' => 'c.sort>0', 'order' => 'c.sort asc,c.id desc']);
        $active = Content::getContent(['type' => 1,'fields' => 'url', 'category' => '178,107', 'pageSize' => 5,'order' => 'c.id desc']);
        $abroadPro = Content::getContent(['fields' => 'url', 'category' => "261", 'pageSize' => 10]);
        $case = Content::getContent(['type' => 1, 'category' => "178,206", 'pageSize' => 15, 'where' => 'c.sort>0', 'order' => 'c.sort asc,c.id desc']);
        $teacher = Content::getContent(['fields' => 'speaker,job,description,abstract', 'category' => "138,139", 'pageSize' => 15, 'order' => 'c.sort asc,c.id desc']);
        $recommend = Content::getContent(['category' => "88,143", 'pageSize' => 15, 'order' => 'c.id desc']);
        $internship['inland'] = Content::getContent(['pageStr' => 1, 'category' => "238,242", 'pageSize' => 6, 'page'=>1,'order' => 'c.sort asc,c.id desc']);
        $internship['foreign'] = Content::getContent(['pageStr' => 1, 'category' => "238,243", 'pageSize' => 6,'page'=>1 ,'order' => 'c.sort asc,c.id desc']);
        $internship['employment'] = Content::getContent(['pageStr' => 1, 'category' => "238,262", 'pageSize' => 6, 'page'=>1, 'order' => 'c.sort asc,c.id desc']);
        $internship['internship'] = Content::getContent(['pageStr' => 1, 'category' => "238,239", 'pageSize' => 6, 'page'=>1, 'order' => 'c.sort asc,c.id desc']);
        $internship['scientific'] = Content::getContent(['pageStr' => 1, 'category' => "238,263", 'pageSize' => 6, 'page'=>1, 'order' => 'c.sort asc,c.id desc']);
        $internship['welfare'] = Content::getContent(['pageStr' => 1, 'category' => "238,264", 'pageSize' => 6, 'page'=>1, 'order' => 'c.sort asc,c.id desc']);
//        echo '<pre>';var_dump($internship);die;
        return $this->render('abroad', ['banner'=>$banner,'recommend'=>$recommend,'caseList' => $caseList, 'news' => $news, 'active' => $active, 'abroadPro' => $abroadPro, 'case' => $case, 'teacher' => $teacher, 'internship' => $internship]);
    }
}