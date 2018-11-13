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
        return $this->render('background');
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
            $data=SchoolTest::find()->asArray()->orderBy("id desc")->limit(15)->all();
            return $this->render('choice',['data'=>$data]);
        }
    }

    public function actionProbabilityResult(){
        $id = Yii::$app->request->get('id',5);
        $res = ProbabilityTest::find()->asArray()->where("id={$id}")->one();
        $h['gpa'] = $res['gpa'];
        $h['gmat'] = $res['gmat'];
        $h['toefl'] = $res['toefl'];
        $h['schoolGrade'] = $res['schoolGrade'];
        $h['attendSchool'] = $res['attendSchool'];
        $h['most'] = 6;
        $score = Method::score($h);
        if ($res['schoolGrade'] == 1) {
            $schoolGrade = "清北复交浙大";
        } elseif ($res['schoolGrade'] == 2) {
            $schoolGrade = "985学校";
        } elseif ($res['schoolGrade'] == 3) {
            $schoolGrade = "211学校";
        } elseif ($res['schoolGrade'] == 4) {
            $schoolGrade = "非211本科";
        } else {
            $schoolGrade = "专科";
        }
        $data = ['res' => $score, 'score' => $res['score'], 'percent' => $res['percent'], 'school' => $res['school'], 'major' => $res['major'], 'schoolGrade' => $schoolGrade,'userName'=>$res['userName'],'data'=>$res];
        return $this->render('probabilityResult',['code' => 1, 'data' => $data]);
    }

    /**
     * 选校结果
     * by yoyo
     */
    public function actionSchoolResult()
    {
        $id = Yii::$app->request->get('id',2);
        $res = SchoolTest::find()->asArray()->where("id={$id}")->one();
        $result = unserialize($res['result']);
        $data = Method::post("http://schools.smartapply.cn/cn/api/school-choice", ['result' => $result]);
        $school = json_decode($data, true);
        if ($res['schoolGrade'] == 1) {
            $schoolGrade = "清北复交浙大";
        } elseif ($res['schoolGrade'] == 2) {
            $schoolGrade = "985学校";
        } elseif ($res['schoolGrade'] == 3) {
            $schoolGrade = "211学校";
        } elseif ($res['schoolGrade'] == 4) {
            $schoolGrade = "非211本科";
        } else {
            $schoolGrade = "专科";
        }
        $score = Method::score($res);
//        unset($school['res']);
//        echo '<pre>';var_dump($school);die;
        return $this->render('schoolResult',['code' => 1, 'res' => $res, 'data' => $school, 'score' => $score, 'schoolGrade' => $schoolGrade, 'applyMajor' => $res['majorName'], 'testId' => $res['id']]);
    }


}