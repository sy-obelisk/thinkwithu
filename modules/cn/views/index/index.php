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
<!--留学百科-->
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
        <!--留学七步曲-->
        <div class="first_title"><span>|</span>留学七步曲</div>
        <div class="steps_study">
            <div class="steps_left">
                <p class="steps_num">0 1</p>
                <p class="steps_time">时间规划</p>
                <p class="steps_left_word">三大申请规划方案</p>
                <p class="steps_left_word">明确名校申请计划</p>
            </div>
            <div class="steps_right">
                <div class="steps_right_div steps_right2">
                    <p class="steps_num_right">0 2</p>
                    <p class="steps_time_right">背景提升</p>
                    <p class="steps_right_word">专业背景竞争力提升辅导</p>
                    <p class="steps_right_word">申请策略辅导和执行</p>
                </div>
                <div class="steps_right_div steps_right3">
                    <p class="steps_num_right">0 3</p>
                    <p class="steps_time_right">专家选校</p>
                    <p class="steps_right_word">专家选校建议和指导</p>
                    <p class="steps_right_word">确立目标名校名单</p>
                </div>
                <div class="steps_right_div steps_right4">
                    <p class="steps_num_right">0 4</p>
                    <p class="steps_time_right">文书设计</p>
                    <p class="steps_right_word">制作优秀高质量的文书</p>
                    <p class="steps_right_word">准备申请材料</p>
                </div>
                <div class="steps_right_div step10 steps_right5">
                    <p class="steps_num_right">0 5</p>
                    <p class="steps_time_right">申请手续</p>
                    <p class="steps_right_word">完成客户指定目标学校申请</p>
                    <p class="steps_right_word">学校联系与“套磁”帮助</p>
                </div>
                <div class="steps_right_div step10 steps_right6">
                    <p class="steps_num_right">0 6</p>
                    <p class="steps_time_right">面试指导</p>
                    <p class="steps_right_word">精细的面试分析</p>
                    <p class="steps_right_word">优质的面试辅导</p>
                </div>
                <div class="steps_right_div step10 steps_right7">
                    <p class="steps_num_right">0 7</p>
                    <p class="steps_time_right">出国签证</p>
                    <p class="steps_right_word">出国咨询高端服务</p>
                    <p class="steps_right_word">圆梦留学海外</p>
                </div>
            </div>
        </div>
    </div>
    <!--留学系统-->
    <div class="studySystem">
        <div class="first_title studySystem_title"><span>|</span>CRM 留学系统</div>
        <div class="seven_steps">
            <div class="steps_div">
                <i class="iconfont stepsIcon">&#xe60a;</i>
                <p>可与所有服务团队</p>
                <p>所有成员交流</p>
            </div>
            <div class="steps_div">
                <i class="iconfont stepsIcon">&#xe74b;</i>
                <p>上传个人信息、成绩单、</p>
                <p>推荐个人资料申请材料</p>
            </div>
            <div class="steps_div">
                <i class="iconfont stepsIcon">&#xe619;</i>
                <p>审核咨询项目的</p>
                <p>服务计划书</p>
            </div>
            <div class="steps_div">
                <i class="iconfont stepsIcon">&#xe604;</i>
                <p>参加留学考试</p>
                <p>能力测试</p>
            </div>
            <div class="steps_div">
                <i class="iconfont stepsIcon">&#xe639;</i>
                <p>查阅申友留学</p>
                <p>选校内部参数</p>
            </div>
            <div class="steps_div">
                <i class="iconfont stepsIcon">&#xe67c;</i>
                <p>查阅申请文书</p>
            </div>
            <div class="steps_div">
                <i class="iconfont stepsIcon">&#xe670;</i>
                <p>查阅申请资料</p>
                <p>追踪申请状态</p>
            </div>
        </div>
    </div>
