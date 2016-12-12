<!DOCTYPE html>
<html>
<head>
    <?php
    $seo = \app\modules\cn\models\Category::getSeoInfo(154);
    ?>
    <title><?php echo $seo['title']?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="keywords" content="<?php echo $seo['keywords']?>">
    <meta name="description" content="<?php echo $seo['description']?>">
    <link rel="stylesheet" href="/cn/css/ChoiceOfSchool.css"/>
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
<!--头部搜索框-->
<div class="searchAcademy">
    <div class="inAcademy">
        <h1>院校库</h1>
        <input type="text"/>
        <div>
            <span></span>
            <img src="/cn/images/choiceSchool_searchIcon.png" alt="搜索图标"/>
        </div>
    </div>
</div>
<div class="quesAcontent">
    <div class="contentLeft">
        <div class="filtrate">
            <div class="filterLeft">筛选</div>
            <div class="filterRight">
                <p>
                    国&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;家：
                    <?php
                    $data = \app\modules\cn\models\Category::getCategory(87);
                    foreach($data as $v) {
                    ?>
                        <a <?php echo $id == $v['id']?'class="on"':''?> href="/school/<?php echo $v['id']?>.html"><?php echo $v['name']?></a>
                <?php
                }
                ?>
                </p>
                <p>
                    申请阶段：
                    <?php
                    $data = \app\modules\cn\models\Category::getCategory(134);
                    foreach($data as $v) {
                    ?>
                    <a <?php echo $degree == $v['id']?'class="on"':''?> href="/school/<?php echo $id?>/<?php echo $v['id']?>.html"><?php echo $v['name']?></a>
<?php
}
                    ?>
                </p>
            </div>
        </div>
        <div class="collegeContent">
            <ul>
                <?php foreach($contentData as $v) { ?>
                    <li>
                        <div class="collegeLeft">
                            <img src="<?php echo $v['image']?>" alt="大学图标"/>
                        </div>
                        <div class="collegeRight">
                            <a href="#"><?php echo $v['name']?></a>
                            <?php echo $v['abstract']?>

                            <p>关键词：<?php echo $v['keywords']?></p>
                            <!--咨询-->
                            <div class="consult">咨询</div>
                            <a href="/school-details/<?php echo $v['id'] ?>/154.html" class="ViewMore">查看更多</a>
                        </div>
                        <div style="clear: both"></div>

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
                location.href="/school/<?php echo $id?>/<?php echo $degree?>/"+page+'.html';
            }
        </script>
        <!--分页-->
        <div class="page pagetop">
            <ul>
                <li>总数：<?php echo $count?></li>
                <li><a href="<?php echo "/school/$id/$degree/1.html"?>">首页</a></li>
                <li><a href="<?php echo ($page >1)?'/school/'.$id.'/'.$degree.'/'.($page-1).'.html':'javascript:;'?>">上一页</a></li>
                <li><a href="<?php echo ($page < $total)?'/school/'.$id.'/'.$degree.'/'.($page+1).'.html':'javascript:;'?>">下一页</a></li>
                <li class="mr"><a href="<?php echo "/school/$id/$degree/$total.html"?>">尾页</a></li>
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