<?php 
namespace app\modules\cn\models;
use yii\db\ActiveRecord;
class Category extends ActiveRecord {
    public $cateData;

    public static function tableName(){
            return '{{%category}}';
    }

    /**
     * 查询其子类内容
     * @param $pid
     * @return array
     * @Obelisk
     */
    public static function getCategory($pid){
        $data = \Yii::$app->db->createCommand("SELECT ca.*,(SELECT ce.value FROM {{%category_extend}} ce WHERE ce.catId=ca.id AND ce.code='c8b1fbb5bcf5f601b18647fd6547ecdc') as enName,(SELECT ce.value FROM {{%category_extend}} ce WHERE ce.catId=ca.id AND ce.code='58008509110e385763db85b59523ae0b') as shortName,(SELECT ce.value FROM {{%category_extend}} ce WHERE ce.catId=ca.id AND ce.code='451fb82a6dd6bd8639311e5b26d79657') as hot From {{%category}} ca WHERE ca.pid=$pid")->queryAll();
        return $data;
    }

    /**查询某个分类
     * @param $id
     * @return array|bool
     * @Obelisk
     */
    public static function getOneCategory($id){
        $data = \Yii::$app->db->createCommand("SELECT ca.*,(SELECT ce.value FROM {{%category_extend}} ce WHERE ce.catId=ca.id AND ce.code='c8b1fbb5bcf5f601b18647fd6547ecdc' AND belong='category') as enName,(SELECT ce.value FROM {{%category_extend}} ce WHERE ce.catId=ca.id AND ce.code='451fb82a6dd6bd8639311e5b26d79657'  AND belong='category') as hot,(SELECT ce.value FROM {{%category_extend}} ce WHERE ce.catId=ca.id AND ce.code='43f8278a38a3539a7cfcdff67e5af92c'  AND belong='category') as url From {{%category}} ca WHERE ca.id=$id")->queryOne();
        return $data;
    }

    /**
     * 获取seo信息
     * @param $category
     * @Obelisk
     */
    public static function getSeoInfo($category){
        $data = \Yii::$app->db->createCommand("SELECT (SELECT ce.value FROM {{%category_extend}} ce WHERE ce.catId=ca.id AND ce.code='1cd30579b52c12daed362e08184cd3ae' AND belong='category') as title,(SELECT ce.value FROM {{%category_extend}} ce WHERE ce.catId=ca.id AND ce.code='e1eb000dde15e05fa0dfaa8c4b9d2504'  AND belong='category') as keywords,(SELECT ce.value FROM {{%category_extend}} ce WHERE ce.catId=ca.id AND ce.code='3f2a054ced4425ef1fec32e9fe7978ca'  AND belong='category') as description From {{%category}} ca WHERE ca.id=$category")->queryOne();
        return $data;
    }
}
