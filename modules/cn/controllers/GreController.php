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


class GreController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    public function actionIndex(){

        return $this->renderPartial('index');
    }
}