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
        $case = Content::getContent(['fields' => 'score,time,flag','category' => "115,104,206", 'pageSize' => 9, 'order' => 'c.id desc']);
        $active = Content::getContent(['category' => "115,107", 'pageSize' => 8,'order' => 'c.id desc']);
        $news = Content::getContent(['category' => "115,118", 'pageSize' => 8,'order' => 'c.id desc']);
        $course=json_decode(file_get_contents("http://gmat.viplgw.cn/index.php?web/webapi/gmatCourse"),true);
        $teacher = Content::getContent(['fields' => 'speaker,job,description,abstract', 'category' => "139", 'pageSize' => 15, 'order' => 'c.sort asc,c.id desc']);
        $this->title='GMAT培训-GMAT课程-GMAT班-GMAT辅导-GMAT模考-申友GMAT-申友网';
        $this->keywords='GMAT报名，GMAT考试时间，GMAT备考，GMAT换库，GMAT机经-GMAT逻辑-GMAT培训-GMAT数学- GMAT阅读-GMAT培训哪家好-GMAT培训上海-GMAT培训北京-GMAT培训杭州-GMAT培训武汉-GMAT培训广州-GMAT培训成都';
        $this->description='申友GMAT培训平台致力培育GMAT高分学员。为学员提供关于GMAT报名，GMAT考试时间，GMAT换库，GMAT机经，GMAT逻辑，GMAT真题，GMAT阅读，GMAT数学，GMAT语法等专业的GMAT备考信息，被业界称为“GMAT高分基地”';
//        echo '<pre>';var_dump($case);die;
        return $this->render('index',['extendData' => $extendData,'case'=>$case,'news'=>$news,'active'=>$active,'course'=>$course,'teacher'=>$teacher]);
    }
}