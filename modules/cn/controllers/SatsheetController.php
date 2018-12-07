<?php
/**
 * sat单页
 * Created by PhpStorm.
 */
namespace app\modules\cn\controllers;
use yii;
use app\libs\ThinkUController;
use app\modules\cn\models\Content;
use app\modules\cn\models\CategoryExtend;

class SatsheetController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    public function actionIndex(){
        $extendData = CategoryExtend::find()->where("catId=247 AND belong='content'")->orderBy('id ASC')->all();
        $teacher = Content::getContent(['fields' => "smallPhoto,speaker,abstract,description",'category' => "259",'pageSize' => 4]);
        $this->title='申友SAT在线_SAT备考_SAT培训_SAT网络课程_SAT在线课程_SAT网课_SAT直播课_SAT申友';
        $this->keywords='申友_SAT_雷哥SAT_申友SAT在线_SAT备考_雷哥SAT课程_SAT培训_SAT在线课程_SAT网络课程_SAT网课_SAT备考_SAT资料_SAT视频课程_SAT网络课程_备考SAT_考SAT';
        $this->description='申友SAT在线|申友SAT在线培训课程，SAT在线课程，SAT网络课程直播课，大中华区权威一站式SAT学习生态系统';
        return $this->render('index',['extendData' => $extendData,'teacher'=>$teacher]);
    }
}