
<link rel="stylesheet" href="/cn/css/toeflSheet.css"/>
<script type="text/javascript" src="/cn/js/toeflSheet.js"></script>
<title>tuofu11111-申友网</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="keywords" content="tuofutuofu">
<div>
    <div class="course-bnr">
        <ul class="clearfix">
            <li>
                <a href="http://bjsy.gensee.com/training/site/v/73007567?nickname=XXX" target="_blank">
                    <p>托福听力试听课</p>
                </a>
            </li>
            <li>
                <a href="http://bjsy.gensee.com/training/site/v/08407218?nickname=XXX" target="_blank">
                    <p>托福阅读试听课</p>
                </a>
            </li>
            <li>
                <a href="http://bjsy.gensee.com/training/site/v/76717754?nickname=XXX" target="_blank">
                    <p>托福写作试听课</p>
                </a>
            </li>
            <li>
                <a href="http://bjsy.gensee.com/training/site/v/03507811?nickname=XXX" target="_blank">
                    <p>托福口语试听课</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<!--课程-->
<section class="fraction">
    <div class="fraction_title course-cnt">
        <p class="pub-title-h3">申友托福课程</p>
        <p class="pub-title-h5">名师课程+科学做题+辅导答疑+模考测评，更高效</p>
        <ul class="course-icon clearfix">
            <li class="item">
                <div></div>
                <p>直播</p>
            </li>
            <li class="item">
                <div></div>
                <p>录播</p>
            </li>
            <li class="item">
                <div></div>
                <p>面授</p>
            </li>
            <li class="item">
                <div></div>
                <p>1V1</p>
            </li>
            <li class="item">
                <div></div>
                <p>TPO精讲</p>
            </li>
            <li class="item">
                <div></div>
                <p>机经班</p>
            </li>
            <li class="item">
                <div></div>
                <p>课后答疑</p>
            </li>
            <li class="item">
                <div></div>
                <p>学管服务</p>
            </li>
            <li class="item">
                <div></div>
                <p>模考报考</p>
            </li>
        </ul>
    </div>
    <div class="fraction_content">
        <div class="content_hd hd">
            <ul>
                <li class="on"><p>经典课程</p></li>
                <li class=""><p>直播课程</p></li>
                <li class=""><p>录播课程</p></li>
                <li class=""><p>面授课程</p></li>
                <li class=""><p>精讲课程</p></li>
            </ul>
        </div>
        <div class="content_bd bd">
            <?php foreach($course['dataCourse'] as $key=> $val){?>
            <ul>
                <div class="fraction_details">
                    <div class="fraction_name"><!--课程名称-->
                        <div class="left_name">课程名称</div>
                        <?php foreach($val as $v){?>
                        <div class="couse"><a href="" target="_blank"><?php echo $v['name']?></a></div>
                        <?php }?>
                    </div>
                    <div class="fraction_price"><!--课程价格-->
                        <div class="left_price">价格</div>
                        <?php foreach($val as $v){?>
                            <div><?php echo (isset($v['price'])&&is_numeric($v['price'])&&$v['price']!=false)?$v['price']:'咨询详情'?></div>
                        <?php }?>
                    </div>
                    <div class="fraction_value"><!--性价比-->
                        <div class="left_value">性价比</div>
                        <?php foreach($val as $v){?>
                            <div><?php echo (isset($v['duration'])&&(int)$v['duration']!=false&&isset($v['price'])&&is_numeric($v['price']))?ceil($v['price']/(int)$v['duration']).'元/课时':'咨询详情'?></div>
                        <?php }?>
                    </div>
                    <div class="fraction_startTime"><!--开课时间-->
                        <div class="left_startTime">开课时间</div>
                        <?php foreach($val as $v){?>
                            <div><?php echo (isset($v['commencement'])&&$v['commencement']!=false)?$v['commencement']:'咨询详情'?></div>
                        <?php }?>
                    </div>
                    <div class="fraction_Time"><!--课程时长-->
                        <div class="left_Time">课程时长</div>
                        <?php foreach($val as $v){?>
                            <div><?php echo isset($v['duration'])?$v['duration']:'咨询详情'?></div>
                        <?php }?>
                    </div>
                    <div class="fraction_try"><!--试听-->
                        <div class="left_try">试听</div>
                        <?php foreach($val as $v){?>
                            <div><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">试听</a></div>
                        <?php }?>
                    </div>
                    <div class="fraction_sign"><!--报名-->
                        <div class="left_sign">报名</div>
                        <?php foreach($val as $v){?>
                            <div><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">立即报名</a></div>
                        <?php }?>
                    </div>
                </div>
            </ul>
            <?php }?>
        </div>
        <div class="course-flow">
            <p class="pub-title-h3">服务流程</p>
            <p class="pub-title-h5">申友托福F-inspire服务体系，课前-课中-课后三阶段超值服务</p>
            <ul class="cnt clearfix">
                <li>
                    <p>课前</p>
                    <div>
                        <p>1.初步咨询，入学测评，对症下药</p>
                        <p>2.测评解析，定制课程，预习规划</p>
                        <p>3.赠送教材，分享资料，学管跟进</p>
                    </div>
                </li>
                <li>
                    <p>课中</p>
                    <div>
                        <p>1.申友托福名师，精品小班/VIP授课</p>
                        <p>2.复习方案私人制定，阶段作业检测</p>
                        <p>3.建立学员档案，每周回访备考情况</p>
                    </div>
                </li>
                <li>
                    <p>课后</p>
                    <div>
                        <p>1.TPO讲练，口语点评，作文精批，机经</p>
                        <p>2.考前报名辅导，专题辅导，心理辅导</p>
                        <p>3.托福送分/复议指导，出国留学规划指导</p>
                    </div>
                </li>
            </ul>
        </div>
