<!DOCTYPE html>
<html>
<head>
    <title><?php echo $data[0]['name']?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="keywords" content="<?php echo $data[0]['keywords']?>">
<!--    <meta name="description" content="--><?php //echo $data[0]['description']?><!--">-->
    <link rel="stylesheet" href="/cn/css/threeLChoiceOfSchool.css"/>
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

<!--<div class="FocusPicture02">
    <a href="javascript:void(0);"><img src="/cn/images/index_foucusI02.jpg" alt="图片"/></a>
</div>-->
<!-----------------------------头部end------------------------------>
<?php use app\commands\front\BottomWidget;?>
<?php BottomWidget::begin();?>
<?php BottomWidget::end();?>
<div style="clear: both;margin-bottom: 10px"></div>
<!-----------------------------导航------------------------------>
<?php use app\commands\front\BannerWidget;?>
<?php BannerWidget::begin();?>
<?php BannerWidget::end();?>
<!-----------------------------导航end------------------------------>

<div class="quesAcontent">
    <div class="contentLeft">

        <div class="threeLeChoice01">
            <div class="choice-left">
                <img src="/cn/images/choiceSc_img01.png" alt="图片"/>
            </div>
            <div class="choice-center">
                <h2><?php echo $data[0]['name']?></h2>
                <span><?php echo $data[0]['enName']?></span>
                <ul>
                    <li>官网：<?php echo $data[0]['url']?></li>
                    <li>知名校友：<?php echo $data[0]['starPersonality']?></li>
                    <li>所属联盟：<?php echo $data[0]['consortium']?></li>
                    <li>学校地址：<?php echo $data[0]['place']?></li>
                    <li>申请难度：<?php echo $data[0]['difficulty']?></li>
                </ul>
            </div>
            <div class="choice-right">立即咨询</div>
            <div style="clear: both"></div>
        </div>
        <div class="threeLeChoice02">
            <?php echo $data[0]['description']?>
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