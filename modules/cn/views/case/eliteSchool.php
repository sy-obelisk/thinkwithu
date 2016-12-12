<!DOCTYPE html>
<html>
<head>
    <title>首页二级名校录取页面</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="/cn/css/highScore.css"/>
    <link rel="stylesheet" href="/cn/css/fonts/font-awesome/css/font-awesome.min.css"/>
    <script type="text/javascript" src="/cn/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/cn/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/cn/js/public.js"></script>
    <script type="text/javascript" src="/cn/js/index.js"></script>

</head>
<body>
<!-----------------------------头部------------------------------>
<!--头部灰色条-->
<?php use app\commands\front\NavWidget;?>
<?php NavWidget::begin();?>
<?php NavWidget::end();?>

<div class="FocusPicture02">
    <a href="javascript:void(0);"><img src="/cn/images/index_foucusI02.jpg" alt="图片"/></a>
</div>
<?php use app\commands\front\BottomWidget;?>
<?php BottomWidget::begin();?>
<?php BottomWidget::end();?>
<div style="clear: both;margin-bottom: 10px"></div>
<!-----------------------------导航------------------------------>
<?php use app\commands\front\BannerWidget;?>
<?php BannerWidget::begin();?>
<?php BannerWidget::end();?>
<!-----------------------------导航end------------------------------>

<div class="fiveAdvantage">
    <img src="/cn/images/quesAnswer_topH.jpg" alt="内容头部图"/>
</div>
<div class="quesAcontent">
    <div class="contentLeft">
        <div class="leftAnswer">
            <div class="anleft leftWidth">
                <h1>名校录取</h1>
            </div>
            <div class="anright rightWidth">
                <b>ELITE<br/>SCHOOLS</b>
                <input type="button" value="立即留学评估"/>
                <span><img src="/cn/images/quesAnswer_phone.png" alt="电话图标"> 400-600-1123</span>
            </div>
        </div>
        <div class="highScoreC">
            <ul>
                <?php
                foreach($contentData as $v) {
                    ?>
                    <li>
                        <i class="fa fa-angle-left"></i>
                        <a href="/word-details/<?php echo $v['id']?>/207.html">祝贺<?php echo $v['name']?></a>
                        <span><?php echo $v['createTime']?></span>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>

        <script type="text/javascript">
            function goPage(){
                var page = $('.pageNumber').val();
                var total = <?php echo $total?>;
                if(page = "" || page > total || page<1){
                    alert("请输入正确数字");
                    return false;
                }
                var page = $('.pageNumber').val();
                location.href="/cn/case/elite-school?page="+page;
            }
        </script>
        <div class="page pagetop">
            <ul>
                <li>总数：<?php echo $count?></li>
                <li><a href="<?php echo "/cn/case/elite-school?page=1"?>">首页</a></li>
                <li><a href="<?php echo ($page >1)?'/cn/case/elite-school?page='.($page-1):'javascript:;'?>">上一页</a></li>
                <li><a href="<?php echo ($page <$total)?'/cn/case/elite-school?page='.($page+1):'javascript:;'?>">下一页</a></li>
                <li class="mr"><a href="<?php echo "/cn/case/elite-school?page=$total"?>">尾页</a></li>
                <li class="mr02">页次：<span class="colorRed"><?php echo $page?></span>/<?php echo $total?></li>
                <li class="mr02"><input class="pageNumber" type="text"/></li>
                <li><input onclick="goPage()" type="button" value="GO"/></li>
            </ul>

            <div style="clear: both"></div>
        </div>

        <?php use app\commands\front\RelatedWidget;?>
        <?php RelatedWidget::begin();?>
        <?php RelatedWidget::end();?>
    </div>
    <?php use app\commands\front\RightWidget;?>
    <?php RightWidget::begin();?>
    <?php RightWidget::end();?>
    <div style="clear: both"></div>
</div>
<?php use app\commands\front\ContactWidget;?>
<?php ContactWidget::begin();?>
<?php ContactWidget::end();?>
<script type="text/javascript">
    jQuery(".connection").slide({mainCell:".connectBd",trigger:"mouseover"});
</script>
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