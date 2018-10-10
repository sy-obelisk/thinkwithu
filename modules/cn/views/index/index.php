<!DOCTYPE html>
<html>
<head>
    <?php
    $data = [];
    $seo = [];
    $action = Yii::$app->controller->action->id;
    $controller = Yii::$app->controller->id;
    $url = Yii::$app->request->getUrl();
    if(strpos($url,'?tdsourcetag=s_pcqq_aiomsg')){
        $url=str_replace('?tdsourcetag=s_pcqq_aiomsg','',$url);
    }
    if ($url == '/VisaInterview.html') {
        $seo['title'] = '签证面试';
        $seo['keywords'] = '';
        $seo['description'] == '';
    } elseif ($url == '/schools.html') {
        $seo['title'] = '院校库';
        $seo['keywords'] = '';
        $seo['description'] = '';
    } elseif ($url == '/surprise.html') {
        $seo['title'] = '这个页面去留学了';
        $seo['keywords'] = '';
        $seo['description'] = '';
    } elseif ($url == '/evaluation.html') {
        $seo['title'] = '留学申请评估';
        $seo['keywords'] = '';
        $seo['description'] = '';
    } elseif ($url == '/gmat/app.html') {
        $seo['title'] = 'gmatApp下载';
        $seo['keywords'] = '';
        $seo['description'] = '';
    } elseif ($url == '/problem.html') {
        $seo['title'] = 'gmat机经';
        $seo['keywords'] = '';
        $seo['description'] = '';
    } elseif ($url == '/toefl/assistance.html') {
        $seo['title'] = 'TOEFL(托福)培训-托福课程-托福辅导-托福在线课程-申友网';
        $seo['keywords'] = '托福报名，托福考试时间，托福备考，托福机经，托福真题，托福培训，托福课程，托福网络课程，托福辅导，托福班，托福听力，托福口语、托福词汇、托福写作、托福阅读';
        $seo['description'] = '申友托福培训平台致力培育托福高分学员。为学员提供关于托福报名，托福考试时间，托福机经，托福真题，托福听力，托福口语、托福词汇、托福写作、托福阅读等专业的托福备考信息，被业界称为“托福高分基地”。';
    } elseif (strstr($url, '/teachers/')) {
        $seo['title'] = 'GMAT名师、托福名师、留学顾问';
        $seo['keywords'] = '';
        $seo['description'] = '';
    } elseif (strstr($url, '/practices/')) {
        $seo['title'] = '游学实习详情页';
        $seo['keywords'] = '';
        $seo['description'] = '';
    } elseif ($url == '/mentor.html') {
        $seo['title'] = '海外mentor';
        $seo['keywords'] = '';
        $seo['description'] = '';
    } elseif ($url == '/study-aboard/service/introduction.html') {
        $seo['title'] = '留学服务';
        $seo['keywords'] = '';
        $seo['description'] = '';
    } else {
        if ($action == 'word-details' || $action == 'picture-details') {
            $seo['title'] = $this->context->title;
            $seo['keywords'] = $this->context->keywords;
        } elseif ($action == 'details' && $controller == 'schools') {
            $seo['title'] = '院校库详情';
            $seo['keywords'] = '';
            $seo['description'] = '';
        } elseif ($action == 'majormsg' && $controller == 'schools') {
            $seo['title'] = '院校库专业详情';
            $seo['keywords'] = '';
            $seo['description'] = '';
        } else {
            if (isset($this->context->layout_data) && $this->context->layout_data != null) {
                $data['seoId'] = $this->context->layout_data;
            } elseif (strstr($url, '/application/')) {
                $data['seoId'] = 120;
            } elseif (strstr($url, '/question')) {
                $data['seoId'] = 121;
            } elseif (strstr($url, '/promotion/')) {
                $data['seoId'] = 165;
            } elseif ($action == 'project' && $controller == 'study') {
                $data['seoId'] = 119;
            } else {
                $data = \app\modules\cn\models\UrlSeo::find()->where("url='$url'")->one();
            }
            if((!isset($data['seoId']))||$data['seoId']==false){
                $data['seoId']=223;
            }
            $seo = \app\modules\cn\models\Category::getSeoInfo($data['seoId']);
        }
    }
    ?>
    <title><?php echo $seo['title'] ?>-申友网</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="keywords" content="<?php echo $seo['keywords'] ?>">
    <?php
    if ($action != 'word-details' && $action != 'picture-details') {
        ?>
        <meta name="description" content="<?php echo $seo['description'] ?>">
        <?php
    }
    ?>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?4b64107d9f91d41b951875ea77823319";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script type="text/javascript" src="//s.union.360.cn/7302.js"></script>
    <link rel="stylesheet" href="/cn/css/header.css"/>
    <link rel="stylesheet" href="/cn/css/footer.css"/>
    <link rel="stylesheet" href="/cn/css/public.css"/>
    <link rel="stylesheet" href="/cn/Hirsi/css/reset.css">
    <link rel="stylesheet" href="/cn/Hirsi/css/index.css">
    <link rel="stylesheet" type="text/css" href="/cn/css/iconfont.css">
    <link rel="stylesheet" href="/cn/css/fonts/font-awesome/css/font-awesome.min.css"/>
    <link rel="shortcut icon" href="http://www.thinkwithu.com/favicon.ico"/>
    <script type="text/javascript" src="/cn/js/jquery1.7.2.min.js"></script>
    <script type="text/javascript" src="/cn/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/cn/js/public.js"></script>
