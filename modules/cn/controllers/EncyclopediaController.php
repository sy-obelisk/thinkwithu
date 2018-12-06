<?php
/**
 * 留学百科
 * Created by PhpStorm.
 * User: yoyo
 */
namespace app\modules\cn\controllers;

use yii;
use app\libs\Schools;
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
        return $this->render('index', ['data' => $data]);
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
        $list = Content::getContent(['fields' => 'description,abstract', 'category' => "136,118", 'order' => 'c.id desc', 'pageSize' => 12]);//头条
        $data[0] = Content::getContent(['fields' => 'description,abstract', 'category' => '136,118', 'order' => 'c.id desc', 'pageSize' => 12, 'page' => 1, 'pageStr' => 1]);//头条
        $data[1] = Content::getContent(['fields' => 'description,abstract', 'category' => '136,121', 'order' => 'c.id desc', 'pageSize' => 12, 'page' => 1, 'pageStr' => 1]);//头条
        $data[2] = Content::getContent(['fields' => 'description,abstract', 'category' => '136,119', 'order' => 'c.id desc', 'pageSize' => 12, 'page' => 1, 'pageStr' => 1]);//头条
        $data[3] = Content::getContent(['fields' => 'description,abstract', 'category' => '136,128', 'order' => 'c.id desc', 'pageSize' => 12, 'page' => 1, 'pageStr' => 1]);//头条
        $data[4] = Content::getContent(['fields' => 'description,abstract', 'category' => '136,120', 'order' => 'c.id desc', 'pageSize' => 12, 'page' => 1, 'pageStr' => 1]);//头条
        $data[5] = Content::getContent(['fields' => 'description,abstract', 'category' => '136,115', 'order' => 'c.id desc', 'pageSize' => 12, 'page' => 1, 'pageStr' => 1]);//头条
        $data[6] = Content::getContent(['fields' => 'description,abstract', 'category' => '136,116', 'order' => 'c.id desc', 'pageSize' => 12, 'page' => 1, 'pageStr' => 1]);//头条
        $school = new Schools();
        $school = json_decode($school->CurlRequest('school', ['catid' => 155, 'pageNumber' => 1, 'pageSize' => 6]), TRUE);
//        echo '<pre>';var_dump($school);die;
        return $this->render('master', ['data' => $data, 'list' => $list,'school'=>$school]);
    }

}