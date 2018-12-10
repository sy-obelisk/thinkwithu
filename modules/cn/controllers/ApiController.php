<?php
/**
 * 前台api
 * Created by PhpStorm.
 * User: obelisk
 */
namespace app\modules\cn\controllers;
//use app\modules\cn\models\HistoryRecord;
use app\modules\content\models\Category;
use yii;
use app\libs\ThinkUApiControl;
use app\modules\cn\models\Content;
use app\modules\cn\models\SchoolTest;
use app\modules\cn\models\Collect;
use app\modules\cn\models\Report;
use app\modules\cn\models\Practices;
use app\modules\cn\models\ExtendData;
use app\modules\cn\models\ContentExtend;
use app\modules\cn\models\CategoryContent;
use app\modules\cn\models\ProbabilityTest;
use app\modules\cn\models\UserBackground;
use app\modules\cn\models\Login;
use app\libs\Sms;
use app\libs\Method;
use app\libs\Schools;
use app\libs\VerificationCode;
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-Requested-With');
class ApiController extends ThinkUApiControl {
    public $enableCsrfValidation = false;
    public function actionGetJoin(){
        $id = Yii::$app->request->post('id');
        $data = Content::getContent(['fields' => 'description','where' => "c.id=$id"]);
        die(json_encode($data[0]));
    }

    /**
     * 短信接口
     * @Obelisk
     */
    public function actionPhoneCode()
    {
        $session = Yii::$app->session;
        $sms = new Sms();
        $phoneNum = Yii::$app->request->post('phoneNum');
        $type = Yii::$app->request->post('type');
        $word = Yii::$app->params["phone$type"];
        if (!empty($phoneNum)) {
            $phoneCode = mt_rand(100000, 999999);
            $session->set($phoneNum.'phoneCode',$phoneCode);
            $session->set('phoneTime',time());
            $content = '验证码：' . $phoneCode . '（10分钟有效），'.$word.'';
            $sms->send($phoneNum, $content, $ext = '', $stime = '', $rrid = '');
            $res['code'] = 1;
            $res['message'] = '短信发送成功！';
        } else {
            $res['code'] = 0;
            $res['message'] = '发送失败!手机号码为空！';
        }
        die(json_encode($res));
    }

    /**
     *评估信息存储
     * @Obelisk
     */
    public function actionAssess(){
        $phone = Yii::$app->request->post('phone');
        $code = Yii::$app->request->post('code');
        $name = Yii::$app->session->get('name');
        $extendVal = Yii::$app->session->get('extendVal');
        $contentModel = new Content();
        $checkTime = $contentModel->checkTime();
        if(!$checkTime){
            $res['code'] = 0;
            $res['message'] = '验证码过期';
        }else{
            $checkCode = $contentModel->checkCode($phone,$code);
            if(!$checkCode){
                $res['code'] = 0;
                $res['message'] = '验证码错误';
            }else{
                $contentModel->addContent(222,$phone,$name,$extendVal);
                $res['code'] = 1;
                $res['message'] = '我们的工作人员将于1-2个工作日内跟你联系';
            }
        }
        die(json_encode($res));
    }

    /**
     *获取排名分类的Id
     * @Obelisk
     */
    public function actionRankInfo(){
        $major = Yii::$app->request->post('major');
        $organization = Yii::$app->request->post('organization');
        $country = Yii::$app->request->post('country');
        $year = Yii::$app->request->post('year');
        $majorId = Category::find()->where("name='$major'")->one();
        $organizationId = Category::find()->where("name='$organization'")->one();
        $countryId = Category::find()->where("name='$country'")->one();
        $yearId = Category::find()->where("name='$year'")->one();
        $majorId = $majorId?$majorId->id:'';
        $organizationId = $organizationId?$organizationId->id:'';
        $countryId = $countryId?$countryId->id:'';
        $yearId = $yearId?$yearId->id:'';
        die(json_encode(['major' => $majorId,'organization' => $organizationId,'country' => $countryId,'year' => $yearId]));
    }

    /**
     * 分页获取内容
     * @Obelisk
     */
    public function actionChangeContent(){
        $category = Yii::$app->request->post('category');
        $pageSize = Yii::$app->request->post('pageSize');
        $page = Yii::$app->request->post('page');
        $fields = Yii::$app->request->post('fields');
        $pageClass = Yii::$app->request->post('pageClass','num');
        $data = Content::getContent(['pageStr' => 1,'page' => $page,'pageSize' => $pageSize,'category' => $category,'fields' => $fields]);
        $count = $data['count'];
        $total = $data['total'];
        unset($data['count']);
        unset($data['total']);
        unset($data['pageStr']);
        $str = "<ul>";
        $str .='<li>总数：'.$count.'</li>';
        $str .='<li data-value="1" class="'.$pageClass.'"><a href="javascript:;">首页</a></li>';
        $str .='<li data-value="'.($page-1).'" class="'.$pageClass.'"><a href="javascript:;">上一页</a></li>';
        $str .='<li data-value="'.($page+1).'" class="'.$pageClass.'"><a href="javascript:;">下一页</a></li>';
        $str .='<li data-value="'.$total.'" class="mr '.$pageClass.'"><a href="javascript:;">尾页</a></li>';
        $str .='<li  data-value="'.$total.'" class="total mr02">页次：<span class="colorRed">'.$page.'</span>/'.$total.'</li>';
        $str .='<li class="mr02"><input type="text"/></li>';
        $str .='<li class="goButton"><input type="button" value="GO"/></li>';
        $str .='<li class="'.$pageClass.'"></li>';
        $str .='</ul>';
        die(json_encode(['data' => $data,'str' => $str]));
    }

