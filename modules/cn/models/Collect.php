<?php
//收藏模型
namespace app\modules\cn\models;

use yii\db\ActiveRecord;

class Collect extends ActiveRecord
{
    public static function tableName(){
        return '{{%th_collect}}';
    }

    /**
     * 获取用户收藏
     * @param $userId
     * @param $page
     * @param $pageSize
     * @param $type
     * @Obelisk
     */
    public function getCollect($userId,$page,$pageSize,$type){
        $limit = "limit ".($page-1)*$pageSize.",$pageSize";
        $seField = "";
        if($type == 1){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='92aab357b4b1df524579450415a30bc9') as place";
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='08f279b9597fef243497d99276f341fb') as time";
        }
        $sql = "select c.*$seField FROM {{%content}} c RIGHT JOIN (select tc.contentId from {{%th_collect}} tc WHERE tc.userId=$userId AND tc.collectType=$type ORDER BY tc.createTime DESC $limit) n ON c.id=n.contentId";
        $data = \Yii::$app->db->createCommand($sql)->queryAll();
        return $data;
    }
}
