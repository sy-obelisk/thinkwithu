<?php
/**
 * 讨论管理
 * Created by obelisk.
 * Date: 15-6-17
 * Time: 下午2:37
 */
namespace app\modules\user\controllers;


use app\modules\cn\models\Report;
use yii;
use app\libs\AppControl;
use app\libs\Method;
class ReportController extends  AppControl{
    public $enableCsrfValidation = false;

    /**
     * 举报的列表
     * @return string
     * @Obelisk
     */
    public function actionIndex()
    {
        $model = new Report();
        $page = Yii::$app->request->get('page',1);
        $beginTime = strtotime(Yii::$app->request->get('beginTime',''));
        $endTime = strtotime(Yii::$app->request->get('endTime',''));
        $id  = Yii::$app->request->get('id','');
//        $userId  = Yii::$app->request->get('userId','');
        $reportType  = Yii::$app->request->get('reportType','');
        $cate  = Yii::$app->request->get('reportCat','');
        $where = "1=1";
        if($beginTime){
            $where .= " AND createTime>$beginTime";
        }
        if($endTime){
            $where .= " AND createTime<$endTime";
        }
        if($id){
            $where .= " AND id = $id";
        }
//        if($userId){
//            $where .= " AND r.userId = $userId";
//        }
        if($reportType){
            $where .= " AND reportType = $reportType";
        }
        $reportData = $model->getAllReport($where,20,$page);
        $page = Method::getPagedRows(['count'=>$reportData['count'],'pageSize'=>20, 'rows'=>'models']);
        return $this->render('index',['data' => $reportData['data'],'page' => $page,'block' => $this->block]);
    }


}