    /**
     * 客户留言
     * @return string
     * @Obelisk
     */
    public function actionLeaveWords(){
        $phone = Yii::$app->request->post('phone');
        $code = Yii::$app->request->post('code');
        $name = Yii::$app->request->post('name');
        $email = Yii::$app->request->post('email');
        $extendVal = [$email];
        $contentModel = new Content();
        $checkTime = $contentModel->checkTime();
        if(!$checkTime){
            $res['code'] = 0;
            $res['message'] = '验证码过期';
        }else{
            $checkCode = $contentModel->checkCode($phone,$code);
            if(!$checkCode){
                $res['code'] = 0;
                $res['message'] = '验证码错误';
            }else{
                $contentModel->addContent(227,$phone,$name,$extendVal);
                $res['code'] = 1;
                $res['message'] = '我们的工作人员将于1-2个工作日内跟你联系';
            }
        }
        die(json_encode($res));
    }

    /**
     * 在线评估
     * @return string
     * @Obelisk
     */
    public function actionOnlineWords(){
        $phone = Yii::$app->request->post('phone');
        $code = Yii::$app->request->post('code');
        $name = Yii::$app->request->post('name');
        $email = Yii::$app->request->post('email');
        $class = Yii::$app->request->post('class');
        $extendVal = [$class,$email];
        $contentModel = new Content();
        $checkTime = $contentModel->checkTime();
        if(!$checkTime){
            $res['code'] = 0;
            $res['message'] = '验证码过期';
        }else{
            $checkCode = $contentModel->checkCode($phone,$code);
            if(!$checkCode){
                $res['code'] = 0;
                $res['message'] = '验证码错误';
            }else{
                $contentModel->addContent(226,$phone,$name,$extendVal);
                $res['code'] = 1;
                $res['message'] = '我们的工作人员将于1-2个工作日内跟你联系';
            }
        }
        die(json_encode($res));
    }

    /**
     *评估信息存储
     * @Obelisk
     */
    public function actionWapAssess(){
        $phone = Yii::$app->request->post('phone');
        $name = Yii::$app->request->post('name');
        $extendVal = Yii::$app->request->post('extendVal');
        $contentModel = new Content();
        $contentModel->addContent(257,$phone,$name,$extendVal);
        $res['code'] = 1;
        $res['message'] = '我们的工作人员将于1-2个工作日内跟你联系';
        die(json_encode($res));
    }

    /**
     *wap游学报名
     * @Obelisk
     */
    public function actionWapPractice(){
        $phone = Yii::$app->request->post('phone');
        $name = Yii::$app->request->post('name');
        $extendVal = Yii::$app->request->post('extendVal');
        $contentModel = new Content();
        $contentModel->addContent(258,$phone,$name,$extendVal);
        $res['code'] = 1;
        $res['message'] = '我们的工作人员将于1-2个工作日内跟你联系';
        die(json_encode($res));
    }


    /**
     * 点击获取验证码
     * @Obelisk
     */
    public function actionVerificationCode(){
        $_vc = new VerificationCode();  //实例化一个对象
        $_vc->doimg();
        Yii::$app->session->set('verificationCode',$_vc->getCode());//验证码保存到SESSION中
    }

    /**

     * 用户登录

     * @Obelisk

     */

    public function actionCheckLogin()

    {



        $apps       = Yii::$app->request;

        $session    = Yii::$app->session;

        $verificationCode   = $apps->post('verificationCode','');

        if($verificationCode){
            if(strtolower($session->get('verificationCode'))!=strtolower($verificationCode )){
                $re['code'] = 0;

                $re['message'] = '验证码错误';

                die(json_encode($re));
            }
        }

        $logins     = new Login();

        if($apps->isPost)

        {

            $userName   = $apps->post('userName');

            $userPass  = $apps->post('userPass');

            if(!$userName){

                $re['code'] = 0;

                $re['message'] = '请输入用户名';

                die(json_encode($re));

            }

            $userPass   = md5($userPass);

            $loginsdata =  $logins->find()->where("(phone='$userName' or userName='$userName' or email='$userName')")->one();

            if(!empty($loginsdata['id']))

            {

                if(!$userPass){

                    $re['code'] = 0;

                    $re['message'] = '请输入密码';

                    die(json_encode($re));

                }

                if($loginsdata['userPass'] == $userPass) {

                    //用户名

                    // 在要发送的响应中添加一个新的session

                    $session->set('userId', $loginsdata['id']);

                    if ($loginsdata['image'] == null) {

                        $loginsdata['image'] = '';

                    }

                    $session->set('userData', $loginsdata);

                    @unlink("html\cn\heard.html");

                    $re['code'] = 1;

                    $re['message'] = '登录成功';

                }else{

                    $re['code'] = 0;

                    $re['message'] = '密码错误';

                }

            }

            else

            {

                $re['code'] = 0;

                $re['message'] = '用户名错误';

            }

            die(json_encode($re));

        }

    }


    /**

     * 用户注册

     * @Obelisk

     */

