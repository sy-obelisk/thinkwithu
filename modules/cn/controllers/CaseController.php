<?php
/**
 * 学员案例
 * Created by PhpStorm.
 * User: Fawn
 * Date: 15-11-23
 * Time: 上午10:51
 */
namespace app\modules\cn\controllers;
use yii;
use app\modules\cn\models\Content;
use app\libs\ThinkUController;

class CaseController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    /**
     * 学员案例
     * by fawn
     * 2015-11-30
     * @return string
     */
    public function actionIndex()
    {
        $new = Content::getContent(['fields' => 'abroadSchool,major','category' => "207", 'order' => 'c.id desc', 'pageSize' => 12]);
        $list = Content::getContent(['category' => "207", 'order' => 'c.sort asc,c.id desc', 'pageSize' => 50]);
        $case['USA'] = json_decode(file_get_contents("http://www.smartapply.cn/cn/api/get-case?catId=282&page=1"),true);
        $case['UK'] = json_decode(file_get_contents("http://www.smartapply.cn/cn/api/get-case?catId=283&page=1"),true);
        $case['AUS'] = json_decode(file_get_contents("http://www.smartapply.cn/cn/api/get-case?catId=284&page=1"),true);
        $case['HK'] = json_decode(file_get_contents("http://www.smartapply.cn/cn/api/get-case?catId=285&page=1"),true);
        $case['EURO'] = json_decode(file_get_contents("http://www.smartapply.cn/cn/api/get-case?catId=286&page=1"),true);
        return $this->render('index',['case'=>$case,'new'=>$new,'list'=>$list]);
    }
    /**
     * 学员案例详情
     * @return string
     * @Obelisk
     */
    public function actionDetails(){
        $id = Yii::$app->request->get('id');
        $data= json_decode(file_get_contents("http://www.smartapply.cn/cn/api/get-case?contentid=$id&data-type='json'"),true);
        $data=json_decode($data,true);
        return $this->render('details',$data);
    }

    /**
     * 高分列表
     * @return string
     * @Obelisk
     */
    public function actionHighScore(){
        $page = Yii::$app->request->get('page',1);
        $contentData = Content::getContent(['pageStr' => 1,'category' => "206,104",'pageSize' => 20,'page' => $page]);
        $count = $contentData['count'];
        $total = $contentData['total'];
        unset($contentData['count']);
        unset($contentData['total']);
        unset($contentData['pageStr']);
        return $this->render('highScore',['count' => $count,'total' => $total,'page' => $page,'contentData' => $contentData]);
    }

    /**
     * 名校列表
     * @return string
     * @Obelisk
     */
    public function actionEliteSchool(){
        $page = Yii::$app->request->get('page',1);
        $contentData = Content::getContent(['pageStr' => 1,'category' => "207,104",'pageSize' => 20,'page' => $page]);
        $count = $contentData['count'];
        $total = $contentData['total'];
        unset($contentData['count']);
        unset($contentData['total']);
        unset($contentData['pageStr']);
        return $this->render('eliteSchool',['count' => $count,'total' => $total,'page' => $page,'contentData' => $contentData]);
    }

}