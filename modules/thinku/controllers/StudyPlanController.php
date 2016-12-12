<?php
/**
 * 留学评估
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-6-17
 * Time: 下午2:37
 */
namespace app\modules\thinku\controllers;


use app\modules\content\models\Content;
use yii;
use app\libs\AppControl;
use app\libs\Method;
class StudyPlanController extends AppControl {
    public function actionIndex()
    {
        $page = Yii::$app->request->get('page',1);
        $limit = "limit ".(($page-1)*10).",10";
        $sql = "select (SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='11388faf79c027ba38485b4f159f2f70') as phone,c.id,c.createTime from {{%content}} c WHERE c.catId=222 AND isScan=0 ORDER BY c.id DESC $limit";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        $count =Yii::$app->db->createCommand("select (SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='11388faf79c027ba38485b4f159f2f70') as phone,c.createTime from {{%content}} c WHERE c.catId=222 AND c.isScan=0 ORDER BY c.id")->queryAll();
        $page = Method::getPagedRows(['count'=>$count,'pageSize'=>10, 'rows'=>'models']);
        return $this->render('index',['data' => $data,'page' => $page,'block' => $this->block]);
    }
}