</head>
<body>
<!--banner-->
<section class="bannerWrap">
    <div class="banner banner_head" style="overflow: hidden;max-height: 460px">
        <div class="hd_banner hd">
            <ul>
                <!--            循环li-->
                <li class=""></li>
                <li class=""></li>
                <li class=""></li>
            </ul>
        </div>
        <div class="bd_banner bd" style="width: 100%;overflow: hidden;">
            <ul>
                <!--            循环li-->
                <li>
                    <a href="" target="_blank"><img src="http://www.thinkwithu.com/files/attach/images/20171019/1508404770815637.jpg" alt="">
                    </a>

                </li>
                <li>
                    <a href="" target="_blank"><img src="http://www.thinkwithu.com/files/attach/images/20171019/1508404770815637.jpg" alt="">
                    </a>

                </li>
                <li>
                    <a href="" target="_blank"><img src="http://www.thinkwithu.com/files/attach/images/20171019/1508404770815637.jpg" alt="">
                    </a>

                </li>
            </ul>
        </div>
    </div>

</section>

<section class="index_Record">
    <img class="Record_map" src="/cn/Hirsi/images/map.png" alt="">
    <!--部分战绩-->
    <div class="Record_content">
        <p class="Record_title">部分战绩</p>
        <p class="Record_title_l">连续五年 , 案列辉煌</p>
        <div class="ut_logo">
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/stanford.gif" alt="">
                <div>
                    <p class="ut_name">Stanford</p>
                    <p class="ut_num"><span>60</span>例</p>
                </div>
            </div>
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/princeton.gif" alt="">
                <div>
                    <p class="ut_name">Princeton</p>
                    <p class="ut_num"><span>25</span>例</p>
                </div>
            </div>
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/mit.gif" alt="" style="margin-top: 20px">
                <div>
                    <p class="ut_name">MIT</p>
                    <p class="ut_num"><span>48</span>例</p>
                </div>
            </div>
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/berkeley.gif" alt="">
                <div>
                    <p class="ut_name">Berkeley</p>
                    <p class="ut_num"><span>83</span>例</p>
                </div>
            </div>
        </div>
        <div class="ut_logo">
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/cmu.gif" alt="">
                <div>
                    <p class="ut_name">CMU</p>
                    <p class="ut_num"><span>78</span>例</p>
                </div>
            </div>
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/harvard.gif" alt="">
                <div>
                    <p class="ut_name">Harvard</p>
                    <p class="ut_num"><span>39</span>例</p>
                </div>
            </div>
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/oxford.gif" alt="">
                <div>
                    <p class="ut_name">Oxford</p>
                    <p class="ut_num"><span>8</span>例</p>
                </div>
            </div>
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/cambridge.gif" alt="">
                <div>
                    <p class="ut_name">Cambridge</p>
                    <p class="ut_num"><span>14</span>例</p>
                </div>
            </div>
        </div>
    </div>
    <!--留学服务-->
    <div class="study_service">
        <p class="Record_title">留学服务</p>
        <div class="service_line"></div>
        <div class="first_title"><span>|</span>留学服务</div>
        <div class="service_list">
            <!--留学服务轮播  循环li-->
            <div class="service_bd">
                <ul>
                    <li>
                        <img src="" alt="">
                        <div class="service_bot">
                            <p>美国星程计划</p>
                            <a href="">查看详情</a>
                        </div>
                    </li>
                    <li>
                        <img src="" alt="">
                        <div class="service_bot">
                            <p>美国星程计划</p>
                            <a href="">查看详情</a>
                        </div>
                    </li>
                    <li>
                        <img src="" alt="">
                        <div class="service_bot">
                            <p>美国星程计划</p>
                            <a href="">查看详情</a>
                        </div>
                    </li>
                    <li>
                        <img src="" alt="">
                        <div class="service_bot">
                            <p>美国星程计划</p>
                            <a href="">查看详情</a>
                        </div>
                    </li>
                    <li>
                        <img src="" alt="">
                        <div class="service_bot">
                            <p>美国星程计划</p>
                            <a href="">查看详情</a>
                        </div>
                    </li>
                    <li>
                        <img src="" alt="">
                        <div class="service_bot">
                            <p>美国星途计划</p>
                            <a href="">查看详情</a>
                        </div>
                    </li>
                </ul>
            </div>
            <a class="next"><i class="iconfont next_icon">&#xe602;</i></a>
            <a class="prev"><i class="iconfont prev_icon">&#xe601;</i></a>
        </div>

    </div>
