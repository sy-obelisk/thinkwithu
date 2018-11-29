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
use QL\QueryList;

class CaseController extends ThinkUController
{
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
        $new = Content::getContent(['fields' => 'abroadSchool,major', 'category' => "207", 'order' => 'c.id desc', 'pageSize' => 12]);
//        $new = json_decode(file_get_contents("http://www.smartapply.cn/cn/api/get-case?catId=281&page=1"), true);
        $list = Content::getContent(['category' => "207,104", 'order' => 'c.id desc', 'pageSize' => 50]);
//        $case[0] = json_decode(file_get_contents("http://www.smartapply.cn/cn/api/get-case?catId=282&page=1"), true);
//        $case[1] = json_decode(file_get_contents("http://www.smartapply.cn/cn/api/get-case?catId=283&page=1"), true);
//        $case[2] = json_decode(file_get_contents("http://www.smartapply.cn/cn/api/get-case?catId=284&page=1"), true);
//        $case[3] = json_decode(file_get_contents("http://www.smartapply.cn/cn/api/get-case?catId=285&page=1"), true);
//        $case[4] = json_decode(file_get_contents("http://www.smartapply.cn/cn/api/get-case?catId=286&page=1"), true);

        $case[0] = Content::getContent(['fields' => 'abroadSchool,major,score,oldSchool','category' => "104,88,207", 'order' => 'c.sort asc,c.id desc', 'pageSize' => 12,'page'=>1,'pageStr'=>1]);
        $case[1] = Content::getContent(['fields' => 'abroadSchool,major,score,oldSchool','category' => "104,89,207", 'order' => 'c.sort asc,c.id desc', 'pageSize' => 12,'page'=>1,'pageStr'=>1]);
        $case[2] = Content::getContent(['fields' => 'abroadSchool,major,score,oldSchool','category' => "104,91,96,207", 'order' => 'c.sort asc,c.id desc', 'pageSize' => 12,'page'=>1,'pageStr'=>1]);
        $case[3] = Content::getContent(['fields' => 'abroadSchool,major,score,oldSchool','category' => "104,90,93,207", 'order' => 'c.sort asc,c.id desc', 'pageSize' => 12,'page'=>1,'pageStr'=>1]);
        $case[4] = Content::getContent(['fields' => 'abroadSchool,major,score,oldSchool','category' => "104,94,207", 'order' => 'c.sort asc,c.id desc', 'pageSize' => 12,'page'=>1,'pageStr'=>1]);
//        echo '<pre>';var_dump($case[0]);die;
        return $this->render('index', ['case' => $case, 'new' => $new, 'list' => $list]);
    }

    /**
     * 学员案例详情
     * @return string
     * @Obelisk
     */
    public function actionDetails()
    {
        $id = Yii::$app->request->get('id');
//        $catId = Yii::$app->request->get('catId');
//        $list = json_decode(file_get_contents("http://www.smartapply.cn/cn/api/get-case?catId=281&page=1"), true);
//        $data = json_decode(file_get_contents("http://www.smartapply.cn/cn/mall-two/three?data-type='json'&contentid=$id&countryid=$catId"), true);

        $list = Content::getContent(['category' => "207,104", 'order' => 'c.id desc', 'pageSize' => 50]);
        $data = Content::getContent(['fields' => 'abroadSchool,major,score,oldSchool,description','where'=>'c.id='.$id])[0];

        return $this->render('details', ['data' => $data, 'list' => $list]);
    }

    /**
     * 高分列表
     * @return string
     * @Obelisk
     */
    public function actionHighScore()
    {
        $page = Yii::$app->request->get('page', 1);
        $contentData = Content::getContent(['pageStr' => 1, 'category' => "206,104", 'pageSize' => 20, 'page' => $page]);
        $count = $contentData['count'];
        $total = $contentData['total'];
        unset($contentData['count']);
        unset($contentData['total']);
        unset($contentData['pageStr']);
        return $this->render('highScore', ['count' => $count, 'total' => $total, 'page' => $page, 'contentData' => $contentData]);
    }

    /**
     * 名校列表
     * @return string
     * @Obelisk
     */
    public function actionEliteSchool()
    {
        $page = Yii::$app->request->get('page', 1);
        $contentData = Content::getContent(['pageStr' => 1, 'category' => "207,104", 'pageSize' => 20, 'page' => $page]);
        $count = $contentData['count'];
        $total = $contentData['total'];
        unset($contentData['count']);
        unset($contentData['total']);
        unset($contentData['pageStr']);
        return $this->render('eliteSchool', ['count' => $count, 'total' => $total, 'page' => $page, 'contentData' => $contentData]);
    }

    public function actionSearch()
    {
        $keyword = strip_tags(Yii::$app->request->get('keyword',''));
        $keyword = '牛津大学';
//        $url="http://www.smartapply.cn/cn/mall-two/select?countryid=240&word=$keyword";
//        $data = QueryList::Query($url,array(
//            'url'=>array('.detailContent>ul>li>.detailC-left>a','href'),
//            'image'=>array('.detailContent>ul>li>.detailC-left>image','src'),
//            'name' => array('.detailContent>ul>li>.detailC-right>.title','text') ,
//            'time' => array('.detailContent>ul>li>.detailC-right>.time','text') ,
//            'dis' => array('.detailContent>ul>li>.detailC-right>div','text')
//        ))->getData();
        if($keyword!=false){
            $keyword=str_replace('大学','',$keyword);
            $data = Content::getContent(['fields' => 'abroadSchool,major,score,oldSchool','category' => "207,104",'where'=>"c.name like '%".$keyword."%'"]);
        }else{
            $data=array();
        }
        $list = Content::getContent(['category' => "207,104", 'order' => 'c.id desc', 'pageSize' => 50]);
        return $this->render('search',['data'=>$data,'list'=>$list]);
    }

}