<?php
/**
 * 分类管理
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-6-17
 * Time: 下午2:37
 */
namespace app\modules\user\controllers;


use yii;
use app\libs\AppControl;
use app\libs\Method;
use app\modules\user\models\User;
use app\modules\user\models\UserBlock;

class UserBackgroundController extends AppControl {
    public $enableCsrfValidation = false;
    //用户列表
    public function actionIndex()
    {
        $page = Yii::$app->request->get('page',1);
        $beginTime = strtotime(Yii::$app->request->get('beginTime',''));
        $endTime = strtotime(Yii::$app->request->get('endTime',''));
        $id  = Yii::$app->request->get('id','');
        $phone  = Yii::$app->request->get('phone','');
        $email  = Yii::$app->request->get('email','');
        $userName  = Yii::$app->request->get('userName','');
        $nickname  = Yii::$app->request->get('nickname','');
        $where="1=1";
        if($beginTime){
            $where .= " AND createTime>=$beginTime";
        }
        if($endTime){
            $where .= " AND createTime<=$endTime";
        }
        if($id){
            $where .= " AND id = $id";
        }
        if($phone){
            $where .= " AND phone = '$phone'";
        }
        if($email){
            $where .= " AND email = '$email'";
        }
        if($userName){
            $where .= " AND userName = '$userName'";
        }
        if($nickname){
            $where .= " AND nickname = '$nickname'";
        }
        $model = new User();
        $pageSize=15;
        $limit = "limit ".($page-1)*$pageSize.",$pageSize";
        $data = \Yii::$app->db->createCommand("SELECT * from {{%user_background}} where ".$where." order by createTime DESC ".$limit)->queryAll();

        $page = Method::getPagedRows(['count'=>$data['count'],'pageSize'=>$pageSize, 'rows'=>'models']);
        return $this->render('index',['page' => $page,'data' => $data['data'],'block' => $this->block]);
    }


}