</section>
<!-- 学习保障-->
<section class="security">
    <p class="pub-title-h3">学习保障</p>
    <div class="study-wrap">
        <ul class="clearfix">
            <li>
                <div class="study-num">
                    NO.1
                </div>
                <div class="study-font clearfix">
                    <h3>精准化测试评估</h3>
                    <p>严格的托福入学测试，专业评估学生的语言学习能力和
                        水平，对症下药。</p>
                </div>
            </li>
            <li>
                <div class="study-num">
                    NO.2
                </div>
                <div class="study-font clearfix">
                    <h3>个性化课程规划</h3>
                    <p>根据测试结果，申友托福教师1对1面谈，科学配置课程，
                        定制预习和考试方案。</p>
                </div>
            </li>
            <li>
                <div class="study-num">
                    NO.3
                </div>
                <div class="study-font clearfix">
                    <h3>专业化托福名师团队</h3>
                    <p>申友托福拥有海内外名校名师团队，专注托福教研体系
                        搭建，教学体系优化，为学生提供系统化知识结构，提
                        高答题技巧和语言能力。</p>
                </div>
            </li>
            <li>
                <div class="study-num">
                    NO.4
                </div>
                <div class="study-font clearfix">
                    <h3>课程体系完善,O2O授课模式</h3>
                    <p>申友托福课程有基础班、强化班、冲刺班、VIP课等多种
                        班型；免费试听、小班面授，VIP提分、直播课，录播课，
                        免费公开课多层次课程。</p>
                </div>
            </li>
            <li>
                <div class="study-num">
                    NO.5
                </div>
                <div class="study-font clearfix">
                    <h3>学管师服务,全程陪伴</h3>
                    <p>学管师全程陪伴学员备考，建立学员档案，每周定期回
                        访备考情况，做题、模考等作业完成情况。搜集家长和
                        学员的意见建议，调整备考状态。</p>
                </div>
            </li>
            <li>
                <div class="study-num">
                    NO.6
                </div>
                <div class="study-font clearfix">
                    <h3>免费辅导自习,实时答疑</h3>
                    <p>在非上课时间，可通过语音答疑、社区答疑、名师在线答
                        疑等多种方式实时答疑解惑，按要求高效完成老师布置的
                        作业，分阶段诊断式检查和分析。</p>
                </div>
            </li>
            <li>
                <div class="study-num">
                    NO.7
                </div>
                <div class="study-font clearfix">
                    <h3>托福在线做题,模考平台</h3>
                    <p>申友托福一站式在线学习平台，PC+WAP+APP智能组合，提供托福TPO在线仿真模考、听说读写分科练习，智能测评，资料下载等学习服务，帮助考生集中有效时间，利用碎片时间，随时随地备考托福。</p>
                </div>
            </li>
            <li>
                <div class="study-num">
                    NO.8
                </div>
                <div class="study-font clearfix">
                    <h3>自主研发专业教材</h3>
                    <p>
                        申友托福拥有强大的学术研究与教学服务中心，雷哥Kevin领携海内外一线托福名师团队，自主研发托福系列高分教材，如《雷哥托福高分培训教材》《写作精批手册》《听力满分笔记》等，迎合ETS改革，有效指导学员高分备考。</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- 公开课-->
