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
    <link rel="stylesheet" href="/cn/css/publicClass.css"/>
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
<div class="vacationClass">
    <div class="vacaLeft"></div>
    <div class="vacaRight">
        <h3>【10月23号公开课】</h3>
        <p>针对同学们对网申产生的诸多问题,嘉宾帮助你解决它！
            步步为营,招招制胜,你想要的答案,都在这次公开课里,现
            场嘉宾会和同学们互动,进行网申答疑！~</p>
        <ul>
            <li>讲座内容</li>
            <li><a href="#">1、网申是什么？</a></li>
            <li><a href="#">2、网申系统是什么样？</a></li>
            <li><a href="#">3、网申需要准备哪些材料？</a></li>
            <li><a href="#">4、网申步骤？</a></li>
            <li><a href="#">5、网申常见问题解答</a></li>
        </ul>
        <a href="#" class="lijiSee">立即查看</a>
    </div>
    <div style="clear: both"></div>
</div>
<div class="quesAcontent">
    <div class="contentLeft">

        <div class="thinkuPclass">
            <h3>申友公开课</h3>
            <span>为知识开锁 让大脑给力</span>
            <input type="button" value="立即留学评估"/>
            <b><img src="/cn/images/quesAnswer_phone.png" alt="电话图标"> 400-600-1123</b>
        </div>
        <div class="pubC-filter">
            <div class="pubCleft">
                <span>筛选</span>
            </div>
            <div class="pubCright">
                <ul>
                    <li><a href="/public-class/192/<?php echo $page?>/<?php echo $category?>.html">最热</a><img src="/cn/images/publicClass_hotRed.jpg" alt="hot图标"/></li>
                    <li><a href="/public-class/193/<?php echo $page?>/<?php echo $category?>.html">最新</a><img src="/cn/images/publicClass_hotRed.jpg" alt="hot图标"/></li>                </li>
                    <li><a href="/public-class/194/<?php echo $page?>/<?php echo $category?>.html">往期</a></li>
                </ul>
            </div>
            <div style="clear: both"></div>
        </div>
        <div class="pubC-filterC">
            <ul>
                <?php
                    foreach($contentData as $v) {
                        ?>
                        <li>
                            <div class="leftImgInfo">
                                <img src="<?php echo $v['image']?>" alt="图片信息"/>

                                <p>时间：<?php echo $v['time']?></p>

                                <p>地点：<?php echo $v['place']?></p>
                            </div>
                            <div class="rightFontInfo">
                                <h4><?php echo $v['title']?><?php echo $v['name']?></h4>

                                <p>关键词：<?php echo $v['keywords']?></p>

                                <p>主讲人：<?php echo $v['speaker']?> <b>(查看个人资料)</b></p>

                                <p>内容介绍：<?php echo $v['synopsis']?>
                                </p>
                                <a href="/word-details/<?php echo $v['id']?>/107.html" class="lijiFound">立即查看</a>
                            </div>
                        </li>
                    <?php
                    }
                ?>
            </ul>
        </div>
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
                location.href="/public-class/<?php echo $heat?>/"+page+"/<?php echo $category?>.html";
            }
        </script>
        <div class="page pagetop">
            <ul>
                <li>总数：<?php echo $count?></li>
                <li><a href="<?php echo "/public-class/$heat/1/$category"?>">首页</a></li>
                <li><a href="<?php echo ($page >1)?'/public-class/'.$heat.'/'.($page-1).'/'.$heat.'.html':'javascript:;'?>">上一页</a></li>
                <li><a href="<?php echo ($page <$total)?'/public-class/'.$heat.'/'.($page-1).'/'.$heat.'.html':'javascript:;'?>">下一页</a></li>
                <li class="mr"><a href="<?php echo "/public-class/$heat/$total/$category"?>">尾页</a></li>
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