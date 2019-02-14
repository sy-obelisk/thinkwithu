<?php
/**
 *课程
 * Created by PhpStorm.
 * User: obelisk
 * Date: 15-11-25
 * Time: 上午10:51
 */
namespace app\modules\cn\controllers;
use yii;
use app\modules\cn\models\Content;
use app\libs\ThinkUController;

class CourseController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';

    /**
     * 高分班
     * @return string
     * @Obelisk
     */

    public function actionAdvancedCourse(){
        return $this->renderPartial('advancedCourse');
    }

    /**
     * 基础课程
     * @return string
     * @Obelisk
     */
    public function actionBasicClass(){
        return $this->renderPartial('basicClass');
    }

    /**
     * 强化课程
     * @return string
     * @Obelisk
     */
    public function actionIntensiveCourse(){
        return $this->renderPartial('intensiveCourse');
    }

    /**
     * 开班查询
     * @return string
     * @Obelisk
     */
    public function actionClassQuery(){
        return $this->renderPartial('classQuery');
    }

    /**
     * 课程详情
     * @return string
     * @yoyo
     */
    public function actionClassDetail()
    {
        $id = Yii::$app->request->get('id');//分类ID
        $course = Yii::$app->request->get('course', 'gmat');//是那项的课程
        if ($course == 'gmat') {
            return $this->render('gmatDetail');
        } elseif ($course == 'toefl') {
            $data=json_decode(file_get_contents("http://toefl.viplgw.cn/cn/api/course-detail?id=$id"),true);
            echo '<pre>';var_dump($data);die;
            return $this->render('toeflDetail',$data);
        } elseif ($course == 'ielts') {
            $data=json_decode(file_get_contents("http://ielts.viplgw.cn/cn/api/couser-detail?cid=$id"),true);
//            echo '<pre>';var_dump($data);die;
            return $this->render('ieltsDetail',$data);
        } elseif ($course == 'gre') {
            return $this->render('greDetail');
        } else {
            return $this->render('classDetail');
        }

    }

}