    public function actionRegister(){

        $login = new Login();

        $registerStr = Yii::$app->request->post('registerStr');

        $pass = Yii::$app->request->post('pass');

        $code = Yii::$app->request->post('code');

        $type = Yii::$app->request->post('type');

        $userName = Yii::$app->request->post('userName');

        $checkPhoneEmail = $login->checkPhoneEmail($registerStr,$type);

        if(!$checkPhoneEmail){

            $res['code'] = 0;

            if($type == 1){

                $res['message'] = '手机已经被注册';

            }else{

                $res['message'] = '邮箱已经被注册';

            }

            $res['type'] = '3';

            die(json_encode($res));

        }

        $checkUserName = $login->checkUserName($userName);

        if(!$checkUserName){

            $res['code'] = 0;

            $res['message'] = '用户名已经被注册';

            $res['type'] = '2';

            die(json_encode($res));

        }

        $checkTime = $login->checkTime();

        if($checkTime){

            $checkCode = $login->checkCode($registerStr,$code);

            if($checkCode){

                if($type == 1){

                    $login->phone = $registerStr;

                    $login->userPass = md5($pass);

                    $login->createTime = time();

                    $login->userName = $userName;

                }else{

                    $login->email = $registerStr;

                    $login->userPass = md5($pass);

                    $login->createTime = time();

                    $login->userName = $userName;

                }

                $re = $login->save();

                if($re){

                    $res['code'] = 1;

                    $res['message'] = '注册成功';

                }else{

                    $res['code'] = 0;

                    $res['message'] = '注册失败，请重试';

                    $res['type'] = '3';

                }

            }else{

                $res['code'] = 0;

                $res['message'] = '验证码错误';

                $res['type'] = '1';

            }

        }else{

            $res['code'] = 0;

            $res['message'] = '验证码过期';

            $res['type'] = '1';

        }

        die(json_encode($res));

    }



    /**

     * 发送邮箱

     * @Obelisk

     */

    public function actionSendMail(){

        $session = Yii::$app->session;

        $emailCode = mt_rand(100000, 999999);

        $email = Yii::$app->request->post('email');

        $type = Yii::$app->request->post('type');

        $word = Yii::$app->params["phone$type"];

        $session->set($email.'phoneCode',$emailCode);

        $session->set('phoneTime',time());

        $mail= Yii::$app->mailer->compose();

        $mail->setTo($email);

        $mail->setSubject("【申友网(thinku)】邮件验证码");

        $mail->setHtmlBody('验证码：' . $emailCode . '（10分钟有效），'.$word
        );    //发布可以带html标签的文本

        if($mail->send()) {

            $res['code'] = 1;

            $res['message'] = '邮件发送成功！';

        }else {

            $res['code'] = 0;

            $res['message'] = '邮件发送失败！';

        }

        die(json_encode($res));

    }



    /**

     * 注销账户

     * @return string

     * */

    public function actionLoginOut()

    {

        $session    = Yii::$app->session;

        $startListening = $session->get('startListening');

        $userId = $session->get('userId');

        if($startListening){

            $testId = Yii::$app->session->get('testId');

            $deltaTime = time()-$startListening;

            $sign = HistoryRecord::find()->where("userId=$userId AND testId=$testId AND recordType=2")->one();

            HistoryRecord::updateAll(['deltaTime' => $sign->deltaTime+$deltaTime],"userId=$userId AND testId=$testId AND recordType=2");

            Yii::$app->session->remove('startListening');

            Yii::$app->session->remove('testId');

        }

        $session->remove('userData');

        $session->remove('userId');;

        @unlink("html\cn\heard.html");

        die(json_encode(['code' =>1]));

    }



    /**

     * 找回密码

     * @return string

     * */

    public function actionFindPass()

    {

        $login = new Login();

        $registerStr = Yii::$app->request->post('registerStr');

        $pass = Yii::$app->request->post('pass');

        $code = Yii::$app->request->post('code');

        $type = Yii::$app->request->post('type');

        $re = $login->find()->where("phone='$registerStr' or email='$registerStr'")->one();

        if(!$re){

            $res['code'] = 0;

            if($type == 1) {

                $res['message'] = '此电话还没有注册！';

            }else{

                $res['message'] = '此邮箱还没有注册！';

            }

            die(json_encode($res));

        }

        $checkTime = $login->checkTime();

        if($checkTime){

            $checkCode = $login->checkCode($registerStr,$code);

            if($checkCode){

                if($type == 1){

                    $re = $login->updateAll(['userPass' => md5($pass)],"phone='$registerStr'");

                }else{

                    $re = $login->updateAll(['userPass' => md5($pass)],"email='$registerStr'");

                }

                if($re){

                    $res['code'] = 1;

                    $res['message'] = '密码找回成功';

                }else{

                    $res['code'] = 0;

                    $res['message'] = '找回失败，请重试';

                    $res['type'] = '3';

                }

            }else{

                $res['code'] = 0;

                $res['message'] = '验证码错误';

                $res['type'] = '1';

            }

        }else{

            $res['code'] = 0;

            $res['message'] = '验证码过期';

            $res['type'] = '1';

        }

        die(json_encode($res));

    }

    /**

     * 修改用户资料

     * @Obelisk

     */

