<link rel="stylesheet" href="/cn/css/gmatSheet.css"/>
<script type="text/javascript" src="/cn/js/gmatSheet.js"></script>

<!--banner-->
<section class="gmatBanner">
    <div class="banner_cover">
        <img src="http://www.thinkwithu.com//files/attach/images/20170217/1487326104547250.png" alt="">
    </div>
</section>
<!--Gmat第一个板块-->
<section class="Course_section">
    <ul>
        <?php
        if(isset($course['data']['headCourse'])){
            foreach($course['data']['headCourse'] as $k=>$v){
                if($k<6){?>
                    <li>
                        <img class="Course_img" src="/cn/images/gmat_erji.png" alt="">
                        <p><?php echo $v['title']?></p>
                        <a href="<?php echo 'http://www.gmatonline.cn'.$v['detailUrl']?>" target="_blank">查看课程</a>
                        <a href="<?php echo $v['url']?>" target="_blank">试听课程</a>
                    </li>
                <?php }
            }
        }?>
    </ul>
</section>
<!--GMAT出分课程-->
<section class="fraction">
    <div class="fraction_title">
        <h1>99%GMAT 考生出分课程</h1>
        <p>方法课程 + 科学刷题 + 真题精讲 + 模考报告,更高效 ！</p>
    </div>
    <div class="fraction_content">
        <div class="content_hd hd">
            <ul>
                <li><p>经典课程</p></li>
                <li><p>直播课程</p></li>
                <li><p>视频课程</p></li>
                <li><p>面授课程</p></li>
                <li><p>习题课程</p></li>
                <li><p>留学套餐</p></li>
            </ul>
        </div>
        <div class="fraction_details">
<!--            <div class="content_bd_left">-->
<!--                <div class="left_name">课程名称</div>-->
<!--                <div class="left_price">价格</div>-->
<!--                <div class="left_value">性价比</div>-->
<!--                <div class="left_startTime">开课时间</div>-->
<!--                <div class="left_Time">课程时长</div>-->
<!--                <div class="left_try">试听</div>-->
<!--                <div class="left_sign">报名</div>-->
<!--            </div>-->
            <div class="content_bd bd">
<!--                --><?php // if(isset($course['data']['mainCourse'])){
//                    foreach($course['data']['mainCourse'] as $k=>$v){?>
                        <ul><!--循环ul-->
                            <li>
                                <div class="fraction_name"><!--课程名称-->
                                    <div class="left_name">课程名称</div>
                                    <div class="couse">GAMT 晚间强化方法课</div>
                                    <div class="couse">GAMT 晚间强化方法课</div>
                                    <div class="couse">GAMT 晚间强化方法课</div>
                                    <div class="couse">GAMT 晚间强化方法课</div>
                                    <div class="couse">GAMT 晚间强化方法课</div>
                                    <div class="couse">GAMT 晚间强化方法课</div>
                                </div>
                                <div class="fraction_price"><!--课程价格-->
                                    <div class="left_price">价格</div>
                                    <div>¥9000¥9000¥9000¥9000¥9000</div>
                                    <div>¥9000</div>
                                    <div>¥9000</div>
                                    <div>¥9000</div>
                                    <div>¥9000</div>
                                    <div>¥9000</div>
                                </div>
                                <div class="fraction_value"><!--性价比-->
                                    <div class="left_value">性价比</div>
                                    <div>112元/课时112元/课时112元/课时112元/课时</div>
                                    <div>112元/课时</div>
                                    <div>112元/课时</div>
                                    <div>112元/课时</div>
                                    <div>112元/课时</div>
                                    <div>112元/课时</div>
                                </div>
                                <div class="fraction_startTime"><!--开课时间-->
                                    <div class="left_startTime">开课时间</div>
                                    <div>7月31日7月31日7月31日7月31日</div>
                                    <div>7月31日7月31日7月31日7月31日</div>
                                    <div>7月31日7月31日7月31日7月31日</div>
                                    <div>7月31日7月31日7月31日7月31日</div>
                                    <div>7月31日7月31日7月31日7月31日</div>
                                    <div>7月31日7月31日7月31日7月31日</div>
                                </div>
                                <div class="fraction_Time"><!--课程时长-->
                                    <div class="left_Time">课程时长</div>
                                    <div>30+50课程</div>
                                    <div>30+50课程</div>
                                    <div>30+50课程</div>
                                    <div>30+50课程</div>
                                    <div>30+50课程</div>
                                    <div>30+50课程</div>
                                </div>
                                <div class="fraction_try"><!--试听-->
                                    <div class="left_try">试听</div>
                                    <div><a href="" target="_blank">试听</a></div>
                                    <div><a href="" target="_blank">试听</a></div>
                                    <div><a href="" target="_blank">试听</a></div>
                                    <div><a href="" target="_blank">试听</a></div>
                                    <div><a href="" target="_blank">试听</a></div>
                                    <div><a href="" target="_blank">试听</a></div>
                                </div>
                                <div class="fraction_sign"><!--报名-->
                                    <div class="left_sign">报名</div>
                                    <div><a href="" target="_blank">立即报名</a></div>
                                    <div><a href="" target="_blank">立即报名</a></div>
                                    <div><a href="" target="_blank">立即报名</a></div>
                                    <div><a href="" target="_blank">立即报名</a></div>
                                    <div><a href="" target="_blank">立即报名</a></div>
                                    <div><a href="" target="_blank">立即报名</a></div>
                                </div>
                            </li>
                        </ul>
