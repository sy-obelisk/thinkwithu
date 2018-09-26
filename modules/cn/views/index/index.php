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
    <link rel="stylesheet" href="/cn/css/fonts/font-awesome/css/font-awesome.min.css"/>
    <link rel="shortcut icon" href="http://www.thinkwithu.com/favicon.ico"/>
    <script type="text/javascript" src="/cn/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/cn/Hirsi/js/jquery-1.12.2.min.js"></script>
    <script type="text/javascript" src="/cn/Hirsi/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/cn/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/cn/js/public.js"></script>
</head>
<body>
<?php use app\commands\front\ContactWidget; ?>
<!--header 头部-->
<header class="sy-header">
    <div class="w10 clearfix">
        <img src="/cn/Hirsi/images/sy-text.png" style="margin-right: 55px" alt="高分成就梦想名校改变人生">
        <img src="/cn/Hirsi/images/sy-tel.png" alt="400-600-1123">
        <a class="refer-btn"
           href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="
           target="_blank">在线咨询</a>
        <!--登录&注册-->
        <div class="login-wrap fr" style="display: none;">
            <span class="on">登录</span>
            <span>注册</span>
        </div>

        <!--搜索-->
        <div class="search-wrap fr">
            <input class="search search1" type="search" onkeyup="enterKey(event,this)" placeholder="请输入关键词">
            <img src="/cn/Hirsi/images/search-icon.png" style="margin-left: -1px;cursor: pointer;" onclick="keySearch()" alt="搜索">
        </div>
        <!--        app下载-->
        <div class="appDownload">
            <span title="app下载" class="tit_t">APP <b></b></span>
            <div class="pull_down">
                <ul>
                    <li>
                        <a href="http://www.gmatonline.cn/DownloadApp.html">
                            <div class="first_layer">
                                <img src="/cn/Hirsi/images/gmatapp_logo.jpg" alt="app logo图标"/>
                                <span>雷哥GMAT苹果版</span>
                            </div>
                        </a>
                        <div class="code_box">
                            <img src="/cn/Hirsi/images/leigeQrCode.png" alt="app二维码图片"/>
                        </div>
                    </li>
                    <li>
                        <a href="http://www.gmatonline.cn/DownloadApp.html">
                            <div class="first_layer">
                                <img src="/cn/Hirsi/images/gmatapp_logo.jpg" alt="app logo图标"/>
                                <span>雷哥GMAT安卓版</span>
                            </div>
                        </a>
                        <div class="code_box">
                            <img src="/cn/Hirsi/images/leige-android.png" alt="app二维码图片"/>
                        </div>
                    </li>
                    <li>
                        <a href="http://www.toeflonline.cn/toefl_app.html">
                            <div class="first_layer">
                                <img src="/cn/Hirsi/images/toeflapp_logo.jpg" alt="app logo图标"/>
                                <span>雷哥托福苹果版</span>
                            </div>
                        </a>
                        <div class="code_box">
                            <img src="http://www.toeflonline.cn/cn/images/app-ios.png" alt="app二维码图片"/>
                        </div>
                    </li>
                    <li>
                        <a href="http://www.toeflonline.cn/toefl_app.html">
                            <div class="first_layer">
                                <img src="/cn/Hirsi/images/toeflapp_logo.jpg" alt="app logo图标"/>
                                <span>雷哥托福安卓版</span>
                            </div>
                        </a>
                        <div class="code_box">
                            <img src="http://www.toeflonline.cn/cn/images/app-android.png" alt="app二维码图片"/>
                        </div>
                    </li>
                    <li>
                        <a href="http://www.smartapply.cn/app.html">
                            <div class="first_layer">
                                <img src="http://www.smartapply.cn/cn/images/smart-appLogo.png" alt="app logo图标"/>
                                <span>雷哥选校苹果版</span>
                            </div>
                        </a>
                        <div class="code_box">
                            <img src="http://www.smartapply.cn/cn/images/smart-erweima.png" alt="app二维码图片"/>
                        </div>
                    </li>
                    <li>
                        <a href="http://www.smartapply.cn/app.html">
                            <div class="first_layer">
                                <img src="http://www.smartapply.cn/cn/images/smart-appLogo.png" alt="app logo图标"/>
                                <span>雷哥选校安卓版</span>
                            </div>
                        </a>
                        <div class="code_box">
                            <img src="http://www.smartapply.cn/cn/images/anroid-smartapp.png" alt="app二维码图片"/>
                        </div>
                    </li>
                    <li>
                        <a href="http://words.viplgw.cn/" target="_blank">
                            <div class="first_layer">
                                <img src="/cn/Hirsi/images/words-iosLogo.jpg" alt="app logo图标"/>
                                <span>雷哥单词苹果版</span>
                            </div>
                        </a>
                        <div class="code_box">
                            <img src="/cn/Hirsi/images/words-ios.png" alt="app二维码图片"/>
                        </div>
                    </li>
                    <li>
                        <a href="http://words.viplgw.cn/" target="_blank">
                            <div class="first_layer">
                                <img src="http://www.gmatonline.cn/app/web_core/styles/images/words-iosLogo.jpg" alt="app logo图标"/>
                                <span>雷哥单词安卓版</span>
                            </div>
                        </a>
                        <div class="code_box">
                            <img src="http://www.greonline.cn/cn/images/word_android.png" alt="app二维码图片"/>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--        app下载 end-->
                <div class="clearBr"></div>
    </div>
