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
    public function actionIndex(){
        return $this->render('index');
    }
    /**
     * 学员案例详情
     * @return string
     * @Obelisk
     */
    public function actionDetails(){
        return $this->render('details');
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