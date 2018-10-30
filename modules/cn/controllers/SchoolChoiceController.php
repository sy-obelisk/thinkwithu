<?php
/**
 *选校
 * Created by PhpStorm.
 * by yoyo
 */
namespace app\modules\cn\controllers;
use yii;
use app\libs\ThinkUController;


class SchoolChoiceController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    public function actionBackground(){
       return $this->render('background',[]);
    }
}