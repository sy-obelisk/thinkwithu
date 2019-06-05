
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
    ?>
    <title><?php echo $this->context->title==false?'申友官网-留学咨询_名校出国留学申请机构_托福/GMAT培训机构-申友网':$this->context->title?>-申友网</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="keywords" content="<?php echo $this->context->keywords==false?'出国留学,名校留学,留学咨询,留学条件,出国游学,美国留学,gmat培训,托福培训,雅思培训':$this->context->keywords ?>">
    <?php
    if($action != 'word-details' && $action != 'picture-details' ) {
        ?>
        <meta name="description" content="<?php echo $this->context->description==false?'申友留学,专注商科与STEM留学咨询,提供留学申请一站式服务,是GMAT与托福培训的行业领跑者。申友专注英国、美国、加拿大、澳洲、香港等名校留学申请,留学咨询、出国留学、托福与GMAT培训，尽在申友。':$this->context->description ?>">
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
    <script type="text/javascript" src="//s.union.360.cn/7302.js"></script>
    <link rel="stylesheet" href="/cn/css/header.css"/>
    <link rel="stylesheet" href="/cn/css/footer.css"/>
    <link rel="stylesheet" href="/cn/css/public.css?v=1.3"/>
    <link rel="stylesheet" href="/cn/Hirsi/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/cn/css/iconfont.css">
    <link rel="stylesheet" href="/cn/css/fonts/font-awesome/css/font-awesome.min.css"/>
    <link rel="shortcut icon" href="http://www.thinkwithu.com/favicon.ico" />
    <script type="text/javascript" src="/cn/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/cn/Hirsi/js/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="/cn/Hirsi/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/cn/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/cn/js/public.js"></script>
</head>
<body>
<!-----------------------------头部------------------------------>
<!--<div class="headTop">-->
<!--    <div class="headTopContent">-->
<!--        <div class="img_left">-->
<!--            <img src="/cn/Hirsi/images/sy-text-new.png" alt="">-->
<!--        </div>-->
<!--        <div class="img_right">-->
<!--            <i class="iconfont phone_index">&#xe6df;</i>-->
<!--            <span class="phoneNum_index">400-600-1123</span>-->
<!--            <a href=""><span class="consultation_index">在线咨询>></span></a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="seach_input">
    <div class="seachInputContent">
        <a href="/" class="imgC">
            <img class="logo-new" src="/cn/Hirsi/images/sy-logo4.png" alt="" style="width: 172px;">
            <img class="logo-new_1" src="/cn/Hirsi/images/sy-text-new.png" alt="">
        </a>
        <div class="search_div">
            <i class="iconfont seach_index">&#xe6bc;</i>
            <input type="search" placeholder="关键词" class="input_seach search search1" onkeyup="enterKey(event,this)">
            <div class="seach_word" onclick="keySearch()">搜索</div>
        </div>
        <div class="img_right">
            <i class="iconfont phone_index">&#xe6df;</i>
            <span class="phoneNum_index">400-600-1123</span>
            <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank"><span class="consultation_index">在线咨询>></span></a>
        </div>
    </div>
</div>
<!-----------------------------头部end------------------------------>

<?php use app\commands\front\ContactWidget;?>
<?php use app\commands\front\BannerWidget;?>
<!-----------------------------导航------------------------------>
<?php
//删掉了($controller=='study' && $action == 'index') ||
if($url == '/training.html') {
    ?>

    <?php
}else {
    ?>
    <?php BannerWidget::begin();?>
    <?php BannerWidget::end();?>
    <?php
}
?>
<?= $content ?>

<?php if($url == '/mentor.html' || $url== '/toeflsheet.html') {?>
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
                                    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">
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
<?php use app\commands\front\RightSuspensionWidget;?>
<?php RightSuspensionWidget::begin();?>
<?php RightSuspensionWidget::end();?>
<!----------------------------------------------左边悬浮窗-------------------------------------------------------------->
<?php use app\commands\front\LeftSuspensionWidget;?>
<?php LeftSuspensionWidget::begin();?>
<?php LeftSuspensionWidget::end();?>
</body>
</html>

