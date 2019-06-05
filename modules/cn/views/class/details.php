<!DOCTYPE html>
<html>
<head>
    <title><?php echo $data[0]['name']?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="/cn/css/open-details.css">
    <link rel="stylesheet" href="/cn/css/open-public.css"/>
    <link rel="stylesheet" href="/cn/Hirsi/css/reset.css">
<!--    <link rel="stylesheet" href="/cn/Hirsi/css/index.css">-->
    <link rel="stylesheet" href="/cn/css/fonts/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="/cn/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/cn/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/cn/js/public.js"></script>

</head>
<body>
<!--公开课头部-->
<?php //use app\commands\front\ClassHeadWidget;?>
<?php //ClassHeadWidget::begin();?>
<?php //ClassHeadWidget::end();?>

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
        <div class="detail-top">
            <div class="detailT-left">
                <img src="<?php echo $data[0]['image']?>" alt="课程图片">
            </div>
            <div class="detailT-right">
                <h4><?php echo $data[0]['name']?></h4>
                <ul>
                    <li>开课时间：<?php echo $data[0]['time']?></li>
                    <li>时长：<?php echo $data[0]['score']?></li>
                </ul>
                <div class="xian"></div>
                <?php
                    if(!empty($data[0]['url'])) {
                        ?>
                        <a href="/public-class/back/<?php echo $data[0]['id']?>.html">课程回放</a>
                    <?php
                    }else {
                        ?>
                        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">报名</a>
                    <?php
                    }
                ?>
                <span><img src="/cn/images/open_love.png" alt="心图标"><?php echo $data[0]['place']?></span>
            </div>
            <div style="clear: both"></div>
        </div>
        <div class="detail-center">
            <h4>
                <span> <img src="/cn/images/openD_titleIcon01.png" alt="标题图标"/><span>课程内容</span></span>
            </h4>
           <pre style="white-space: pre-wrap">
               <?php echo $data[0]['synopsis']?>
           </pre>
        </div>

        <div class="open-commonTitle">
            <h4><img src="/cn/images/openD_titleIcon02.png" alt="图标">您可能感兴趣...</h4><a href="#">更多</a>
        </div>

        <div class="open-commonStyle">
            <?php
            $inter = \app\modules\cn\models\Content::getContent(['order'=>'c.viewCount DESC','fields' => 'place,time,','category' => '107','pageSize' => 4,'where' => 'c.catId != 190' ,'order'=>'c.id desc']);
            ?>
            <ul>
                <?php
                    foreach($inter as $v) {
                        ?>
                        <li>
                            <img src="<?php echo $v['image']?>" alt="课程图"/>

                            <p><?php echo $v['name']?></p>
                            <b><?php echo $v['place']?></b>

                            <div style="clear: both;margin-bottom: 5px"></div>
                            <span><?php echo $v['time']?></span>

                            <div style="border-bottom: 1px #cbcbcb solid;margin-top: 5px"></div>
                            <?php
                            if(!empty($v['url'])) {
                                ?>
                                <a class="classBtn diffColor01" href="/public-class/back/<?php echo $data[0]['id']?>.html">课程回放</a>
                            <?php
                            }else {
                                ?>
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank" class="classBtn diffColor01">报名</a>
                            <?php
                            }
                            ?>
                            <a href="/public-class/<?php echo $v['id']?>.html" class="classBtn diffColor02">详情</a>
                        </li>
                    <?php
                    }
                ?>
            </ul>
        </div>


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
        <!--日历-->
        <div class="dissRight conR-eiji">
            <div class="newActive">
                <b>最新活动</b>
            </div>
            <?php
            $re = \app\modules\cn\models\Content::getActive();
            $activity = $re['activity'];
            $activityDate = $re['activityDate'];
            ?>
            <div class="calendar">
                <div class="calendarHd calendarHd-erji">
                    <ul>
                        <li><?php echo date('Y年m月')?></li>
                    </ul>
                    <a href="javascript:;" class="prev"><i class="fa fa-caret-left"></i></a>
                    <a href="javascript:;" class="next"><i class="fa fa-caret-right "></i></a>
                </div>
                <div style="clear: both"></div>
                <div class="calendarBd">
                    <?php
                    $week = date("N",strtotime(date("Y-m-01")));
                    ?>
                    <ul class="calUl01">
                        <li>
                            <ul>
                                <li>Sun.</li>
                                <li>Mon.</li>
                                <li>Tues.</li>
                                <li>Wed.</li>
                                <li>Thur.</li>
                                <li>Fri.</li>
                                <li>Sat.</li>
                                <?php
                                for($a=1;$a<=$week;$a++) {
                                    ?>
                                    <li></li>
                                <?php
                                }
                                ?>
                                <?php
                                $StartMonth   = date("Y-m-01"); //开始日期
                                $EndMonth     = date("Y-m-d",strtotime("$StartMonth +1 month -1 day")); //结束日期
                                $ToStartMonth = strtotime( $StartMonth ); //转换一下
                                $ToEndMonth   = strtotime( $EndMonth ); //一样转换一下
                                $i            = false; //开始标示
                                while( $ToStartMonth < $ToEndMonth ) {
                                    $NewMonth = !$i ? date('Y-m-d', strtotime('+0 Month', $ToStartMonth)) : date('Y-m-d', strtotime('+1 day', $ToStartMonth));
                                    $ToStartMonth = strtotime($NewMonth);
                                    $i = true;
                                    ?>
                                    <li>
                                        <?php
                                        if (in_array($NewMonth, $activityDate)){
                                            ?>
                                            <a href="/public-class/<?php echo $activity[$NewMonth]['id']?>.html" class="on on-erji"><?php echo date("d", strtotime($NewMonth)) ?></a>

                                            <div class="classOn classOn-erji">
                                                <?php echo $activity[$NewMonth]['name']?>
                                            </div>
                                        <?php
                                        }else {
                                            ?>
                                            <?php echo date("d", strtotime($NewMonth)) ?>
                                        <?php
                                        }
                                        ?>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                    <?php
                    $StartMonth   = date("Y-m-01");
                    $week = date("N",strtotime(date("Y-m-01",strtotime("$StartMonth +1 month"))));
                    ?>
                    <ul class="calUl02">
                        <li>
                            <ul>
                                <li>Sun.</li>
                                <li>Mon.</li>
                                <li>Tues.</li>
                                <li>Wed.</li>
                                <li>Thur.</li>
                                <li>Fri.</li>
                                <li>Sat.</li>
                                <?php
                                for($a=1;$a<=$week;$a++) {
                                    ?>
                                    <li></li>
                                <?php
                                }
                                ?>
                                <?php
                                $StartMonth   = date("Y-m-01",strtotime("$StartMonth +1 month")); //开始日期
                                $EndMonth     = date("Y-m-d",strtotime("$StartMonth +1 month -1 day")); //结束日期
                                $ToStartMonth = strtotime( $StartMonth ); //转换一下
                                $ToEndMonth   = strtotime( $EndMonth ); //一样转换一下
                                $i            = false; //开始标示
                                while( $ToStartMonth < $ToEndMonth ) {
                                    $NewMonth = !$i ? date('Y-m-d', strtotime('+0 Month', $ToStartMonth)) : date('Y-m-d', strtotime('+1 day', $ToStartMonth));
                                    $ToStartMonth = strtotime($NewMonth);
                                    $i = true;
                                    ?>
                                    <li>
                                        <?php
                                        if (in_array($NewMonth, $activityDate)){
                                            ?>
                                            <a href="/public-class/<?php echo $activity[$NewMonth]['id']?>.html" class="on on-erji"><?php echo date("d", strtotime($NewMonth)) ?></a>

                                            <div class="classOn classOn-erji">
                                                <?php echo $activity[$NewMonth]['name']?>
                                            </div>
                                        <?php
                                        }else {
                                            ?>
                                            <?php echo date("d", strtotime($NewMonth)) ?>
                                        <?php
                                        }
                                        ?>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(".calendar").slide({titleCell:".calendarHd ul",mainCell:".calendarBd",trigger:"click",autoPage:"autoPage"});
            </script>
        </div>
        <div style="clear: both"></div>
        <!--学子案例-->
        <?php
        $testimonials = \app\modules\cn\models\Content::getContent(['fields' => 'smallPhoto,abroadSchool，score,abstract','category' => "102","pageSize" => 1]);
        ?>
        <?php
        if(isset($testimonials[0])) {
        ?>
            <div class="studeBackTop">
                <h4 class="rightTitle">学子案例</h4>
                <div class="studeBack-left">
                    <img src="<?php echo $testimonials[0]['smallPhoto']?>" alt="学子案例头像">
                </div>
                <div class="studeBack-right">
                    <h4><?php echo $testimonials[0]['name']?></h4>
                    <span><?php echo $testimonials[0]['title']?></span>
                    <ul>
                        <li><?php echo $testimonials[0]['score']?>:<?php echo $testimonials[0]['abroadSchool']?></li>
                    </ul>
                </div>
                <div style="clear: both"></div>
                <p class="luanFont">
                    <span><?php echo $testimonials[0]['abstract']?></span>
                    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" class="readAll rightPos01">在线咨询</a>
                    <a href="/word-details/<?php echo $testimonials[0]['id']?>/index,88,102.html" class="readAll rightPos02">阅读原文</a>
                </p>
            </div>
        <?php
        }
        ?>
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
<script type="text/javascript">
    moth(".calUl02",".calendarHd ul li",'<?php echo date("Y年m月")?>','<?php $firstday=date("Y-m"); echo date("Y年m月",strtotime("$firstday +1 month"))?>');
    moth(".evecalUl02",".everyCahd ul li",'<?php echo date("Y年m月")?>','<?php $firstday=date("Y-m"); echo date("Y年m月",strtotime("$firstday +1 month"))?>');
</script>