</section>

<?php if ($url == '/gmatsheet.html' || $url == '/mentor.html' || $url == '/toeflsheet.html') { ?>
    <div class="contactWay">
        <div class="contactHead">联系方式</div>
        <div class="contactSlide">
            <div class="conHd hd">
                <a href="javascript:void(0);" class="prev" onclick="slidePrev()"><img src="/cn/images/mentor_prev.png"
                                                                                      alt="图标"></a>
                <a href="javascript:void(0);" class="next" onclick="slideNext()"><img src="/cn/images/mentor_next.png"
                                                                                      alt="图标"></a>
            </div>
            <div class="conBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => "place,phone", 'category' => "210", 'pageSize' => 15, 'order' => 'sort']);
                    foreach ($data as $v) {
                        ?>
                        <li>
                            <div class="smallStyle">
                                <img src="<?php echo $v['image'] ?>" alt="图片">

                                <div class="city"><?php echo $v['name'] ?></div>
                            </div>
                            <div class="bigStyle">
                                <div class="big-left">
                                    <img src="<?php echo $v['image'] ?>" alt="图片">

                                    <div class="big-city"><?php echo $v['name'] ?></div>
                                </div>
                                <div class="big-right">
                                    <span>咨询热线：</span>

                                    <p class="purpleColor"><?php echo $v['phone'] ?></p>
                                    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">
                                        <img src="/cn/images/mentor_personIcon.png" alt="咨询图标">
                                        <span>免费咨询</span>
                                    </a>

                                    <p>地址：<?php echo $v['place'] ?></p>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            //        jQuery(".contactSlide").slide({mainCell:".conBd ul",effect:"left",vis:5,pnLoop:false});
        </script>
    </div>
<?php
} elseif ($url == '/practices.html' || strstr($url, '/practices/')) {
    ?>

    <?php
}
else{
?>
    <script type="text/javascript">
        jQuery(".connection").slide({mainCell: ".connectBd", trigger: "mouseover"});
    </script>
    <?php
}
?>


</body>
<script>
    //首页轮播初始化
    jQuery(".banner_head").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:true});
    //留学服务轮播展示
    jQuery(".service_list").slide({mainCell:".service_bd ul",autoPage:true,effect:"left",autoPlay:true,vis:5});

    var H = $(window).height();
    mh = (H - 322) / 2;
    setTimeout(function(){
        $('.m-tc').fadeOut(300);
    },3000);

    $('.ic-close').click(function(){
        $('.m-tc').fadeOut(300);
    });
    $(".ic-wrap").css({
        "margin-top": mh + "px"
    });
</script>
</html>