</section>
<!--留学百科-->
<section class="encyclopedia">
    <p class="Record_title">留学百科</p>
    <div class="service_line"></div>
    <div class="encyclopedia_content"><!--第一个选项卡-->
       <div class="encyclopedia_nav encyclopediaHd hd">
           <ul>
               <li>美国</li>
               <li>英国</li>
               <li>加拿大</li>
               <li>澳洲</li>
               <li>新加坡</li>
               <li>香港</li>
               <li>欧洲</li>
               <li>亚洲</li>
               <div><a href="">More>></a></div>
           </ul>
       </div>
       <div class="encyclopediaBd bd">
            <ul><!--对应有几个国家就有几个ul 循环ul-->
                <div class="encyclopedia_left">
                    <img src="" alt="">
                    <div class="encyclopedia_left_words"><p>最热留学院校</p></div>
                </div>
                <div class="encyclopedia_right"><!--循环li-->
                    <ul>
                        <li class="ency_school">
                            <div class="ency_logo">
                                <img src="/cn/Hirsi/images/berkeley.gif" alt="">
                            </div>
                            <p class="ency_name">哈佛大学</p>
                            <p class="ency_name_en">Harvad  University</p>
                            <p class="ency_rank"><i class="iconfont trophy">&#xe60c;</i> 学校排名: <span>02</span></p>
                            <div class="ency_bottom">
                                <span><a href=""><i class="iconfont people">&#xe74e;</i>推荐导师</a></span>
                                <span><a href=""><i class="iconfont fire">&#xe614;</i>热门案列</a></span>
                            </div>
                            <div class="ency_mask"><!--鼠标移入的遮罩层-->
                                <div class="ency_test"><a href="">录取几率测评</a></div>
                                <div class="ency_look"><a href="">查看学校</a></div>
                            </div>
                        </li>
                        <li class="ency_school">
                            <div class="ency_logo">
                                <img src="/cn/Hirsi/images/berkeley.gif" alt="">
                            </div>
                            <p class="ency_name">哈佛大学</p>
                            <p class="ency_name_en">Harvad  University</p>
                            <p class="ency_rank"><i class="iconfont trophy">&#xe60c;</i> 学校排名: <span>02</span></p>
                            <div class="ency_bottom">
                                <span><a href=""><i class="iconfont people">&#xe74e;</i>推荐导师</a></span>
                                <span><a href=""><i class="iconfont fire">&#xe614;</i>热门案列</a></span>
                            </div>
                            <div class="ency_mask"><!--鼠标移入的遮罩层-->
                                <div class="ency_test"><a href="">录取几率测评</a></div>
                                <div class="ency_look"><a href="">查看学校</a></div>
                            </div>
                        </li>
                        <li class="ency_school">
                            <div class="ency_logo">
                                <img src="/cn/Hirsi/images/berkeley.gif" alt="">
                            </div>
                            <p class="ency_name">哈佛大学</p>
                            <p class="ency_name_en">Harvad  University</p>
                            <p class="ency_rank"><i class="iconfont trophy">&#xe60c;</i> 学校排名: <span>02</span></p>
                            <div class="ency_bottom">
                                <span><a href=""><i class="iconfont people">&#xe74e;</i>推荐导师</a></span>
                                <span><a href=""><i class="iconfont fire">&#xe614;</i>热门案列</a></span>
                            </div>
                            <div class="ency_mask"><!--鼠标移入的遮罩层-->
                                <div class="ency_test"><a href="">录取几率测评</a></div>
                                <div class="ency_look"><a href="">查看学校</a></div>
                            </div>
                        </li>
                        <li class="ency_school">
                            <div class="ency_logo">
                                <img src="/cn/Hirsi/images/berkeley.gif" alt="">
                            </div>
                            <p class="ency_name">哈佛大学</p>
                            <p class="ency_name_en">Harvad  University</p>
                            <p class="ency_rank"><i class="iconfont trophy">&#xe60c;</i> 学校排名: <span>02</span></p>
                            <div class="ency_bottom">
                                <span><a href=""><i class="iconfont people">&#xe74e;</i>推荐导师</a></span>
                                <span><a href=""><i class="iconfont fire">&#xe614;</i>热门案列</a></span>
                            </div>
                            <div class="ency_mask"><!--鼠标移入的遮罩层-->
                                <div class="ency_test"><a href="">录取几率测评</a></div>
                                <div class="ency_look"><a href="">查看学校</a></div>
                            </div>
                        </li>
                        <li class="ency_school">
                            <div class="ency_logo">
                                <img src="/cn/Hirsi/images/berkeley.gif" alt="">
                            </div>
                            <p class="ency_name">哈佛大学</p>
                            <p class="ency_name_en">Harvad  University</p>
                            <p class="ency_rank"><i class="iconfont trophy">&#xe60c;</i> 学校排名: <span>02</span></p>
                            <div class="ency_bottom">
                                <span><a href=""><i class="iconfont people">&#xe74e;</i>推荐导师</a></span>
                                <span><a href=""><i class="iconfont fire">&#xe614;</i>热门案列</a></span>
                            </div>
                            <div class="ency_mask"><!--鼠标移入的遮罩层-->
                                <div class="ency_test"><a href="">录取几率测评</a></div>
                                <div class="ency_look"><a href="">查看学校</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </ul>
            <ul> <!--对应有几个国家就有几个ul 循环ul-->

            </ul>
       </div>
    </div>
    <div class="encyclopedia_tab"><!--第二个选项卡-->
        <div class="encyclopedia_left"><!--第二个选项卡左边-->
            <img src="" alt="">
            <div class="encyclopedia_left_tab"><span>2018</span><p>年申请攻略</p></div>
        </div>
        <div class="encyclopedia_center encyclopedia_center_1"><!--第二个选项卡中间-->
            <div class="ency_center_nav">
                <ul>
                    <li>留学活动</li>
                    <li>留学规划</li>
                    <li>留学国家</li>
                    <li>留学手续</li>
                </ul>
            </div>
            <div class="ency_center_content content0"><!--对应有几个选项就有几个slideBox 外层循环slideBox -->
                <div class="ency_center_bd slideBox">
                    <ul><!--每个slideBox 内层循环li -->
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                    </ul>
                </div>
                <div class="ency_center_bd slideBox">
                    <ul>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww 循环ul对应有几个选项就有几个ul 循环ul对应有</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                    </ul>
                </div>
                <div class="ency_center_bd slideBox">
                    <ul>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww 循环ul对应有几个选项就有几个ul 循环ul对应有</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="encyctab_right"><!--第二个选项卡右边-->
            <div class="ency_recommend"><img src="" alt=""></div>
            <div class="encyctab_right_lb">
                <ul>
                    <li class="active"><span>1</span><a href="">留学规划留学规划留学规划</a></li>
                    <li class="active"><span>2</span><a href="">留学规划留学规划留学规划</a></li>
                    <li class="active"><span>3</span><a href="">留学规划留学规划留学规划</a></li>
                    <li class="active"><span>4</span><a href="">留学规划留学规划留学规划</a></li>
                    <li class="active"><span>5</span><a href="">留学规划留学规划留留学规划留学规划留学规划留学规划留学规划留学规划留学规划留学规划留学规划学规划</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--中间轮播-->
