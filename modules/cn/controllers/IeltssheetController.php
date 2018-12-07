<?php
/**
 * toefl单页
 * Created by PhpStorm.
 * User: Fawn
 * Date: 15-11-23
 * Time: 上午10:51
 */
namespace app\modules\cn\controllers;
use yii;
use app\modules\cn\models\CategoryExtend;
use app\libs\ThinkUController;

class IeltssheetController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    /**
     * 雅思单页
     * by obelisk
     */
    public function actionIndex(){
        $data = file_get_contents('http://ielts.viplgw.cn/cn/api/ielts');
        $data=json_decode($data,true);
        $this->title='Ielts(雅思)培训-Ielts课程-Ielts辅导-Ielts在线课程-申友网';
        $this->keywords='Ielts报名，Ielts考试时间，Ielts备考，Ielts机经，Ielts真题，Ielts培训，Ielts课程，Ielts网络课程，Ielts辅导，Ielts班，Ielts听力，Ielts口语、Ielts词汇、Ielts写作、Ielts阅读';
        $this->description='申友Ielts培训平台致力培育Ielts高分学员。为学员提供关于Ielts报名，Ielts考试时间，Ielts机经，Ielts真题，Ielts听力，Ielts口语、Ielts词汇、Ielts写作、Ielts阅读等专业的Ielts备考信息，被业界称为“Ielts高分基地';
        return $this->render('index',['data' => $data]);
    }
}