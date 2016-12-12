<?php 
namespace app\modules\cn\models;
use yii\db\ActiveRecord;
class CategoryContent extends ActiveRecord {

    public static function tableName(){
            return '{{%category_content}}';
    }


}
