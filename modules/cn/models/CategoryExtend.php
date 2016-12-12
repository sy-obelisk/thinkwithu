<?php 
namespace app\modules\cn\models;
use yii\db\ActiveRecord;
class CategoryExtend extends ActiveRecord {

    public static function tableName(){
            return '{{%category_extend}}';
    }


}
