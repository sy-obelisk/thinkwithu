<?php
/**
 * 国家导航组件
 * obelisk
 */
    namespace app\commands\front;
    use yii\base\Widget;
    use yii;
	class BannerWidget extends Widget  {
        public $category;
        public $banner;
        public $controller;
        /**
         * 定义函数
         * */
        public function init()
        {
            $this->controller = Yii::$app->controller->id;

        }

        /**
         * 运行覆盖程序
         * */
        public function run(){
            return $this->render('banner',['controller' => $this->controller]);
        }
	}
?>