<!DOCTYPE html>
<html lang="ch">
<head>
    <meta charset="UTF-8">
    <!--阻止浏览器缓存-->
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
    <meta http-equiv="expires" content="0">
    <!-- Basic Page Needs
     <--================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords"
          content="申友_雅思_IELTS_雷哥雅思_申友雅思在线_雅思备考_雷哥雅思课程_雅思培训_雅思在线课程_雅思网络课程_雅思网课_雅思备考_IELTS资料_IELTS视频课程_IELTS网络课程_备考雅思_考雅思">
    <meta name="description" content="申友雅思在线|申友IELTS在线培训课程，雅思在线课程，雅思网络课程直播课，大中华区权威一站式雅思学习生态系统">
    <meta name="title" content="申友雅思在线_雅思备考_雅思培训_雅思网络课程_雅思在线课程_雅思网课_雅思直播课_IELTS申友">
    <meta name="author" content="">
    <meta name="Copyright" content="">
    <!-- 让IE浏览器用最高级内核渲染页面 还有用 Chrome 框架的页面用webkit 内核
    <--================================================== -->
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
    <!-- IOS6全屏 Chrome高版本全屏
    <--================================================== -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <!-- 让360双核浏览器用webkit内核渲染页面
    <--================================================== -->
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" href="/cn/gre/css/reset.css">
    <link rel="stylesheet" href="/cn/css/header.css"/>
    <link rel="stylesheet" href="/cn/css/footer.css"/>
    <link rel="stylesheet" href="/cn/css/public.css"/>
    <link rel="stylesheet" href="/cn/gre/css/gre_index.css">
    <link rel="stylesheet" type="text/css" href="/cn/css/iconfont.css">
    <link rel="stylesheet" href="/cn/css/fonts/font-awesome/css/font-awesome.min.css"/>
    <link rel="shortcut icon" href="http://www.thinkwithu.com/favicon.ico"/>
    <script type="text/javascript" src="/cn/js/public.js"></script>
    <title>GRE培训|GRE考试|GRE在线课程|GRE网课|GRE机经真题</title>
    <script src="/cn/words/js/jquery-1.12.2.min.js"></script>
    <script src="/cn/gre/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/cn/js/public.js"></script>

</head>
<body>
<?php use app\commands\front\NavWidget; ?>
<?php NavWidget::begin(); ?>
<?php NavWidget::end(); ?>
<!---------------------------左边悬浮窗---------------------------------->
<?php use app\commands\front\LeftSuspensionWidget; ?>
<?php LeftSuspensionWidget::begin(); ?>
<?php LeftSuspensionWidget::end(); ?>

