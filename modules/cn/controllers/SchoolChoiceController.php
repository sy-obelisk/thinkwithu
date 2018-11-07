<?php
/**
 *选校
 * Created by PhpStorm.
 * by yoyo
 */
namespace app\modules\cn\controllers;

use yii;
use app\libs\Method;
use app\libs\ThinkUController;
use app\modules\cn\models\SchoolTest;
use app\modules\cn\models\UserBackground;
use app\modules\cn\models\ProbabilityTest;

class SchoolChoiceController extends ThinkUController
{
    public $enableCsrfValidation = false;
    public $layout = 'cn';

    public function actionBackground()
    {
        if (!$_POST) {
            return $this->render('background');
        } else {
            $userBackground = new UserBackground();
            $userBackground->planTime = Yii::$app->request->post('planTime', '');  //计划出国时间
            $userBackground->country = Yii::$app->request->post('country', '');    //意向国家
            $userBackground->major = Yii::$app->request->post('major', '');         //意向专业
            $userBackground->gmat = Yii::$app->request->post('gmat', '');
            $userBackground->toefl = Yii::$app->request->post('toefl', '');
            $userBackground->ielts = Yii::$app->request->post('ielts', '');
            $userBackground->experience = Yii::$app->request->post('experience', '');  //实习经历
            $userBackground->emphases = Yii::$app->request->post('emphases', '');      //关心得问题
            $userBackground->supplement = Yii::$app->request->post('supplement', '');  //补充的问题
            $userBackground->uName = Yii::$app->request->post('uName', '');      //姓名
            $userBackground->phone = Yii::$app->request->post('phone', '');      //电话
            $userBackground->weChat = Yii::$app->request->post('weChat', '');      //微信
            $userBackground->interest = Yii::$app->request->post('interest', '');      //感兴趣的留学服务
            $userBackground->createTime = time();      //感兴趣的留学服务
            if (preg_match("/1[34578]{1}\d{9}$/", $userBackground->phone)) {
                $userBackground->emphases = implode(',', $userBackground->emphases);
                $userBackground->interest = implode(',', $userBackground->interest);
                $showtime = date("Y-m-d H:i:s");
                $yesterday = date("Y-m-d H:i:s", strtotime("-1 day"));
                $check = UserBackground::find()->asArray()->where("createTime between '" . $yesterday . "' and '" . $showtime . "' and phone=" . $userBackground->phone)->one();
                if ($check) {
                    $res['code'] = 0;
                    $res['message'] = '今天已经提交过了，请24小时后再试';
                } else {
                    $re = Yii::$app->db->createCommand()->insert("x2_user_background", $userBackground)->execute();
                    if ($re) {
                        $res['code'] = 1;
                    } else {
                        $res['code'] = 0;
                        $res['message'] = '数据库操作错误！';
                    }
                }
            } else {
                $res['code'] = 0;
                $res['message'] = '请输入正确的电话号码';
            }
            if ($res['code'] != 1) {
                echo "<script>alert('" . $res['message'] . "');history.go(-1)</script>";
            }
            return $this->render('background', []);
        }

    }
    public function actionPercentages()
    {
        if (!$_POST) {
            $data=ProbabilityTest::find()->asArray()->orderBy("id desc")->limit(15)->all();
            return $this->render('percentages',['data'=>$data]);
        }
    }

    public function actionChoice(){
        if (!$_POST) {
            return $this->render('choice');
        }
    }

    public function actionProbabilityResult(){
//        $id = Yii::$app->request->post('id');
//        $res = ProbabilityTest::find()->asArray()->where("id={$id}")->one();
//        $h['gpa'] = $res['gpa'];
//        $h['gmat'] = $res['gmat'];
//        $h['toefl'] = $res['toefl'];
//        $h['schoolGrade'] = $res['schoolGrade'];
//        $h['attendSchool'] = $res['attendSchool'];
//        $h['most'] = 6;
//        $score = Method::score($h);
//        if ($res['schoolGrade'] == 1) {
//            $schoolGrade = "清北复交浙大";
//        } elseif ($res['schoolGrade'] == 2) {
//            $schoolGrade = "985学校";
//        } elseif ($res['schoolGrade'] == 3) {
//            $schoolGrade = "211学校";
//        } elseif ($res['schoolGrade'] == 4) {
//            $schoolGrade = "非211本科";
//        } else {
//            $schoolGrade = "专科";
//        }
//        $data = ['res' => $score, 'score' => $res['score'], 'percent' => $res['percent'], 'school' => $res['school'], 'major' => $res['major'], 'schoolGrade' => $schoolGrade];
//        return $this->render('probabilityResult',['code' => 1, 'data' => $data]);
        return $this->render('probabilityResult');
    }

    /**
     * 选校结果
     * by yoyo
     */
    public function actionSchoolResult()
    {
//        $id = Yii::$app->request->post('id');
//        $res = SchoolTest::find()->asArray()->where("id={$id}")->one();
//        $result = unserialize($res['result']);
//        $data = Method::post("http://schools.smartapply.cn/cn/api/school-choice", ['result' => $result]);
//        $school = json_decode($data, true);
//        if ($res['schoolGrade'] == 1) {
//            $schoolGrade = "清北复交浙大";
//        } elseif ($res['schoolGrade'] == 2) {
//            $schoolGrade = "985学校";
//        } elseif ($res['schoolGrade'] == 3) {
//            $schoolGrade = "211学校";
//        } elseif ($res['schoolGrade'] == 4) {
//            $schoolGrade = "非211本科";
//        } else {
//            $schoolGrade = "专科";
//        }
//        $score = Method::score($res);
//        return $this->render('schoolResult',['code' => 1, 'data' => $school, 'score' => $score, 'schoolGrade' => $schoolGrade, 'applyMajor' => $res['majorName'], 'testId' => $res['id']]);
        return $this->render('schoolResult');
    }


}