<?php
/**
 * sat单页
 * Created by PhpStorm.
 */
namespace app\modules\cn\controllers;
use app\libs\Method;
use app\libs\ThinkUController;

class WordsController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    public function actionIndex(){
        $word = Method::post("http://words.viplgw.cn/cn/index/index-api");
        $word = json_decode($word,true);
        return $this->render('index',['words'=>$word['data']['word'],'totalCount'=>$word['data']['totalCount']]);
    }
}