<?php
/**
 * 留学百科
 * Created by PhpStorm.
 * User: yoyo
 */
namespace app\modules\cn\controllers;

use yii;
use app\libs\ThinkUController;
use app\modules\cn\models\Content;

class EncyclopediaController extends ThinkUController
{
    public $enableCsrfValidation = false;
    public $layout = 'cn';

    /**
     * 本科留学
     */
    public function actionIndex()
    {
        $data = Content::getContent(['fields' => 'description,abstract', 'category' => "135,118", 'order' => 'c.id desc', 'pageSize' => 12]);//头条
//        $school['usa'] = Content::getContent(['fields' => 'description', 'category' => "225,88,135", 'order' => 'c.id desc', 'pageSize' => 12]);//头条
//        $school['apply'] = Content::getContent(['fields' => 'description', 'category' => "120,88,135", 'order' => 'c.id desc', 'pageSize' => 12]);//头条
//        $school['answer'] = Content::getContent(['fields' => 'description', 'category' => "121,88,135", 'order' => 'c.id desc', 'pageSize' => 12]);//头条
//        var_dump($school['apply']);die;
        return $this->render('index',['data'=>$data]);
    }

    /**
     * 详情
     */
    public function actionDetails()
    {
        $id = Yii::$app->request->get('id');
        $data = Content::getContent(['fields' => 'description', 'where' => 'c.id =' . $id]);
//        var_dump($data);die;
        return $this->render('details');
    }

    /**
     * 硕士
     */
    public function actionMaster()
    {
        return $this->render('master');
    }

}