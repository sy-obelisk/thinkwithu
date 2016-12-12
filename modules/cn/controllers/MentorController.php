<?php
/**
 * mentor单页
 * Created by PhpStorm.
 * User: Fawn
 * Date: 15-11-23
 * Time: 上午10:51
 */
namespace app\modules\cn\controllers;
use yii;
use app\libs\ThinkUController;

class MentorController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    /**
     * mentor页面
     * by fawn
     * 2015-11-27
     * @return string
     */
    public function actionIndex(){
        return $this->render('index');

    }

}