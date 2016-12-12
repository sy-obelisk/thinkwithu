<!DOCTYPE html>
<html>
<head>
    <?php
    $seo = \app\modules\cn\models\Category::getSeoInfo(175);
    ?>
    <title><?php echo $seo['title']?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="keywords" content="<?php echo $seo['keywords']?>">
    <meta name="description" content="<?php echo $seo['description']?>">
    <link rel="stylesheet" href="/cn/css/ranking.css"/>
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
        <h1>找排名</h1>
        <input type="text"/>
        <div>
            <span></span>
            <img src="/cn/images/choiceSchool_searchIcon.png" alt="搜索图标"/>
        </div>
    </div>
</div>
<div class="quesAcontent">
    <div class="contentLeft">

        <div class="rank_fliter">
            <div class="rankFLeft">
                筛选
            </div>
            <div class="rankFRight">
                <ul>
                    <li>发布机构：</li>
                    <li <?php echo $organization == 179?'class="on"':''?>><a href="/ranking/179/<?php echo $country?>/<?php echo $major?>/<?php echo $year?>.html">全部</a></li>
                    <?php
                    $i=0;
                    $data = \app\modules\cn\models\Category::getCategory(179);
                    foreach($data as $v) {
                        ?>
                        <li <?php echo $organization == $v['id']?'class="on"':''?>><a href="/ranking/<?php echo $v['id']?>/<?php echo $country?>/<?php echo $major?>/<?php echo $year?>.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <div style="clear: both"></div>
                <ul class="ml">
                    <li>范围：</li>
                    <li <?php echo $country == 87?'class="on"':''?>><a href="/ranking/<?php echo $organization?>/87/<?php echo $major?>/<?php echo $year?>.html">全部</a></li>
                    <?php
                    $data = \app\modules\cn\models\Category::getCategory(87);
                    foreach($data as $v) {
                        ?>
                        <li <?php echo $country == $v['id']?'class="on"':''?>><a href="/ranking/<?php echo $organization?>/<?php echo $v['id']?>/<?php echo $major?>/<?php echo $year?>.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <div style="clear: both"></div>
                <ul class="ml">
                    <li>年份：</li>
                    <li <?php echo $year == 186?'class="on"':''?>><a href="/ranking/<?php echo $organization?>/<?php echo $country?>/<?php echo $major?>/186.html">全部</a></li>
                    <?php
                    $data = \app\modules\cn\models\Category::getCategory(186);
                    foreach($data as $v) {
                        ?>
                        <li <?php echo $year == $v['id']?'class="on"':''?>><a href="/ranking/<?php echo $organization?>/<?php echo $country?>/<?php echo $major?>/<?php echo $v['id']?>.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <div style="clear: both"></div>
                <ul class="ml">
                    <li>专业：</li>
                    <li <?php echo $major == 143?'class="on"':''?>><a href="/ranking/<?php echo $organization?>/<?php echo $country?>/143/<?php echo $year?>.html">全部</a></li>
                    <?php
                    $data = \app\modules\cn\models\Category::getCategory(143);
                    foreach($data as $v) {
                        ?>
                        <li <?php echo $major == $v['id']?'class="on"':''?>><a href="/ranking/<?php echo $organization?>/<?php echo $country?>/<?php echo $v['id']?>/<?php echo $year?>.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="IssuerContent">
            <table cellspacing="0">
                <tr>
                    <th>发布机构</th>
                    <th>范围</th>
                    <th>年份</th>
                    <th>阶段</th>
                    <th>排名名称</th>
                    <th></th>
                </tr>
                <?php
                    foreach($contentData as $v) {
                        $data = \app\modules\cn\models\Content::getAllCatName($v['id']);
                        ?>
                        <tr>
                            <td><?php echo $data['organization']?></td>
                            <td><?php echo $data['country']?></td>
                            <td><?php echo $data['year']?></td>
                            <td><?php echo $data['degree']?></td>
                            <td><?php echo $v['name']?></td>
                            <td><a href="/word-details/<?php echo $v['id']?>/175.html"></a>详细信息</td>
                        </tr>
                    <?php
                    }
              ?>


            </table>
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
                location.href="/ranking/<?php echo $organization?>/<?php echo $country?>/<?php echo $major?>/<?php echo $year?>&page="+page+'.html';
            }
        </script>
        <!--分页-->
        <div class="page pagetop">
            <ul>
                <li>总数：<?php echo $count?></li>
                <li><a href="<?php echo "/ranking/$organization/$country/$major/$year&page=1.html"?>">首页</a></li>
                <li><a href="<?php echo ($page >1)?'/ranking/'.$organization.'/'.$country.'/'.$major.'/'.$year.'&page='.($page-1).'.html':'javascript:;'?>">上一页</a></li>
                <li><a href="<?php echo ($page < $total)?'/ranking/'.$organization.'/'.$country.'/'.$major.'/'.$year.'page='.($page+1).'.html':'javascript:;'?>">下一页</a></li>
                <li class="mr"><a href="<?php echo "/ranking/$organization/$country/$major/$year&page=$total.html"?>">尾页</a></li>
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