<?php
//收藏模型
namespace app\modules\cn\models;

use yii\db\ActiveRecord;

class UrlSeo extends ActiveRecord
{
    public static function tableName(){
        return '{{%url_seo}}';
    }

}
