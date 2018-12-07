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
        $this->title='GRE培训-GRE课程-GRE辅导-GRE在线课程-申友网';
        $this->keywords='GRE报名，GRE考试时间，GRE备考，GRE机经，GRE真题，GRE培训，GRE课程，GRE网络课程，GRE辅导，GRE班，GRE听力，GRE口语、GRE词汇、GRE写作、GRE阅读';
        $this->description='申友GRE培训平台致力培育GRE高分学员。为学员提供关于GRE报名，GRE考试时间，GRE机经，GRE真题，GRE听力，GRE口语、GRE词汇、GRE写作、GRE阅读等专业的GRE备考信息，被业界称为“GRE高分基地';
//
        return $this->render('index',$contents);
    }
}