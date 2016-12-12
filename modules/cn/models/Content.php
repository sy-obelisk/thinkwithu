<?php 
namespace app\modules\cn\models;
use app\libs\Method;
use yii\db\ActiveRecord;
use app\modules\cn\models\CategoryContent;
use app\modules\cn\models\ContentExtend;
use app\modules\cn\models\ExtendData;
class Content extends ActiveRecord {

    public static function tableName(){
            return '{{%content}}';
    }

    /**
     * 申友前台调用内容
     * @param $select 包含where条件，查询字段，分页，排序
     * @return array
     * @Obelisk
     */
    public static function getContent($select){
        $where = "1=1";
        $where .= isset($select['where'])?" AND ".$select['where']:'';
        $seField = "";
        $fields = isset($select['fields'])?$select['fields']:'';
        //邮箱
        if(strstr($fields,'email')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='9a56ebd181c0b6fbfe6c8e0c5698f794') as email";
        }
        //英文简称
        if(strstr($fields,'shortName')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='58008509110e385763db85b59523ae0b') as shortName";
        }
        //所属联盟
        if(strstr($fields,'consortium')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='53879ca8a2c8b7dd7343ed78aae1cc8e') as consortium";
        }
        //难度
        if(strstr($fields,'difficulty')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='118d10ff6b0c5bd15a361feead11fd1d') as difficulty";
        }
        //录取专业
        if(strstr($fields,'major')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='c273ac9fb03fe83739dc0bd5ad2678a6') as major";
        }
        //推荐理由
        if(strstr($fields,'recommend')){
            $seField .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='e3907e73724468983b784c17586b9c6d') as recommend";
        }
        //英文名称
        if(strstr($fields,'enName')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='c8b1fbb5bcf5f601b18647fd6547ecdc') as enName";
        }
        //知名人物
        if(strstr($fields,'starPersonality')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='12b6a99917fc972ff56ff089eef27624') as starPersonality";
        }
        //连接地址
        if(strstr($fields,'url')){
            $seField .= ",(SELECT CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='43f8278a38a3539a7cfcdff67e5af92c') as url";
        }
        //地铁路线
        if(strstr($fields,'metroRoutes')){
            $seField .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='35240e72b4314299cd8b448281f75d9d') as metroRoutes";
        }
        //公交路线
        if(strstr($fields,'busRoutes')){
            $seField .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='1f6646683af347ca062bc9f6a7b3d79f') as busRoutes";
        }
        //周围地标
        if(strstr($fields,'landmark')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='0e3cc2ecef4de354c81fda58bb60deed') as landmark";
        }
        //电话学校
        if(strstr($fields,'phone')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='49897faf354586f492e46e475a1edc20') as phone";
        }
        //留学学校
        if(strstr($fields,'abroadSchool')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='7d5cd08f7c929c4b95533a9371dca73d') as abroadSchool";
        }
        //原学校
        if(strstr($fields,'oldSchool')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='a05db4d7754035fb0768492b7720eef6') as oldSchool";
        }
        //成绩
        if(strstr($fields,'score')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='6d18833806f505bb06b5083adc72b1b3') as score";
        }
        //内容介绍
        if(strstr($fields,'synopsis')){
            $seField .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='68a1f7449e583052ae90c63648ef9f89') as synopsis";
        }
        //小头像
        if(strstr($fields,'smallPhoto')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='2c2b1f3acbc121fcfe3a4a26e9560845') as smallPhoto";
        }
        //地点
        if(strstr($fields,'place')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='92aab357b4b1df524579450415a30bc9') as place";
        }
        //时间
        if(strstr($fields,'time')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='08f279b9597fef243497d99276f341fb') as time";
        }
        //主讲人
        if(strstr($fields,'speaker')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='c82350e59d02eb8ce6dfab5d9c5a1215') as speaker";
        }
        //标志
        if(strstr($fields,'flag')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='1cd30579b52c12daed362e08184cd3ae') as flag";
        }
        //摘要
        if(strstr($fields,'abstract')){
            $seField .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='91fc27502ef167f30de0f39a5ea0f630') as abstract";
        }
        //关键词
        if(strstr($fields,'keywords')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='e1eb000dde15e05fa0dfaa8c4b9d2504') as keywords";
        }
        //热门
        if(strstr($fields,'hot')){
            $seField .= ",(SELECT ce.value FROM {{%content_extend}} ce WHERE ce.contentId=c.id AND ce.code='451fb82a6dd6bd8639311e5b26d79657') as hot";
        }
        //感言详情
        if(strstr($fields,'luos')){
            $seField .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='d29f0bd8c4309cfdf0c40d0e54bc0b66') as luos";
        }
        //职位
        if(strstr($fields,'job')){
            $seField .= ",(SELECT  CONCAT_WS(',',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='87ec188a4ea8ce90abc77ca2b3061171') as job";
        }
        //描述
        if(strstr($fields,'description')){
            $seField .= ",(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='3f2a054ced4425ef1fec32e9fe7978ca') as description";
        }
        if(isset($select['category'])){
            if(isset($select['type'])){
                $where .= " AND c.id in(select DISTINCT cc.contentId from {{%category_content}} cc where cc.catId in(".$select['category'].") ) ";
            }else{
                $count = count(explode(",",$select['category']));
                $where .= " AND c.id in(select cc.contentId from {{%category_content}} cc where cc.catId in(".$select['category'].") group by cc.contentId having count(1)=$count ) ";
            }
        }
        $page = isset($select['page'])?$select['page']:1;
        $order = isset($select['order'])?$select['order']:'c.sort ASC,c.id DESC';
        $pageSize = isset($select['pageSize'])?$select['pageSize']:10;
        $limit = isset($select['limit'])?$select['limit']:(($page-1)*$pageSize).",$pageSize";
        $sql = "select c.*,ca.name as catName$seField from {{%content}} c LEFT JOIN {{%category}} ca ON c.catId=ca.id where $where";
        if(isset($select['extend_category'])){
            $sql = " select * from ($sql) c WHERE id in(select DISTINCT cc.contentId from {{%category_content}} cc where cc.catId in({$select['extend_category']}))  ";
        }
        $content = \Yii::$app->db->createCommand("$sql ORDER BY $order LIMIT ".$limit)->queryAll();
        if(isset($select['pageStr'])){
            $count = count(\Yii::$app->db->createCommand("$sql")->queryAll());
            $pageStr = Method::getPagedRows(['count'=>$count,'pageSize'=>$pageSize]);
            $content['pageStr'] = $pageStr;
            $content['count'] = $count;
            $content['total'] = ceil($count/$pageSize);
        }
        return $content;

    }

    /**
     * 获取内容副分类的名称
     * @param $contentId
     * @Obelisk
     */
    public static function getAllCatName($contentId){
        $data = [];
        $cateData = CategoryContent::find()->where("contentId=$contentId")->all();
        $country = self::getOneCatName(87);
        $organization = self::getOneCatName(179);
        $major = self::getOneCatName(143);
        $year = self::getOneCatName(186);
        $degree = self::getOneCatName(134);
        foreach($cateData as $v){
            if(in_array($v['catId'],$country['idArr'])){
                $data['country'] = $country[$v['catId']];
            }
            if(in_array($v['catId'],$organization['idArr'])){
                $data['organization'] = $organization[$v['catId']];
            }
            if(in_array($v['catId'],$major['idArr'])){
                $data['major'] = $major[$v['catId']];
            }
            if(in_array($v['catId'],$year['idArr'])){
                $data['year'] = $year[$v['catId']];
            }
            if(in_array($v['catId'],$degree['idArr'])){
                $data['degree'] = $degree[$v['catId']];
            }
        }
        return $data;
    }

    /**
     * 获取子类名称以id为键位
     * @param $pid
     * @Obelisk
     */
    public static function getOneCatName($pid){
        $reData = [];
        $data = \Yii::$app->db->createCommand('SELECT id,name FROM {{%category}} WHERE pid='.$pid)->queryAll();
        foreach($data as $v){
            $reData[$v['id']] = $v['name'];
            $reData['idArr'][] = $v['id'];
        }
        return $reData;
    }

    /**
     * 验证短信码
     * @param $code
     * @Obelisk
     */
    public function checkCode($phone,$code){
        $phoneCode = \Yii::$app->session->get($phone.'phoneCode');
        if($phoneCode == $code){
            \Yii::$app->session->remove($phone.'phoneCode');
            $re = true;
        }else{
            $re = false;
        }
        return $re;
    }

    /**
     * 验证短信的时间是否过期
     * @Obelisk
     */
    public function checkTime(){
        $phoneTime = \Yii::$app->session->get('phoneTime');
        $timeLimit = \Yii::$app->params['timeLimit'];
        if(time()-$phoneTime>$timeLimit){
            $re = false;
        }else{
            $re = true;
        }
        return $re;
    }

    /**
     * 信息采集添加内容
     * @param $phone
     * @param $name
     * @param $extendVal
     * @Obelisk
     */
    public function addContent($catId,$phone,$name,$extendVal){
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
            if($k == (count($cateExtend)-1)){
                $extendVal[$k] = $phone;
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

    /**
     * 日历活动
     * @return array
     * @Obelisk
     */
    public static function getActive(){
        $date = date("Y-m");
        $firstday = date("Y-m-01",strtotime($date));
        $lastday = date("Y-m-d",strtotime("$firstday +2 month"));
        $sql = "select c.id,c.name,ce.value from {{%content}} c LEFT JOIN {{%content_extend}} ce ON c.id=ce.contentId WHERE ce.code='08f279b9597fef243497d99276f341fb' AND c.catId=107 AND ce.value >='$firstday' AND ce.value <='$lastday'";
        $data = \Yii::$app->db->createCommand($sql)->queryAll();
        $re = [];
        $date = [];
        foreach($data as $v){
            $re[ date("Y-m-d",strtotime($v['value']))] = $v;
            $date[] = date("Y-m-d",strtotime($v['value']));
        }
        return ['activity' => $re,'activityDate' => $date];
    }

}
