<?php
/**
 * 托福控制器基础类
 * by Obelisk
 */
namespace app\libs;
use yii;
use yii\web\Controller;
use app\models\Login;
use app\modules\cn\models\HistoryRecord;
use app\modules\basic\models\Params;
class ToeflController extends Controller {
    public $title;
    public $keywords;
    public $description;
    public $type;
    public $homeTag;
    //初始化
    public function init() {
        $uid = Yii::$app->session->get('uid');
        $token = isset($_COOKIE['sslToken'])?$_COOKIE['sslToken']:false;
        $tokenOut = isset($_COOKIE['sslTokenOut'])?$_COOKIE['sslTokenOut']:false;
        if($tokenOut){
            if($uid){
                session_destroy();
            }
        }else{
            if(!$uid){
                if($token){
                    $date = Method::curl_post(Yii::$app->params['loginUrl'].'/cn/ssl-api/web-check',['token' => $token]);
                    $data = json_decode($date,true);
                    if($data['code'] == 1){
                        Method::confim_user($data['info']);
                    }
                }
            }
        }
    }

    /**
     *定义配置项
     * @Obelisk
     */
    public function config(){
        define('baseUrl',Yii::$app->params['baseUrl']);
        define('tablePrefix',Yii::$app->db->tablePrefix);
        $data = Params::find()->all();
        foreach($data as $v){
            define($v->key,$v->value);
        }
    }

    /**
     * 按要求输出界面或者Json
     * @param $arr 传递数组
     * @param $dataType 输出类型
     * @param string $view 界面
     * @return string
     * @Obelisk
     */
    public function exitData($arr,$dataType,$view="",$render='1'){
        if($dataType == "arr"){
            if($render == 1) {
                return $this->renderPartial($view, $arr);
            }else{
                return $this->render($view, $arr);
            }
        }else{
            die(json_encode($arr));
        }
    }

}
?>