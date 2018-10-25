
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

<!--    --><?php
//    if($action != 'word-details' && $action != 'picture-details' ) {
//        ?>
<!--        <meta name="description" content="--><?php //echo $seo['description']?><!--">-->
<!--        --><?php
//    }
//    ?>
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
    <link rel="stylesheet" href="/cn/css/public.css"/>
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
<div class="headTop">
    <div class="headTopContent">
        <div class="img_left">
            <img src="/cn/Hirsi/images/sy-text-new.png" alt="">
        </div>
        <div class="img_right">
            <i class="iconfont phone_index">&#xe6df;</i>
            <span class="phoneNum_index">400-600-1123</span>
            <a href=""><span class="consultation_index">在线咨询>></span></a>
        </div>
    </div>
</div>
<div class="seach_input">
    <div class="seachInputContent">
        <a href="/"><img class="logo-new" src="/cn/Hirsi/images/sy-logo3.png" alt=""></a>
        <div class="search_div">
            <i class="iconfont seach_index">&#xe6bc;</i>
            <input type="search" placeholder="关键词" class="input_seach search search1" onkeyup="enterKey(event,this)">
            <div class="seach_word" onclick="keySearch()">搜索</div>
        </div>
    </div>
</div>
<!-----------------------------头部end------------------------------>

<?php use app\commands\front\ContactWidget;?>
<?php //use app\commands\front\BannerWidget;?>
<!-----------------------------导航------------------------------>


<nav class="nav-wrap">
    <div class="w10 nav-top" style="overflow: inherit;">
        <ul class="inb nav-list clearfix">
            <div class="forYou">


                <?php
                $country = Yii::$app->request->get('country','USA'); if($country=='USA'){

                }elseif($country=='UK'){

                }elseif($country=='HK'){

                }elseif($country=='AUS'){

                }elseif($country=='Canada'){

                }?>

            </div>
            <li><a class="nav1-link <?php echo $controller == 'index' ? 'on on-hover' : '' ?>" href="/">首页</a></li>
            <li>
                <a class="nav1-link" href="/">考试提分 <img class="crow-1" src="/cn/Hirsi/images/crow-1.png" alt="下拉三角图标"></a>
                <div class="eaxm-list">
                    <ul>
                        <li><a href="/satsheet.html">SAT</a></li>
                        <li><a href="/toefl/assistance.html">托福</a></li>
                        <li><a href="/ieltssheet.html">雅思</a></li>
                        <li><a href="/gmatsheet.html">GAMT</a></li>
                        <li><a href="/gre.html">GRE</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="nav1-link" href="/evaluation.html">选校工具 <img class="crow-1" src="/cn/Hirsi/images/crow-1.png" alt="下拉三角图标"></a>
                <div class="eaxm-list eaxm-list-1">
                    <ul>
                        <li><a href="">背景测评</a></li>
                        <li><a href="">选校测评</a></li>
                        <li><a href="">录取测评</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="nav1-link" href="/schools.html">院校库 <img class="crow-1" src="/cn/Hirsi/images/crow-1.png" alt="下拉三角图标"></a>
                <div class="eaxm-list eaxm-list-1">
                    <ul>
                        <li><a href="">院校查询</a></li>
                        <li><a href="">专业排名</a></li>
                        <li><a href="">大学排名</a></li>
                    </ul>
                </div>
            </li>
            <li><a class="nav1-link" href="/">留学百科 <img class="crow-1" src="/cn/Hirsi/images/crow-1.png" alt="下拉三角图标"></a></li>
            <li><a class="nav1-link" href="/">实习活动</a></li>
            <li><a class="nav1-link" href="/public-class.html">申友讲堂</a></li>
            <li><a class="nav1-link" href="/case.html">名校案列</a></li>
            <li><a class="nav1-link" href="/teachers.html">名师团队</a></li>
        </ul>
    </div>
</nav>

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

