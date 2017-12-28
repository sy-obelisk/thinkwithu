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
        return $this->render('index',['extendData' => $extendData,'teacher'=>$teacher]);
    }
}