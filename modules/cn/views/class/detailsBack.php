<!DOCTYPE html>
<html>
<head>
    <title><?php echo $data[0]['name']?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="/cn/css/open-detailsTwo.css">
    <link rel="stylesheet" href="/cn/css/open-public.css"/>
    <link rel="stylesheet" href="/cn/css/fonts/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="/cn/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/cn/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/cn/js/open-detailsTwo.js"></script>
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
        <li> &gt;</li>
        <li><a href="#"><?php echo $data[0]['name']?></a></li>
    </ul>
</div>
<div style="clear: both"></div>

<div class="open-detailsC">
    <div class="open-Dleft">
<!--        <div class="openD-inLeft">-->
<!--            <img src="/cn/images/open_classImg012.jpg" alt="课程图片"/>-->
<!--            <audio src="audio.mp3" controls="controls"></audio>-->
<!--        </div>-->
        <?php echo $data[0]['url']?>
<!--        <div class="botControls">-->
<!--            <input type="checkbox" id="auto01"/>-->
<!--            <label for="auto01">自动播放</label>-->
<!--            <input type="checkbox" id="auto02"/>-->
<!--            <label for="auto02">跳过片头</label>-->
<!--        </div>-->
    </div>
    <div class="open-Dright">
        <div class="instructor">
            <h4>
                <img src="/cn/images/openD_titleIcon03.png" alt="标题图"/>
                <span>授课老师</span>
            </h4>
            <div class="teacher-left">
                <img src="<?php echo $data[0]['keywords']?>" alt="老师照片">
            </div>
            <div class="teacher-right">
                <span><span>■</span><?php echo $data[0]['speaker']?></span>
            </div>
            <div style="clear: both"></div>
            <div>
                <p><?php echo $data[0]['description']?></p>
            </div>
        </div>
        <div class="erweima">
            <h4>[报名公开课或获取往期音频加微信为好友]</h4>
            <ul>
                <li>
                    <img src="/cn/images/openList_erweima01.png" alt="二维码">
                    <p>班煮任</p>
                    <span>ID:YBNT110</span>
                </li>
                <li>
                    <img src="/cn/images/openList_erweima03.png" alt="二维码">
                    <p>小托学姐</p>
                    <span>ID:thinkuxxs</span>
                </li>
                <li>
                    <img src="/cn/images/openList_erweima02.png" alt="二维码">
                    <p>小小申</p>
                    <span>ID:zx769688904</span>
                </li>

            </ul>
        </div>
    </div>
    <div style="clear: both"></div>
</div>

<!--联系申友-->
<?php use app\commands\front\ContactWidget;?>
<?php ContactWidget::begin();?>
<?php ContactWidget::end();?>
<script type="text/javascript">
    jQuery(".connection").slide({mainCell:".connectBd",trigger:"mouseover"});
</script>

<!-------------------------------------------公开课页面的尾部-------------------------------------->
<?php use app\commands\front\ClassFootWidget;?>
<?php ClassFootWidget::begin();?>
<?php ClassFootWidget::end();?>
<!--右边固定部分-->
<?php use app\commands\front\RightSuspensionWidget;?>
<?php RightSuspensionWidget::begin();?>
<?php RightSuspensionWidget::end();?>
<!----------------------------------------------左边悬浮窗-------------------------------------------------------------->
<?php use app\commands\front\LeftSuspensionWidget;?>
<?php LeftSuspensionWidget::begin();?>
<?php LeftSuspensionWidget::end();?>
<div class="open-fixed">
    <div class="inFix">
        <!--<a href="#">立即咨询</a>-->
        <b></b>
        <span onclick="scrollTo(0,0);">回顶部</span>
    </div>
</div>
</body>
</html>