<?php
/**
 * 登录管理
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-6-17
 * Time: 下午2:37
 */
namespace app\modules\cn\controllers;
use yii;
use yii\web\Controller;
use app\modules\cn\models\Login;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\libs\ThinkUController;

class LoginController extends ThinkUController {
    public $enableCsrfValidation = false;
    /**
     * 登陆界面
     * @return string
     */
    public function actionIndex(){
        $logins   = new Login();
        $session  = Yii::$app->session;
        $userName = $session->get('userName');
        $userPass = $session->get('userPass');
        $res      = $logins->find()->where(['userName'=>$userName,'userPass'=>$userPass])->one();
        if(!empty($res['id']))
        {
            $this->redirect('/listen.html');
        }
        return $this->renderPartial('index',array());
    }


    /**
     * 登陆验证
     * @return string
     * */
    public function actionCheck()
    {

        header('Content-Type:text/html;charset=utf-8');
        $apps       = Yii::$app->request;
        $session    = Yii::$app->session;
        $logins     = new Login();

        if($apps->isPost)
        {
            $userName   = $apps->post('userName');
            $userPass   = $apps->post('userPass');

            $loginsdata =  $logins->find()->where(['userName'=>$userName,'userPass'=>$userPass])->one();
            //var_dump($loginsdata);die;
            if(!empty($loginsdata['id']))
            {
                //用户名
                // 在要发送的响应中添加一个新的cookie
                $session->set('userName',$loginsdata['userName']);
                $session->set('userPass',$loginsdata['userPass']);
                $session->set('userId',$loginsdata['id']);
                $this->redirect('/listen.html');
            }
            else
            {
                echo '<script>alert("帐号或密码不正确");history.go(-1);</script>';
                exit;
            }
        }
    }
    /**
     * 注销账户
     * @return string
     * */
    public function actionLoginOut()
    {
        $session    = Yii::$app->session;
        $session->remove('userName');
        $session->remove('userPass');
        $session->remove('userId');
        $this->redirect('/cn/login');
    }
}