    public function actionChangeUserInfo(){

        $model = new Login();

        $session    = Yii::$app->session;

        $userId = $session->get('userId');

//        $phoneCode = Yii::$app->request->post('phoneCode','');
//
//        $phone = Yii::$app->request->post('phone','');

        $nickname = Yii::$app->request->post('nickname','');

//        $school = Yii::$app->request->post('school');
//
//        $major = Yii::$app->request->post('major');
//
//        $grade = Yii::$app->request->post('grade');

        $sign = Login::find()->where("id!=$userId AND nickname='$nickname'")->one();

        if($sign){

            die(json_encode(['code' =>0,'message'=>'昵称已经被使用']));

        }
        $userInfo = [];
        if($nickname){
            $userInfo['nickname'] = $nickname;
        }
//        if($phone){
//            $userInfo['phone'] = $phone;
//        }
//        if($school){
//            $userInfo['school'] = $school;
//        }
//        if($major){
//            $userInfo['major'] = $major;
//        }
//        if($grade){
//            $userInfo['grade'] = $grade;
//        }
//        if($phone){
//
//            $sign = Login::find()->where("id!=$userId AND phone='$phone'")->one();
//
//            if($sign){
//
//                die(json_encode(['code' =>0,'message'=>'该手机已被其他用户绑定']));
//
//            }
//
//            $signPhone = Login::find()->where("id=$userId AND phone='$phone'")->one();
//
//            if(!$signPhone){
//
//                $checkTime = $model->checkTime();
//
//                if($checkTime){
//
//                    $checkCode = $model->checkCode($phone,$phoneCode);
//
//                    if($checkCode){
//
//                        $model->updateAll($userInfo,"id=$userId");
//
//                        $userData = $model->findOne($userId);
//
//                        Yii::$app->session->set('userData',$userData);
//
//                        $res['code'] = 1;
//
//                        $res['message'] = '保存成功';
//
//                    }else{
//
//                        $res['code'] = 0;
//
//                        $res['message'] = '验证码错误';
//
//                    }
//
//                }else{
//
//                    $res['code'] = 0;
//
//                    $res['message'] = '验证码过期';
//
//                }
//
//            }else{
//
//                $model->updateAll($userInfo,"id=$userId");
//
//                $userData = $model->findOne($userId);
//
//                Yii::$app->session->set('userData',$userData);
//
//                $res['code'] = 1;
//
//                $res['message'] = '保存成功';
//
//            }
//
//        }else{

            $model->updateAll($userInfo,"id=$userId");

            $userData = $model->findOne($userId);

            Yii::$app->session->set('userData',$userData);

            $res['code'] = 1;

            $res['message'] = '保存成功';

//        }

        die(json_encode($res));

    }

    /**

     * 修改用户邮箱

     * @Obelisk

     */

    public function actionChangeUserEmail(){

        $model = new Login();

        $session    = Yii::$app->session;

        $userId = $session->get('userId');

        $emailCode = Yii::$app->request->post('emailCode');

        $email = Yii::$app->request->post('email');

        $sign = Login::find()->where("id!=$userId AND email='$email'")->one();

        if($sign){

            die(json_encode(['code' =>0,'message'=>'该邮箱已被使用']));

        }

        $checkTime = $model->checkTime();

        if($checkTime){

            $checkCode = $model->checkCode($email,$emailCode);

            if($checkCode){

                $model->updateAll(['email' => $email],"id=$userId");

                $userData = $model->findOne($userId);

                Yii::$app->session->set('userData',$userData);

                $res['code'] = 1;

                $res['message'] = '保存成功';

            }else{

                $res['code'] = 0;

                $res['message'] = '验证码错误';

            }

        }else{

            $res['code'] = 0;

            $res['message'] = '验证码过期';

        }

        die(json_encode($res));

    }

    /**

     * 修改用户邮箱

     * @Obelisk

     */

    public function actionChangeUserPhone(){

        $model = new Login();

        $session    = Yii::$app->session;

        $userId = $session->get('userId');

        $phoneCode = Yii::$app->request->post('phoneCode');

        $phone = Yii::$app->request->post('phone');

        $sign = Login::find()->where("id!=$userId AND phone='$phone'")->one();

        if($sign){

            die(json_encode(['code' =>0,'message'=>'该电话已被使用']));

        }

        $checkTime = $model->checkTime();

        if($checkTime){

            $checkCode = $model->checkCode($phone,$phoneCode);

            if($checkCode){

                $model->updateAll(['phone' => $phone],"id=$userId");

                $userData = $model->findOne($userId);

                Yii::$app->session->set('userData',$userData);

                $res['code'] = 1;

                $res['message'] = '保存成功';

            }else{

                $res['code'] = 0;

                $res['message'] = '验证码错误';

            }

        }else{

            $res['code'] = 0;

            $res['message'] = '验证码过期';

        }

        die(json_encode($res));

    }

    /**

     * 上传头像

     * @Obelisk

     */

    public function actionUpImage(){

        $session    = Yii::$app->session;

        $userId = $session->get('userId');

        $userData = $session->get('userData');

        $image = Yii::$app->request->post('image');

        $sign = Login::updateAll(['image' => $image],"id=$userId");

        if($sign){

            $userData['image'] = $image;

            $session->set('userData',$userData);

            $res['code'] = 1;

            $res['message'] = '更换成功';

        }else{

            $res['code'] = 0;

            $res['message'] = '更换失败，请重试';

        }

        die(json_encode($res));

    }

    /**

     * 修改用户密码

     * @Obelisk

     */

    public function actionChangeUserPass(){

        $model = new Login();

        $session    = Yii::$app->session;

        $userId = $session->get('userId');

        $oldPassword = Yii::$app->request->post('oldPassword');

        $oldPassword = md5($oldPassword);

        $newPassword = Yii::$app->request->post('newPassword');

        $sign = Login::find()->where("id=$userId AND userPass='$oldPassword'")->one();

        if(!$sign){

            die(json_encode(['code' =>0,'message'=>'当前密码错误']));

        }else{

            $model->updateAll(['userPass' => md5($newPassword)],"id=$userId");

            $userData = $model->findOne($userId);

            Yii::$app->session->set('userData',$userData);

            $res['code'] = 1;

            $res['message'] = '保存成功';

        }

        die(json_encode($res));

    }

