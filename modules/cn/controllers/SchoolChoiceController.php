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
            $data = ProbabilityTest::find()->asArray()->orderBy("id desc")->limit(15)->all();
            $this->title = '提供留学生寒暑假背景提升项目|美国|英国|香港|实习|暑校|科研|国际项目|留学中介-申友留学网专注在线DIY留学申请服务-慧申科技旗下教育品牌';
            $this->keywords = '留学实习、国外金融实习、国内名企实习、summer school、名校科研项目、商业比赛、留学资源、master、背景提升、申友网,留学中介，美国留学中介，留学中介顾问，留学中介机构，英国留学中介，放心留学中介，值得信赖的留学中介，好的留学中介';
            $this->description = '申友网，慧申科技旗下教育品牌，成立于2012年，提供大数据驱动下的国际教育O＋O服务。申友网通过PC、WAP和APP等互联网平台和工具，通过院校库、案例库和录取条件库等建立选校模型，为客户的留学申请精准定位，
        提供个性化留学选校与申请服务，并以申友网学习中心提供留学与出国英语辅导线下服务，二者相辅相成。帮您找放心的留学中介机构！';

            return $this->render('percentages', ['data' => $data]);
        }
    }

    public function actionChoice()
    {
        if (!$_POST) {
            $data = SchoolTest::find()->asArray()->orderBy("id desc")->limit(15)->all();
            $this->title = '提供留学生寒暑假背景提升项目|美国|英国|香港|实习|暑校|科研|国际项目|留学中介-申友留学网专注在线DIY留学申请服务-慧申科技旗下教育品牌';
            $this->keywords = '留学实习、国外金融实习、国内名企实习、summer school、名校科研项目、商业比赛、留学资源、master、背景提升、申友网,留学中介，美国留学中介，留学中介顾问，留学中介机构，英国留学中介，放心留学中介，值得信赖的留学中介，好的留学中介';
            $this->description = '申友网，慧申科技旗下教育品牌，成立于2012年，提供大数据驱动下的国际教育O＋O服务。申友网通过PC、WAP和APP等互联网平台和工具，通过院校库、案例库和录取条件库等建立选校模型，为客户的留学申请精准定位，
        提供个性化留学选校与申请服务，并以申友网学习中心提供留学与出国英语辅导线下服务，二者相辅相成。帮您找放心的留学中介机构！';

            return $this->render('choice', ['data' => $data]);
        }
    }

    public function actionProbabilityResult()
    {
        $id = Yii::$app->request->get('id', '');
        if ($id == false) {
            die('<script>alert("访问出错！");history.go(-1);</script>');
        }
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
        $data = ['res' => $score, 'score' => $res['score'], 'percent' => $res['percent'], 'school' => $res['school'], 'major' => $res['major'], 'schoolGrade' => $schoolGrade, 'userName' => $res['userName'], 'data' => $res];
        $this->title = '提供留学生寒暑假背景提升项目|美国|英国|香港|实习|暑校|科研|国际项目|留学中介-申友留学网专注在线DIY留学申请服务-慧申科技旗下教育品牌';
        $this->keywords = '留学实习、国外金融实习、国内名企实习、summer school、名校科研项目、商业比赛、留学资源、master、背景提升、申友网,留学中介，美国留学中介，留学中介顾问，留学中介机构，英国留学中介，放心留学中介，值得信赖的留学中介，好的留学中介';
        $this->description = '申友网，慧申科技旗下教育品牌，成立于2012年，提供大数据驱动下的国际教育O＋O服务。申友网通过PC、WAP和APP等互联网平台和工具，通过院校库、案例库和录取条件库等建立选校模型，为客户的留学申请精准定位，
        提供个性化留学选校与申请服务，并以申友网学习中心提供留学与出国英语辅导线下服务，二者相辅相成。帮您找放心的留学中介机构！';

        return $this->render('probabilityResult', ['code' => 1, 'data' => $data]);
    }

    /**
     * 选校结果
     * by yoyo
     */
    public function actionSchoolResult()
    {
        $id = Yii::$app->request->get('id', '');
        if ($id == false) {
            die('<script>alert("访问出错！");history.go(-1);</script>');
        }
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
        $this->title = '提供留学生寒暑假背景提升项目|美国|英国|香港|实习|暑校|科研|国际项目|留学中介-申友留学网专注在线DIY留学申请服务-慧申科技旗下教育品牌';
        $this->keywords = '留学实习、国外金融实习、国内名企实习、summer school、名校科研项目、商业比赛、留学资源、master、背景提升、申友网,留学中介，美国留学中介，留学中介顾问，留学中介机构，英国留学中介，放心留学中介，值得信赖的留学中介，好的留学中介';
        $this->description = '申友网，慧申科技旗下教育品牌，成立于2012年，提供大数据驱动下的国际教育O＋O服务。申友网通过PC、WAP和APP等互联网平台和工具，通过院校库、案例库和录取条件库等建立选校模型，为客户的留学申请精准定位，
        提供个性化留学选校与申请服务，并以申友网学习中心提供留学与出国英语辅导线下服务，二者相辅相成。帮您找放心的留学中介机构！';

        return $this->render('schoolResult', ['code' => 1, 'res' => $res, 'data' => $school, 'score' => $score, 'schoolGrade' => $schoolGrade, 'applyMajor' => $res['majorName'], 'testId' => $res['id']]);
    }


}