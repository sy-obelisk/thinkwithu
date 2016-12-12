<?php
/**
 * 在线评估
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
class OnlineAssessmentController extends AppControl {
    public function actionIndex()
    {
        $page = Yii::$app->request->get('page',1);
        $limit = "limit ".(($page-1)*10).",10";
        $sql = "select (SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='87ec188a4ea8ce90abc77ca2b3061171') as phone,(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='451fb82a6dd6bd8639311e5b26d79657') as class,(SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='d29f0bd8c4309cfdf0c40d0e54bc0b66') as email,c.createTime,c.id,c.name from {{%content}} c WHERE c.catId=226 AND isScan=0 ORDER BY c.id DESC $limit";
        $data = Yii::$app->db->createCommand($sql)->queryAll();
        $count =Yii::$app->db->createCommand("select (SELECT  CONCAT_WS(' ',ce.value,ed.value) From {{%content_extend}} ce left JOIN {{%extend_data}} ed ON ed.extendId=ce.id WHERE ce.contentId=c.id AND ce.code='87ec188a4ea8ce90abc77ca2b3061171') as phone,c.createTime from {{%content}} c WHERE c.catId=226 AND c.isScan=0 ORDER BY c.id")->queryAll();
        $page = Method::getPagedRows(['count'=>$count,'pageSize'=>10, 'rows'=>'models']);
        return $this->render('index',['data' => $data,'page' => $page,'block' => $this->block]);
    }
}