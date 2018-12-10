<?php
//收藏模型
namespace app\modules\cn\models;

use yii\db\ActiveRecord;

class UserBackground extends ActiveRecord
{
    public static function tableName(){
        return '{{%user_background}}';
    }

}