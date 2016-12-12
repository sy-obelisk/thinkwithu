<?php 
namespace app\modules\content\models;
use yii\db\ActiveRecord;
class Content extends ActiveRecord {
    public $cateData;

    public static function tableName(){
            return '{{%content}}';
    }

    public function searchCont($keyWords){
        $sql = "select name,id from {{%content}} WHERE name like '%$keyWords%'";
        $data = \Yii::$app->db->createCommand($sql)->queryAll();
        return $data;
    }

}
