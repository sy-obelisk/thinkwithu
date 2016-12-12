<?php
/**
 *关于我们
 * Created by PhpStorm.
 * User: obelisk
 * Date: 15-11-25
 * Time: 上午10:51
 */
namespace app\modules\cn\controllers;
use yii;
use app\modules\cn\models\Content;
use app\libs\ThinkUController;

class AboutController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    /**
     * 关于我们
     * by fawn
     * 2015-11-27
     * @return string
     */
    public function actionIndex(){
        return $this->render('index');
    }

    /**
     * 联系我们
     * @return string
     * @Obelisk
     */

    public function actionContact(){
        return $this->render('contact');
    }

    /**
     * 加入我们
     * @return string
     * @Obelisk
     */
    public function actionJoin(){
        return $this->render('join');
    }

    /**
     * 申友教材
     * @return string
     * @Obelisk
     */
    public function actionMaterials(){
        return $this->render('materials');
    }



}