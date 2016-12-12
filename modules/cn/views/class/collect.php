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
    <link rel="stylesheet" href="/cn/css/openCollect.css">
    <link rel="stylesheet" href="/cn/css/open-public.css"/>
    <link rel="stylesheet" href="/cn/css/fonts/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="/cn/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/cn/js/open-public.js"></script>
</head>
<body>
<!--公开课头部-->
<?php use app\commands\front\ClassHeadWidget;?>
<?php ClassHeadWidget::begin();?>
<?php ClassHeadWidget::end();?>

<div class="collect-content">
    <h4><img src="/cn/images/open_love.png" alt="图标"/> 报名课程</h4>
    <?php
        if(count($data)<=0) {
            ?>
            <div class="noContent">
                <span>暂无报名的课程</span>
            </div>
        <?php
        }
    ?>
    <?php
    if(count($data)>0) {
        ?>
        <div class="haveContent">
            <ul>
                <?php
                    foreach($data as $v) {
                        ?>
                        <li>
                            <img src="<?php echo $v['image']?>" alt="课程图"/>

                            <p><?php echo $v['name']?></p>
                            <span><?php echo $v['time']?></span>
                            <b><?php echo $v['place']?></b>

                            <div style="clear: both;"></div>
                        </li>
                    <?php
                    }
                ?>
            </ul>
        </div>
    <?php
    }
    ?>
</div>
</body>
</html>