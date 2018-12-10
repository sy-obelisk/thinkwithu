<link rel="stylesheet" href="/cn/css/course-index.css">

<!--banner-->
<section class="courseBanner">
    <div>
        <img src="/cn/images/itla_banner_03.png" alt="">
    </div>
</section>
<!--课程-->
<section class="courseContent">
    <div class="sixgn-top">
        <p class="courseName">雷哥雅思课程</p>
        <div class="xia"></div>
        <img src="/cn/images/ielts.png">
        <div class="lxia"></div>
        <p class="c_detail">精准测评评估+专业团队配备+个性化规划+完整学习计划</p>
        <div class="course-tb">
            <div class="course-img">
                <div><img src="/cn/images/zb.png" alt=""></div>
                <p>直播</p>
            </div>
            <div class="course-img">
                <div><img src="/cn/images/lb.png" alt=""></div>
                <p>录播</p>
            </div>
            <div class="course-img">
                <div><img src="/cn/images/1v1.png" alt=""></div>
                <p>1v1</p>
            </div>
            <div class="course-img">
                <div><img src="/cn/images/sp.png" alt=""></div>
                <p>真题</p>
            </div>
            <div class="course-img">
                <div><img src="/cn/images/zt.png" alt=""></div>
                <p>学管服务</p>
            </div>
            <div class="course-img">
                <div><img src="/cn/images/xg.png" alt=""></div>
                <p>课后答疑</p>
            </div>
            <div class="course-img">
                <div><img src="/cn/images/kh.png" alt=""></div>
                <p>作文批改</p>
            </div>
            <div class="course-img">
                <div><img src="/cn/images/zwjp.png" alt=""></div>
                <p>口语点评</p>
            </div>
            <div class="course-img">
                <div><img src="/cn/images/kydp.png" alt=""></div>
                <p>机经预测</p>
            </div>
            <div class="course-img">
                <div><img src="/cn/images/jjyc.png" alt=""></div>
                <p>模考备考</p>
            </div>
        </div>
        <div class="fraction_content">
            <div class="content_hd hd">
                <ul>
                    <li class=""><p>雅思单项课程</p></li>
                    <li class=""><p>直播课程</p></li>
                    <li class=""><p>面授课程</p></li>
                    <li class=""><p>视频课程</p></li>
                    <li class=""><p>一对一</p></li>
                </ul>
            </div>
            <div class="content_bd bd">
                <?php foreach($data['course'] as $val){?>
                    <ul>
                        <div class="fraction_details">
                            <div class="fraction_name"><!--课程名称-->
                                <div class="left_name" style=" border-left: 1px solid rgb(190,190,190)!important;">课程名称</div>
                                <?php foreach($val as $v){?>
                                    <!--                                <td><a class="course-name" href="/toeflcourses/--><?php //echo $v['id']?><!--.html">--><?php //echo $v['name']?><!--</a></td>-->
                                    <div class="couse"><a href="http://ielts.viplgw.cn/cn/course/detail-<?php echo $v['id']?>.html"><?php echo $v['name']?></a></div>
                                <?php }?>
                            </div>
                            <div class="fraction_price"><!--课程价格-->
                                <div class="left_price" style=" border-left: 1px solid rgb(190,190,190)!important;">价格</div>
                                <?php foreach($val as $v){?>
                                    <div><?php echo $v['price']?></div>
                                <?php }?>
                            </div>
                            <div class="fraction_value"><!--性价比-->
                                <div class="left_value" style=" border-left: 1px solid rgb(190,190,190)!important;">性价比</div>
                                <?php foreach($val as $v){?>
                                    <div><?php echo (isset($v['cnName'])&&(int)$v['cnName']!=false&&isset($v['price'])&&is_numeric($v['price']))?ceil($v['price']/(int)$v['cnName']).'元/课时':'咨询详情'?></div>
                                <?php }?>
                            </div>
                            <div class="fraction_startTime"><!--开课时间-->
                                <div class="left_startTime" style=" border-left: 1px solid rgb(190,190,190)!important;">开课时间</div>
                                <?php foreach($val as $v){?>
                                    <div><?php echo $v['cnName']?></div>
                                <?php }?>
                            </div>
                            <div class="fraction_Time"><!--课程时长-->
                                <div class="left_Time" style=" border-left: 1px solid rgb(190,190,190)!important;">课程时长</div>
                                <?php foreach($val as $v){?>
                                    <div><?php echo $v['listeningFile']?></div>
                                <?php }?>
                            </div>
                            <div class="fraction_try"><!--试听-->
                                <div class="left_try" style=" border-left: 1px solid rgb(190,190,190)!important;">试听</div>
                                <?php foreach($val as $v){?>
                                    <div>
                                        <a class="immediately" href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">咨询</a>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="fraction_sign"><!--报名-->
                                <div class="left_sign" style=" border-left: 1px solid rgb(190,190,190)!important;">报名</div>
                                <?php foreach($val as $v){?>
                                    <div>
                                        <a  href="http://order.viplgw.cn/pay/order?id=<?php echo $v['id'];?>&num=1&belong=2" target="_blank">立即报名</a>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </ul>
                <?php }?>
            </div>
        </div>
        <script>
            //课程
            jQuery(".fraction_content").slide({});
        </script>
    </div>
</section>
<!--服务流程-->
<section class="courseService">
    <div class="sixgn-top">
        <p class="courseName">服务流程</p>
        <div class="xia"></div>
        <img src="/cn/images/ielts.png">
        <div class="lxia"></div>
        <p class="c_detail">雷哥雅思服务流程体系: 课前-课中-课后三阶段超值服务</p>
    </div>
    <div class="Service_content">
        <div class="k_q">
            <p class="content_title"><span class="cousr-h">课前</span><span class="horizontal"></span></p>
            <p><span class="s_img">1</span><span class="s_words">初步咨询，入学测评，对症下药</span></p>
            <p><span class="s_img">2</span><span class="s_words">测评解析，定制课程，预习规划</span></p>
            <p><span class="s_img">3</span><span class="s_words">赠送教材，分享资料，学管跟进</span></p>
        </div>
        <div class="k_z">
            <p class="content_title"><span class="cousr-h">课中</span><span class="horizontal"></span></p>
            <p><span class="s_img">1</span><span class="s_words">雷哥雅思名师，精品小班/VIP授课</span></p>
            <p><span class="s_img">2</span><span class="s_words">复习方案私人制定，阶段作业检测</span></p>
            <p><span class="s_img">3</span><span class="s_words">建立学员档案，每周回访备考情况</span></p>
        </div>
        <div class="k_h">
            <p class="content_title"><span class="cousr-h">课后</span><span class="horizontal"></span></p>
            <p><span class="s_img">1</span><span class="s_words">真题讲练，口语点评，作文精批，机经</span></p>
            <p><span class="s_img" style="margin-left: -17px">2</span><span class="s_words">考前报名辅导，专题辅导，心理辅导  </span></p>
            <p><span class="s_img" style="margin-left: 8px">3</span><span class="s_words">托福送分/复议指导，出国留学规划指导</span></p>
        </div>
    </div>
</section>
<!--学习保障-->
<section class="Learninguarantee">
    <div class="sixgn-top">
        <p class="courseName">学习保障</p>
        <div class="xia"></div>
        <img src="/cn/images/ielts.png">
        <div class="lxia"></div>
    </div>
    <div style="text-align: center">
        <img src="/cn/images/Learninguarantee.png" alt="学习保障">
    </div>
</section>
<!--公开课-->
<section class="openClass">
    <div class="sixgn-top">
        <p class="courseName">各种留学考试问题尽在申友公开课</p>
        <div class="xia"></div>
        <img src="/cn/images/ielts.png">
        <div class="lxia"></div>
        <p class="c_detail">在线学习更有效</p>
    </div>
    <div class="Activity_Broadcast">
        <div class="bdActivity">
            <ul class="banner">
                <?php $i=0;for($i;$i<ceil(count($data['active'])/4);$i++){?>
                    <li><!--外层循环li-->
                        <?php foreach ($data['active'] as $k => $v) { ?>
                            <?php if ($k >= $i * 4 && $k < ($i + 1) * 4) { ?>
                                <div class="Brushing"><!--内层循环div  Brushing -->
                                    <div class="Brushing_img"><img
                                                src="http://ielts.viplgw.cn<?php echo $v['image']?>"
                                                alt="雅思活动"></div>
                                    <div class="Brushing_cover">
                                        <p class="Brushing_title"><?php echo $v['name'] ?></p>
                                        <div class="Brushing_teacher">老师:<p><?php echo $v['trainer'] ?></p></div>
                                        <p class="Brushing_time">时间:<span><?php echo $v['commencement'] ?></span></p>
                                        <div class="Brushing_sign">
                                            <a href="http://p.qiao.baidu.com/im/index?siteid=7905926&ucid=18329536&cp=&cr=&cw=" class="click_btn">点击报名</a>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } ?>
                    </li>
                <?php }?>
            </ul>
        </div>
        <div class="hd hdActivity">
            <ul><!--循环li-->
                <?php $i=0;for($i;$i<ceil(count($data['active'])/4);$i++){?>
                <li></li>
                <?php }?>
            </ul>
        </div>
    </div>
    <script>
        jQuery(".Activity_Broadcast").slide({
            mainCell: ".bdActivity ul",
            // autoPlay: true,
            effect: "leftLoop",
            trigger: "click",
            delayTime: 1000,
            interTime: 3000,
            mouseOverStop: true
        });
    </script>
</section>
<!--申友名师-->
<section class="teacherCover">
    <div class="sixgn-top">
        <p class="courseName">申友名师与你同行</p>
        <div class="xia"></div>
        <img src="/cn/images/ielts.png">
        <div class="lxia"></div>
        <p class="c_detail">科学高效提分,我们让你成为更好的自己</p>
    </div>
    <div class="teamCover teamCover_1">
        <div><!--上列表-->
            <ul class="tinter_wrap"><!--循环li-->
                <?php foreach($data['teacher'] as $v){?>
                    <li class="Bdcotent">
                        <div class="Bdcotent_left">
                            <p class="teacher_name"><?php echo $v['name']?></p><!--老师名字-->
                            <div class="four_p">主讲:<?php echo $v['listeningFile']?></div><!--主讲课程-->
                            <div class="cotent_intro"><?php echo $v['article']?> </div><!--简介-->
                        </div>
                        <div class="teacher_img"><!--老师头像-->
                            <img src="http://ielts.viplgw.cn<?php echo $v['image']?>" alt="头像">
                        </div>
                    </li>
                <?php }?>
            </ul>
        </div>

        <div class="teamCoverhd"><!--下列表-->
            <i class="iconfont prev">&#xe605;</i>
            <div class="smallImg">
                <ul><!--循环li-->
                    <?php foreach($data['teacher'] as $v){?>
                        <li class="img_cover">
                            <img src="http://ielts.viplgw.cn<?php echo $v['image']?>" alt="头像">
                        </li>
                    <?php }?>
                </ul>
            </div>
            <i class="iconfont next">&#xe606;</i>
        </div>
    </div>
    <script>
        jQuery(".teamCover").slide({
            titCell:".smallImg ul li",
            mainCell:".tinter_wrap",
            effect:"fold",
            interTime:3000,
            mouseOverStop:true,
        });
        jQuery(".teamCover .teamCoverhd").slide({mainCell:".smallImg ul",vis:7,scroll:1,effect:"leftLoop"});
        $('.Bdcotent').mouseover(function () {
            $('.smallImg ul').trigger('mouseover');
        }).mouseout(function () {
            $('.smallImg ul').trigger('mouseout');
        });
        // $('.smallImg ul li.clone').removeClass('on');
    </script>
</section>