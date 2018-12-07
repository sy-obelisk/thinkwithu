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
        $this->title='GRE培训|GRE考试|GRE在线课程|GRE网课|GRE机经真题_申友GRE培训官网';
        $this->keywords='GRE培训,GRE是什么考试,GRE考试辅导,GRE在线课程,GRE网课,GRE机经真题,雷哥GRE培训中心,美国留学，申友GRE';
        $this->description='申友GRE培训官网，提供最新gre考试资料，gre考试真题下载，更有gre课程培训、gre考试报名、gre培训辅导等特色服务。申友GRE通过PC、WAP和APP等互联网平台和工具，搭建GRE在线题库、GRE模考库和GRE知识库等，分析研究GRE用户的做题数据和学习轨迹，以人工智能为用户提供精准的留学GRE培训服务';
        return $this->render('index',$contents);
    }
}