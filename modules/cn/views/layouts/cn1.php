
<!DOCTYPE html>
<html>
<head>
    <?php
    $data = [];
    $seo = [];
    $action = Yii::$app->controller->action->id;
    $controller = Yii::$app->controller->id;
    $url = Yii::$app->request->getUrl();
    if(strpos($url,'?tdsourcetag=s_pcqq_aiomsg')){
        $url=str_replace('?tdsourcetag=s_pcqq_aiomsg','',$url);
    }
    if($url == '/VisaInterview.html'){
        $seo['title'] = '签证面试';
        $seo['keywords'] = '';
        $seo['description'] == '';
    }elseif($url == '/schools.html'){
        $seo['title'] = '院校库';
        $seo['keywords'] = '';
        $seo['description'] = '';
    } elseif($url == '/surprise.html'){
        $seo['title'] = '这个页面去留学了';
        $seo['keywords'] = '';
        $seo['description'] = '';
    }elseif($url == '/evaluation.html'){
        $seo['title'] = '留学申请评估';
        $seo['keywords'] = '';
        $seo['description'] = '';
    }elseif($url == '/gmat/app.html'){
        $seo['title'] = 'gmatApp下载';
        $seo['keywords'] = '';
        $seo['description'] = '';
    }elseif($url == '/problem.html'){
        $seo['title'] = 'gmat机经';
        $seo['keywords'] = '';
        $seo['description'] = '';
    }elseif($url == '/toefl/assistance.html'){
        $seo['title'] = 'TOEFL(托福)培训-托福课程-托福辅导-托福在线课程-申友网';
        $seo['keywords'] = '托福报名，托福考试时间，托福备考，托福机经，托福真题，托福培训，托福课程，托福网络课程，托福辅导，托福班，托福听力，托福口语、托福词汇、托福写作、托福阅读';
        $seo['description'] = '申友托福培训平台致力培育托福高分学员。为学员提供关于托福报名，托福考试时间，托福机经，托福真题，托福听力，托福口语、托福词汇、托福写作、托福阅读等专业的托福备考信息，被业界称为“托福高分基地”。';
    }elseif(strstr($url,'/teachers/')){
        $seo['title'] = 'GMAT名师、托福名师、留学顾问';
        $seo['keywords'] = '';
        $seo['description'] = '';
    }elseif(strstr($url,'/practices/')){
        $seo['title'] = '游学实习详情页';
        $seo['keywords'] = '';
        $seo['description'] = '';
    }elseif($url == '/mentor.html'){
        $seo['title'] = '海外mentor';
        $seo['keywords'] = '';
        $seo['description'] = '';
    }elseif($url == '/study-aboard/service/introduction.html'){
        $seo['title'] = '留学服务';
        $seo['keywords'] = '';
        $seo['description'] = '';
    }else{
        if($action == 'word-details' || $action == 'picture-details' ){
            $seo['title'] = $this->context->title;
            $seo['keywords'] = $this->context->keywords;
        }
        elseif($action == 'details' && $controller == 'schools' ){
            $seo['title'] = '院校库详情';
            $seo['keywords'] = '';
            $seo['description'] = '';
        }
        elseif($action == 'majormsg' && $controller == 'schools' ){
            $seo['title'] = '院校库专业详情';
            $seo['keywords'] = '';
            $seo['description'] = '';
        }else{
            if(isset($this->context->layout_data) && $this->context->layout_data != null){
                $data['seoId'] = $this->context->layout_data;
            }
            elseif(strstr($url,'/application/') ){
                $data['seoId'] = 120;
            }
            elseif(strstr($url,'/question') ){
                $data['seoId'] = 121;
            }
            elseif(strstr($url,'/promotion/') ){
                $data['seoId'] = 165;
            }
            elseif($action == 'project' && $controller == 'study'){
                $data['seoId'] = 119;
            }
            else{
                $data = \app\modules\cn\models\UrlSeo::find()->where("url='$url'")->one();
            }
            if((!isset($data['seoId']))||$data['seoId']==false){
                $data['seoId']=223;
            }
            $seo = \app\modules\cn\models\Category::getSeoInfo($data['seoId']);
        }
    }
    ?>
    <meta name="robots" content="noindex,nofollow">
    <link rel='canonical' href='www.thinkwithu.com' />
    <title><?php echo $seo['title']?>-申友网</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="keywords" content="<?php echo $seo['keywords']?>">
    <?php
    if($action != 'word-details' && $action != 'picture-details' ) {
        ?>
        <meta name="description" content="<?php echo $seo['description']?>">
    <?php
    }
    ?>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?4b64107d9f91d41b951875ea77823319";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <link rel="stylesheet" href="/cn/css/header.css"/>
    <link rel="stylesheet" href="/cn/css/footer.css"/>
    <link rel="stylesheet" href="/cn/css/public.css"/>
    <link rel="stylesheet" href="/cn/Hirsi/css/reset.css">
