<?php
/**
 *名师云集
 * Created by PhpStorm.
 * User: Fawn
 * Date: 15-11-25
 * Time: 上午10:51
 */
namespace app\modules\cn\controllers;
use yii;
use app\modules\cn\models\Content;
use app\libs\ThinkUController;

class MastersController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    /**
     * 名师云集首页
     * by fawn
     * 2015-11-27
     * @return string
     */
    public function actionIndex(){
        $id = Yii::$app->request->get('id');
        return $this->render('index',['id' => $id]);
    }

    /**
     * 名师文档
     * @return string
     * @Obelisk
     */
    public function actionDocument(){
        return $this->render('document');
    }

    /**
     * 申友专题
     * @return string
     * @Obelisk
     */
    public function actionProject(){
        return $this->render('project');
    }

    /**
     * 申友老师案列
     * @return string
     * @Obelisk
     */
    public function actionCases(){
        $id = Yii::$app->request->get('id','');
        if(!$id){
            $this->redirect('/surprise.html');
        }else{
            $data = Content::getContent(['fields' => "job,description",'where' => "c.id = $id"]);
            return $this->render('cases',['data' => $data]);
        }

    }

}