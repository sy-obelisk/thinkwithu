<!DOCTYPE html>
<html>
<head>
    <?php
    $seo = \app\modules\cn\models\Category::getSeoInfo(107);
    ?>
    <title><?php echo $seo['title']?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="keywords" content="<?php echo $seo['keywords']?>">
    <meta name="description" content="<?php echo $seo['description']?>">
    <link rel="stylesheet" href="/cn/css/open-list.css">
    <link rel="stylesheet" href="/cn/css/open-public.css"/>
    <link rel="stylesheet" href="/cn/css/fonts/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="/cn/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/cn/js/jquery.SuperSlide.2.1.1.js"></script>
</head>
<body>
<!--公开课头部-->
<?php use app\commands\front\ClassHeadWidget;?>
<?php ClassHeadWidget::begin();?>
<?php ClassHeadWidget::end();?>

<div class="open-detailsTitle">
    <ul>
        <li>
            <img src="/cn/images/openD_titleIcon.png" alt="标题图片"/>
        </li>
        <li><b>申友私塾</b></li>
        <li><a href="/public-class.html">申友公开课</a></li>
    </ul>
</div>
<div style="clear: both"></div>

<div class="list-content">
    <div class="list-left">
        <ul>
            <?php
                foreach($data as $v) {
                    ?>
                    <li>
                        <div class="inlist-left">
                            <h4><?php echo $v['name']?></h4>
                            <ul>
                                <li>【课程介绍】<?php echo $v['abstract']?></li>
                                <li>【授课老师】 <?php echo $v['speaker']?></li>
                            </ul>
                            <div class="bottList">
                                <img src="/cn/images/openList_time.png" alt="开课时间图标"/>
                                <span>开课时间：<?php echo $v['time']?></span>
                                <span class="mlTime">时长：<?php echo $v['score']?></span>
                                <span class="blackC"><img src="/cn/images/open_love.png" alt="心图标"/><?php echo $v['place']?></span>
                                <a href="/public-class/<?php echo $v['id']?>.html">查看详情</a>
                            </div>
                        </div>
                        <div class="inlist-right">
                            <img src="<?php echo $v['image']?>" alt="课程图片">
                        </div>
                        <div style="clear: both"></div>
                    </li>
                <?php
                }
            ?>
        </ul>
        <!--分页-->
        <script type="text/javascript">
            function goPage(){
                var page = $('.pageNumber').val();
                var total = <?php echo $total?>;
                if(page = "" || page > total || page<1){
                    alert("请输入正确数字");
                    return false;
                }
                var page = $('.pageNumber').val();
                location.href="/public-class/<?php echo $category?>/"+page+".html";
            }
        </script>
        <div class="page pagetop">
            <ul>
                <li>总数：<?php echo $count?></li>
                <li><a href="<?php echo "/public-class/$category/1.html"?>">首页</a></li>
                <li><a href="<?php echo ($page >1)?'/public-class/'.$category.'/'.($page-1).'/.html':'javascript:;'?>">上一页</a></li>
                <li><a href="<?php echo ($page <$total)?'/public-class/'.$category.'/'.($page+1).'.html':'javascript:;'?>">下一页</a></li>
                <li class="mr"><a href="<?php echo "/public-class/$category/$total.html"?>">尾页</a></li>
                <li class="mr02">页次：<span class="colorRed"><?php echo $page?></span>/<?php echo $total?></li>
                <li class="mr02"><input class="pageNumber" type="text"/></li>
                <li><input onclick="goPage()" type="button" value="GO"/></li>
            </ul>

            <div style="clear: both"></div>
        </div>

    </div>
    <div class="list-right">
        <div class="dimension">
            <span></span>
            <img src="/cn/images/openList_erweima01.png" alt="二维码图片"/>
        </div>
        <div class="dimensionFont">
            <h4>班煮任ID：YBNT110</h4>
            <span>报名公开课或获取往期课程音频</span><br>
            <span>加“班煮任”微信为好友！</span>
        </div>
        <div class="dimension">
            <span></span>
            <img src="/cn/images/openList_erweima02.png" alt="二维码图片"/>
        </div>
        <div class="dimensionFont">
            <h4>小小申ID：thinkuxxs</h4>
            <span>报名公开课或获取往期课程音频</span><br>
            <span>加“小小申”微信为好友！</span>
        </div>
        <div class="dimension">
            <span></span>
            <img src="/cn/images/openList_erweima03.png" alt="二维码图片"/>
        </div>
        <div class="dimensionFont">
            <h4>小托学姐ID：zx769688904</h4>
            <span>报名公开课或获取往期课程音频</span><br>
            <span>加“小托学姐”微信未好友！</span>
        </div>
    </div>
    <div style="clear: both"></div>
</div>


<!--联系申友-->
<?php //use app\commands\front\ContactWidget;?>
<?php //ContactWidget::begin();?>
<?php //ContactWidget::end();?>
<script type="text/javascript">
    jQuery(".connection").slide({mainCell:".connectBd",trigger:"mouseover"});
</script>

<!-------------------------------------------公开课页面的尾部-------------------------------------->
<?php //use app\commands\front\ClassFootWidget;?>
<?php //ClassFootWidget::begin();?>
<?php //ClassFootWidget::end();?>
<?php //use app\commands\front\RightSuspensionWidget;?>
<?php //RightSuspensionWidget::begin();?>
<?php //RightSuspensionWidget::end();?>
<!----------------------------------------------左边悬浮窗-------------------------------------------------------------->
<?php use app\commands\front\LeftSuspensionWidget;?>
<?php LeftSuspensionWidget::begin();?>
<?php LeftSuspensionWidget::end();?>
<!--右边固定部分-->
<div class="open-fixed">
    <div class="inFix">
        <!--<a href="#">立即咨询</a>-->
        <b></b>
        <span onclick="scrollTo(0,0);">回顶部</span>
    </div>
</div>
</body>
</html>