    /**

     * 添加收藏

     * @Obelisk

     */

    public function actionAddCollect(){

        $userId = Yii::$app->session->get('userId');
        if($userId){
            $contentId = Yii::$app->request->post('id');

            $sign = Collect::find()->where("contentId=$contentId AND userId=$userId")->one();
            if($sign){
                $res['code'] = 0;

                $res['message'] = '已报名';

                die(json_encode($res));
            }
            $collectType = Yii::$app->request->post('collectType');

            $model = new Collect();

            $model->contentId = $contentId;

            $model->userId = $userId;


            $model->collectType = $collectType;

            $model->createTime = time();

            $sign = $model->save();

            if($sign){

                $res['code'] = 1;

                $res['message'] = '报名成功';

            }else{

                $res['code'] = 0;

                $res['message'] = '报名失败，请重试';

            }

        }else{

            $res['code'] = 2;

            $res['message'] = '请登录';

        }

        die(json_encode($res));

    }


    /**
     * 预约
     * @return string
     * @Obelisk
     */
    public function actionSubscribe(){
        $phone = Yii::$app->request->post('phone');
        $code = Yii::$app->request->post('code');
        $name = Yii::$app->request->post('name');
        $school = Yii::$app->request->post('school');
        $extendVal = [$name,$school];
        $contentModel = new Content();
        $checkTime = $contentModel->checkTime();
        if(!$checkTime){
            $res['code'] = 0;
            $res['message'] = '验证码过期';
        }else{
            $checkCode = $contentModel->checkCode($phone,$code);
            if(!$checkCode){
                $res['code'] = 0;
                $res['message'] = '验证码错误';
            }else{
                $contentModel->addContent(247,$phone,$name,$extendVal);
                $res['code'] = 1;
                $res['message'] = '我们的工作人员将于1-2个工作日内跟你联系';
            }
        }
        die(json_encode($res));
    }

    /**
     * 预约
     * @return string
     * @Obelisk
     */
    public function actionSmart(){
        $phone = Yii::$app->request->post('phone');
        $name = Yii::$app->request->post('name');
        $country = Yii::$app->request->post('country');
        $stage = Yii::$app->request->post('stage');
        $data = Yii::$app->request->post('data');
        $extendVal = [$country,$stage,$data];
        $contentModel = new Content();
        $contentModel->addContent(256,$phone,$name,$extendVal);
        $res['code'] = 1;
        $res['message'] = '我们的工作人员将于1-2个工作日内跟你联系';
        die(json_encode($res));
    }

    /**
     * gmat最新开课
     * @return string
     * @yoyo
     */
    public function actionStartClass(){
        $source=Yii::$app->request->get('source');
        $data = \app\modules\cn\models\Content::getContent(['fields' => 'hot,time,job,place,url','category' => "248",'pageSize'=>6,'order'=>'sort']);
        die(json_encode($data));
    }

    /**
     * 社区报offer
     * @return string
     * @yoyo
     */
    public function actionOffer(){
        $data = \app\modules\cn\models\Content::getContent(['fields' => 'score,abroadSchool','category' => "178,102",'limit'=>15]);
        die(json_encode($data));
    }


    /**
     * 社区报高分
     * @return string
     * @yoyo
     */
    public function actionScore(){
        $data = \app\modules\cn\models\Content::getContent(['fields' => 'score,abroadSchool','category' => "115,102",'limit'=>15]);
        die(json_encode($data));
    }

    public function actionList(){
        $category = Yii::$app->request->get('category');
        if(!$category){
            $re['code']=0;
            $re['message']='请求参数错误';
        }else{
            $contentData = Content::getContent(['fields' => 'abstract,keywords','category' => $category,'limit' => 15]);
            die(json_encode([ 'category' => $category,'contentData' => $contentData]));
        }
    }

    public function actionQuestion()
    {
        $data = Content::getContent(['fields' => 'abstract,keywords','category' => 121,'limit' => 15]);
        die(json_encode(['data' => $data]));

    }

    public function actionPublicClass()
    {
        $data = \app\modules\cn\models\Content::getContent(['fields' => 'url,place,time', 'category' => '107', 'order'=>'c.id desc','limit' => 3]);
        die(json_encode(['data' => $data]));
    }

    public function actionInternship(){
        $catId = Yii::$app->request->get('catId');
        $page = Yii::$app->request->get('page',1);
        $data = Content::getContent(['type' => 1,'page'=>$page,'category' => "238,$catId", 'pageSize' => 6, 'order' => 'c.sort asc,c.id desc']);
        $data['page'] = $page;
        die(json_encode(['data' => $data]));
    }