<!--                    --><?php //}
//                }?>
                <ul>
                    第2页
                </ul>
                <ul>
                    第3页
                </ul>
                <ul>
                    第4页
                </ul>
                <ul>
                    第5页
                </ul>
                <ul>
                    第6页
                </ul>
            </div>
        </div>
    </div>
</section>
<!--GMAT提分展示-->
<section class="Score ruhe-tifen">
    <p class="Score_title">申友GAMT如何帮你提分,我们更懂你</p>
    <ul>
        <li class="anne-flex on">
            <div class="shu-div">
                <div class="number" style="margin: 30px auto 20px auto;">1</div>
                <div class="font_b">
                    三阶段针对性学习体系
                </div>
            </div>
            <div class="heng-div anne-flex">
                <div>
                    <p>课前个性化预习方案、完善备考资料、快速入门</p>
                    <p>课中全科考点系统授课、搭建商科逻辑思维、简单有<br>效的解题方法</p>
                    <p>课后真题精讲、直播答疑、机经预测冲刺、模考测验、<br>1V1冲刺提分课程</p>
                </div>
            </div>
        </li>
        <li class="anne-flex">
            <div class="shu-div">
                <div class="number">2</div>
                <div class="font_b">
                    简单高效上课方式
                </div>
            </div>
            <div class="heng-div anne-flex">
                <div>
                    <p>全程小班实时仿真直播教室</p>
                    <p>课堂高效与老师1V1答疑</p>
                    <p>课后回看视频巩固学习</p>
                </div>
            </div>
        </li>
        <li class="anne-flex">
            <div class="shu-div">
                <div class="number">3</div>
                <div class="font_b">
                    学习管家优质服务
                </div>
            </div>
            <div class="heng-div anne-flex">
                <div>
                    <p>辅导老师全程督导直到出分 </p>
                    <p>班级群随时答疑讨论</p>
                    <p>短期备考冲刺复习计划</p>
                    <p>考试报名1V1指导</p>
                </div>
            </div>
        </li>
        <li class="anne-flex">
            <div class="shu-div">
                <div class="number">4</div>
                <div class="font_b">
                    智能刷题模考系统
                </div>
            </div>
            <div class="heng-div anne-flex">
                <div>
                    <p>申友GMAT提供必备题库 </p>
                    <p style="margin-top: 15px;">包含单项、考点、难度题库 </p>
                    <p style="margin-top: 15px;">个性化做题报告与备考建议 </p>
                    <p style="margin-top: 15px;">100+充足模考套题练习pace </p>
                    <p style="margin-top: 15px;">模考LGSR成绩单助力提升 </p>
                    <p style="margin-top: 15px;">系统的错题记录与学习轨迹</p>
                </div>
            </div>
        </li>
        <li class="anne-flex">
            <div class="shu-div">
                <div class="number">5</div>
                <div class="font_b">
                    刷题活动抱团提升
                </div>
            </div>
            <div class="heng-div anne-flex">
                <div>
                    <p>每周1次提升刷题团</p>
                    <p>精选经典高难题库</p>
                    <p>老师直播答疑讲解 </p>
                    <p>与战友趣味学习提升</p>
                </div>
            </div>
        </li>
    </ul>
</section>
<!--GMAT高分学员-->
<section class="high_score_student">
    <div class="xueyuan-say">
        <h2>看申友GMAT高分学员如何说</h2>
        <div class="xueyuan-box">
            <a href="/case/case.html" class="more-x">more>></a>
            <div class="xuey-hd">
                <ul></ul>
            </div>
            <div class="xuey-bd">
                <!--循环ul-->
                <?php foreach($case as $v){?>
                    <ul>
                        <li>
                            <div class="video-slide anne-flex">
                                <div class="left-video">
                                    <img
                                        src="http://www.thinkwithu.com<?php echo $v['image']?>"
                                        alt="图片"/>
                                </div>
                                <div class="right-vInfo">
                                    <div class="top-vi">
                                        <b><?php echo $v['name']?></b>
                                        <b>分数：<?php echo $v['score']?></b>
                                    </div>
                                    <div class="center-bor anne-flex">
                                        <div>
<!--                                            <p>出分时间：--><?php //echo $v['time']?><!--</p>-->

                                            <p>班型：<?php echo $v['flag']?></p>
                                        </div>
                                        <div>
                                            <p>出分时间：9月30日</p>
<!--                                            <p>考试次数：2次</p>-->
                                        </div>
                                    </div>
                                    <div class="bot-last">
                                        <?php echo $v['title']?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                <?php } ?>
            </div>
        </div>
        <script type="text/javascript">

        </script>
    </div>
</section>

<script>
    //课程板块
    jQuery(".fraction_content").slide({});
    //高分学员
    jQuery(".xueyuan-box").slide({titCell:".xuey-hd ul",mainCell:".xuey-bd",autoPlay:true,autoPage:"<li></li>",effect:"leftLoop"});
    $(function () {
//        手风琴效果
        $(".ruhe-tifen ul li").bind({
            "mouseenter":function () {
                $(this).addClass("on").siblings().removeClass("on");
            }

        });
    });

</script>