<!--banner-->
<div style="background: rgb(248,248,248)">
    <div class="banner-wrap">
        <div class="slideBox-1 relative w_100">
            <div class="b1-bd">
                <ul><!--循环li-->
                    <li>
                        <a href="http://gre.viplgw.cn/activity/a-3422.html" target="_blank">
                            <img  src="http://gre.viplgw.cn//files/attach/images/20180829/1535532214229847.png" alt="banner图"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://gre.viplgw.cn/course/7772.html" target="_blank">
                            <img src="http://gre.viplgw.cn//files/attach/images/20180827/1535338478535151.png" alt="banner图"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://gre.viplgw.cn/course/7755.html" target="_blank">
                            <img  src="http://gre.viplgw.cn//files/attach/images/20180408/1523179876612251.png" alt="banner图"/>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <script>

            $(".b1-bd ul").animate({ 'left': '-50px' }, 300, function () {
                $(".slideBox-1").slide({
                    mainCell: ".b1-bd ul",
                    titCell: ".b1-bd ul li",
                    effect: "leftLoop",
                    trigger: "click",
                    autoPlay: true,
                    easing: "easeInOutQuint",
                    delayTime: 3000,
                    interTime: 5000,
                    defaultPlay: true,
                    vis: 1,
                });
            });
            //让banner背景左右透明
            var wid = $(".b1-bd li:first").width();
            var wind = $(window).width();

        </script>
    </div>
    <section id="index" class="clearfix relative">
        <div class="w12" style="margin-bottom: 50px;">
            <div class="model_1 relative">
                <!--做题  搜题  备考-->
                <div class="relative">
                    <ul class="m1_list flex-container-center tm" style="justify-content: space-between;">
                        <li>
                            <div class="list_info clearfix">
                                <div class="inm lof_img"><img src="/cn/gre/images/list_icon_1.png" alt=""></div>
                                <div class="inm lof_text">
                                    <p class="list_name">做题</p>
                                    <p class="view_num"><?php echo $numQuestions+1020; ?>人正在做题 </p>
                                    <div class="m1_btn"><a href="http://gre.viplgw.cn/practice.html" target="_blank">立即进入</a></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list_info clearfix">
                                <div class="inm lof_img"><img src="/cn/gre/images/list_icon_2.png" alt=""></div>
                                <div class="inm lof_text">
                                    <p class="list_name">搜题</p>
                                    <p class="view_num"><?php echo $numSearchs['viewCount']+1020; ?>人正在搜题 </p>
                                    <div class="m1_btn"><a href="http://gre.viplgw.cn/search.html" target="_blank">立即进入</a></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list_info clearfix">
                                <div class="inm lof_img"><img src="/cn/gre/images/list_icon_3.png" alt=""></div>
                                <div class="inm lof_text">
                                    <p class="list_name">备考</p>
                                    <p class="view_num"><?php echo $viewNum ?>人正在学习 </p>
                                    <div class="m1_btn"><a href="http://gre.viplgw.cn/beikao.html" target="_blank">立即进入</a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--直播课程-->
                <div class="tm model_name_wrap" style="padding-top: 0;padding-bottom: 15px;">
                    <h1 class="new_model_name">直播课程</h1>
                    <div class="service_line"></div>
                </div>
                <div class="tr zb_more"><a href="http://gre.viplgw.cn/course.html" target="_blank">More>></a></div>
                <div class="live_list_wrap relative picScroll-left">
                    <div class="bd">
                        <ul class="live_list clearfix">
                            <?php
                            foreach ($course as $v) {
                                ?>
                                <li>
                                    <a href="/gre-course/detail/<?php echo $v['id'] ?>.html" target="_blank">
                                        <div class="live_sub_img">
                                            <img src="http://gre.viplgw.cn/<?php echo $v['image'] ?>" alt="">
                                            <p class="live_date"><?php echo $v['commencement'] ?></p>
                                        </div>
                                        <div class="live_text_wrap">
                                            <p class="live_de ellipsis-2"><?php echo str_replace("雷哥", "申友",$v['name']) ?></p>
                                            <!--                                    <div class="tm">-->
                                            <!--                                        <span class="inm" style="width: 100px"><img src="/cn/images/course/course-lijizx.png" alt=""></span>-->
                                            <!--                                    </div>-->

                                        <div class="live_btn_wrap clearfix">
                                            <span class="live_teacher fl inm">报名人数：<?php echo $v['alternatives'] ?></span>
                                            <span class="live_btn inm tm fr">我要报名</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <script>
                jQuery(".picScroll-left").slide({
                    titCell: ".hd ul",
                    mainCell: ".bd ul",
                    autoPage: true,
                    effect: "leftLoop",
                    autoPlay: true,
                    vis: 3
                });
            </script>
        </div>
    </div>
    <!--  GRE备考 -->
        <div class="new_model_3">
            <div class="w12">
                 <div class="tm model_name_wrap" style="padding-top: 0;padding-bottom: 15px;">
                        <h1 class="new_model_name">GRE备考</h1>
                        <div class="service_line"></div>
                 </div>
                <ul class="bkTab tm">
                    <li class="on">一周热门</li>
                    <li>词汇</li>
                    <li>阅读</li>
                    <li>填空</li>
                    <li>数学</li>
                    <li>写作</li>
                </ul>
                <div class="newModel_wrap">
                <div class="bkItem_wrap">
                    <ul class="list_1 flexList tl">
                        <?php
                        foreach ($hot as $v) {
                            ?>
                            <li>
                                <div class="small_img">
                                    <img src="http://gre.viplgw.cn/<?php echo $v['image'] ?>" alt="">
                                </div>
                                <div class="small_info_wrap">
                                    <p class="small_h1">
                                        <a class="ellipsis" href="http://gre.viplgw.cn/beikao/d-537-<?php echo $v['id'] ?>.html"><?php echo $v['name'] ?></a>
                                    </p>

                                        <p class="ellipsis small_de"><?php echo $v['answer'] ?></p>

                                        <div class="small_info">
                                            <i class="iconfont clock">&#xe634;</i>
                                            <span>
                                                <?php echo date("Y-m-d", strtotime($v['alternatives'])) ?>
                                            </span>
                                            <i class="iconfont heart">&#xe631;</i>
                                            <span>
                                                关注度:<?php echo $v['viewCount'] ?>
                                            </span>
                                        </div>
                                    </div>

                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="bkItem_wrap">
                        <div class="flexList">
                            <?php
                            foreach ($word['imageMessage'] as $v) {
                                ?>
                                <div class="m3_img fl">
                                    <a href="/beikao/d-538-<?php echo $v['id'] ?>.html" target="_blank">
                                        <img src="http://gre.viplgw.cn/<?php echo $v['image'] ?>" alt="">
                                        <p class="ellipsis m3_img_tit"><?php echo $v['name'] ?></p>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                            <ul class="common_list3 flexList">
                                <?php
                                foreach ($word['contents'] as $v) {
                                    ?>
                                    <li>
                                        <a class="inm bk_tit ellipsis" href="http://gre.viplgw.cn/beikao/d-538-<?php echo $v['id'] ?>.html"
                                           target="_blank"><?php echo $v['name'] ?></a>
                                        <span class="bk_date inm"><?php echo date("Y-m-d", strtotime($v['alternatives'])) ?></span>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="bkItem_wrap">
                        <div class="flexList">
                            <?php
                            foreach ($read['imageMessage'] as $v) {
                                ?>
                                <div class="m3_img fl">
                                    <a href="http://gre.viplgw.cn/beikao/d-540-<?php echo $v['id'] ?>.html" target="_blank">
                                        <img src="http://gre.viplgw.cn/<?php echo $v['image'] ?>" alt="">

                                        <p class="ellipsis m3_img_tit"><?php echo $v['name'] ?></p>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                            <ul class="common_list3 flexList">
                                <?php
                                foreach ($read['contents'] as $v) {
                                    ?>
                                    <li>
                                        <a class="inm bk_tit ellipsis" href="http://gre.viplgw.cn/beikao/d-540-<?php echo $v['id'] ?>.html"
                                           target="_blank"><?php echo $v['name'] ?></a>
                                        <span class="bk_date inm"><?php echo date("Y-m-d", strtotime($v['alternatives'])) ?></span>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="bkItem_wrap">
                        <div class="flexList">
                            <?php
                            foreach ($blank['imageMessage'] as $v) {
                                ?>
                                <div class="m3_img fl">
                                    <a href="http://gre.viplgw.cn/beikao/d-539-<?php echo $v['id'] ?>.html" target="_blank">
                                        <img src="http://gre.viplgw.cn/<?php echo $v['image'] ?>" alt="">

                                        <p class="ellipsis m3_img_tit"><?php echo $v['name'] ?></p>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                            <ul class="common_list3 flexList">
                                <?php
                                foreach ($blank['contents'] as $v) {
                                    ?>
                                    <li>
                                        <a class="inm bk_tit ellipsis" href="http://gre.viplgw.cn/beikao/d-539-<?php echo $v['id'] ?>.html"
                                           target="_blank"><?php echo $v['name'] ?></a>
                                        <span class="bk_date inm"><?php echo date("Y-m-d", strtotime($v['alternatives'])) ?></span>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="bkItem_wrap">
                        <div class="flexList">
                            <?php
                            foreach ($math['imageMessage'] as $v) {
                                ?>
                                <div class="m3_img fl">
                                    <a href="http://gre.viplgw.cn/beikao/d-541-<?php echo $v['id'] ?>.html" target="_blank">
                                        <img src="http://gre.viplgw.cn/<?php echo $v['image'] ?>" alt="">
                                        <p class="ellipsis m3_img_tit"><?php echo $v['name'] ?></p>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                            <ul class="common_list3 flexList">
                                <?php
                                foreach ($math['contents'] as $v) {
                                    ?>
                                    <li>
                                        <a class="inm bk_tit ellipsis" href="http://gre.viplgw.cn/beikao/d-541-<?php echo $v['id'] ?>.html"
                                           target="_blank"><?php echo $v['name'] ?></a>
                                        <span class="bk_date inm"><?php echo date("Y-m-d", strtotime($v['alternatives'])) ?></span>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="bkItem_wrap">
                        <div class="flexList">
                            <?php
                            foreach ($write['imageMessage'] as $v) {
                                ?>
                                <div class="m3_img">
                                    <a href="http://gre.viplgw.cn/beikao/d-542-<?php echo $v['id'] ?>.html" target="_blank">
                                        <img src="http://gre.viplgw.cn/<?php echo $v['image'] ?>" alt="">

                                        <p class="ellipsis m3_img_tit"><?php echo $v['name'] ?></p>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                            <ul class="common_list3 flexList">
                                <?php
                                foreach ($write['contents'] as $v) {
                                    ?>
                                    <li>
                                        <a class="inm bk_tit ellipsis" href="http://gre.viplgw.cn/beikao/d-542-<?php echo $v['id'] ?>.html"
                                           target="_blank"><?php echo $v['name'] ?></a>
                                        <span class="bk_date inm"><?php echo date("Y-m-d", strtotime($v['alternatives'])) ?></span>
                                    </li>
                                    <?php
                                }
                                ?>

                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!--GRE题库-->
        <div class="w12"> <div class="tm model_name_wrap" style="padding-top: 0;padding-bottom: 15px;">
                <h1 class="new_model_name">GRE题库</h1>
                <div class="service_line"></div>
            </div></div>
        <div class="commonTopic">
            <div class="topic-left">
                <div class="common-back back02">
                    <img src="/cn/gre/images/gre-ku.png" alt="图标"/>
<!--                    <p>雷哥GRE<br>最新更新题目</p>-->
                </div>
                <a href="http://gre.viplgw.cn/search.html">查看更多>></a>
            </div>
            <div class="topic-right">
                <p class="topic-right-title">网络最新GRE题目，及时了解新题考点</p>
                <div class="slide03">
                    <div class="topicBd topicBdMR">
                        <ul>
                            <?php
                            foreach($newQuestions as $k=>$v) {
                                if ($k < 10) {
                                    ?>
                                    <li>
                                        <a href="http://gre.viplgw.cn/question/<?php echo $v['id'] ?>.html">
                                            <div class="topic-title">
                                                【<?php echo $v['section'] ?>】-<?php echo $v['source']['alias'] ?>
                                                -<?php echo $v['id'] ?>
                                            </div>
                                            <p><?php echo $v['stem'] ?></p>
                                        </a>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <script type="text/javascript">
                    jQuery(".slide03").slide({mainCell:".topicBd ul",autoPlay:true,effect:"topMarquee",interTime:50,vis:4,autoPage:true});
                </script>
                <div class="slide04">
                    <div class="topicBd">
                        <ul>
                            <?php
                            foreach($newQuestions as $k=>$v) {
                                if ($k > 10) {
                                    ?>
                                    <li>
                                        <a href="http://gre.viplgw.cn/question/<?php echo $v['id'] ?>.html">
                                            <div class="topic-title">
                                                【<?php echo $v['section'] ?>】-<?php echo $v['source']['alias'] ?>
                                                -<?php echo $v['id'] ?>
                                            </div>
                                            <p><?php echo $v['stem'] ?></p>
                                        </a>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <script type="text/javascript">
                    jQuery(".slide04").slide({mainCell:".topicBd ul",autoPlay:true,effect:"topMarquee",interTime:50,vis:4,autoPage:true});
                </script>
            </div>

            <div style="clear: both"></div>
        </div>
        <div class="model_2 relative">
            <div class="w12 relative">
                <div class="tm relative" style="z-index: 15;margin-top:-45px">
                    <h1 class="model2_h1">名师方法+在线刷题<br>六大功能与服务，助你预见高分！</h1>
<!--                    <div><img src="/cn/gre/images/icon_item.png" alt=""></div>-->
<!--                    <div style="margin-top: -30px;"><img src="/cn/gre/images/item_hj.png" alt=""></div>-->
                </div>
<!--                <canvas id="GRE_ani" width="685" height="520"></canvas>-->
            </div>
        </div>
        <div class="model_4">
            <div class="w12">
                <div class="register_enter flex-container-center clearfix">
                    <div class="fl" style="margin-right: 70px"><img src="/cn/gre/images/gre_new.png" alt=""></div>
                    <div class="fr tm">
                        <p class="bold_gre">来申友，我们帮你拿高分 </p>
                        <p class="gre_de">全球已有<strong>10000+</strong>你的小伙伴加入申友GRE</p>
                        <div class="tm register_btn">
                            <a class="inm" href="http://login.gmatonline.cn/cn/index/register" target="_blank">立即注册</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>


<!-------------------------------------------------右边的悬浮窗------------------------------------------->
<?php //use app\commands\front\RightSuspensionWidget;?>
<?php //RightSuspensionWidget::begin();?>
<?php //RightSuspensionWidget::end();?>
<!----------------------------------------------左边悬浮窗-------------------------------------------------------------->
<?php //use app\commands\front\LeftSuspensionWidget;?>
<?php //LeftSuspensionWidget::begin();?>
<?php //LeftSuspensionWidget::end();?>
</body>
</html>
<script>
    $(function () {
        $('.bkTab li').click(function () {
            var num = $(this).index();
            $(this).addClass('on').siblings('li').removeClass('on');
            $('.newModel_wrap .bkItem_wrap').eq(num).show().siblings('.bkItem_wrap').hide();
        });
        var fNum=localStorage.getItem("fiveMask");
        if(!fNum){
            setTimeout(function () {
                localStorage.setItem("fiveMask","true");
                $(".fiveSecond-mask").fadeIn();
                //        5秒关闭弹窗
                var s=$("#five-s").html();
                var timer=setInterval(function () {
                    s--;
                    $("#five-s").html(s);
                    if(s<1){
                        clearInterval(timer);
                        closeFiveSecond();
                        return false;
                    }
                },1000);
            },1000);
        }
    });
    var canvas = document.getElementById("GRE_ani");
    var ctx = canvas.getContext("2d");
    var img = new Image();
    img.src = "/cn/gre/images/canvas_img.png";
    img.onload = function () {
        setInterval(function () {
            rotate(ctx)
        }, 100)
    };

    function rotate(ctx) {
        var x = canvas.width / 2; //画布宽度的一半
        var y = canvas.height / 2;//画布高度的一半
        ctx.clearRect(0, 0, canvas.width, canvas.height);//先清掉画布上的内容
        ctx.translate(x, y);//将绘图原点移到画布中点
        ctx.rotate(Math.PI / 360);//旋转角度
        ctx.translate(-x, -y);//将画布原点移动
        ctx.drawImage(img, 90, 10);//绘制图片
    }

    function closeFiveSecond() {
        $(".fiveSecond-mask").fadeOut();
    }
</script>
