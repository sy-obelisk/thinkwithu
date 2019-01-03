<?php
/**
 * 首页控制器
 * by fawn
 */
namespace app\modules\cn\controllers;
use yii;
use app\libs\ThinkUController;
use app\modules\cn\models\Content;
use app\libs\Schools;

class SchoolsController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    public $activity;
    public $activityDate;

    public function init()
    {
        $re = Content::getActive();
        $this->activity = $re['activity'];
        $this->activityDate = $re['activityDate'];
    }
    /**首页-分类数据
     * @return string
     * by fawn
     */
    public function actionIndex(){
        $school = new Schools();
        $url = 'category';
        $country_data = json_decode($school->CurlRequest($url,['catid'=>154]),TRUE);//国家
        $rank_data = json_decode($school->CurlRequest($url,['catid'=>162]),TRUE);//排名
        $degree_data = json_decode($school->CurlRequest($url,['catid'=>166]),TRUE);//学位
        $major_data = json_decode($school->CurlRequest($url,['catid'=>171]),TRUE);//专业
        $cost_data = json_decode($school->CurlRequest($url,['catid'=>414]),TRUE);//费用
        $type_data = json_decode($school->CurlRequest($url,['catid'=>419]),TRUE);//学院类型
        $school =  json_decode($school->CurlRequest('school',['catid'=>155, 'pageNumber'=>1, 'pageSize'=>6]),TRUE);
        $this->title='院校库，美国留学院校分享，出国留学案例分享 申友留学专注名校留学申请';
        $this->keywords='留学中介,留学,留学中介机构,留学机构,启德留学,EIC启德教育,留学资讯,出国留学条件,出国留学流程,出国留学中介,读研条件,出国留学费用,出国留学网,留学网,申请出国留学,留学签证,留学看点,留学考试';
        $this->description='申友留学，专注商科与STEM留学咨询，提供留学申请一站式服务，是GMAT与托福 雅思培训的行业领跑者。申友专注美国、英国、加拿大、澳洲、香港等名校留学，留学咨询，出国留学，托福 雅思与GMAT培训，尽在申友。';
//        echo '<pre>';var_dump($school);die;
        return $this->render('index',
            [
                'country' => $country_data['data'],
                'rank' => $rank_data['data'],
                'degree' => $degree_data['data'],
                'major' => $major_data['data'],
                'cost' => $cost_data['data'],
                'type' => $type_data['data'],
                'activity' => $this->activity,
                'activityDate' => $this->activityDate,
                'school' => $school
            ]
        );

    }

