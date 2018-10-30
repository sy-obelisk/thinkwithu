<?php
/**
 *选校
 * Created by PhpStorm.
 * by yoyo
 */
namespace app\modules\cn\controllers;

use yii;
use app\libs\ThinkUController;
use app\modules\cn\models\UserBackground;

class SchoolChoiceController extends ThinkUController
{
    public $enableCsrfValidation = false;
    public $layout = 'cn';

    public function actionBackground()
    {
        if (!$_POST) {
            return $this->render('background');
        } else {
            $data['planTime'] = Yii::$app->request->post('planTime', '');  //计划出国时间
            $data['country'] = Yii::$app->request->post('country', '');    //意向国家
            $data['major'] = Yii::$app->request->post('major', '');         //意向专业
            $data['gmat'] = Yii::$app->request->post('gmat', '');
            $data['toefl'] = Yii::$app->request->post('toefl', '');
            $data['ielts'] = Yii::$app->request->post('ielts', '');
            $data['experience'] = Yii::$app->request->post('experience', '');  //实习经历
            $data['emphases'] = Yii::$app->request->post('emphases', '');      //关心得问题
            $data['supplement'] = Yii::$app->request->post('supplement', '');  //补充的问题
            $data['uName'] = Yii::$app->request->post('uName', '');      //姓名
            $data['phone'] = Yii::$app->request->post('phone', '');      //电话
            $data['weChat'] = Yii::$app->request->post('weChat', '');      //微信
            $data['interest'] = Yii::$app->request->post('interest', '');      //感兴趣的留学服务
            if (preg_match("/1[34578]{1}\d{9}$/", $data['phone'])) {
                $showtime = date("Y-m-d H:i:s");
                $yesterday = date("Y-m-d H:i:s", strtotime("-1 day"));
                $check = UserBackground::find()->asArray()->where("createTime between '" . $yesterday . "' and '" . $showtime . "' and phone=" . $data['phone'])->one();
                if ($check) {
                    $res['code'] = 0;
                    $res['message'] = '今天已经提交过了，请24小时后再试';
                } else {
                    $re = Yii::$app->db->createCommand()->insert("{{%user_background}}", $data);
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
}