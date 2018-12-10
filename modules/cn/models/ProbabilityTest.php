<?php
namespace app\modules\cn\models;
use yii\db\ActiveRecord;
class ProbabilityTest extends ActiveRecord {
    public $cateData;

    public static function tableName(){
        return '{{%probability_test}}';
    }
}