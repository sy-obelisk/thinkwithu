<?php
/**
 * sat单页
 * Created by PhpStorm.
 */
namespace app\modules\cn\controllers;
use yii;
use app\libs\ThinkUController;
use app\modules\cn\models\Content;
use app\modules\cn\models\CategoryExtend;

class SatsheetController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    public function actionIndex(){
        $extendData = CategoryExtend::find()->where("catId=247 AND belong='content'")->orderBy('id ASC')->all();
        $teacher = Content::getContent(['fields' => "smallPhoto,speaker,abstract,description",'category' => "259",'pageSize' => 4]);
        return $this->renderPartial('index',['extendData' => $extendData,'teacher'=>$teacher]);
    }
}