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
        $phone  = Yii::$app->request->get('phone','');
        $uName  = Yii::$app->request->get('uName','');
        $country  = Yii::$app->request->get('country','');
        $userId  = Yii::$app->request->get('userId','');
        $where="1=1";
        if($userId){
            $where .= " AND userId = $userId";
        }
        if($phone){
            $where .= " AND phone = '$phone'";
        }
        if($uName){
            $where .= " AND uName = '$uName'";
        }
        if($country){
            $where .= " AND country = '$country'";
        }
        $pageSize=15;
        $limit = "limit ".($page-1)*$pageSize.",$pageSize";
        $data = \Yii::$app->db->createCommand("SELECT * from {{%user_background}} where ".$where." order by createTime DESC ".$limit)->queryAll();
        $count=  \Yii::$app->db->createCommand("SELECT id from {{%user_background}} where ".$where." order by createTime DESC ")->queryAll();

        $page = Method::getPagedRows(['count'=>$count,'pageSize'=>$pageSize, 'rows'=>'models']);
        return $this->render('index',['page' => $page,'data' => $data,'block' => $this->block]);
    }


}