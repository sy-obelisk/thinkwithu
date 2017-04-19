<?php
/**
 * sat单页
 * Created by PhpStorm.
 */
namespace app\modules\cn\controllers;
use yii;
use app\modules\cn\models\CategoryExtend;
use app\libs\ThinkUController;

class SatsheetController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    public function actionIndex(){
    	 $extendData = CategoryExtend::find()->where("catId=247 AND belong='content'")->orderBy('id ASC')->all();
        return $this->renderPartial('index',['extendData' => $extendData]);
    }
}