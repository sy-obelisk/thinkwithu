<!DOCTYPE html>
<html>
<head>
    <?php
    $seo = \app\modules\cn\models\Category::getSeoInfo(161);
    ?>
    <title><?php echo $seo['title']?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="keywords" content="<?php echo $seo['keywords']?>">
    <meta name="description" content="<?php echo $seo['description']?>">
    <link rel="stylesheet" href="/cn/css/AdvancedCourse.css"/>
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
<!-----------------------------头部end------------------------------>
<!-----------------------------导航------------------------------>
<?php use app\commands\front\BannerWidget;?>
<?php BannerWidget::begin();?>
<?php BannerWidget::end();?>
<!-----------------------------导航end------------------------------>
<div class="courseTop" style=" padding: 200px 0 0 305px; ">
    <img src="/cn/images/course-fontImg02.png" alt="头部图"/>
</div>
<div class="foundationC">
    <ul>
        <li>
            <div class="heiBac01">
                <h4>GMAT培训适合人群：</h4>
                <ul>
                    <li>英语基础较弱,CET-4、6成绩不高，没有雅思、托福考试
                        经验或者成绩不理想的学员</li>
                    <li>希望在名师指导下短时间内获得GMAT基础提高训练，偏
                        好小班上课，追求VIP服务体验的学员。</li>
                    <li>GMAT零基础客户</li>
                </ul>
            </div>
        </li>
        <li>
            <div class="heiBac02">
                <h4>GMAT培训课程特色： </h4>
                <ul>
                    <li>根据学员薄弱基础点有针对性地进行讲解和演练，
                        根据学员的具体情况量身定制和调整课程内容</li>
                    <li>10课时名师点睛帮助学员迅速在其薄弱环节上实
                        现突破，为强化班的学习夯实基础</li>
                    <li>为零基础学生夯实基础</li>
                </ul>
            </div>
        </li>
        <li>
            <div class="heiBac03">
                <h4>GMAT培训授课内容： </h4>
                <ul>
                    <li>GMAT考试简介，词汇，长难句，语法基础，阅读，数
                        学基础等</li>

                </ul>
            </div>
        </li>
        <li>
            <div class="heiBac04">
                <h4>班型： </h4>
                <ul>
                    <li>一对一VIP（不低于4课时）</li>
                    <li> 5人以上小班（全国远程授课）</li>

                </ul>
            </div>
        </li>
    </ul>
</div>
<div class="foundationB">
    <ul>
        <li>
            <div class="classBck01">
                <h4>课时：10课时</h4>
            </div>
        </li>
        <li>
            <div class="classBck02">
                <span class="ml01">
                      <img src="/cn/images/course_classIcon01.png" alt="图标"/>
                       课程类型</span>
                 <span class="ml02">
                      <img src="/cn/images/course_classIcon02.png" alt="图标"/>
                       课时</span>
                 <span class="ml03">
                      <img src="/cn/images/course_classIcon03.png" alt="图标"/>
                       授课专家</span>
            </div>
        </li>
        <li>
            <div class="classBck03 diffBac01">
                <span class="ml01">GMAT简介</span>
                <span class="ml02">1课时</span>
                <span class="ml03">申友专家讲师</span>
            </div>
        </li>
        <li>
            <div class="classBck03 diffBac02">
                <span class="ml01">语法基础（SC）</span>
                <span class="ml02">4课时</span>
                <span class="ml03">申友专家讲师</span>
            </div>
        </li>
        <li>
            <div class="classBck03 diffBac03">
                <span class="ml01">阅读基础（RC）</span>
                <span class="ml02">4课时</span>
                <span class="ml03">申友专家讲师</span>
            </div>
        </li>
        <li>
            <div class="classBck03 diffBac04">
                <span class="ml01">数学词汇、基础</span>
                <span class="ml02">1课时</span>
                <span class="ml03">申友专家讲师</span>
            </div>
        </li>
    </ul>
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