</header>
<!--nav 导航栏-->
<?php use app\commands\front\BannerWidget;?>
<?php BannerWidget::begin();?>
<?php BannerWidget::end();?>
<!--Banner-->
<section class="banner-wrap">
    <div class="slideBox">
        <ul class="hd clearfix"></ul>
        <ul class="banner">
            <?php
            $data = \app\modules\cn\models\Content::getContent(['fields' => 'url', 'category' => "190,223", 'pageSize' => 10]);
            foreach ($data as $v) {
                ?>
                <li><a href="<?php echo $v['url'] ?>" target="_blank"
                       style="background: url('<?php echo $v['image'] ?>') no-repeat center;background-size: auto 100%;"></a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
    <!---------------------------左边悬浮窗---------------------------------->
    <?php use app\commands\front\LeftSuspensionWidget;?>
    <?php LeftSuspensionWidget::begin();?>
    <?php LeftSuspensionWidget::end();?>
</section>
<!--推荐-->
<section>
    <div class="w10 tm">
        <h1 class="module-tit inb"><em class="line-2">为你</em>推荐</h1>
        <div class="list-wrap">
            <ul class="train clearfix">
                <li>
                    <a href="/USA.html">
                        <img src="/cn/images/usa.png" alt="" />
                        <p>美国留学</p>
                    </a>
                </li>
                <li>
                    <a href="/UK.html">
                        <img src="/cn/images/uk.png"/>
                        <p>英国留学</p>
                    </a>
                </li>
                <li>
                    <a href="/AUS.html">
                        <img src="/cn/images/australia.png"/>
                        <p>澳洲留学</p>
                    </a>
                </li>
                <li>
                    <a href="/COUNTRY.html">
                        <img src="/cn/images/canada.png"/>
                        <p>加拿大留学</p>
                    </a>
                </li>
                <li>
                    <a href="/HK.html">
                        <img src="/cn/images/hk.png"/>
                        <p>香港留学</p>
                    </a>
                </li>
            </ul>
            <ul class="abroad clearfix">
                <li>
                    <a href="/gmatsheet.html">
                        <img src="/cn/images/intensive_img01.png"/>
                        <p>GMAT课程</p>
                    </a>
                </li>
                <li>
                    <a href="/gmatsheet.html">
                        <img src="/cn/images/intensive_img04.png"/>
                        <p>GRE课程</p>
                    </a>
                </li>
                <li>
                    <a href="/toefl/assistance.html">
                        <img src="/cn/images/intensive_img06.png"/>
                        <p>托福课程</p>
                    </a>
                </li>
                <li>
                    <a href="/ieltssheet.html">
                        <img src="/cn/images/intensive_img07.png"/>
                        <p>雅思课程</p>
                    </a>
                </li>
                <li>
                    <a href="http://www.viplgw.cn" target="_blank">
                        <img src="/cn/images/intensive_img08.png"/>
                        <p>网络课程</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--留学服务-->
<section class="serve">
    <div class="w10 tm">
        <h1 class="module-tit inb"><em class="line-2">留学</em>服务</h1>
        <ul class="serve-list clearfix">
            <li>
                <div>
                    <img class="serve-img" src="/cn/Hirsi/images/ser-1.png" alt="">
                    <div class="serve-text">
                        <h1 class="serve-name">留学评估<span class="serve-line"></span></h1>
                        <p class="serve-de">了解专业的留学分析</p>
                        <a class="serve-btn" href="/evaluation.html" target="_blank">查看详情</a>
                    </div>
                </div>
            </li>
            <li>
                <div>
                    <img class="serve-img" src="/cn/Hirsi/images/ser-2.png" alt="">
                    <div class="serve-text">
                        <h1 class="serve-name">院校排名<span class="serve-line"></span></h1>
                        <p class="serve-de">找找你想去的学校</p>
                        <a class="serve-btn" href="/schools.html">查看详情</a>
                    </div>
                </div>
            </li>
            <li>
                <div>
                    <img class="serve-img" src="/cn/Hirsi/images/ser-3.png" alt="">
                    <div class="serve-text">
                        <h1 class="serve-name">留学申请<span class="serve-line"></span></h1>
                        <p class="serve-de">有经验可信赖的顾问</p>
                        <a class="serve-btn" href="/study-aboard/assistance.html">查看详情</a>
                    </div>
                </div>
            </li>
            <li>
                <div>
                    <img class="serve-img" src="/cn/Hirsi/images/ser-4.png" alt="">
                    <div class="serve-text">
                        <h1 class="serve-name">留学百科<span class="serve-line"></span></h1>
                        <p class="serve-de">你想看的这里都有</p>
                        <a class="serve-btn" href="/list/88,118.html">查看详情</a>
                    </div>
                </div>
            </li>
            <li>
                <div>
                    <img class="serve-img" src="/cn/Hirsi/images/ser-5.png" alt="">
                    <div class="serve-text">
                        <h1 class="serve-name">实习+游学<span class="serve-line"></span></h1>
                        <p class="serve-de">世界太大，出去看看。</p>
                        <a class="serve-btn" href="/practices.html" target="_blank">查看详情</a>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="serve2-list clearfix">
            <li>
                <div class="serve2-tit clearfix">
                    <div class="fl serve2-name-wrap">
                        <img src="/cn/Hirsi/images/icon-s1.png" alt="">
                        <span class="serve2-name">留学报告</span>
                    </div>
                    <a class="serve-more fr" href="/list/178,125.html">MORE</a>
                </div>
                <dl>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "125,178", "pageSize" => 5]);
                    foreach ($data as $v) {
                        ?>
                        <dt>
                            <a href="/word-details/<?php echo $v['id'] ?>/index,178,125.html"><?php echo $v['name'] ?></a>
                        </dt>
                        <?php
                    }
                    ?>
                </dl>
            </li>
            <li>
                <div class="serve2-tit clearfix">
                    <div class="fl serve2-name-wrap">
                        <img src="/cn/Hirsi/images/icon-s2.png" alt="">
                        <span class="serve2-name">问答专区</span>
                    </div>
                    <a class="serve-more fr" href="/question.html">MORE</a>
                </div>
                <dl>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "121,178", "pageSize" => 5]);
                    foreach ($data as $v) {
                        ?>
                        <dt>
                            <a href="/word-details/<?php echo $v['id'] ?>/index,178,121.html"><?php echo $v['name'] ?></a>
                        </dt>
                        <?php
                    }
                    ?>
                </dl>
            </li>
            <li>
                <div class="serve2-tit clearfix">
                    <div class="fl serve2-name-wrap">
                        <img src="/cn/Hirsi/images/icon-s3.png" alt="">

                        <span class="serve2-name">留学公开课</span>
                    </div>
                    <a class="serve-more fr" href="/public-class.html">MORE</a>
                </div>
                <dl>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "107,178", "pageSize" => 5]);
                    foreach ($data as $k => $v) {
                        ?>
                        <dt><a href="/public-class/<?php echo $v['id'] ?>.html"><?php echo $k + 1 ?>
                                .<?php echo $v['name'] ?></a></dt>
                        <?php
                    }
                    ?>

                </dl>
            </li>
        </ul>
    </div>
