<?php
//用户模型
namespace app\modules\cn\models;

use yii\db\ActiveRecord;

class School extends ActiveRecord
{
    public static function tableName(){
        return '{{%content}}';
    }
}
