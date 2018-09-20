<?php
/**
 * sat单页
 * Created by PhpStorm.
 */
namespace app\modules\cn\controllers;
use app\libs\Method;
use yii;
use app\libs\ThinkUController;
use app\modules\cn\models\Content;
use app\modules\cn\models\CategoryExtend;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-Requested-With');
class WordsController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    public function actionIndex(){
        $word = Method::post("http://words.viplgw.cn/cn/index/index-api");
        $word = json_decode($word,true);
        return $this->render('index',['word'=>$word['data']['word'],'totalCount'=>$word['data']['totalCount']]);
    }
}