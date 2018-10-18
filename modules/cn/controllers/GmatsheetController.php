<?php
/**
 * gmat单页
 * Created by PhpStorm.
 * User: Fawn
 * Date: 15-11-23
 * Time: 上午10:51
 */
namespace app\modules\cn\controllers;
use yii;
use app\modules\cn\models\Content;
use app\modules\cn\models\CategoryExtend;
use app\libs\ThinkUController;

class GmatsheetController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    /**
     * gmat页面
     * by fawn
     * 2015-11-27
     * @return string
     */
    public function actionIndex(){
        $extendData = CategoryExtend::find()->where("catId=247 AND belong='content'")->orderBy('id ASC')->all();//联系我们
        $case = Content::getContent(['fields' => 'score,time,flag','category' => "115,102,206",'type'=>1, 'pageSize' => 9,'where'=>'c.sort>0', 'order' => 'c.sort asc,c.id desc']);
        $active = Content::getContent(['category' => "115,107",'type'=>1, 'pageSize' => 15,'order' => 'c.id desc']);
        $news = Content::getContent(['category' => "115,118",'type'=>1, 'pageSize' => 15,'order' => 'c.id desc']);
        $course=json_decode(file_get_contents("http://www.gmatonline.cn/index.php?web/webapi/gmatCourse"),true);
//        echo '<pre>';var_dump($course);die;
        return $this->render('index',['extendData' => $extendData,'case'=>$case,'news'=>$news,'active'=>$active,'course'=>$course]);
    }
}