<section class="center_carousel">
    <div class="carousel carousel_head" style="overflow: hidden;max-height: 200px">
        <div class="hd_carousel hd">
            <ul>
                <!--            循环li-->
                <li class=""></li>
                <li class=""></li>
                <li class=""></li>
            </ul>
        </div>
        <div class="bd_carousel bd" style="width: 100%;overflow: hidden;">
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
<!--考试服务-->
<section class="eaxm_service">
    <p class="Record_title">考试服务</p>
    <div class="service_line"></div>
    <div class="eaxm_list">
        <!--留学服务轮播  循环li-->
        <div class="eaxm_bd">
            <ul>
                <li>
                    <img src="" alt="">
                    <div class="eaxm_bot">
                        <p>GMAT</p>
                        <a href="">查看详情</a>
                    </div>
                </li>
                <li>
                    <img src="" alt="">
                    <div class="eaxm_bot">
                        <p>GRE</p>
                        <a href="">查看详情</a>
                    </div>
                </li>
                <li>
                    <img src="" alt="">
                    <div class="eaxm_bot">
                        <p>托福</p>
                        <a href="">查看详情</a>
                    </div>
                </li>
                <li>
                    <img src="" alt="">
                    <div class="eaxm_bot">
                        <p>雅思</p>
                        <a href="">查看详情</a>
                    </div>
                </li>
                <li>
                    <img src="" alt="">
                    <div class="eaxm_bot">
                        <p>SAT</p>
                        <a href="">查看详情</a>
                    </div>
                </li>
                <li>
                    <img src="" alt="">
                    <div class="eaxm_bot">
                        <p>留学</p>
                        <a href="">查看详情</a>
                    </div>
                </li>
            </ul>
        </div>
        <a class="next"><i class="iconfont next_icon">&#xe602;</i></a>
        <a class="prev"><i class="iconfont prev_icon">&#xe601;</i></a>
    </div>
    <div class="eaxm_tab"><!--考试服务选项卡-->
        <div class="eaxm_left"><!--考试服务选项卡左边-->
            <img src="" alt="">
            <div class="eaxm_left_tab"><span>2018</span><p>年<span>GMAT</span>考务查询</p></div>
        </div>
        <div class="eaxm_center eaxm_center_1"><!--第二个选项卡中间-->
            <div class="eaxm_center_nav">
                <ul>
                    <li>留学活动</li>
                    <li>留学规划</li>
                    <li>留学国家</li>
                    <li>留学手续</li>
                </ul>
            </div>
            <div class="eaxm_center_content content0"><!--对应有几个选项就有几个slideBox 外层循环slideBox -->
                <div class="eaxm_center_bd slideBox">
                    <ul><!--每个slideBox 内层循环li -->
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">aaaaaaaa</span></a>
                        </li>
                    </ul>
                </div>
                <div class="eaxm_center_bd slideBox">
                    <ul>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww 循环ul对应有几个选项就有几个ul 循环ul对应有</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                    </ul>
                </div>
                <div class="eaxm_center_bd slideBox">
                    <ul>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww 循环ul对应有几个选项就有几个ul 循环ul对应有</span></a>
                        </li>
                        <li>
                            <a href=""><span class="Statement">wwwwwwwwwwwwww</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="eaxm_right"><!--第二个选项卡右边-->
            <div class="eaxm_recommend"><img src="" alt=""></div>
            <div class="eaxm_right_lb">
                <ul>
                    <li class="active"><span>1</span><a href="">留学规划留学规划留学规划</a></li>
                    <li class="active"><span>2</span><a href="">留学规划留学规划留学规划</a></li>
                    <li class="active"><span>3</span><a href="">留学规划留学规划留学规划</a></li>
                    <li class="active"><span>4</span><a href="">留学规划留学规划留学规划</a></li>
                    <li class="active"><span>5</span><a href="">留学规划留学规划留留学规划留学规划留学规划留学规划留学规划留学规划留学规划留学规划留学规划学规划</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--成功案例-->
