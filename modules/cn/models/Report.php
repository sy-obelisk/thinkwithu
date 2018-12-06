<?php
//用户模型
namespace app\modules\cn\models;

use yii\db\ActiveRecord;

class Report extends ActiveRecord
{
    public static function tableName(){
        return '{{%report}}';
    }

    public function getAllReport($where,$pageSize = 10,$page =1){
        $limit = "limit ".($page-1)*$pageSize.",$pageSize";
//        $data = \Yii::$app->db->createCommand("SELECT r.* from {{%report}} r left join {{%user}} u on r.userId = u.id where ".$where."  order by r.createTime DESC ".$limit)->queryAll();
        $data = \Yii::$app->db->createCommand("SELECT * from {{%report}}  where ".$where."  order by r.createTime DESC ".$limit)->queryAll();
        $count = count(\Yii::$app->db->createCommand("SELECT id from {{%report}}  where ".$where."  order by r.createTime DESC ")->queryAll());
        return ['data' => $data,'count' => $count];
    }
}
