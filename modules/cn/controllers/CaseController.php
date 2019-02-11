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
//        $new = json_decode(file_get_contents("http://liuxue.viplgw.cn/cn/api/get-case?catId=281&page=1"), true);
        $list = Content::getContent(['category' => "207,104", 'order' => 'c.id desc', 'pageSize' => 50]);
//        $case[0] = json_decode(file_get_contents("http://liuxue.viplgw.cn/cn/api/get-case?catId=282&page=1"), true);
//        $model=new Content();
//        $case[0] = $model->getCase("104,88,207",'cc.catId=88', 1, 12,'');
        $case[0] = Content::getContent(['fields' => 'abroadSchool,major,score,oldSchool', 'category' => "104,88,207", 'order' => 'c.id desc',  'pageSize' => 12, 'page' => 1, 'pageStr' => 1]);
        $case[1] = Content::getContent(['fields' => 'abroadSchool,major,score,oldSchool', 'category' => "104,89,207", 'order' => 'c.id desc',  'pageSize' => 12, 'page' => 1, 'pageStr' => 1]);
        $case[2] = Content::getContent(['fields' => 'abroadSchool,major,score,oldSchool', 'category' => "104,91,96,207", 'order' => 'c.id desc', 'pageSize' => 12, 'page' => 1, 'pageStr' => 1]);
        $case[3] = Content::getContent(['fields' => 'abroadSchool,major,score,oldSchool', 'category' => "104,90,93,207", 'order' => 'c.id desc', 'pageSize' => 12, 'page' => 1, 'pageStr' => 1]);
        $case[4] = Content::getContent(['fields' => 'abroadSchool,major,score,oldSchool', 'category' => "104,94,207", 'order' => 'c.id desc',  'pageSize' => 12, 'page' => 1, 'pageStr' => 1]);
        $score['gmat'] = Content::getContent(['fields' => 'score,time', 'category' => "115,104,206",  'pageSize' => 12, 'page' => 1, 'pageStr' => 1, 'order' => 'c.id desc']);
        $score['ielts'] = Content::getContent(['fields' => 'score,time', 'category' => "172,104,206",  'pageSize' => 12, 'page' => 1, 'pageStr' => 1, 'order' => 'c.id desc']);
        $score['toefl'] = Content::getContent(['fields' => 'score,time', 'category' => "116,104,206",  'pageSize' => 12, 'page' => 1, 'pageStr' => 1, 'order' => 'c.id desc']);
//        $score['gre'] = Content::getContent(['fields' => 'score,time', 'category' => "171,104,206",  'pageSize' => 12, 'page' => 1, 'pageStr' => 1, 'order' => 'c.id desc']);
        $this->title = '成功案例，经验分享-申友网-申友网';
        $this->keywords = '留学案例，美国留学案例，加拿大成功签证案例，澳洲申请案例，欧洲留学案例，法国留学案例，英国留学案例';
        $this->description = '申友网为您提供留学成功申请案例，高分学子案例，高分心得，申请技巧，备考经验等学员信息，更多信息欢迎来电咨询';
        return $this->render('index', ['case' => $case, 'new' => $new, 'list' => $list, 'score' => $score]);
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
//        $list = json_decode(file_get_contents("http://liuxue.viplgw.cn/cn/api/get-case?catId=281&page=1"), true);
//        $data = json_decode(file_get_contents("http://liuxue.viplgw.cn/cn/mall-two/three?data-type='json'&contentid=$id&countryid=$catId"), true);

        $list = Content::getContent(['category' => "207,104", 'order' => 'c.id desc', 'pageSize' => 50]);
        $data = Content::getContent(['fields' => 'abroadSchool,major,score,oldSchool,description','where'=>'c.id='.$id])[0];
        $name=$data['title']!=false?$data['title']:$data['name'];
        $this->title=$name.'成功案例，经验分享-申友网-申友网';
        $this->keywords='留学案例，美国留学案例，加拿大成功签证案例，澳洲申请案例，欧洲留学案例，法国留学案例，英国留学案例';
        $this->description='申友网为您提供留学成功申请案例，高分学子案例，高分心得，申请技巧，备考经验等学员信息，更多信息欢迎来电咨询';
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
//        $keyword = '牛津大学';
//        $url="http://liuxue.viplgw.cn/cn/mall-two/select?countryid=240&word=$keyword";
//        $data = QueryList::Query($url,array(
//            'url'=>array('.detailContent>ul>li>.detailC-left>a','href'),
//            'image'=>array('.detailContent>ul>li>.detailC-left>image','src'),
//            'name' => array('.detailContent>ul>li>.detailC-right>.title','text') ,
//            'time' => array('.detailContent>ul>li>.detailC-right>.time','text') ,
//            'dis' => array('.detailContent>ul>li>.detailC-right>div','text')
//        ))->getData();
        if($keyword!=false){
            $keyword=str_replace('大学','',$keyword);
            $data = Content::getContent(['fields' => 'abroadSchool,major,score,oldSchool','category' => "207,104",'where'=>"c.title like '%".$keyword."%'"]);
        }else{
            $data=array();
        }
        $list = Content::getContent(['category' => "207,104", 'order' => 'c.id desc', 'pageSize' => 50]);
        $this->title='成功案例，经验分享-申友网-申友网';
        $this->keywords='留学案例，美国留学案例，加拿大成功签证案例，澳洲申请案例，欧洲留学案例，法国留学案例，英国留学案例';
        $this->description='申友网为您提供留学成功申请案例，高分学子案例，高分心得，申请技巧，备考经验等学员信息，更多信息欢迎来电咨询';
        return $this->render('search',['data'=>$data,'list'=>$list]);
    }

}