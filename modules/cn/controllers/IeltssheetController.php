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
        $this->title='申友雅思（IELTS） _在线备考平台__实用做题平台 _雅思培训 _雅思英语学习_雅思培训那家好 _申友网';
        $this->keywords='IELTS考试,雅思考试时间,雅思英语,雅思学习,雅思报名官网,雅思培训班,雅思课程,雅思培训机构，雅思培训。';
        $this->description='申友雅思官网专门为雅思考生打造的在线练习平台，针对提分学员、传授雅思培训高分秘诀，IELTS 课程包括雅思方法课、 互动陪练、在线智能练习、智能测评反馈等雅思教学模块为一体的 IELTS 备考方案，通过网站和APP给用户提供高效、便捷的立体学习系统。';
        return $this->render('index',['data' => $data]);
    }
}