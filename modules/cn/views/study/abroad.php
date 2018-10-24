<link rel="stylesheet" href="/cn/css/StudyAbroadProducts-new.css"/>

<!--banner-->
<section class="banner">
    <div class="banner_left">
        <div class="banner_slide">
            <ul><!--循环li-->
                <?php foreach($banner as $v){?>
                <li>
                    <img src="<?php echo $v['image']?>" alt="<?php echo $v['name']?>">
                </li>
                <?php }?>
            </ul>
        </div>
        <i class="prev iconfont">&#xe608;</i>
        <i class="next iconfont">&#xe607;</i>
        <div class="bannerCenter">
            <ul>
                <li>
                    <a href=""><div></div></a>
                    <span>背景测评</span>
                </li>
                <li>
                    <a href=""><div></div></a>
                    <span>选校测评</span>
                </li>
                <li>
                    <a href=""><div></div></a>
                    <span>选校推荐</span>
                </li>
            </ul>
        </div>
    </div>
    <script>
        jQuery(".banner_left").slide({mainCell:".banner_slide ul",effect:"leftLoop",autoPlay:true});
    </script>
    <div class="banner_right">
        <span class="shu">|</span> <div class="right_title"> <span>留学录取优秀案例</span></div>
        <div class="right_slide">
            <ul><!--循环li-->
                <?php foreach($caseList as $v){?>
                <li>
                    <b>•</b>
                    <span><?php echo $v['name']?></span>
                    <div class="clearfix"></div>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
    <script>
        jQuery(".banner_right").slide({mainCell:".right_slide ul",autoPlay:true,effect:"topMarquee",vis:9,interTime:50,trigger:"click"});
    </script>
</section>
<!--申请攻略-->
<section class="Apca_strategy">
    <p class="Record_title">美国留学热门专业申请攻略</p>
    <div class="service_line"></div>
    <div class="strategy_content">
        <div class="business profession"><!--商科-->
            <div class="content_left">
                <span class="pro_name">商科</span>
                <div class="pro_icon"></div>
                <div class="pro_st"><a href="">定制攻略</a></div>
            </div>
            <div class="content_right">
                <ul><!--循环li-->
                    <?php foreach($news['business'] as $v){?>
                    <li>
                        <b>•</b>
                        <span><?php echo $v['name']?></span>
                        <div class="clearfix"></div>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="science profession"><!--理科-->
            <div class="content_left">
                <span class="pro_name">理科</span>
                <div class="pro_icon"></div>
                <div class="pro_st"><a href="">定制攻略</a></div>
            </div>
            <div class="content_right">
                <ul><!--循环li-->
                    <?php foreach($news['science'] as $v){?>
                        <li>
                            <b>•</b>
                            <span><?php echo $v['name']?></span>
                            <div class="clearfix"></div>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="abroad_stu"><!--留学动态 专业解析-->
            <div class="abroad_title">
                <div class="abroad_name on">留学动态</div>
                <div class="abroad_name">专业解析</div>
            </div>
            <div class="abroad_stu_slide slideshow"><!--留学动态-->
                <ul><!--循环li-->
                    <?php foreach($news['abroad'] as $v){?>
                    <li>
                        <b>•</b>
                        <span><?php echo $v['name']?></span>
                        <div class="clearfix"></div>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div class="abroad_stu_slide_1 slideshow"><!--专业解析-->
                <ul><!--循环li-->
                    <?php foreach($news['major'] as $v){?>
                    <li>
                        <b>•</b>
                        <span><?php echo $v['name']?></span>
                        <div class="clearfix"></div>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="science profession m20"><!--工科-->
            <div class="content_left">
                <span class="pro_name">金融</span>
                <div class="pro_icon"></div>
                <div class="pro_st"><a href="">定制攻略</a></div>
            </div>
            <div class="content_right">
                <ul><!--循环li-->
                    <?php foreach($news['finance'] as $v){?>
                        <li>
                            <b>•</b>
                            <span><?php echo $v['name']?></span>
                            <div class="clearfix"></div>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="science profession m20"><!--文科-->
            <div class="content_left">
                <span class="pro_name">文科</span>
                <div class="pro_icon"></div>
                <div class="pro_st"><a href="">定制攻略</a></div>
            </div>
            <div class="content_right">
                <ul><!--循环li-->
                    <?php foreach($news['arts'] as $v){?>
                        <li>
                            <b>•</b>
                            <span><?php echo $v['name']?></span>
                            <div class="clearfix"></div>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="united m20"><!--美国留学专业推荐-->
            <div class="united_title"><span>|</span> 美国留学专业推荐</div>
            <div class="united_slide">
                <ul>
                    <li>
                        <div class="unitedImg"><img src="/cn/images/ceshi.png" alt=""></div>
                        <p>专业介绍:<span>美国留学如何成功申请心理学科目等等等你的歌</span></p>
                        <p>推荐理由:<span>美国留学如何成功申请心理学科目等等等你的歌</span></p>
                    </li>
                    <li>
                        <div class="unitedImg"><img src="/cn/images/ceshi.png" alt=""></div>
                        <p>专业介绍:<span>嘻嘻哈哈</span></p>
                        <p>推荐理由:<span>美国留学如何成功申请心理学科目等等等你的歌</span></p>
                    </li>
                    <li>
                        <div class="unitedImg"><img src="/cn/images/ceshi.png" alt=""></div>
                        <p>专业介绍:<span>每天起床第一句 先为自己打个气</span></p>
                        <p>推荐理由:<span>美国留学如何成功申请心理学科目等等等你的歌</span></p>
                    </li>
                </ul>
            </div>
            <i class="prev iconfont">&#xe608;</i>
            <i class="next iconfont">&#xe607;</i>
        </div>
    </div>
    <script>
        jQuery(".profession").slide({mainCell:".content_right ul",autoPlay:true,effect:"topMarquee",vis:6,interTime:50,trigger:"click"});
        $('.abroad_name').click(function () {
            var index = $(this).index();
            $('.abroad_name').removeClass('on');
            $(this).addClass('on');
            $('.slideshow').hide();
            $('.slideshow').eq(index).show()
        })
        jQuery(".abroad_stu").slide({mainCell:".abroad_stu_slide ul",autoPlay:true,effect:"topMarquee",vis:5,interTime:50,trigger:"click"});
        jQuery(".abroad_stu").slide({mainCell:".abroad_stu_slide_1 ul",autoPlay:true,effect:"topMarquee",vis:5,interTime:50,trigger:"click"});
        jQuery(".united").slide({mainCell:".united_slide ul",effect:"leftLoop",autoPlay:true});
    </script>
</section>
<!--最新活动-->
<section class="latest_ac">
    <p class="Record_title">最新活动</p>
    <div class="service_line"></div>
    <div class="ac_content">
        <ul><!--循环li-->
            <?php foreach($active as $v){?>
            <li>
                <img src="" alt="">
                <div class="ac_intro">
                    <p class="offer">< 重大优惠 ></p>
                    <p class="words"><?php echo $v['name']?></p>
                    <a href="">查看详情</a>
                    <a href="" class="m0">立即报名</a>
                </div>
            </li>
            <?php }?>
        </ul>
    </div>
</section>
<!--美国留学热门项目-->
<section class="hot_items">
    <p class="Record_title">美国留学热门项目</p>
    <div class="service_line"></div>
    <div class="hot_content">
        <ul>
            <?php foreach($abroadPro as $v){?>
            <li>
                <img class="hotImg" src="http://www.thinkwithu.com<?php echo $v['image']?>" alt="">
                <a href=""><?php echo $v['name']?> <span><i class="iconfont">&#xe600;</i></span></a>
            </li>
            <?php }?>
        </ul>
    </div>
</section>
<!--背景提升项目-->
<section class="improvement">
    <p class="Record_title">背景提升项目</p>
    <div class="service_line"></div>
    <div class="impro_content">
        <div class="impro_title">
            <ul>
                <li class="on">国外实习</li>
                <li>国内实习</li>
                <li>海外就业</li>
                <li>国外游学</li>
                <li>科研实习</li>
                <li>公益项目</li>
            </ul>
        </div>
    </div>
</section>
<!--美国留学成功案例-->
<section class="successCase">
    <p class="Record_title">美国留学成功案例</p>
    <div class="service_line"></div>
    <div class="case_content">
        <div class="casebd">
            <ul><!--外层循环li 内层循环div case_cover-->
                <li class="case_cover">
                    <div>
                        <div class="case_tx"><img src="" alt=""></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"><img src="" alt=""></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"><img src="" alt=""></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"><img src="" alt=""></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"><img src="" alt=""></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"><img src="" alt=""></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                </li>
                <li class="case_cover">
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                </li>
                <li class="case_cover">
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                </li>
                <li class="case_cover">
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                    <div>
                        <div class="case_tx"></div>
                        <p class="case_name">成都朱同学</p>
                        <p class="case_intro">斩获商学院MBA</p>
                        <p class="case_school">录取院校:商学院</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="casehd">
            <ul><!--循环li-->
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
            </ul>
            <i class="prev iconfont">&#xe608;</i>
            <i class="next iconfont">&#xe607;</i>
        </div>
    </div>
    <script>
        jQuery(".case_content").slide({titCell:'.casehd ul li',mainCell:".casebd ul",effect:"leftLoop",autoPlay:false});
    </script>
</section>
<!--美国留学考试提分课程-->
<section class="scoring">
    <div class="scoring_content">
        <p class="Record_title">美国留学考试提分课程</p>
        <div class="service_line"></div>
        <div class="scoring_course">
            <a href="">
                <p>GMAT 700 分</p>
                <p>冲刺课程</p>
            </a>
            <a href="">
                <p>GRE 330 分</p>
                <p>冲刺课程</p>
            </a>
            <a href="">
                <p>托福 110 分</p>
                <p>冲刺课程</p>
            </a>
            <a href="">
                <p>SAT 精品</p>
                <p>冲刺课程</p>
            </a>
            <a href="">
                <p>雅思一对一</p>
                <p>精品课</p>
            </a>
        </div>
    </div>
</section>
<!--申友留学王牌名师-->
<section class="teacher">
    <p class="Record_title">申友留学王牌名师</p>
    <div class="service_line"></div>
    <div class="teacher_content">
        <ul>
            <li>
                <div class="teacher_img"><img src="" alt=""></div>
                <p class="teacher_name">sharron</p>
                <div class="teacher_intro">
                    申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师
                </div>
                <div class="btn">
                    <a href="" class="yy">立即预约</a>
                    <a href="" class="sq">申请案例</a>
                </div>
            </li>
            <li>
                <div class="teacher_img"><img src="" alt=""></div>
                <p class="teacher_name">sharron</p>
                <div class="teacher_intro">
                    申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师
                </div>
                <div class="btn">
                    <a href="" class="yy">立即预约</a>
                    <a href="" class="sq">申请案例</a>
                </div>
            </li>
            <li>
                <div class="teacher_img"><img src="" alt=""></div>
                <p class="teacher_name">sharron</p>
                <div class="teacher_intro">
                    申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师
                </div>
                <div class="btn">
                    <a href="" class="yy">立即预约</a>
                    <a href="" class="sq">申请案例</a>
                </div>
            </li>
            <li>
                <div class="teacher_img"><img src="" alt=""></div>
                <p class="teacher_name">sharron</p>
                <div class="teacher_intro">
                    申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师
                </div>
                <div class="btn">
                    <a href="" class="yy">立即预约</a>
                    <a href="" class="sq">申请案例</a>
                </div>
            </li>
            <li>
                <div class="teacher_img"><img src="" alt=""></div>
                <p class="teacher_name">sharron</p>
                <div class="teacher_intro">
                    申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师申友留学王牌名师
                </div>
                <div class="btn">
                    <a href="" class="yy">立即预约</a>
                    <a href="" class="sq">申请案例</a>
                </div>
            </li>
        </ul>
        <a class="next"><i class="iconfont next_icon">&#xe602;</i></a>
        <a class="prev"><i class="iconfont prev_icon">&#xe601;</i></a>
    </div>
    <script>
        jQuery(".teacher").slide({mainCell:".teacher_content ul",effect:"leftLoop",autoPlay:true,vis:4,scroll:1});
    </script>
</section>