<!--    <link rel="stylesheet" href="/cn/Hirsi/css/index.css">-->
    <link rel="stylesheet" href="/cn/css/fonts/font-awesome/css/font-awesome.min.css"/>
    <link rel="shortcut icon" href="http://www.thinkwithu.com/favicon.ico" />
    <script type="text/javascript" src="/cn/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/cn/Hirsi/js/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="/cn/Hirsi/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/cn/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/cn/js/public.js"></script>
</head>
<body>
<?php use app\commands\front\ContactWidget;?>
<?php use app\commands\front\BannerWidget;?>
<!-----------------------------头部------------------------------>
<!--头部灰色条-->
<?php //use app\commands\front\NavWidget;?>
<?php //NavWidget::begin();?>
<?php //NavWidget::end();?>
<?php
//if($url == '/') {
//    ?>
<!--    --><?php
//    $big = \app\modules\cn\models\Content::getContent(['fields' => 'url', 'where' => "c.id=1073", 'pageSize' => 1]);
//    ?>
<!--    --><?php
//    $small = \app\modules\cn\models\Content::getContent(['fields' => 'url', 'where' => "c.id=1074", 'pageSize' => 1]);
//    ?>
<!--    <div class="FocusPicture" data-value="--><?php //echo $small[0]['image']?><!--">-->
<!--        <a target="_blank" href="--><?php //echo $small[0]['url']?><!--"><img src="--><?php //echo $big[0]['image']?><!--" alt="图片"/></a>-->
<!--    </div>-->
<?php
//}else {
//    ?>
<!--    <div class="FocusPicture02">-->
<!--        <a href="javascript:void(0);"><img src="/cn/images/index_foucusI02.jpg" alt="图片"/></a>-->
<!--    </div>-->
<?php
//}
//?>

<!-----------------------------头部end------------------------------>
<?php //use app\commands\front\BottomWidget;?>
<?php //BottomWidget::begin();?>
<?php //BottomWidget::end();?>
<!--<div style="clear: both;margin-bottom: 10px;"></div>-->
<!-----------------------------导航------------------------------>
<?php
//if(($controller=='study' && $action == 'index') || $url == '/training.html') {
//    ?>
<!---->
<?php
//}else {
//    ?>
<!---->
<!--    --><?php //BannerWidget::begin();?>
<!--    --><?php //BannerWidget::end();?>
<?php
//}
//?>
<?= $content ?>
<!---->
<?if($url == '/gmatsheet.html' || $url == '/mentor.html' || $url== '/toeflsheet.html') {?>
    <div class="contactWay">
        <div class="contactHead">联系方式</div>
        <div class="contactSlide">
            <div class="conHd hd">
                <a href="javascript:void(0);" class="prev" onclick="slidePrev()"><img src="/cn/images/mentor_prev.png"
                                                                                      alt="图标"></a>
                <a href="javascript:void(0);" class="next" onclick="slideNext()"><img src="/cn/images/mentor_next.png"
                                                                                      alt="图标"></a>
            </div>
            <div class="conBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => "place,phone", 'category' => "210", 'pageSize' => 15, 'order' => 'sort']);
                    foreach ($data as $v) {
                        ?>
                        <li>
                            <div class="smallStyle">
                                <img src="<?php echo $v['image'] ?>" alt="图片">

                                <div class="city"><?php echo $v['name'] ?></div>
                            </div>
                            <div class="bigStyle">
                                <div class="big-left">
                                    <img src="<?php echo $v['image'] ?>" alt="图片">

                                    <div class="big-city"><?php echo $v['name'] ?></div>
                                </div>
                                <div class="big-right">
                                    <span>咨询热线：</span>

                                    <p class="purpleColor"><?php echo $v['phone'] ?></p>
                                    <a href="http://chat.looyuoms.com/chat/chat/p.do?c=20001277&f=10057560&g=10060013&refer=meiguoliuxue">
                                        <img src="/cn/images/mentor_personIcon.png" alt="咨询图标">
                                        <span>免费咨询</span>
                                    </a>

                                    <p>地址：<?php echo $v['place'] ?></p>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            //        jQuery(".contactSlide").slide({mainCell:".conBd ul",effect:"left",vis:5,pnLoop:false});
        </script>
    </div>
<?php
}elseif($url == '/practices.html' || strstr($url,'/practices/')){
    ?>

<?php
}else{
?>
    <!--联系申友-->
    <?php ContactWidget::begin();?>
    <?php ContactWidget::end();?>
    <script type="text/javascript">
        jQuery(".connection").slide({mainCell:".connectBd",trigger:"mouseover"});
    </script>
<?php
}
?>

<!-----------------------------尾部------------------------------>
<?php use app\commands\front\FooterWidget;?>
<?php FooterWidget::begin();?>
<?php FooterWidget::end();?>
<!-----------------------------尾部end------------------------------>
<!-------------------------------------------------右边的悬浮窗------------------------------------------->
<?php //use app\commands\front\RightSuspensionWidget;?>
<?php //RightSuspensionWidget::begin();?>
<?php //RightSuspensionWidget::end();?>
<!----------------------------------------------左边悬浮窗-------------------------------------------------------------->
<?php //use app\commands\front\LeftSuspensionWidget;?>
<?php //LeftSuspensionWidget::begin();?>
<?php //LeftSuspensionWidget::end();?>
</body>
</html>

