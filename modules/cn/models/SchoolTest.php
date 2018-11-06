<?php
namespace app\modules\cn\models;
use yii\db\ActiveRecord;
class SchoolTest extends ActiveRecord {
    public $cateData;

    public static function tableName(){
        return '{{%school_test}}';
    }
}