<section class="success_case">
    <p class="Record_title">成功案列</p>
    <div class="service_line"></div>
    <div class="Curriculum_Broadcast">
        <div class="bdCurriculum">
            <ul class="banner"><!--外层循环li-->
                <li><!--内层层循环div  recommendation-->
                    <div class="recommendation">
                        <div class="recommendation_cover">
                            <div class="reco_img"><img src="" alt=""></div>
                            <div class="reco_iforma">
                                <p>姓名:trump</p>
                                <p>毕业院校:trump</p>
                                <p>硬件条件:trump</p>
                                <p>录取学校:trump</p>
                                <p>录取专业:trump</p>
                            </div>
                            <a href=""><div class="zx_btn">咨询高分秘籍</div></a>
                        </div>
                    </div>
                    <div class="recommendation">
                        <div class="recommendation_cover">
                            <div class="reco_img"><img src="" alt=""></div>
                            <div class="reco_iforma">
                                <p>姓名:trump</p>
                                <p>毕业院校:trump</p>
                                <p>硬件条件:trump</p>
                                <p>录取学校:trump</p>
                                <p>录取专业:trump</p>
                            </div>
                            <a href=""><div class="zx_btn">咨询高分秘籍</div></a>
                        </div>
                    </div>
                    <div class="recommendation">
                        <div class="recommendation_cover">
                            <div class="reco_img"><img src="" alt=""></div>
                            <div class="reco_iforma">
                                <p>姓名:trump</p>
                                <p>毕业院校:trump</p>
                                <p>硬件条件:trump</p>
                                <p>录取学校:trump</p>
                                <p>录取专业:trump</p>
                            </div>
                            <a href=""><div class="zx_btn">咨询高分秘籍</div></a>
                        </div>
                    </div>
                    <div class="recommendation">
                        <div class="recommendation_cover">
                            <div class="reco_img"><img src="" alt=""></div>
                            <div class="reco_iforma">
                                <p>姓名:trump</p>
                                <p>毕业院校:trump</p>
                                <p>硬件条件:trump</p>
                                <p>录取学校:trump</p>
                                <p>录取专业:trump</p>
                            </div>
                            <a href=""><div class="zx_btn">咨询高分秘籍</div></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="recommendation">
                        <div class="recommendation_cover">
                            <div class="reco_img"><img src="" alt=""></div>
                            <div class="reco_iforma">
                                <p>姓名:trump</p>
                                <p>毕业院校:trump</p>
                                <p>硬件条件:trump</p>
                                <p>录取学校:trump</p>
                                <p>录取专业:trump</p>
                            </div>
                            <a href=""><div class="zx_btn">咨询高分秘籍</div></a>
                        </div>
                    </div>
                    <div class="recommendation">
                        <div class="recommendation_cover">
                            <div class="reco_img"><img src="" alt=""></div>
                            <div class="reco_iforma">
                                <p>姓名:trump</p>
                                <p>毕业院校:trump</p>
                                <p>硬件条件:trump</p>
                                <p>录取学校:trump</p>
                                <p>录取专业:trump</p>
                            </div>
                            <a href=""><div class="zx_btn">咨询高分秘籍</div></a>
                        </div>
                    </div>
                    <div class="recommendation">
                        <div class="recommendation_cover">
                            <div class="reco_img"><img src="" alt=""></div>
                            <div class="reco_iforma">
                                <p>姓名:trump</p>
                                <p>毕业院校:trump</p>
                                <p>硬件条件:trump</p>
                                <p>录取学校:trump</p>
                                <p>录取专业:trump</p>
                            </div>
                            <a href=""><div class="zx_btn">咨询高分秘籍</div></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="recommendation">
                        <div class="recommendation_cover">
                            <div class="reco_img"><img src="" alt=""></div>
                            <div class="reco_iforma">
                                <p>姓名:trump</p>
                                <p>毕业院校:trump</p>
                                <p>硬件条件:trump</p>
                                <p>录取学校:trump</p>
                                <p>录取专业:trump</p>
                            </div>
                            <a href=""><div class="zx_btn">咨询高分秘籍</div></a>
                        </div>
                    </div>
                    <div class="recommendation">
                        <div class="recommendation_cover">
                            <div class="reco_img"><img src="" alt=""></div>
                            <div class="reco_iforma">
                                <p>姓名:trump</p>
                                <p>毕业院校:trump</p>
                                <p>硬件条件:trump</p>
                                <p>录取学校:trump</p>
                                <p>录取专业:trump</p>
                            </div>
                            <a href=""><div class="zx_btn">咨询高分秘籍</div></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="recommendation">
                        <div class="recommendation_cover">
                            <div class="reco_img"><img src="" alt=""></div>
                            <div class="reco_iforma">
                                <p>姓名:trump</p>
                                <p>毕业院校:trump</p>
                                <p>硬件条件:trump</p>
                                <p>录取学校:trump</p>
                                <p>录取专业:trump</p>
                            </div>
                            <a href=""><div class="zx_btn">咨询高分秘籍</div></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="recommendation">
                        <div class="recommendation_cover">
                            <div class="reco_img"><img src="" alt=""></div>
                            <div class="reco_iforma">
                                <p>姓名:trump</p>
                                <p>毕业院校:trump</p>
                                <p>硬件条件:trump</p>
                                <p>录取学校:trump</p>
                                <p>录取专业:trump</p>
                            </div>
                            <a href=""><div class="zx_btn">咨询高分秘籍</div></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="hd hdCurriculum">
            <ul>
                <li><p>GMAT</p></li>
                <li><p>GRE</p></li>
                <li><p>托福</p></li>
                <li><p>雅思</p></li>
                <li><p>留学</p></li>
            </ul>
        </div>
        <div style="clear: both"></div>
    </div>
