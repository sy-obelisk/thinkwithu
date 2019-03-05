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
        $seo['title'] = '申友官网-留学咨询—名校留学专业申请机构-托福/雅思/GMAT/GRE培训机构-申友网';
        $seo['keywords'] = '出国留学 名校留学 留学咨询 留学条件 留学机构哪家好 美国留学 美国留学咨询机构 美国留学服务 GMAT培训 雅思培训 托福培训 GRE培训';
        $seo['description'] = '申友留学，专注商科与STEM留学咨询，提供留学申请一站式服务，是GMAT与托福 雅思培训的行业领跑者。申友专注美国、英国、加拿大、澳洲、香港等名校留学，留学咨询，出国留学，托福 雅思与GMAT培训，尽在申友。';
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
    <link rel="stylesheet" href="/cn/Hirsi/css/index.css?v=1.3">
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
                <?php foreach($banner as $v){?>
                <li class=""></li>
                <?php }?>
            </ul>
        </div>
        <div class="bd_banner bd" style="width: 100%;overflow: hidden;">
            <ul>
                <!--            循环li-->
                <?php foreach($banner as $v){?>
                <li>
                    <a href="<?php echo $v['url']?>" target="_blank">
                        <img src="http://www.thinkwithu.com/<?php echo $v['image']?>" alt="留学活动">
                    </a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>

</section>
<!--部分战绩以及留学服务-->
<section class="index_Record">
    <img class="Record_map" src="/cn/Hirsi/images/map.png" alt="">
    <!--部分战绩-->
    <div class="Record_content">
        <p class="Record_title">部分战绩</p>
        <p class="Record_title_l">连续五年 , 案例辉煌</p>
        <div class="ut_logo">
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/stanford.gif" alt="">
                <div>
                    <p class="ut_name">Stanford</p>
                    <p class="ut_num"><span>35</span>例</p>
                </div>
            </div>
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/princeton.gif" alt="">
                <div>
                    <p class="ut_name">Princeton</p>
                    <p class="ut_num"><span>12</span>例</p>
                </div>
            </div>
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/mit.gif" alt="" style="margin-top: 20px">
                <div>
                    <p class="ut_name">MIT</p>
                    <p class="ut_num"><span>23</span>例</p>
                </div>
            </div>
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/berkeley.gif" alt="">
                <div>
                    <p class="ut_name">Berkeley</p>
                    <p class="ut_num"><span>30</span>例</p>
                </div>
            </div>
        </div>
        <div class="ut_logo">
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/cmu.gif" alt="">
                <div>
                    <p class="ut_name">CMU</p>
                    <p class="ut_num"><span>28</span>例</p>
                </div>
            </div>
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/harvard.gif" alt="">
                <div>
                    <p class="ut_name">Harvard</p>
                    <p class="ut_num"><span>18</span>例</p>
                </div>
            </div>
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/oxford.gif" alt="">
                <div>
                    <p class="ut_name">Oxford</p>
                    <p class="ut_num"><span>14</span>例</p>
                </div>
            </div>
            <div class="logo_content">
                <img class="uyLogo" src="/cn/Hirsi/images/cambridge.gif" alt="">
                <div>
                    <p class="ut_name">Cambridge</p>
                    <p class="ut_num"><span>21</span>例</p>
                </div>
            </div>
        </div>
    </div>
    <!--留学服务-->
    <div class="study_service">
        <p class="Record_title">留学服务</p>
        <div class="service_line"></div>
        <div class="first_title"><span>|</span>名校留学产品</div>
        <div class="service_list">
            <!--留学服务轮播  循环li-->
            <div class="service_bd">
                <ul>
                    <?php foreach($abroadPro as $v){?>
                    <li>
                        <img src="<?php echo $v['image']?>" alt="">
                        <div class="service_bot">
                            <p><?php echo $v['name']?></p>
                            <a href="/word-details/<?php echo $v['id']?>/index,261.html">查看详情</a>
                        </div>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <a class="next"><i class="iconfont next_icon">&#xe602;</i></a>
            <a class="prev"><i class="iconfont prev_icon">&#xe601;</i></a>
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
                    <img src="/cn/Hirsi/images/test-1.png" alt="">
                    <div class="eaxm_bot">
                        <p>申友GMAT</p>
                        <p>提分课程</p>
                        <a href="/gmatsheet.html">查看详情</a>
                    </div>
                </li>
                <li>
                    <img src="/cn/Hirsi/images/test-2.png" alt="">
                    <div class="eaxm_bot">
                        <p>申友GRE</p>
                        <p>提分课程</p>
                        <a href="/gre.html">查看详情</a>
                    </div>
                </li>
                <li>
                    <img src="/cn/Hirsi/images/test-3.png" alt="">
                    <div class="eaxm_bot">
                        <p>申友托福</p>
                        <p>提分课程</p>
                        <a href="/toefl/assistance.html">查看详情</a>
                    </div>
                </li>
                <li>
                    <img src="/cn/Hirsi/images/test-4.png" alt="">
                    <div class="eaxm_bot">
                        <p>申友雅思</p>
                        <p>提分课程</p>
                        <a href="/ieltssheet.html">查看详情</a>
                    </div>
                </li>
                <li>
                    <img src="/cn/Hirsi/images/test-5.png" alt="">
                    <div class="eaxm_bot">
                        <p>申友SAT</p>
                        <p>提分课程</p>
                        <a href="/satsheet.html">查看详情</a>
                    </div>
                </li>
            </ul>
        </div>
        <!--        <a class="next"><i class="iconfont next_icon">&#xe602;</i></a>-->
        <!--        <a class="prev"><i class="iconfont prev_icon">&#xe601;</i></a>-->
    </div>
</section>
<!--成功案例-->
<section class="success_case">
    <p class="Record_title">成功案例</p>
    <div class="service_line"></div>
    <div class="Curriculum_Broadcast">
        <div class="hd hdCurriculum">
            <ul>
                <li><p>留学</p></li>
                <li><p>GMAT</p></li>
                <li><p>雅思</p></li>
                <li><p>托福</p></li>
                <!--                <li><p>GRE</p></li>-->
            </ul>
        </div>
        <div class="bdCurriculum bd">
            <ul class="banner"><!--外层循环li-->
                <li><!--内层层循环div  recommendation-->
                    <?php foreach($case['abroad'] as $v){?>
                        <div class="recommendation">
                            <div class="recommendation_cover">
                                <div class="reco_img"><img src="<?php echo $v['image']?>" alt="申友留学案例"></div>
                                <div class="reco_iforma">
                                    <p>姓名:<?php echo $v['name']?></p>
                                    <p>毕业院校:<?php echo $v['oldSchool']?></p>
                                    <p>硬件条件:<?php echo $v['score']?></p>
                                    <p>录取学校:<?php echo $v['abroadSchool']?></p>
                                    <p>录取专业:<?php echo $v['major']?></p>
                                </div>
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank"><div class="zx_btn">咨询名校秘籍</div></a>
                            </div>
                        </div>
                    <?php }?>
                </li>
                <li>
                    <?php foreach($case['gmat'] as $v){?>
                        <div class="recommendation">
                            <div class="recommendation_cover">
                                <div class="reco_img"><img src="<?php echo $v['image']?>" alt="申友高分案例"></div>
                                <div class="reco_iforma">
                                    <p>姓名:<?php echo $v['name']?></p>
                                    <p>分数:<?php echo $v['score']?></p>
                                    <p>出分时间:<?php echo $v['time']?></p>
                                    <p><?php echo $v['title']?></p>
                                </div>
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank"><div class="zx_btn">咨询高分秘籍</div></a>
                            </div>
                        </div>
                    <?php }?>
                </li>
                <li>
                    <?php foreach($case['ielts'] as $v){?>
                        <div class="recommendation">
                            <div class="recommendation_cover">
                                <div class="reco_img"><img src="<?php echo $v['image']?>" alt="申友高分案例"></div>
                                <div class="reco_iforma">
                                    <p>姓名:<?php echo $v['name']?></p>
                                    <p>分数:<?php echo $v['score']?></p>
                                    <p>出分时间:<?php echo $v['time']?></p>
                                    <p><?php echo $v['title']?></p>
                                </div>
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank"><div class="zx_btn">咨询高分秘籍</div></a>
                            </div>
                        </div>
                    <?php }?>
                </li>
                <li>
                    <?php foreach($case['toefl'] as $v){?>
                        <div class="recommendation">
                            <div class="recommendation_cover">
                                <div class="reco_img"><img src="<?php echo $v['image']?>" alt="申友高分案例"></div>
                                <div class="reco_iforma">
                                    <p>姓名:<?php echo $v['name']?></p>
                                    <p>分数:<?php echo $v['score']?></p>
                                    <p>出分时间:<?php echo $v['time']?></p>
                                    <p><?php echo $v['title']?></p>
                                </div>
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank"><div class="zx_btn">咨询高分秘籍</div></a>
                            </div>
                        </div>
                    <?php }?>
                </li>
                <li>
                    <?php foreach($case['gre'] as $v){?>
                        <div class="recommendation">
                            <div class="recommendation_cover">
                                <div class="reco_img"><img src="<?php echo $v['image']?>" alt="申友高分案例"></div>
                                <div class="reco_iforma">
                                    <p>姓名:<?php echo $v['name']?></p>
                                    <p>分数:<?php echo $v['score']?></p>
                                    <p>出分时间:<?php echo $v['time']?></p>
                                    <p><?php echo $v['title']?></p>
                                </div>
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank"><div class="zx_btn">咨询高分秘籍</div></a>
                            </div>
                        </div>
                    <?php }?>
                </li>

            </ul>
        </div>
        <div style="clear: both"></div>
    </div>
</section>
<!--留学七步曲-->
<section class="steps_seven">
    <div class="first_title"><span>|</span>留学七步曲解决方案</div>
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
</section>
<!--留学系统-->
<section>
    <div class="studySystem">
        <div class="first_title studySystem_title"><span>|</span>CRM 在线留学系统</div>
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
               <div><a target="_blank" href="/encyclopedia/master.html">More>></a></div>
           </ul>
       </div>
       <div style="width: 100%;overflow: hidden">
           <div class="encyclopedia_left" style="margin-top: 40px;margin-bottom: 10px">
               <img src="/cn/Hirsi/images/hot-school.png" alt="">
               <!--                    <div class="encyclopedia_left_words"><p>最热留学院校</p></div>-->
           </div>
           <div class="encyclopediaBd bd">
               <ul><!--对应有几个国家就有几个ul 循环ul-->
                   <div class="encyclopedia_right"><!--循环li-->
                       <ul>
                           <?php  $school = new app\libs\Schools();
                           $us= json_decode($school->CurlRequest('school', ['keyword' => '', 'schoolid' => '', 'type' => '', 'catid' => "155", 'pageNumber' => 1, 'pageSize' => 8, 'hot' => '']), TRUE);
                           if(isset($us['data'])){
                           foreach($us['data'] as $k=>$v) {
                               if (is_numeric($k)) {
                                   ?>
                                   <li class="ency_school">
                                       <div class="ency_logo">
                                           <img src="http://schools.viplgw.cn<?php echo $v['image'] ?>" alt="">
                                       </div>
                                       <p class="ency_name"><?php echo $v['name'] ?></p>

                                       <p class="ency_name_en"><?php echo $v['title'] ?></p>

                                       <p class="ency_rank"><i class="iconfont trophy">&#xe6ae;</i> 学校排名:
                                           <span><?php echo $v['s_rank'] ?></span></p>

                                       <div class="ency_bottom">
                                           <span><a
                                                   href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="><i
                                                       class="iconfont people">&#xe74e;</i>推荐导师</a></span>
                                           <span><a href="/case.html"><i class="iconfont fire">
                                                       &#xe614;</i>热门案例</a></span>
                                       </div>
                                       <div class="ency_mask"><!--鼠标移入的遮罩层-->
                                           <div class="ency_test"><a href="/percentages-test.html">录取几率测评</a></div>
                                           <div class="ency_look"><a
                                                   href=" /schools/<?php echo $v['id'] ?>.html">查看学校</a></div>
                                       </div>
                                   </li>
                               <?php }
                           }}?>
                       </ul>
                   </div>
               </ul>
               <ul>
                   <div class="encyclopedia_right"><!--循环li-->
                       <ul> <!--对应有几个国家就有几个ul 循环ul-->
                           <?php $uk= json_decode($school->CurlRequest('school', ['keyword' => '', 'schoolid' => '', 'type' => '', 'catid' => "156", 'pageNumber' => 1, 'pageSize' => 8, 'hot' => '']), TRUE);
                           if(isset($us['data'])){
                           foreach($uk['data'] as $k=>$v) {
                               if (is_numeric($k)) {
                                   ?>
                                   <li class="ency_school">
                                       <div class="ency_logo">
                                           <img src="http://schools.viplgw.cn<?php echo $v['image'] ?>" alt="">
                                       </div>
                                       <p class="ency_name"><?php echo $v['name'] ?></p>

                                       <p class="ency_name_en"><?php echo $v['title'] ?></p>

                                       <p class="ency_rank"><i class="iconfont trophy">&#xe60c;</i> 学校排名:
                                           <span><?php echo $v['s_rank'] ?></span></p>

                                       <div class="ency_bottom">
                                           <span><a
                                                   href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="><i
                                                       class="iconfont people">&#xe74e;</i>推荐导师</a></span>
                                           <span><a href="/case.html"><i class="iconfont fire">&#xe614;</i>热门案例</a></span>
                                       </div>
                                       <div class="ency_mask"><!--鼠标移入的遮罩层-->
                                           <div class="ency_test"><a href="/percentages-test.html">录取几率测评</a></div>
                                           <div class="ency_look"><a
                                                   href=" /schools/<?php echo $v['id'] ?>.html">查看学校</a></div>
                                       </div>
                                   </li>
                               <?php }
                           }}?>
                       </ul>
                   </div>
               </ul>
               <ul>
                   <div class="encyclopedia_right"><!--循环li-->
                       <ul> <!--对应有几个国家就有几个ul 循环ul-->
                           <?php $canada= json_decode($school->CurlRequest('school', ['keyword' => '', 'schoolid' => '', 'type' => '', 'catid' => "157", 'pageNumber' => 1, 'pageSize' => 8, 'hot' => '']), TRUE);
                           if(isset($us['data'])){
                           foreach($canada['data'] as $k=>$v) {
                               if (is_numeric($k)) {
                                   ?>
                                   <li class="ency_school">
                                       <div class="ency_logo">
                                           <img src="http://schools.viplgw.cn<?php echo $v['image'] ?>" alt="">
                                       </div>
                                       <p class="ency_name"><?php echo $v['name'] ?></p>

                                       <p class="ency_name_en"><?php echo $v['title'] ?></p>

                                       <p class="ency_rank"><i class="iconfont trophy">&#xe60c;</i> 学校排名:
                                           <span><?php echo $v['s_rank'] ?></span></p>

                                       <div class="ency_bottom">
                                           <span><a
                                                   href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="><i
                                                       class="iconfont people">&#xe74e;</i>推荐导师</a></span>
                                           <span><a href="/case.html"><i class="iconfont fire">
                                                       &#xe614;</i>热门案例</a></span>
                                       </div>
                                       <div class="ency_mask"><!--鼠标移入的遮罩层-->
                                           <div class="ency_test"><a href="/percentages-test.html">录取几率测评</a></div>
                                           <div class="ency_look"><a
                                                   href="/schools/<?php echo $v['id'] ?>.html">查看学校</a></div>
                                       </div>
                                   </li>
                               <?php }
                           }}?>
                       </ul>
                   </div>
               </ul>
               <ul>
                   <div class="encyclopedia_right"><!--循环li-->
                       <ul> <!--对应有几个国家就有几个ul 循环ul-->
                           <?php $australia= json_decode($school->CurlRequest('school', ['keyword' => '', 'schoolid' => '', 'type' => '', 'catid' => "158", 'pageNumber' => 1, 'pageSize' => 8, 'hot' => '']), TRUE);
                           if(isset($us['data'])){
                           foreach($australia['data'] as $k=>$v) {
                               if (is_numeric($k)) {
                                   ?>
                                   <li class="ency_school">
                                       <div class="ency_logo">
                                           <img src="http://schools.viplgw.cn<?php echo $v['image'] ?>" alt="">
                                       </div>
                                       <p class="ency_name"><?php echo $v['name'] ?></p>

                                       <p class="ency_name_en"><?php echo $v['title'] ?></p>

                                       <p class="ency_rank"><i class="iconfont trophy">&#xe60c;</i> 学校排名:
                                           <span><?php echo $v['s_rank'] ?></span></p>

                                       <div class="ency_bottom">
                                           <span><a
                                                   href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="><i
                                                       class="iconfont people">&#xe74e;</i>推荐导师</a></span>
                                           <span><a href="/case.html"><i class="iconfont fire">
                                                       &#xe614;</i>热门案例</a></span>
                                       </div>
                                       <div class="ency_mask"><!--鼠标移入的遮罩层-->
                                           <div class="ency_test"><a href="/percentages-test.html">录取几率测评</a></div>
                                           <div class="ency_look"><a
                                                   href="/schools/<?php echo $v['id'] ?>.html">查看学校</a></div>
                                       </div>
                                   </li>
                               <?php }
                           }}?>
                       </ul>
                   </div>
               </ul>
               <ul>

                   <div class="encyclopedia_right"><!--循环li-->
                       <ul> <!--对应有几个国家就有几个ul 循环ul-->
                           <?php $singapore= json_decode($school->CurlRequest('school', ['keyword' => '', 'schoolid' => '', 'type' => '', 'catid' => "159", 'pageNumber' => 1, 'pageSize' => 8, 'hot' => '']), TRUE);
                           if(isset($us['data'])){
                           foreach($singapore['data'] as $k=>$v) {
                               if (is_numeric($k)) {
                                   ?>
                                   <li class="ency_school">
                                       <div class="ency_logo">
                                           <img src="http://schools.viplgw.cn<?php echo $v['image'] ?>" alt="">
                                       </div>
                                       <p class="ency_name"><?php echo $v['name'] ?></p>

                                       <p class="ency_name_en"><?php echo $v['title'] ?></p>

                                       <p class="ency_rank"><i class="iconfont trophy">&#xe60c;</i> 学校排名:
                                           <span><?php echo $v['s_rank'] ?></span></p>

                                       <div class="ency_bottom">
                                           <span><a
                                                   href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="><i
                                                       class="iconfont people">&#xe74e;</i>推荐导师</a></span>
                                           <span><a href="/case.html"><i class="iconfont fire">
                                                       &#xe614;</i>热门案例</a></span>
                                       </div>
                                       <div class="ency_mask"><!--鼠标移入的遮罩层-->
                                           <div class="ency_test"><a href="/percentages-test.html">录取几率测评</a></div>
                                           <div class="ency_look"><a
                                                   href=" /schools/<?php echo $v['id'] ?>.html">查看学校</a></div>
                                       </div>
                                   </li>
                               <?php }
                           }}?>
                       </ul>
                   </div>

               </ul>
               <ul>

                   <div class="encyclopedia_right"><!--循环li-->
                       <ul> <!--对应有几个国家就有几个ul 循环ul-->
                           <?php $hk= json_decode($school->CurlRequest('school', ['keyword' => '', 'schoolid' => '', 'type' => '', 'catid' => "160", 'pageNumber' => 1, 'pageSize' => 8, 'hot' => '']), TRUE);
                           if(isset($us['data'])){
                           foreach($hk['data'] as $k=>$v) {
                               if (is_numeric($k)) {
                                   ?>
                                   <li class="ency_school">
                                       <div class="ency_logo">
                                           <img src="http://schools.viplgw.cn<?php echo $v['image'] ?>" alt="">
                                       </div>
                                       <p class="ency_name"><?php echo $v['name'] ?></p>

                                       <p class="ency_name_en"><?php echo $v['title'] ?></p>

                                       <p class="ency_rank"><i class="iconfont trophy">&#xe60c;</i> 学校排名:
                                           <span><?php echo $v['s_rank'] ?></span></p>

                                       <div class="ency_bottom">
                                           <span><a
                                                   href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="><i
                                                       class="iconfont people">&#xe74e;</i>推荐导师</a></span>
                                           <span><a href="/case.html"><i class="iconfont fire">
                                                       &#xe614;</i>热门案例</a></span>
                                       </div>
                                       <div class="ency_mask"><!--鼠标移入的遮罩层-->
                                           <div class="ency_test"><a href="/percentages-test.html">录取几率测评</a></div>
                                           <div class="ency_look"><a
                                                   href="/schools/<?php echo $v['id'] ?>.html">查看学校</a></div>
                                       </div>
                                   </li>
                               <?php }
                           }}?>
                       </ul>
                   </div>

               </ul>
               <ul>

                   <div class="encyclopedia_right"><!--循环li-->
                       <ul> <!--对应有几个国家就有几个ul 循环ul-->
                           <?php $europe= json_decode($school->CurlRequest('school', ['keyword' => '', 'schoolid' => '', 'type' => '', 'catid' => "520", 'pageNumber' => 1, 'pageSize' => 8, 'hot' => '']), TRUE);
                           if(isset($us['data'])){
                           foreach($europe['data'] as $k=>$v) {
                               if (is_numeric($k)) {
                                   ?>
                                   <li class="ency_school">
                                       <div class="ency_logo">
                                           <img src="http://schools.viplgw.cn<?php echo $v['image'] ?>" alt="">
                                       </div>
                                       <p class="ency_name"><?php echo $v['name'] ?></p>

                                       <p class="ency_name_en"><?php echo $v['title'] ?></p>

                                       <p class="ency_rank"><i class="iconfont trophy">&#xe60c;</i> 学校排名:
                                           <span><?php echo $v['s_rank'] ?></span></p>

                                       <div class="ency_bottom">
                                           <span><a
                                                   href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="><i
                                                       class="iconfont people">&#xe74e;</i>推荐导师</a></span>
                                           <span><a href="/case.html"><i class="iconfont fire">
                                                       &#xe614;</i>热门案例</a></span>
                                       </div>
                                       <div class="ency_mask"><!--鼠标移入的遮罩层-->
                                           <div class="ency_test"><a href="/percentages-test.html">录取几率测评</a></div>
                                           <div class="ency_look"><a
                                                   href=" /schools/<?php echo $v['id'] ?>.html">查看学校</a></div>
                                       </div>
                                   </li>
                               <?php }
                           }}?>
                       </ul>
                   </div>

               </ul>
               <ul>

                   <div class="encyclopedia_right"><!--循环li-->
                       <ul> <!--对应有几个国家就有几个ul 循环ul-->
                           <?php $asia= json_decode($school->CurlRequest('school', ['keyword' => '', 'schoolid' => '', 'type' => '', 'catid' => "521", 'pageNumber' => 1, 'pageSize' => 8, 'hot' => '']), TRUE);
                           if(isset($us['data'])){
                           foreach($asia['data'] as $k=>$v) {
                               if (is_numeric($k)) {
                                   ?>
                                   <li class="ency_school">
                                       <div class="ency_logo">
                                           <img src="http://schools.viplgw.cn<?php echo $v['image'] ?>" alt="">
                                       </div>
                                       <p class="ency_name"><?php echo $v['name'] ?></p>

                                       <p class="ency_name_en"><?php echo $v['title'] ?></p>

                                       <p class="ency_rank"><i class="iconfont trophy">&#xe60c;</i> 学校排名:
                                           <span><?php echo $v['s_rank'] ?></span></p>

                                       <div class="ency_bottom">
                                           <span><a
                                                   href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="><i
                                                       class="iconfont people">&#xe74e;</i>推荐导师</a></span>
                                           <span><a href="/case.html"><i class="iconfont fire">
                                                       &#xe614;</i>热门案例</a></span>
                                       </div>
                                       <div class="ency_mask"><!--鼠标移入的遮罩层-->
                                           <div class="ency_test"><a href="/percentages-test.html">录取几率测评</a></div>
                                           <div class="ency_look"><a
                                                   href="/schools/<?php echo $v['id'] ?>.html">查看学校</a></div>
                                       </div>
                                   </li>
                               <?php }
                           }}?>
                       </ul>
                   </div>

               </ul>
           </div>
       </div>
    </div>
    <div class="encyclopedia_tab"><!--第二个选项卡-->
        <div class="encyclopedia_left"><!--第二个选项卡左边-->
            <img src="/cn/Hirsi/images/replynew.png" alt="">
<!--            <div class="encyclopedia_left_tab"><span>2018</span><p>年申请攻略</p></div>-->
        </div>
        <div class="encyclopedia_center encyclopedia_center_1"><!--第二个选项卡中间-->
            <div class="ency_center_nav">
                <ul>
                    <li>留学动态</li>
                    <li>留学规划</li>
                    <li>留学提升</li>
                    <li>留学手续</li>
                </ul>
            </div>
            <div class="ency_center_content content0"><!--对应有几个选项就有几个slideBox 外层循环slideBox -->
                <div class="ency_center_bd slideBox">
                    <ul><!--每个slideBox 内层循环li -->
                        <?php foreach($abroad['active'] as $v){?>
                        <li>
                            <a href="/word-details/<?php echo $v['id']?>/index,178.html"><span class="Statement"><?php echo $v['name']?></span></a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                <div class="ency_center_bd slideBox">
                    <ul>
                        <?php foreach($abroad['plan'] as $v){?>
                            <li>
                                <a href="/word-details/<?php echo $v['id']?>/index,178.html"><span class="Statement"><?php echo $v['name']?></span></a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
                <div class="ency_center_bd slideBox">
                    <ul>
                        <?php foreach($abroad['state'] as $v){?>
                            <li>
                                <a href="/word-details/<?php echo $v['id']?>/index,178.html"><span class="Statement"><?php echo $v['name']?></span></a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
                <div class="ency_center_bd slideBox">
                    <ul>
                        <?php foreach($abroad['apply'] as $v){?>
                            <li>
                                <a href="/word-details/<?php echo $v['id']?>/index,178.html"><span class="Statement"><?php echo $v['name']?></span></a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="encyctab_right"><!--第二个选项卡右边-->
            <a href="/word-details/<?php echo $abroad['recommend'][0]['id']?>/index,261.html">
                <div class="ency_recommend">
                    <img class="recommend_img" src="/cn/Hirsi/images/recommend.png" alt="">
                    <img style="width: 100%" src="http://www.thinkwithu.com/<?php echo $abroad['recommend'][0]['image']?>" alt="">
                    <div class="ency_bot_words"><p><?php echo $abroad['recommend'][0]['name']?></p></div>
                </div>
            </a>
            <div class="encyctab_right_lb">
                <ul>
                    <?php foreach($abroad['recommend'] as $k=>$v){
                        if($k>0){?>
                        <li class="active">
                            <span><?php echo $k?></span><a href="/word-details/<?php echo $v['id']?>/index,178.html"><?php echo $v['name']?></a>
                        </li>
                    <?php }}?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--考试服务选项卡-->
<section class="eaxm_tab_wap">
    <div class="eaxm_tab">
        <div class="eaxm_left"><!--考试服务选项卡左边-->
            <img src="/cn/Hirsi/images/replynew1.png" alt="">
            <!--            <div class="eaxm_left_tab"><span>2018</span><p>年<span>GMAT</span>考务查询</p></div>-->
        </div>
        <div class="eaxm_center eaxm_center_1"><!--第二个选项卡中间-->
            <div class="eaxm_center_nav">
                <ul>
                    <li>GMAT</li>
                    <li>GRE</li>
                    <li>托福</li>
                    <li>雅思</li>
                    <li>SAT</li>
                </ul>
            </div>
            <div class="eaxm_center_content content0"><!--对应有几个选项就有几个slideBox 外层循环slideBox -->
                <div class="eaxm_center_bd slideBox">
                    <ul>
                        <?php foreach($news['gmat'] as $v){?>
                            <li>
                                <a href="/word-details/<?php echo $v['id']?>/index,261.html"><span class="Statement"><?php echo $v['name']?></span></a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
                <div class="eaxm_center_bd slideBox">
                    <ul>
                        <?php foreach($news['gre'] as $v){?>
                            <li>
                                <a href="/word-details/<?php echo $v['id']?>/index,261.html"><span class="Statement"><?php echo $v['name']?></span></a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
                <div class="eaxm_center_bd slideBox">
                    <ul>
                        <?php foreach($news['toefl'] as $v){?>
                            <li>
                                <a href="/word-details/<?php echo $v['id']?>/index,261.html"><span class="Statement"><?php echo $v['name']?></span></a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
                <div class="eaxm_center_bd slideBox">
                    <ul>
                        <?php foreach($news['ielts'] as $v){?>
                            <li>
                                <a href="/word-details/<?php echo $v['id']?>/index,261.html"><span class="Statement"><?php echo $v['name']?></span></a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
                <div class="eaxm_center_bd slideBox">
                    <ul>
                        <?php foreach($news['sat'] as $v){?>
                            <li>
                                <a href="/word-details/<?php echo $v['id']?>/index,261.html"><span class="Statement"><?php echo $v['name']?></span></a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="eaxm_right"><!--第二个选项卡右边-->
            <a href="/word-details/<?php echo $news['recommend'][0]['id']?>/index,261.html">
                <div class="eaxm_recommend">
                    <img style="width: 100%" src="http://www.thinkwithu.com/<?php echo $news['recommend'][0]['image']?>" alt="">
                    <div class="ency_bot_words"><p><?php echo $news['recommend'][0]['name']?></p></div>
                </div>
            </a>
            <div class="eaxm_right_lb">
                <ul>
                    <?php foreach($news['recommend'] as $k=>$v){
                        if($k>0){?>
                            <li class="active">
                                <span><?php echo $k?></span><a href="/word-details/<?php echo $v['id']?>/index,261.html" ><?php echo $v['name']?></a>
                            </li>
                        <?php }}?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--中间轮播-->
<!--<section class="center_carousel">-->
<!--    <div class="carousel carousel_head" style="overflow: hidden;max-height: 200px">-->
<!--        <div class="hd_carousel hd">-->
<!--            <ul>-->
<!--                <li class=""></li>-->
<!--                <li class=""></li>-->
<!--                <li class=""></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <div class="bd_carousel bd" style="width: 100%;overflow: hidden;">-->
<!--            <ul>-->
<!--                <li>-->
<!--                    <a href="" target="_blank"><img src="/cn/Hirsi/images/index-gmat.jpg" alt="">-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="" target="_blank"><img src="/cn/Hirsi/images/index-toefl.jpg" alt="">-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="" target="_blank"><img src="/cn/Hirsi/images/index-itels.jpg" alt="">-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--名师团队-->
<section class="teacherTeam">
    <p class="Record_title">名师团队</p>
    <div class="service_line"></div>
    <div class="teamCover teamCover_1">

        <div style="width: 970px;float: left">
            <ul class="tinter_wrap"><!--循环li-->
                <?php foreach($teacher as $v){?>
                    <li class="Bdcotent">
                        <div class="cotent_img"><!--老师图片-->
                            <img src="http://www.thinkwithu.com<?php echo $v['image']?>" alt="">
                        </div>
                        <div class="cotent_imgCover"></div>
                        <div class="teacher_name"><!--老师名字-->
                            <p><?php echo $v['name']?> 老师</p>
                        </div>
                        <div class="cotent_intro"><!--老师介绍内容-->
                            <i class="iconfont Trophyicon">&#xe603;</i>
                            <span class="fir_p"><?php echo $v['abstract']?></span>
                            <p class="sec_p">个人简介</p>
                            <p class="th_p"><?php echo strip_tags($v['description'])?></p>
                            <p class="four_p">主讲课程</p>
                            <p class="five_p"><?php echo $v['speaker']?></p>
                            <div class="details">
                                <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html">查看详情<i class="iconfont cricle_right">&#xe682;</i></a>
                            </div>
                        </div>
                    </li>
                <?php }?>
            </ul>
        </div>

        <div class="teamCoverhd">
            <i class="iconfont prev">&#xe605;</i>
            <div class="smallImg">
                <ul>
                      <?php foreach($teacher as $v) { ?>
                          <li>
                              <div class="teamCoverhd_image">
                                  <img src="http://www.thinkwithu.com<?php echo $v['image']?>" alt="">
                              </div>

<!--                              <div class="name_mask">--><?php //echo $v['name']?><!--</div>-->
                              <div class="name_mask"></div>
                          </li>
                      <?php }?>
                </ul>
            </div>
            <i class="iconfont next">&#xe606;</i>
        </div>


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
                <?php foreach($book as $v){?>
                <li>
                    <img src="http://www.thinkwithu.com<?php echo $v['image']?>" alt="<?php echo $v['name']?>">
                </li>
                <?php }?>
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
                                    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">
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
    // jQuery(".eaxm_list").slide({mainCell:".eaxm_bd ul",autoPage:true,effect:"left",autoPlay:true,vis:5});
    //考试服务选项卡2上下轮播
    jQuery(".eaxm_center .slideBox").slide({ mainCell:"ul",vis:9,prevCell:".sPrev",nextCell:".sNext",effect:"topMarquee",interTime:50,autoPlay:true,trigger:"click"});
    //考试服务选项卡2切换
    jQuery(".eaxm_center").slide({titCell:".eaxm_center_nav li",mainCell:".eaxm_center_content"});
    //考试服务选项卡2右边轮播
    jQuery(".eaxm_right").slide({mainCell:".eaxm_right_lb ul",autoPlay:true,effect:"topMarquee",vis:5,interTime:50,trigger:"click"});
    //成功案例
    jQuery(".Curriculum_Broadcast").slide({
        titCell:".hd ul li",
        mainCell: ".bdCurriculum ul",
        effect: "left",
        trigger: "mouseover",
        delayTime: 1000,
        interTime: 3000,
        autoPlay:true,
        mouseOverStop: true
    });
    //名师团队
    jQuery(".teamCover").slide({
        titCell:".smallImg ul li",
        mainCell:".tinter_wrap",
        effect:"fold",
        autoPlay:true,
        interTime:3000,
        mouseOverStop:true,
    });
    jQuery(".teamCover .teamCoverhd").slide({mainCell:".smallImg ul",interTime: 3000,vis:3,scroll:1,effect:"topLoop", autoPlay:true,});
    $('.Bdcotent').mouseover(function () {
        $('.smallImg ul').trigger('mouseover');
    }).mouseout(function () {
        $('.smallImg ul').trigger('mouseout');
    });
    $('.smallImg ul li.clone').removeClass('on');
    //研发成果
    jQuery(".Results_list").slide({mainCell:".Results_bd ul",autoPage:true,effect:"left",autoPlay:true,vis:6});

    // jQuery(".game163").slide({ titCell:".smallImg li", mainCell:".bigImg", effect:"fold", autoPlay:true,delayTime:200,			startFun:function(i,p){				if(i==0){ jQuery(".game163 .sPrev").click() } else if( i%4==0 ){ jQuery(".game163 .sNext").click()}			}		});		jQuery(".game163 .smallScroll").slide({ mainCell:"ul",delayTime:100,vis:4,scroll:4,effect:"left",autoPage:true,prevCell:".sPrev",nextCell:".sNext",pnLoop:false });











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