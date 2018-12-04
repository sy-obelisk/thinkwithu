<?php
/**
 * 留学百科
 * Created by PhpStorm.
 * User: yoyo
 */
namespace app\modules\cn\controllers;
use yii;
use app\libs\ThinkUController;

class EncyclopediaController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    /**
     * 二级
     */
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionDetails(){
        return $this->render('details');
    }

}