<section class="open-class">
    <p class="pub-title-h3">各种留学考试问题尽在申友网公开课</p>
    <p class="pub-title-h5">在线学习更有效</p>
    <ul class="clearfix">
        <?php foreach($course['active'] as $v){?>
        <li>
            <div class="img">
                <img src="http://toefl.viplgw.cn<?php echo $v['image']?>" alt="">
            </div>
            <p class="openClassTitle"><?php echo $v['name']?></p>
            <p class="openClassTime"><?php echo $v['commencement']?></p>
            <div class="open-details">
                <a class="m15" href="<?php echo $v['url']?>">查看详情</a>
                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">点击报名</a>
            </div>
        </li>
        <?php }?>
    </ul>
</section>
<!--名师团队-->
<section class="teacher_index">
    <div class="w12">
        <div class="tm gmatsub_tit">
            <h1>申友网名师与你同行</h1>
        </div>
        <div class="picFocus">
            <div class="bd" id="tabBox1-bd">
                <ul class="tinter_wrap"><!--循环li-->
                    <?php foreach($course['teachers'] as $v){?>
                    <li class="tout_wrap relative">
                        <div class="teacher_info_wrap">
                            <p class="t_name"><?php echo $v['name']?></p>
                            <div class="teacher_tag">
<!--                                <span>GMAT</span>-->
<!--                                <span>留学</span>-->
<!--                                <span>职业规划家</span>-->
<!--                                <span>英语教育名家</span>-->
                                <?php echo $v['performance']?>
                            </div>
                            <div class="teacher_cg">
                            <?php echo $v['description']?>
                            </div>

                        </div>
                        <div class="teacher_index_big_head ani">
                            <img src="http://toefl.viplgw.cn<?php echo $v['image']?>" alt="托福名师"/>
                        </div>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div class="hd hd_repleate">
                <div class="prev pre_btn"><img src="/cn/images/gmatImages/bk4_crow_left.png" alt=""></div>
                <div class="next pre_btn"><img src="/cn/images/gmatImages/bk4_crow_right.png" alt=""></div>
                <div class="picMarquee-left2 relative">
                    <div class="bd" style="width: 720px;margin: auto;">
                        <ul class="teacher_index_head_list flex-container"><!--循环li-->
                            <?php foreach($course['teachers'] as $v){?>
                                <li>
                                    <div class="teacher_index_head_small">
                                        <img src="http://toefl.viplgw.cn<?php echo $v['image']?>" alt="托福名师">
                                    </div>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--GMAT考试工具-->
<div class="tool">
    <ul>
        <li>
            <a href="">
                <span class="one">考试工具</span>
                <span class="two"></span>
            </a>
        </li>
        <li>
            <a href="http://toefl.viplgw.cn/toeflnews/29705.html" target="_blank">
                <span class="zero"></span>
                <span class="one">考试时间</span>
                <span class="two"></span>
            </a>
        </li>
        <li>
            <a href="http://toefl.viplgw.cn/toeflnews/10520.html" target="_blank">
                <span class="zero"></span>
                <span class="one">考试地点</span>
                <span class="two"></span>
            </a>
        </li>
        <li>
            <a href="http://toefl.viplgw.cn/toeflnews/10512.html" target="_blank">
                <span class="zero"></span>
                <span class="one">考试内容</span>
                <span class="two"></span>
            </a>
        </li>
        <li>
            <a href="http://toefl.viplgw.cn/toeflnews/10515.html" target="_blank">
                <span class="zero"></span>
                <span class="one">考试流程</span>
                <span class="two"></span>
            </a>
        </li>
        <li>
            <a href="http://toefl.viplgw.cn/toeflnews/29060.html" target="_blank">
                <span class="zero"></span>
                <span class="one">考试费用</span>
            </a>
        </li>
    </ul>
</div>
<!--课程活动-->
<div class="active">
    <p class="pub-title-h3">课程活动</p>
    <a href="">more >></a>
    <div class="active-wrap wrap clearfix">
        <div class="left">
            <img src="/cn/images/course-active.png" alt="">
        </div>
        <div class="right bd">
            <ul><!--循环li-->
                <?php foreach($course['active'] as $v){?>
                <li>
                    <a href="http://toefl.viplgw.cn/toeflnews/<?php echo $v['id']?>.html" target="_blank">
                        <b><?php echo $v['name']?></b>
<!--                        <p>托福写作中，大家替换掉一些低级词汇，也可以让我们的作文焕然一新，拿到高分。那么具体的哪些词汇可以被替换呢?雷哥托福网为大家整理了这些替换词汇，供大家参考练习。</p>-->
                    </a>
                    <p><?php echo $v['createTime']?></p>
                </li>
                <?php }?>
<!--                <li>-->
<!--                    <a href="">-->
<!--                        <b>如何突破口语瓶颈【雷哥托福】</b>-->
<!--                        <p>托福写作中，大家替换掉一些低级词汇，也可以让我们的作文焕然一新，拿到高分。那么具体的哪些词汇可以被替换呢?雷哥托福网为大家整理了这些替换词汇，供大家参考练习。</p>-->
<!--                    </a>-->
<!--                    <p>2018-09-13 16:57:52</p>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="">-->
<!--                        <b>如何突破口语瓶颈【雷哥托福】</b>-->
<!--                        <p>托福写作中，大家替换掉一些低级词汇，也可以让我们的作文焕然一新，拿到高分。那么具体的哪些词汇可以被替换呢?雷哥托福网为大家整理了这些替换词汇，供大家参考练习。</p>-->
<!--                    </a>-->
<!--                    <p>2018-09-13 16:57:52</p>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="">-->
<!--                        <b>如何突破口语瓶颈【雷哥托福】</b>-->
<!--                        <p>托福写作中，大家替换掉一些低级词汇，也可以让我们的作文焕然一新，拿到高分。那么具体的哪些词汇可以被替换呢?雷哥托福网为大家整理了这些替换词汇，供大家参考练习。</p>-->
<!--                    </a>-->
<!--                    <p>2018-09-13 16:57:52</p>-->
<!--                </li>-->
            </ul>
        </div>
    </div>
</div>


<script>
    //课程
    jQuery(".fraction_content").slide({});
    //名师团队
    jQuery(".picFocus").slide({
        mainCell: ".tinter_wrap",
        effect: "leftLoop",
        interTime: 3000,
        autoPlay: true,
        endFun: function (i) { //高度自适应
            var bd = document.getElementById("tabBox1-bd");
            bd.style.height = bd.children[0].children[0].children[i + 1].offsetHeight + 50 + "px";
            if (i > 0)bd.style.transition = "100ms";//添加动画效果
        }

    });
    jQuery(".picMarquee-left2").slide({
        mainCell: ".bd ul",
        autoPlay: true,
        effect: "leftMarquee",
        vis: 7,
        interTime: 50
    });
    //课程活动
    jQuery(".active-wrap").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:6,interTime:50});
</script>