    /**
     * 选校结果储存
     * by  yoyo
     */
    public function actionSchoolStorage()
    {
        $apps = Yii::$app->request;
        $result['result_gpa'] = strip_tags(round($apps->post('result_gpa'), 2));
        $result['result_gmat'] = strip_tags($apps->post('result_gmat'));
        $result['result_toefl'] = strip_tags(round($apps->post('result_toefl'), 2));
        $education = strip_tags($apps->post('education'));  /*目前学历*/
        $result['school_rank'] = strip_tags($apps->post('school'));  /*获取就读学校等级*/
        $attendSchool = strip_tags($apps->post('schoolName'));  /*目前学校*/
        $nowMajor = strip_tags($apps->post('nowMajor'));  /*目前专业名*/
        $result['major_top'] = strip_tags($apps->post('major_top'));  /*详细专业*/
        $result['school_major'] = strip_tags($apps->post('school_major'));/*专业方向*/
        $result['result_work'] = $apps->post('work');  /*工作企业*/
        $result['year'] = $apps->post('year'); /*工作年限*/
        $workDetail = $apps->post('live');  /*工作经验详情*/
        $result['item_suffer'] = $apps->post('project');  /*项目经验*/
        $interest = Yii::$app->request->post('interest', '');        //感兴趣的服务
        $phone = Yii::$app->request->post('phone', '');        //感兴趣的服务
        $userName = Yii::$app->request->post('userName', '');        //感兴趣的服务
        foreach ($result['item_suffer'] as $key => $v) {
            if (!$v) {
                unset($result['item_suffer'][$key]);
            }
        }
        $result['you_xue'] = $apps->post('studyTour');          /*海外游学*/
        foreach ($result['you_xue'] as $key => $v) {
            if (!$v) {
                unset($result['you_xue'][$key]);
            }
        }
        $result['gong_yi'] = $apps->post('active');     /*海外游学*/
        foreach ($result['gong_yi'] as $key => $v) {
            if (!$v) {
                unset($result['gong_yi'][$key]);
            }
        }
        $result['huo_j'] = $apps->post('price');      /*海外游学*/
        foreach ($result['huo_j'] as $key => $v) {
            if (!$v) {
                unset($result['huo_j'][$key]);
            }
        }
        $result['state'] = strip_tags($apps->post('destination'));    /*申请国家*/
        $result['major'] = strip_tags($apps->post('major'));   /*申请专业id*/
        $majorName = strip_tags($apps->post('major02'));   /*专业名*/
        $data = Method::post("http://schools.smartapply.cn/cn/api/school-choice", ['result' => $result]);
        $school = json_decode($data, true);
        $most = 6;
        if (!empty($result['result_work'])) {
            foreach ($result['result_work'] as $k => $v) {
                if ($v[0] < $most) {
                    $most = $v[0];
                }
                $work[$k]['level'] = $v[0];
                $work[$k]['content'] = $workDetail;
            }
        } else {
            $work = array();
        }
        $model = new SchoolTest();
        $userId = Yii::$app->session->get('userId', 7898);
        $model->userId = $userId;
        $model->gpa = $result['result_gpa'];
        $model->gmat = $result['result_gmat'];
        $model->toefl = $result['result_toefl'];
        $model->education = $education; /*目前学历*/
        $model->attendSchool = $attendSchool;/*目前学校*/
        $model->nowMajor = $nowMajor;/*目前专业名*/
        $model->schoolGrade = $result['school_rank']; /*获取就读学校等级*/
        $model->majorDirection = $result['major_top']; /*详细专业*/
        $model->major = $result['school_major'];/*专业方向*/
        $model->enterpriseGrade = serialize($result['result_work']); /*工作企业*/
        $model->workLevel = serialize($work);
        $model->project = serialize($result['item_suffer']);/*项目经验*/
        $model->studyTour = serialize($result['you_xue']); /*海外游学*/
        $model->active = serialize($result['gong_yi']); /*海外公益*/
        $model->winning = serialize($result['huo_j']); /*获奖*/
        $model->interest = implode(',', $interest); /*获奖*/
        $model->country = $result['state'];  /*申请国家*/
        $model->applyMajor = $result['major'];/*申请专业id*/
        $model->majorName = $majorName; /*专业名*/
        $model->score = $school['score'];
        $model->source = '申友pc';
        $model->result = serialize($result);
        $model->createTime = time();
        $model->phone = $phone;
        $model->most = $most;
        $model->userName = $userName;
        $model->save();
        $id = $model->primaryKey;
        die(json_encode(['code' => 1, 'id' => $id]));

    }

