<?php
/**
 * sat单页
 * Created by PhpStorm.
 */
namespace app\modules\cn\controllers;
use app\libs\Method;
use app\libs\ThinkUController;


class GreController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    public function actionIndex(){
        $greContents = file_get_contents("http://www.greonline.cn/cn/api/gre-index");
        $greContents = json_decode($greContents,true);
        $contents = $greContents['data'];
        return $this->render('index',$contents);
    }
}