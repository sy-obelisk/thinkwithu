<!DOCTYPE html>
<html>
<head>
    <title>GMAT名师、托福名师、留学顾问</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="/cn/css/teacherCase.css"/>
    <link rel="stylesheet" href="/cn/css/fonts/font-awesome/css/font-awesome.min.css"/>
    <script type="text/javascript" src="/cn/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/cn/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/cn/js/public.js"></script>
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
<div class="case-headImg">
    <img src="/cn/images/quesAnswer_topH02.jpg" alt="内容头部图"/>
</div>

<div class="case-teacher">
    <div class="caseT-left"><img src="<?php echo $data[0]['image']?>" alt="老师照片"></div>
    <div class="caseT-right">
        <h1><?php echo $data[0]['name']?><span><?php echo $data[0]['job']?></span></h1>
        <?php echo $data[0]['description']?>
    </div>
</div>
<?php

$studyInSpeech = \app\modules\cn\models\Content::getContent(['fields' => 'abstract,smallPhoto','category' => '102,178','pageSize' => 8,'order' => "c.viewCount DESC"]);
$trainingSpeech = \app\modules\cn\models\Content::getContent(['fields' => 'abstract,smallPhoto','category' => '102,177','pageSize' => 8,'order' => "c.viewCount DESC"]);
?>
<div class="testimonials">
    <div class="testimonials-l">
        <div class="xian"></div>
            <div class="testContent">
                <h4>留学感言</h4>
                <?php
                if (isset($studyInSpeech[0])) {
                    ?>
                <div class="testC-left">
                    <img src="<?php echo $studyInSpeech[0]['smallPhoto'] ?>" alt="介绍图" width="160"/>
                </div>
                <div class="testC-right">
                    <b>"<?php echo $studyInSpeech[0]['title'] ?> "</b>

                    <p>
                        <?php echo $studyInSpeech[0]['abstract'] ?>
                    </p>
                </div>
                <div style="clear: both"></div>
                <div class="testC-ul">
                    <ul>
                        <?php
                        foreach ($studyInSpeech as $k => $v) {
                            if ($k == 0) {
                                continue;
                            }
                            ?>
                            <li><img src="/cn/images/quesAnswer_dianIcon.png" alt="点图标"/><a
                                    href="/word-details/<?php echo $v['id'] ?>/102.html"><?php echo $v['title'] ?></a>
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
    </div>
    <div class="testimonials-r">
        <div class="xian floatR"></div>
        <div class="testContent cMT">
                <h4>培训感言</h4>
            <?php
            if (isset($trainingSpeech[0])) {
                ?>
                <div class="testC-left">
                    <img src="<?php echo $trainingSpeech[0]['smallPhoto'] ?>" alt="介绍图" width="160"/>
                </div>
                <div class="testC-right">
                    <b>"<?php echo $trainingSpeech[0]['title'] ?> "</b>

                    <p>
                        <?php echo $trainingSpeech[0]['abstract'] ?>
                    </p>
                </div>
                <div style="clear: both"></div>
                <div class="testC-ul">
                    <ul>
                        <?php
                        foreach ($trainingSpeech as $k => $v) {
                            if ($k == 0) {
                                continue;
                            }
                            ?>
                            <li><img src="/cn/images/quesAnswer_dianIcon.png" alt="点图标"/><a
                                    href="/word-details/<?php echo $v['id'] ?>/102.html"><?php echo $v['title'] ?></a>
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
    </div>
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