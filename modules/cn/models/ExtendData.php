<?php 
namespace app\modules\cn\models;
use yii\db\ActiveRecord;
class ExtendData extends ActiveRecord {

    public static function tableName(){
            return '{{%extend_data}}';
    }


}
