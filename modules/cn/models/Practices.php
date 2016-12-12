<?php 
namespace app\modules\cn\models;
use app\libs\Method;
use yii\db\ActiveRecord;
use app\modules\cn\models\CategoryContent;
use app\modules\cn\models\ContentExtend;
use app\modules\cn\models\ExtendData;
class Practices extends ActiveRecord {

    public static function tableName(){
            return '{{%content}}';
    }
    /**
     * 信息采集添加内容
     * @param $phone
     * @param $name
     * @param $extendVal
     * @Obelisk
     */
    public function addContent($catId,$name,$extendVal){
        $this->name = $name;
        $this->catId = $catId;
        $this->createTime = date('Y-m-d H:i:s');
        $this->save();
        $model = new CategoryContent();
        $model->contentId = $this->primaryKey;
        $model->catId = $catId;
        $model->save();
        $cateExtend = \Yii::$app->db->createCommand("select * from {{%category_extend}} WHERE catId=$catId AND belong='content' ORDER by id ASC")->queryAll();
        foreach($cateExtend as $k => $v){
            if(!isset($extendVal[$k])){
                $extendVal[$k] = "";
            }
            $contExtendModel = new ContentExtend();
            $contExtendModel->catExtendId = $v['id'];
            $contExtendModel->contentId = $this->primaryKey;
            $contExtendModel->name = $v['name'];
            $contExtendModel->title = $v['title'];
            $contExtendModel->image = $v['image'];
            $contExtendModel->description = $v['description'];
            $contExtendModel->type = $v['type'];
            $contExtendModel->userId = $v['userId'];
            $contExtendModel->createTime = $v['createTime'];
            $contExtendModel->inheritId = $v['inheritId'];
            $contExtendModel->canDelete = $v['canDelete'];
            $contExtendModel->code = $v['code'];
            $contExtendModel->typeValue = $v['typeValue'];
            if(!isset($extendValue[$k]{255})){
                $contExtendModel->value = $extendVal[$k];
            }
            $contExtendModel->save();
            if(isset($extendValue[$k]{255})){
                $dataModel = new ExtendData();
                $dataModel->extendId = $contExtendModel->primaryKey;
                $dataModel->value = $extendVal[$k];
                $dataModel->save();
            }
        }
    }
}