</section>
<!--考试服务-->
<section class="test">
    <div class="w10 tm">
        <h1 class="module-tit inb"><em class="line-2" style="border-bottom: 3px solid #ffffff">考试</em>服务</h1>
        <ul class="test-list clearfix">
            <li>
                <span class="test-name">课</span>
                <img class="test-img" src="/cn/Hirsi/images/19.png" alt="">
                <a href="/training.html">
                    <div class="test-de">备考课程</div>
                </a>
            </li>
            <li>
                <span class="test-name">精</span>
                <img class="test-img" src="/cn/Hirsi/images/20.png" alt="">
                <a href="/public-class.html">
                    <div class="test-de">公开课</div>
                </a>
            </li>
            <li>
                <span class="test-name">疑</span>
                <img class="test-img" src="/cn/Hirsi/images/21.png" alt="">
                <a href="/question.html">
                    <div class="test-de">问答</div>
                </a>
            </li>
            <li>
                <span class="test-name">机</span>
                <img class="test-img" src="/cn/Hirsi/images/22.png" alt="">
                <a href="/problem.html#toggle">
                    <div class="test-de">机经下载</div>
                </a>
            </li>
            <li>
                <span class="test-name">测</span>
                <img class="test-img" src="/cn/Hirsi/images/23.png" alt="">
                <a href="http://www.gmatonline.cn/exam/index.html" target="_blank">
                    <div class="test-de">模考与测评</div>
                </a>
            </li>
            <li>
                <span class="test-name">巧</span>
                <img class="test-img" src="/cn/Hirsi/images/24.png" alt="">
                <a href="/list/115,165.html">
                    <div class="test-de">提分技巧</div>
                </a>
            </li>
            <li>
                <span class="test-name">研</span>
                <img class="test-img" src="/cn/Hirsi/images/25.png" alt="">
                <a href="/list/115,125.html">
                    <div class="test-de">研究报告</div>
                </a>
            </li>
            <li>
                <span class="test-name">讯</span>
                <img class="test-img" src="/cn/Hirsi/images/26.png" alt="">
                <a href="/list/115,118.html">
                    <div class="test-de">考试动态</div>
                </a>
            </li>
        </ul>
        <div class="clearfix">
            <ul class="testLeft-wrap fl clearfix">
                <li style="margin-bottom: 15px;">
                    <div class="erm-wrap"><img src="/cn/Hirsi/images/erm-1.png" alt="扫描二维码，下载APP"></div>
                    <p class="erm-name">GMAT APP</p>
                </li>
                <li>
                    <div class="erm-wrap"><img src="/cn/Hirsi/images/erm-2.png" alt="扫描二维码，下载APP"></div>
                    <p style="background: #E95C4A;" class="erm-name">TOEFL APP</p>
                </li>
            </ul>
            <div class="testRight-wrap fr">
                <p class="rightServe-name tl clearfix">GMAT每日一题 <a class="more fr" href="/problem.html">MORE</a></p>
                <div class="slide02 clearfix">
                    <?php
                    $one = [];
                    $two = [];
                    $data = \app\modules\cn\models\Content::getContent(['category' => "249",'fields' => "abstract", "pageSize" => 100]);
                    foreach ($data as $k => $v) {
                        if($k%2==0){
                            $one[] = $v;
                        }else{
                            $two[] = $v;
                        }
                    }
                    ?>


                    <div class="slide-f1 fl">
                        <div class="topicBd">
                            <ol class="topic-list">
                                <?php
                                foreach($one as $v) {
                                    ?>
                                    <li>

                                        <a href="/word-details/<?php echo $v['id'] ?>/249.html"><?php echo $v['name']?></a>

                                        <p class="ellipsis-2 tode"><?php echo $v['abstract']?></p>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ol>

                        </div>
                    </div>

                    <div class="slide-fr fr">
                        <div class="topicBd">
                            <ol class="topic-list">
                                <?php
                                foreach($two as $v) {
                                    ?>
                                    <li>
                                        <a href="/word-details/<?php echo $v['id'] ?>/249.html"><?php echo $v['name']?></a>

                                        <p class="ellipsis-2 tode"><?php echo $v['abstract']?></p>
                                    </li>
                                    <?php
                                }
                                ?>

                            </ol>

                        </div>
                    </div>

                </div>
                <script>
                    jQuery(".slide-f1").slide({
                        mainCell: ".topicBd ol",
                        autoPlay: true,
                        effect: "topMarquee",
                        interTime: 50,
                        vis: 5,
                        autoPage: true
                    });
                    jQuery(".slide-fr").slide({
                        mainCell: ".topicBd ol",
                        autoPlay: true,
                        effect: "topMarquee",
                        interTime: 50,
                        vis: 5,
                        autoPage: true
                    });
                </script>
            </div>
        </div>
    </div>
</section>
<!--热门学校-->
<section class="hotSchools">
    <div class="w10 tm">
        <h1 class="module-tit inb" style="color: #ff0000;"><em class="line-2">本周热</em>门学校</h1>
        <div>
            <ul class="school-img clearfix">
                <li><a href="/schools/11664.html"><img
                            src="http://schools.smartapply.cn/files/2015/0115/20150115033833448.jpg" alt=""></a></li>
                <li><a href="/schools/11702.html"><img
                            src="http://schools.smartapply.cn/files/2015/0119/20150119014957762.jpg" alt=""></a></li>
                <li><a href="/schools/11752.html"><img
                            src="http://schools.smartapply.cn/files/2015/0120/20150120033644987.jpg" alt=""></a></li>
                <li><a href="/schools/11756.html"><img
                            src="http://schools.smartapply.cn/files/2015/0120/20150120030905295.jpg" alt=""></a></li>
                <li><a href="/schools/11758.html"><img
                            src="http://schools.smartapply.cn/files/2015/0120/20150120040227130.jpg" alt=""></a></li>
                <li><a href="/schools/11665.html"><img
                            src="http://schools.smartapply.cn/files/2015/0115/20150115034354272.png" alt=""></a></li>
                <li><a href="/schools/11666.html"><img
                            src="http://schools.smartapply.cn/files/2015/0115/20150115034548977.png" alt=""></a></li>
                <li><a href="/schools/11667.html"><img
                            src="http://schools.smartapply.cn/files/2015/0115/20150115034659400.jpg" alt=""></a></li>
                <li><a href="/schools/11668.html"><img
                            src="http://schools.smartapply.cn/files/2015/0115/20150115034807979.jpg" alt=""></a></li>
                <li><a href="/schools/11669.html"><img
                            src="http://schools.smartapply.cn/files/2015/0115/20150115034934768.jpg" alt=""></a></li>
                <li><a href="/schools/11670.html"><img
                            src="http://schools.smartapply.cn/files/2015/0115/20150115035042155.gif" alt=""></a></li>
                <li><a href="/schools/11671.html"><img
                            src="http://schools.smartapply.cn/files/2015/0115/20150115035640843.jpg" alt=""></a></li>
            </ul>
            <a href="/schools.html">
                <div class="school-btn">院校查询</div>
            </a>
        </div>
    </div>
</section>
<!--申友成就梦想-->
<section class="sy-dream">
    <div class="w10 tm">
        <h1 class="module-tit inb"><em class="line-2" style="border-color: #ffffff">申友成</em>就梦想</h1>
        <div class="slideBox-4">
            <ul class="bd-4">
                <?php
                $data = \app\modules\cn\models\ Content::getContent(['fields' => 'smallPhoto,abroadSchool,abstract', 'category' => '102,178', 'pageSize' => 30, 'order' => "c.id DESC"]);
                ?>
                <?php
                foreach ($data as $v) {
                    ?>
                    <li>
                        <div class="enroll-wrap clearfix">
                            <div class="student-img fl"><img src="<?php echo $v['smallPhoto'] ?>" alt=""></div>
                            <div class="fr enroll-school">
                                <p class="stu-name ellipsis"><?php echo $v['name'] ?></p>
                                <p class="school-name ellipsis"><?php echo $v['abroadSchool'] ?></p>
                                <p class="stu-intro ellipsis-3">
                                    <?php echo $v['abstract'] ?>
                                </p>
                                <div class="tr"><a class="show-btn" target="_blank" href="/word-details/<?php echo $v['id'] ?>/index,102.html">查看详情</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <div class="enroll-list-wrap clearfix">
            <div class="fl" style="margin-top: 15px;"><img src="/cn/Hirsi/images/tri-3.png" alt=""></div>
            <div class="txtMarquee-top txtScroll-top fl">
                <div class="bd">
                    <ul class="enroll-list clearfix">
                        <?php
                        foreach ($data as $v) {
                            ?>
                            <li>
                                <div class="fl stu-img"><img src="<?php echo $v['smallPhoto'] ?>" alt=""></div>
                                <div class="fl stuIntro-wrap">
                                    <p><?php echo $v['name'] ?>：<?php echo $v['abroadSchool'] ?></p>
                                    <p class="ellipsis-2 stu-info">
                                        <?php echo $v['abstract'] ?>
                                    </p>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--选择申友，掌握未来-->
<section>
    <h1 class="syIntro-tit">选择申友，掌握未来</h1>
    <div class="w10">
        <div class="slideBox-1 relative">
            <div class="banner2 ">
                <?php
                $data = \app\modules\cn\models\Content::getContent(['type' =>1,'fields' => 'abstract，smallPhoto,job,description', 'category' => "139,140", 'pageSize' => 100]);
                $count = count($data) / 4;
                for ($i = 0; $i < $count; $i++) {
                    ?>
                    <ul class="teacher-list">
                        <?php
                        $j = 0;
                        foreach ($data as $key => $value) {
                            if ($j == 4) {
                                break;
                            }
                            ?>
                            <li>
                                <div class="teacher-img fl"><a
                                        href="/teachers/<?php echo $value['name'] ?>/<?php echo $value['id'] ?>.html"><img
                                            src="<?php echo $value['image'] ?>"
                                            alt="<?php echo $value['name'] ?>头像"></a>
                                </div>
                                <div class="teacherInfo-wrap fr">
                                    <a href="/teachers/<?php echo $value['name'] ?>/<?php echo $value['id'] ?>.html"><h1
                                            class="teacher-name"><?php echo $value['name'] ?></h1></a>

                                    <p class="teacher-tag"><?php echo $value['job'] ?></p>

                                    <p class="teacher-tag ellipsis"><?php echo $value['abstract'] ?></p>
                                    <a class="refer-btn2"
                                       href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="
                                       target="_blank">在线咨询</a>
                                </div>
                            </li>
                            <?php
                            $j++;
                            unset($data[$key]);
                        }
                        ?>
                    </ul>
                    <?php
                }
                ?>
            </div>
            <div class="prev ani">
                <div class="tri-1"></div>
            </div>
            <div class="next ani">
                <div class="tri-1"></div>
            </div>
        </div>
    </div>
</section>
<!--海外mentor-->
<section>
    <div class="abroad-wrap w10">
        <h1 class="tm abroad-tit">海外Mentor</h1>
        <div class="slideBox-3">
            <ul class="info-list banner4">
                <?php
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'abstract', 'category' => "142"]);
                foreach ($data as $k => $v) {
                    ?>
                    <li class="info-list-wrap">
                        <div class="abroad-intro">
                            <p> <?php echo $v['abstract'] ?></p>
                            <div class="tri-2"></div>
                            <div class="abroad-line"></div>
                        </div>
                        <div class="abroad-img"><a href="#"><img src="<?php echo $v['image'] ?>" alt=""></a></div>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <ul class="abroad-slide"></ul>
        </div>
    </div>
</section>
<!--研发成果-->
<section>
    <h1 class="syIntro-tit">研发成果</h1>
    <div class="w10">
        <div class="picMarquee-left relative">
            <div class="banner3 " style="padding: 40px 34px;overflow: hidden;">
                <ul class="books-list clearfix">
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "108"]);
                    foreach ($data as $k => $v) {
                        ?>
                        <li><a href="/materials.html"><span></span><img src="<?php echo $v['image'] ?>" alt="教材"></a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="prev ani">
                <div class="tri-1"></div>
            </div>
            <div class="next ani">
                <div class="tri-1"></div>
            </div>
        </div>
        <!--联系申友-->
        <!--        <div class="contact-wrap">-->
        <!--            <div class="contact-header clearfix">-->
        <!--                <div class="contact-header-left fl">-->
        <!--                    <span class="contact-ch">联系申友</span>-->
        <!--                    <span class="contact-tel-text">全国免费咨询热线：</span>-->
        <!--                    <span class="contact-tel">400-600-1123</span>-->
        <!--                </div>-->
        <!--                <div class="contact-header-right fr">-->
        <!--                    <span class="on">北京</span><em>|</em>-->
        <!--                    <span>上海</span><em>|</em>-->
        <!--                    <span>成都</span><em>|</em>-->
        <!--                    <span>西安</span><em>|</em>-->
        <!--                    <span>武汉</span><em>|</em>-->
        <!--                    <span>杭州</span><em>|</em>-->
        <!--                    <span>长沙</span><em>|</em>-->
        <!--                    <span>广东</span><em>|</em>-->
        <!--                    <span>深圳</span><em>|</em>-->
        <!--                    <span>美国</span>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="area-wrap clearfix">-->
        <!--                <div class="fl area-left clearfix">-->
        <!--                    <div class="fl"><img src="/cn/Hirsi/images/area-1.png" alt=""></div>-->
        <!--                    <div class="fr area-left-text">-->
        <!--                        <h1 class="area-name">北京服务中心</h1>-->
        <!--                        <div>-->
        <!--                            <span>电话：</span><span class="inb left-text">010-62416397</span>-->
        <!--                        </div>-->
        <!--                        <div>-->
        <!--                            <span>地址：</span><span class="inb left-text">北京市海淀区海淀北二街8号中关村SOHO大厦617室</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!---->
        <!--                </div>-->
        <!--                <div class="fl area-mid">-->
        <!--                    <p>公交路线：</p>-->
        <!--                    <p>1、302, 641, 718，中关村南下</p>-->
        <!--                    <p>2、26，运通114，北京市地震局下车</p>-->
        <!--                    <p>3、特9外，运通106，运通110，中关村西站下</p>-->
        <!--                    <p class="metro">-->
        <!--                        地铁路线：乘坐地铁10号线至苏州街站下B口出，-->
        <!--                        乘坐地铁4号线至中关村站D口出，直行约5分钟即-->
        <!--                        可到达中关村SOHO大厦。-->
        <!--                    </p>-->
        <!--                </div>-->
        <!--                <div class="fr area-right">-->
        <!--                    <div class="area-right-tit">预约北京顾问</div>-->
        <!--                    <div class="area-form">-->
        <!--                        <div class="form-int">-->
        <!--                            <div class="icon-img"><img src="/cn/Hirsi/images/icon-a1.png" alt=""></div>-->
        <!--                            <span>姓&nbsp;&nbsp;&nbsp;&nbsp;名：</span>-->
        <!--                            <input type="text" name="name" id="username-2">-->
        <!--                        </div>-->
        <!--                        <div class="form-int">-->
        <!--                            <div class="icon-img"><img src="/cn/Hirsi/images/icon-a4.png" alt=""></div>-->
        <!--                            <span>邮&nbsp;&nbsp;&nbsp;&nbsp;箱：</span>-->
        <!--                            <input type="text" name="name" id="email">-->
        <!--                        </div>-->
        <!--                        <div class="form-int">-->
        <!--                            <div class="icon-img"><img src="/cn/Hirsi/images/icon-a3.png" alt=""></div>-->
        <!--                            <span>电&nbsp;&nbsp;&nbsp;&nbsp;话：</span>-->
        <!--                            <input type="text" name="name" id="tel-2">-->
        <!--                        </div>-->
        <!--                        <div class="form-int">-->
        <!--                            <div class="icon-img"><img src="/cn/Hirsi/images/icon-a4.png" alt=""></div>-->
        <!--                            <span>验<em>证</em>码：</span>-->
        <!--                            <input style="width: 36px;padding: 0;height: 17px" type="text" name="name" id="auth-code">-->
        <!--                            <div class="auth-code inb">获取验证码</div>-->
        <!--                        </div>-->
        <!--                        <div class="tr"><span class="form-submit">确定</span></div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
</section>
<!--中间弹窗-->
<!--<div class="m-tc">-->
<!--    <div class="ic-wrap">-->
<!--        <div class="ic-close"></div>-->
<!--        <a href="/word-details/1349/178,105,118.html"><img src="/cn/images/b-ic.png" alt=""></a>-->
<!--    </div>-->
<!--</div>-->
<!--footer 底部-->
<!--<footer>-->
<!--    <div class="w10">-->
<!--        <div class="footer-list-wrap clearfix">-->
<!--            <ul class="footer-list">-->
<!--                <li><a href="#">美国</a></li>-->
<!--                <li><a href="#">英国</a></li>-->
<!--                <li><a href="#">香港</a></li>-->
<!--                <li><a href="#">澳洲</a></li>-->
<!--                <li><a href="#">其他</a></li>-->
<!--            </ul>-->
<!--            <ul class="footer-list">-->
<!--                <li><a href="#">GMAT做题</a></li>-->
<!--                <li><a href="#">GMAT测评</a></li>-->
<!--                <li><a href="#">托福考试</a></li>-->
<!--                <li><a href="#">高分心得</a></li>-->
<!--                <li><a href="#">开班查询</a></li>-->
<!--            </ul>-->
<!--            <ul class="footer-list">-->
<!--                <li><a href="#">本科留学</a></li>-->
<!--                <li><a href="#">硕士留学</a></li>-->
<!--                <li><a href="#">博士留学</a></li>-->
<!--                <li><a href="#">游学服务</a></li>-->
<!--            </ul>-->
<!--            <ul class="footer-list ft2 clearfix">-->
<!--                <li><a href="#">院校排名</a></li>-->
<!--                <li><a href="#">留学规划</a></li>-->
<!--                <li><a href="#">签证面试</a></li>-->
<!--                <li><a href="#">留学问答</a></li>-->
<!--                <li><a href="#">专业解析 </a></li>-->
<!--                <li><a href="#">文书写作 </a></li>-->
<!--                <li><a href="#">就业指导 </a></li>-->
<!--                <li><a href="#">留学评估 </a></li>-->
<!--            </ul>-->
<!--            <ul class="footer-list">-->
<!--                <li><a href="#">申友介绍 </a></li>-->
<!--                <li><a href="#">名师文档 </a></li>-->
<!--                <li><a href="#">行业资质 </a></li>-->
<!--                <li><a href="#">加入我们 </a></li>-->
<!--                <li><a href="#">联系我们 </a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <div class="tm ft-tel-wrap">-->
<!--            <img src="/cn/Hirsi/images/icon-f1.png" alt="">-->
<!--            <span class="ft-tel">400-600-1123</span>-->
<!--        </div>-->
<!--        <div class="ftErm-wrap tm">-->
<!--            <div class="inb ft-erm-wrap">-->
<!--                <img src="/cn/Hirsi/images/ft-erm-1.png" alt="">-->
<!--                <span class="ft-erm-name">申友GMAT</span>-->
<!--            </div>-->
<!--            <div class="inb ft-erm-wrap">-->
<!--                <img src="/cn/Hirsi/images/ft-erm-2.png" alt="">-->
<!--                <span class="ft-erm-name">申友留学</span>-->
<!--            </div>-->
<!--            <div class="inb ft-erm-wrap">-->
<!--                <img src="/cn/Hirsi/images/ft-erm-3.png" alt="">-->
<!--                <span class="ft-erm-name">雷哥GMAT</span>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->
<!--copyRight-->
<!--<section class="copyRight tm">-->
<!--    <div class="copyRight-link">-->
<!--        <span class="link-tit">友情链接:</span>-->
<!--        <a href="#">小申托福&nbsp;&nbsp;|</a>-->
<!--        <a href="#">留学社区&nbsp;&nbsp;|</a>-->
<!--        <a href="#">去留学网&nbsp;&nbsp;|</a>-->
<!--        <a href="#">雷哥GMAT在线&nbsp;&nbsp;|</a>-->
<!--        <a href="#">新浪微博&nbsp;&nbsp;|</a>-->
<!--        <a href="#">申友教育人人网主页</a>-->
<!--    </div>-->
<!--    <div class="copyRight-text"><span>Copyright © 2015 All Right Reserved 申友教育 版权所有 京ICP备16000003号</span></div>-->
<!--</section>-->
<script>

    //    banner 轮播
    jQuery(".slideBox").slide({
        mainCell: ".banner",
        titCell: ".hd",
        effect: "fold",
        autoPlay: true,
        autoPage: "<li></li>"
    });
    //无缝滚动
    jQuery(".slideBox-4").slide({
        mainCell: ".bd-4",
        effect: "fold",
        delayTime: 800,
        autoPlay: true,
    });
    //    jQuery(".txtMarquee-top").slide({
    //        mainCell: ".enroll-list",
    //        autoPlay: true,
    //        effect: "topMarquee",
    //        vis: 1,
    //        opp: false,
    //        interTime: 50
    //    });
    jQuery(".txtScroll-top").slide({
        mainCell: ".bd ul",
        autoPage: true,
        effect: "topLoop",
        delayTime: 1000,
        autoPlay: true,
        vis: 1
    });
    //    老师列表 轮播
    jQuery(".slideBox-1").slide({
        mainCell: ".banner2",
        effect: "leftLoop",
        autoPlay: true,

    });
    //     海外Mentor
    jQuery(".slideBox-3").slide({
        mainCell: ".banner4",
        titCell: ".abroad-slide",
        effect: "fold",
        delayTime: 1000,
        autoPlay: true,
        autoPage: "<li></li>"
    });
    //    研发成果 轮播
    jQuery(".picMarquee-left").slide({
        mainCell: ".banner3 ul",
        autoPlay: true,
        effect: "leftMarquee",
        vis: 5,
        interTime: 50,
        trigger: "click"
    });
</script>
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
    <!--联系申友-->
    <?php ContactWidget::begin(); ?>
    <?php ContactWidget::end(); ?>
    <script type="text/javascript">
        jQuery(".connection").slide({mainCell: ".connectBd", trigger: "mouseover"});
    </script>
    <?php
}
?>

<!-----------------------------尾部------------------------------>
<?php use app\commands\front\FooterWidget; ?>
<?php FooterWidget::begin(); ?>
<?php FooterWidget::end(); ?>
<!-----------------------------尾部end------------------------------>
<!-------------------------------------------------右边的悬浮窗------------------------------------------->
<?php //use app\commands\front\RightSuspensionWidget;?>
<?php //RightSuspensionWidget::begin();?>
<?php //RightSuspensionWidget::end();?>
<!----------------------------------------------左边悬浮窗-------------------------------------------------------------->
<?php //use app\commands\front\LeftSuspensionWidget;?>
<?php //LeftSuspensionWidget::begin();?>
<?php //LeftSuspensionWidget::end();?>
</body>
<script>
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