</section>
<!--研发成果-->
<section class="rdResults">
    <p class="Record_title">研发成果</p>
    <div class="service_line"></div>
    <div class="Results_list">
        <!--留学服务轮播  循环li-->
        <div class="Results_bd">
            <ul>
                <li>
                    <img src="" alt="">
                </li>
                <li>
                    <img src="" alt="">
                </li>
                <li>
                    <img src="" alt="">
                </li>
                <li>
                    <img src="" alt="">
                </li>
                <li>
                    <img src="" alt="">
                </li>
                <li>
                    <img src="" alt="">
                </li>
                <li>
                    <img src="" alt="">
                </li>
            </ul>
        </div>
        <a class="next"><i class="iconfont next_icon">&#xe602;</i></a>
        <a class="prev"><i class="iconfont prev_icon">&#xe601;</i></a>
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
    //留学百科选项卡1切换
    jQuery(".encyclopedia_content").slide({});
    //留学鼠标移入效果
    $('.ency_school').hover(function () {
        $(this).find('.ency_mask').show();
    },function () {
        $(this).find('.ency_mask').hide();
    });
    //留学百科选项卡2上下轮播
    jQuery(".encyclopedia_center .slideBox").slide({ mainCell:"ul",vis:9,prevCell:".sPrev",nextCell:".sNext",effect:"topMarquee",interTime:50,autoPlay:true,trigger:"click"});
    //留学百科选项卡2切换
    jQuery(".encyclopedia_center").slide({titCell:".ency_center_nav li",mainCell:".ency_center_content"});
    //留学百科选项卡2右边轮播
    jQuery(".encyctab_right").slide({mainCell:".encyctab_right_lb ul",autoPlay:true,effect:"topMarquee",vis:5,interTime:50,trigger:"click"});
    //中间轮播广告
    jQuery(".carousel_head").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:true});
    //考试服务轮播展示
    jQuery(".eaxm_list").slide({mainCell:".eaxm_bd ul",autoPage:true,effect:"left",autoPlay:true,vis:5});
    //考试服务选项卡2上下轮播
    jQuery(".eaxm_center .slideBox").slide({ mainCell:"ul",vis:9,prevCell:".sPrev",nextCell:".sNext",effect:"topMarquee",interTime:50,autoPlay:true,trigger:"click"});
    //考试服务选项卡2切换
    jQuery(".eaxm_center").slide({titCell:".eaxm_center_nav li",mainCell:".eaxm_center_content"});
    //考试服务选项卡2右边轮播
    jQuery(".eaxm_right").slide({mainCell:".eaxm_right_lb ul",autoPlay:true,effect:"topMarquee",vis:5,interTime:50,trigger:"click"});
    //成功案列
    jQuery(".Curriculum_Broadcast").slide({
        mainCell: ".bdCurriculum ul",
        effect: "leftLoop",
        trigger: "click",
        delayTime: 1000,
        interTime: 3000,
        mouseOverStop: true
    });
    //研发成果
    jQuery(".Results_list").slide({mainCell:".Results_bd ul",autoPage:true,effect:"left",autoPlay:true,vis:6});













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