    /**
     * 录取测评结果保存
     * by  yoyo
     */
    public function actionProbabilityStorage()
    {
        $schoolRank = Yii::$app->request->post('schoolRank', 0);  //院校排名
        $country = Yii::$app->request->post('country', 0);    //国家
        $schoolName = Yii::$app->request->post('schoolName', '');  //申请院校名
        $majorName = Yii::$app->request->post('majorName', '');   //申请专业名
        $gpa = strip_tags(round(Yii::$app->request->post('gpa', ''), 2));   // 3.64;
        $gmat = strip_tags(Yii::$app->request->post('gmat', ''));
        $toefl = strip_tags(round(Yii::$app->request->post('toefl', ''), 2));
        $education = strip_tags(Yii::$app->request->post('education', ''));   //学历
        $school = strip_tags(Yii::$app->request->post('school', ''));        //学校等级
        $major = strip_tags(Yii::$app->request->post('major', ''));          //专业名
        $attendSchool = strip_tags(Yii::$app->request->post('attendSchool', ''));        //当前在读学校
        $bigFour = strip_tags(Yii::$app->request->post('bigFour', ''));        //四大
        $foreignCompany = strip_tags(Yii::$app->request->post('foreignCompany', ''));        //外企
        $enterprises = strip_tags(Yii::$app->request->post('enterprises', ''));        //国企
        $privateEnterprise = strip_tags(Yii::$app->request->post('privateEnterprise', ''));        //私企
        $project = strip_tags(Yii::$app->request->post('project', ''));        //项目
        $study = strip_tags(Yii::$app->request->post('study', ''));        //游学
        $publicBenefit = strip_tags(Yii::$app->request->post('publicBenefit', ''));        //公益
        $awards = strip_tags(Yii::$app->request->post('awards', ''));        //得奖
        $userName = strip_tags(Yii::$app->request->post('userName', ''));        //用户名
        $interest = Yii::$app->request->post('interest', '');        //感兴趣的服务
        $phone = Yii::$app->request->post('phone', '');        //感兴趣的服务
        $workScore = 0;
        $model = new Content();
        if ($country == 1 || $country == 3) {
            $score = $model->score($gpa, $gmat, $toefl, $school, $country);
            if ($bigFour) {
                $workScore = 18;
            }
            if ($foreignCompany) {
                if ($workScore != 0) {
                    $workScore += 3;
                } else {
                    $workScore = 15;
                }
            }
            if ($enterprises) {
                if ($workScore != 0) {
                    $workScore += 3;
                } else {
                    $workScore = 12;
                }
            }
            if ($privateEnterprise) {
                if ($workScore != 0) {
                    $workScore += 3;
                } else {
                    $workScore = 10;
                }
            }
            if ($workScore > 20) {
                $workScore = 20;
            }
            if ($workScore == 0) {
                $workScore = 10;
            }
            $experienceScore = 0;
            if ($project) {
                $experienceScore += 3;
            }
            if ($study) {
                $experienceScore += 3;
            }
            if ($publicBenefit) {
                $experienceScore += 3;
            }
            if ($awards) {
                $experienceScore += 3;
            }
        } else {
            $score = $model->score($gpa, $gmat, $toefl, $school, $country);
            if ($bigFour) {
                $workScore = 8;
            }
            if ($foreignCompany) {
                if ($workScore != 0) {
                    $workScore += 2;
                } else {
                    $workScore = 6;
                }
            }
            if ($enterprises) {
                if ($workScore != 0) {
                    $workScore += 2;
                } else {
                    $workScore = 5;
                }
            }
            if ($privateEnterprise) {
                if ($workScore != 0) {
                    $workScore += 2;
                } else {
                    $workScore = 3;
                }
            }
            if ($workScore > 10) {
                $workScore = 10;
            }
            $experienceScore = 0;
            if ($project) {
                $experienceScore += 3;
            }
            if ($study) {
                $experienceScore += 3;
            }
            if ($publicBenefit) {
                $experienceScore += 2;
            }
            if ($awards) {
                $experienceScore += 2;
            }
        }
        $total = $model->getTotalScore($schoolRank, $country);
        if ($score == false) {
            die("<script>alert('请检查填写内容是否齐全.......');history.go(-1)</script>");
        }
        $score = $score + $workScore + $experienceScore;
        $percent = $score / $total;
        if ($percent >= 1) {
            $percent = 100;
        } else {
            $percent = ceil($percent * 100);
        }
        if ($percent > 96.6) {
            $percent = 96.6;
        }
        $model = new ProbabilityTest();
        $model->userName = $userName;
        $model->score = $score;
        $model->percent = $percent;
        $model->school = $schoolName;
        $model->major = $majorName;
        $model->gpa = $gpa;
        $model->gmat = $gmat;
        $model->toefl = $toefl;
        $model->education = $education;
        $model->schoolGrade = $school;
        $model->nowMajor = $major;
        $model->attendSchool = $attendSchool;
        $model->interest = implode(',', $interest);
        $model->createTime = time();
        $model->source = '申友pc';
        $model->phone = $phone;
        $model->save();
        $id = $model->primaryKey;
        die(json_encode(['code' => 1, 'id' => $id]));
    }

