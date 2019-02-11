<?php
/**
 * toefl单页
 * Created by PhpStorm.
 * User: Fawn
 * Date: 15-11-23
 * Time: 上午10:51
 */
namespace app\modules\cn\controllers;
use yii;
use app\libs\ThinkUController;
use app\modules\cn\models\Content;
use app\modules\cn\models\CategoryExtend;


class ToeflsheetController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    /**
     * toefl页面
     * by fawn
     * 2015-11-27
     * @return string
     */
    public function actionIndex(){
        $extendData = CategoryExtend::find()->where("catId=247 AND belong='content'")->orderBy('id ASC')->all();
        $teacher = Content::getContent(['fields' => "speaker,abstract,description",'category' => "141",'pageSize' => 5]);
        $course=json_decode(file_get_contents("http://toefl.viplgw.cn/cn/class/index?data-type=json"),true);
        $this->title='TOEFL(托福)培训-托福课程-托福辅导-托福在线课程-申友网-申友网';
        $this->keywords='托福报名，托福考试时间，托福备考，托福机经，托福真题，托福培训，托福课程，托福网络课程，托福辅导，托福班，托福听力，托福口语、托福词汇、托福写作、托福阅读';
        $this->description='申友托福培训平台致力培育托福高分学员。为学员提供关于托福报名，托福考试时间，托福机经，托福真题，托福听力，托福口语、托福词汇、托福写作、托福阅读等专业的托福备考信息，被业界称为“托福高分基地';
//        echo '<pre>';var_dump($course);die;
        return $this->render('index',['extendData' => $extendData,'teacher'=>$teacher,'course'=>$course]);
    }
}