//    /**首页-院校库数据-旧的方法
//     * @return string
//     * by fawn
//     */
//    public function actionSelect(){
//        $school = new Schools();
//        $url = 'school';
//        $pageNumber = Yii::$app->request->post('pageNumber');//分类ID
//        $pageSize = Yii::$app->request->post('pageSize');//分类ID
//        $data['keyword'] = Yii::$app->request->post('keyword');//学校类型
//        $data['schoolid'] = Yii::$app->request->post('schoolid');//学校ID
//        $data['type'] = Yii::$app->request->post('type');//关键字类型
//        $data['hot'] = Yii::$app->request->post('hot');//关键字类型
//        $data['catid'] = trim(Yii::$app->request->post('catid'),',');//分类ID
//        $data['pageNumber'] = !empty($pageNumber)?$pageNumber:1;
//        $data['pageSize'] = !empty($pageSize)?$pageSize:10;
//        $result = json_decode($school->CurlRequest($url,['keyword'=>$data['keyword'], 'schoolid'=>$data['schoolid'], 'type'=>$data['type'], 'catid'=>$data['catid'], 'pageNumber'=>$data['pageNumber'], 'pageSize'=>$data['pageSize'],'hot'=>$data['hot']]),TRUE);
//        die(json_encode($result));
//    }

    /**院校库数据-按条件匹配院校
     * @return string
     * by fawn
     */
    public function actionSelect()
    {
        $country = Yii::$app->request->post('country', '');
        $page = Yii::$app->request->post('page', 1);
        $rank = Yii::$app->request->post('rank', '');// 排行
        $major = Yii::$app->request->post('major', '');//专业方向
        $majorDetails = Yii::$app->request->post('majorDetails', '');//专业详情
        $type = Yii::$app->request->post('type', '');//
        $schoolSystem = Yii::$app->request->post('schoolSystem', '');//公立还是私立
        $tuition = Yii::$app->request->post('tuition', '');//学费
        $result = file_get_contents("http://schools.smartapply.cn/schools.html?data-type=json&country=$country&rank=$rank&major=$major&majorDetails=$majorDetails&page=$page");
        $result =json_decode($result,true);
//        var_dump($result);die;
        die(json_encode($result['data']));
    }

    /**院校库数据-学校专业搜索
     * @return string
     * by fawn
     */
    public function actionSearch()
    {
        $schoolId = Yii::$app->request->get('school');
        $majorId = Yii::$app->request->get('major');
        $result = file_get_contents("http://schools.smartapply.cn/select/s-$schoolId/m-$majorId.html?data-type=json");
        $result =json_decode($result,true);
        die(json_encode($result));
    }

    /**院校详情
     * by fawn
     */
    public function actionDetails(){
        $school = new Schools();
        $data['schoolid'] = Yii::$app->request->get('schoolid');//分类ID
        $data=json_decode(file_get_contents("http://schools.smartapply.cn/schools/id-".$data['schoolid'].".html?data-type='json'"),true);
//        echo '<pre>';var_dump($data['major']);die;
        $school =  json_decode($school->CurlRequest('school',['catid'=>155, 'pageNumber'=>1, 'pageSize'=>6]),TRUE);
        $this->title=$data['data']['name'].',院校库，美国留学院校分享，出国留学案例分享 申友留学专注名校留学申请';
        $this->keywords='留学中介,留学,留学中介机构,留学机构,启德留学,EIC启德教育,留学资讯,出国留学条件,出国留学流程,出国留学中介,读研条件,出国留学费用,出国留学网,留学网,申请出国留学,留学签证,留学看点,留学考试';
        $this->description='申友留学，专注商科与STEM留学咨询，提供留学申请一站式服务，是GMAT与托福 雅思培训的行业领跑者。申友专注美国、英国、加拿大、澳洲、香港等名校留学，留学咨询，出国留学，托福 雅思与GMAT培训，尽在申友。';
        return $this->render('detail',['data'=>$data['data'],'major'=>$data['major'],'school'=>$school['data']]);
    }

    /**专业数据
     * by fawn
     */
    public function actionMajor(){
        $school = new Schools();
        $url = 'content';
        $data['contentid'] = Yii::$app->request->post('contentid');//分类ID
        $data['catid'] = Yii::$app->request->post('catid');//分类ID
        $data['hot'] = Yii::$app->request->post('hot');//热门
        $result = json_decode($school->CurlRequest($url,['contentid'=>$data['contentid'],'catid'=>$data['catid'],'hot'=>$data['hot']]),TRUE);
        die(json_encode($result));
    }
    /**专业详情
     * by fawn
     */
    public function actionMajormsg(){
        $school = new Schools();
        $id = Yii::$app->request->get('id');//分类ID
        $data=json_decode(file_get_contents("http://schools.smartapply.cn/major/".$id.".html?data-type='json'"),true);
        $schoolData =  json_decode($school->CurlRequest('school',['catid'=>155, 'pageNumber'=>1, 'pageSize'=>6]),TRUE);
//        echo '<pre>';var_dump($data['school']);die;
        $this->title=$data['data']['name'].',院校库，美国留学院校分享，出国留学案例分享 申友留学专注名校留学申请';
        $this->keywords='留学中介,留学,留学中介机构,留学机构,启德留学,EIC启德教育,留学资讯,出国留学条件,出国留学流程,出国留学中介,读研条件,出国留学费用,出国留学网,留学网,申请出国留学,留学签证,留学看点,留学考试';
        $this->description='申友留学，专注商科与STEM留学咨询，提供留学申请一站式服务，是GMAT与托福 雅思培训的行业领跑者。申友专注美国、英国、加拿大、澳洲、香港等名校留学，留学咨询，出国留学，托福 雅思与GMAT培训，尽在申友。';
        return $this->render('major',['hot' => $data['hot'],'school'=>$data['school'],'data'=>$data['data'],'schoolData'=>$schoolData]);
    }

    public function actionTeacher(){
        $pageNumber = Yii::$app->request->post('pageNumber');//分类ID
        $result = Content::getContent(['pageStr' =>'1','fields' => "job,abstract",'category' => "140",'pageSize' => 5,'page' => $pageNumber]);
        unset($result['count']);
        unset($result['total']);
        unset($result['pageStr']);
        if($result){
            $arr['code'] = 1;
            $arr['message'] = "true";
            $arr['data'] = $result;
        }else{
            $arr['code'] = 0;
            $arr['message'] = "false";
        }
        die(json_encode($arr));
    }

    /**专业数据
     * by fawn
     */
    public function actionMajorAnalysis(){
        return $this->render('majorAnalysis',[]);
    }

}