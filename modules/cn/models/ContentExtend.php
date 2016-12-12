<?php 
namespace app\modules\cn\models;
use yii\db\ActiveRecord;
class ContentExtend extends ActiveRecord {

    public static function tableName(){
            return '{{%content_extend}}';
    }


}