    /**
     * 背景评测保存
     * by  yoyo
     */
    public function actionBackgroundStorage()
    {
        $userBackground = new UserBackground();
        $userBackground->planTime = strip_tags(Yii::$app->request->post('planTime', ''));  //计划出国时间
        $userBackground->country = strip_tags(Yii::$app->request->post('country', ''));    //意向国家
        $userBackground->major = strip_tags(Yii::$app->request->post('major', ''));         //意向专业
        $userBackground->gmat = strip_tags(Yii::$app->request->post('gmat', ''));
        $userBackground->toefl = strip_tags(Yii::$app->request->post('toefl', ''));
        $userBackground->ielts = strip_tags(Yii::$app->request->post('ielts', ''));
        $userBackground->experience = strip_tags(Yii::$app->request->post('experience', ''));  //实习经历
        $userBackground->emphases = Yii::$app->request->post('emphases', '');      //关心得问题
        $userBackground->supplement = strip_tags(Yii::$app->request->post('supplement', ''));  //补充的问题
        $userBackground->userName = strip_tags(Yii::$app->request->post('uName', ''));      //姓名
        $userBackground->phone = strip_tags(Yii::$app->request->post('phone', ''));      //电话
        $userBackground->weChat = strip_tags(Yii::$app->request->post('weChat', ''));      //微信
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
                    $res['message'] = '提交成功';
                } else {
                    $res['code'] = 0;
                    $res['message'] = '数据库操作错误！';
                }
            }
        } else {
            $res['code'] = 0;
            $res['message'] = '请输入正确的电话号码';
        }
        die(json_encode($res));
    }

    /**
     * 案例分页
     * By yoyo
     */
    public function actionGetCase()
    {
        $catId = Yii::$app->request->get('catId', "104,88,207");
        $page = Yii::$app->request->get('page', 1);
//        $data = file_get_contents("http://www.smartapply.cn/cn/api/get-case?catId=$catId&page=$page");
//        $data = json_decode($data, true);

        $data['data'] = Content::getContent(['fields' => 'abroadSchool,major,score,oldSchool', 'category' => "$catId", 'order' => 'c.sort asc,c.id desc', 'pageSize' => 12, 'page' => $page]);
        $data['page'] = $page;
        die(json_encode($data));
    }


    public function actionSchool()
    {
        $count = Yii::$app->request->get('count', 8);
        $cate = [155, 156, 157, 158, 159, 160, 520, 521];
        if ($count >= count($cate)) {
            $count = ($count % count($cate));
        }
        $school = new Schools();
        $school = json_decode($school->CurlRequest('school', ['catid' => $cate[$count], 'pageNumber' => 1, 'pageSize' => 6]), TRUE);
        die(json_encode(['school' => $school['data'], 'code' => 1, 'count' => $count]));
    }

    /**
     *评估信息存储
     * @Obelisk
     */
    public function actionAssessment()
    {
        $session = Yii::$app->session;
        $name = Yii::$app->request->post('name');
        $extendVal = Yii::$app->request->post('extendValue');
//        $contentModel = new Content();
//        $contentModel->addContent(222, $extendVal[17], $name, $extendVal);
        $contentModel = new Practices();
        $data = $contentModel->addContent(222, $name, $extendVal);
        if (!$data) {
            die('<script>alert("我们的工作人员将于1-2个工作日内跟你联系");history.go(-2);</script>');
        }else{
            die('<script>alert("数据添加失败，请重试");history.go(-1);</script>');
        }
//        die(json_encode($res));
    }

    /**
     *图片验证码
     * @yoyo
     */
    public function actionCheckCode()
    {
        $session = Yii::$app->session;
        $verificationCode = Yii::$app->request->post('verificationCode', '');
        if ($verificationCode) {
            if (strtolower($session->get('verificationCode')) != strtolower($verificationCode)) {
                $re['code'] = 0;
                $re['message'] = '验证码错误';
                die(json_encode($re));
            }
        }
        $res['code'] = 1;
        $res['message'] = '验证通过！';
        die(json_encode($res));
    }

    /**
     *游学申请
     * @yoyo
     */
    public function actionAbroadApply()
    {
        if ($_POST) {
            $extendVal = Yii::$app->request->post('extendValue');
            $contentModel = new Practices();
            $data = $contentModel->addContent(244, $extendVal[0], $extendVal);
            if (!$data) {
                die('<script>alert("我们的工作人员将于1-2个工作日内跟你联系");history.go(-1);</script>');
            } else {
                $res['code'] = 0;
                die('<script>alert("数据传输出错！");history.go(-1);</script>');
            }
        }
    }

    public function actionMajor(){
        $catId = Yii::$app->request->get('catId','');
        $page = Yii::$app->request->get('page',1);
        $category='136';
        if($catId!=false){
            $category='136,'.$catId;
        }
        $data = Content::getContent(['fields' => 'description,abstract', 'category' => $category, 'order' => 'c.id desc', 'pageSize' => 12,'page'=>$page]);//头条
        die(json_encode(['data'=>$data,'code'=>1,'page'=>$page]));
    }

    /**
     * 添加举报
     * @yoyo
     */
    public function actionReport()
    {
        $session = Yii::$app->session;
//        $userId = $session->get('userId');
        $contentId = Yii::$app->request->post('contentId');
        $reportType = Yii::$app->request->post('reportType');
        $description = strip_tags(Yii::$app->request->post('description'));
        $reportCat = Yii::$app->request->post('cate');
        $type = Yii::$app->request->post('type');
        $model = new Report();
        $model->contentId = $contentId;
        $model->reportType = $reportType;
        $model->description = $description;
        $model->cate = $reportCat;
        $model->type = $type;
        $model->userId = '';
        $model->createTime = time();
        $re = $model->save();
        if ($re) {
            $re = ['code' => 1, 'message' => '提交成功，感谢您的反馈，我们会尽快核实纠正！'];
            die(json_encode($re));
        } else {
            $re = ['code' => 0, 'message' => '举报失败，请重试'];
            die(json_encode($re));
        }
    }

    /**
     * ncrm 短信请求接口
     * @sjeam
     */
     public function actionNcrmphoneCode()
     {
         $session = Yii::$app->session;
         $sms = new Sms();
         $phoneNum = Yii::$app->request->get('phoneNum');
         if (!empty($phoneNum)) {
             $phoneCode = mt_rand(100000, 999999);
             $session->set($phoneNum.'phoneCode',$phoneCode);
             $session->set('phoneTime',time());
             $content = 'ncrm修改密码，验证码：' . $phoneCode . '（10分钟有效），';
             $sms->send($phoneNum, $content, $ext = '', $stime = '', $rrid = '');
             $res['code'] = 1;
             $res['phonecode']=$phoneCode;
             $res['message'] = '短信发送成功！';
         } else {
             $res['code'] = 0;
             $res['message'] = '发送失败!手机号码为空！';
         }
         die(json_encode($res));
     }



    /**

     * 发送邮箱

     * @sjeam

     */

    public function actionNcrmemailCode(){
        $emailcode = mt_rand(100000, 999999);
        $email = Yii::$app->request->post('email');
        // $email="359824901@qq.com";
        $mail= Yii::$app->mailer->compose();
        $mail->setTo($email);
        $mail->setSubject("【ncrm(登录验证)】邮件验证码");
        $mail->setHtmlBody('验证码：' . $emailcode . '(10分钟有效)'
        );    //发布可以带html标签的文本

        if($mail->send()) {
            $res['code'] = 1;
            $res['emailcode'] = $emailcode;
            $res['message'] = '邮件发送成功！';
        }else {
            $res['code'] = 0;
            $res['message'] = '邮件发送失败！';
        }
        die(json_encode($res));

    }

}