<?php
/**
 *课程
 * Created by PhpStorm.
 * User: obelisk
 * Date: 15-11-25
 * Time: 上午10:51
 */
namespace app\modules\cn\controllers;
use yii;

use app\libs\ThinkUController;

class SearchController extends ThinkUController {
    public $enableCsrfValidation = false;
//    public $layout = 'cn';
    public function actionIndex(){
        return $this->renderPartial('index');
//        return $this->render('index');
    }
}