<link rel="stylesheet" href="/cn/css/gmatSheet.css"/>
<script type="text/javascript" src="/cn/js/gmatSheet.js"></script>

<!--banner-->
<section class="gmatBanner">
    <div class="banner_cover">
        <img src="/cn/images/gmatImages/gmat-banner.png" alt="">
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

                <ul id="panel" class="flex-column">
                    <li class="flex-cell flex-row course_lm">
                        <div class="flex-cell flex-row">课程名称</div>
                        <div class="flex-cell flex-row">价格</div>
                        <div class="flex-cell flex-row">性价比</div>
                        <div class="flex-cell flex-row">开课时间</div>
                        <div class="flex-cell flex-row">课程时长</div>
                        <div class="flex-cell flex-row">试听</div>
                        <div class="flex-cell flex-row">报名</div>
                    </li>
                    <li class="flex-cell flex-row course_content">
                        <div class="flex-cell flex-row"><a href=""><p>GAMT 晚间强化方法课</p></a></div>
                        <div class="flex-cell flex-row course_price"><p>￥9000 ￥9000 ￥9000 ￥9000 ￥9000</p></div>
                        <div class="flex-cell flex-row course_price"><p>112元/课时 112元/课时 112元/课时 112元/课时</p></div>
                        <div class="flex-cell flex-row"><p>7月31日 7月31日 7月31日 7月31日</p></div>
                        <div class="flex-cell flex-row"><p>80课时+文书创作时间+80课时+文书创作时间</p></div>
                        <div class="flex-cell flex-row course_try"><a href="">试听</a></div>
                        <div class="flex-cell flex-row course_sign"><a href="">立即报名</a></div>
                    </li>
                    <li class="flex-cell flex-row course_content">
                        <div class="flex-cell flex-row"><a href=""><p>GAMT 晚间强化方法课</p></a></div>
                        <div class="flex-cell flex-row course_price"><p>￥9000 ￥9000 ￥9000 ￥9000 ￥9000</p></div>
                        <div class="flex-cell flex-row course_price"><p>112元/课时 112元/课时 112元/课时 112元/课时</p></div>
                        <div class="flex-cell flex-row"><p>7月31日 7月31日 7月31日 7月31日</p></div>
                        <div class="flex-cell flex-row"><p>80课时+文书创作时间+80课时+文书创作时间</p></div>
                        <div class="flex-cell flex-row course_try"><a href="">试听</a></div>
                        <div class="flex-cell flex-row course_sign"><a href="">立即报名</a></div>
                    </li>
                    <li class="flex-cell flex-row course_content">
                        <div class="flex-cell flex-row"><a href=""><p>GAMT 晚间强化方法课</p></a></div>
                        <div class="flex-cell flex-row course_price"><p>￥9000 ￥9000 ￥9000 ￥9000 ￥9000</p></div>
                        <div class="flex-cell flex-row course_price"><p>112元/课时 112元/课时 112元/课时 112元/课时</p></div>
                        <div class="flex-cell flex-row"><p>7月31日 7月31日 7月31日 7月31日</p></div>
                        <div class="flex-cell flex-row"><p>80课时+文书创作时间+80课时+文书创作时间</p></div>
                        <div class="flex-cell flex-row course_try"><a href="">试听</a></div>
                        <div class="flex-cell flex-row course_sign"><a href="">立即报名</a></div>
                    </li>
                    <li class="flex-cell flex-row course_content">
                        <div class="flex-cell flex-row"><a href=""><p>GAMT 晚间强化方法课</p></a></div>
                        <div class="flex-cell flex-row course_price"><p>￥9000 ￥9000 ￥9000 ￥9000 ￥9000</p></div>
                        <div class="flex-cell flex-row course_price"><p>112元/课时 112元/课时 112元/课时 112元/课时</p></div>
                        <div class="flex-cell flex-row"><p>7月31日 7月31日 7月31日 7月31日</p></div>
                        <div class="flex-cell flex-row"><p>80课时+文书创作时间+80课时+文书创作时间</p></div>
                        <div class="flex-cell flex-row course_try"><a href="">试听</a></div>
                        <div class="flex-cell flex-row course_sign"><a href="">立即报名</a></div>
                    </li>
                    <li class="flex-cell flex-row course_content">
                        <div class="flex-cell flex-row"><a href=""><p>GAMT 晚间强化方法课</p></a></div>
                        <div class="flex-cell flex-row course_price"><p>￥9000 ￥9000 ￥9000 ￥9000 ￥9000</p></div>
                        <div class="flex-cell flex-row course_price"><p>112元/课时 112元/课时 112元/课时 112元/课时</p></div>
                        <div class="flex-cell flex-row"><p>7月31日 7月31日 7月31日 7月31日</p></div>
                        <div class="flex-cell flex-row"><p>80课时+文书创作时间+80课时+文书创作时间</p></div>
                        <div class="flex-cell flex-row course_try"><a href="">试听</a></div>
                        <div class="flex-cell flex-row course_sign"><a href="">立即报名</a></div>
                    </li>
                    <li class="flex-cell flex-row course_content">
                        <div class="flex-cell flex-row"><a href=""><p>GAMT 晚间强化方法课</p></a></div>
                        <div class="flex-cell flex-row course_price"><p>￥9000 ￥9000 ￥9000 ￥9000 ￥9000</p></div>
                        <div class="flex-cell flex-row course_price"><p>112元/课时 112元/课时 112元/课时 112元/课时</p></div>
                        <div class="flex-cell flex-row"><p>7月31日 7月31日 7月31日 7月31日</p></div>
                        <div class="flex-cell flex-row"><p>80课时+文书创作时间+80课时+文书创作时间</p></div>
                        <div class="flex-cell flex-row course_try"><a href="">试听</a></div>
                        <div class="flex-cell flex-row course_sign"><a href="">立即报名</a></div>
                    </li>
                    <li class="flex-cell flex-row course_content">
                        <div class="flex-cell flex-row"><a href=""><p>GAMT 晚间强化方法课</p></a></div>
                        <div class="flex-cell flex-row course_price"><p>￥9000 ￥9000 ￥9000 ￥9000 ￥9000</p></div>
                        <div class="flex-cell flex-row course_price"><p>112元/课时 112元/课时 112元/课时 112元/课时</p></div>
                        <div class="flex-cell flex-row"><p>7月31日 7月31日 7月31日 7月31日</p></div>
                        <div class="flex-cell flex-row"><p>80课时+文书创作时间+80课时+文书创作时间</p></div>
                        <div class="flex-cell flex-row course_try"><a href="">试听</a></div>
                        <div class="flex-cell flex-row course_sign"><a href="">立即报名</a></div>
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
    </div>
</section>
<!--GMAT名师团队-->
<section class="teacher_index">
    <div class="w12">
        <div class="tm gmatsub_tit">
            <h1>申友网名师与你同行</h1>
        </div>
        <div class="picFocus">
            <div class="bd" id="tabBox1-bd">
                <ul class="tinter_wrap"><!--循环li-->
                    <li class="tout_wrap relative">
                        <div class="teacher_info_wrap">
                            <p class="t_name">GMAT新派宗师雷哥Kevin</p>
                            <div class="teacher_tag">
                                <span>GMAT</span>
                                <span>留学</span>
                                <span>职业规划家</span>
                                <span>英语教育名家</span>
                            </div>

                            <div class="teacher_cg">
                                雷哥网联合创始人，留学规划与英语教育名家，GMAT / TOEFL名师。雷哥网联合创始人，中国留学咨询行业领军人物。上海交大EMBA，连续多年亲自深入全球名企名校走访交流，如谷歌、苹果、FACEBOOK，哈佛、沃顿、斯坦福。多年研究英语系国家名校留学，尤其擅长商科申请规划。指导的学生多人获得美英著名商学院录取，如Stanford、MIT、Yale、哥大、JHU、剑桥、LSE、帝国理工等。对文书创作颇有建树，研究名校文书上千篇，洞悉名校录取官喜好和录取倾向。留学考试学术成果：GMAT逻辑靶向图、GMAT逻辑本质论、GMAT语法优先原则、GMAT必要性阅读法、新托福听力阈值训练法、新托福万能口语法、雅思西方批判式作文法等，是留学英语考试的集大成者。在国内新创新托福四化一中心作文法。研发和出版多本留学英语培训教材，并不断优化教学方法，专著有 《Influence--雷哥GMAT逻辑》、 《雅思写作攻略》、 《申友GMAT高分讲义》、 《GMAT真题名师精讲》等。留学规划咨询成果：多年研究英语系国家名校留学，尤其擅长金融、商科和MBA申请规划。所指导的客户多人获得美国、英国著名商学院的录取，如Stanford、MIT、Yale、哥大、JHU、剑桥、LSE、帝国理工、Warwick 、HEC等。对文书创作颇有建树，研究名校文书上千篇，洞悉名校录取官员的喜好和录取倾向。                            </div>

                        </div>
                        <div class="teacher_index_big_head ani">
                            <img src="http://www.gmatonline.cn/files/attach/images/content/20150911/14419615925597.jpg" alt="老师照片"/>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="hd">
                <div class="picMarquee-left2 relative">
                    <div class="prev pre_btn"><img src="/cn/images/gmatImages/bk4_crow_left.png" alt=""></div>
                    <div class="next pre_btn"><img src="/cn/images/gmatImages/bk4_crow_right.png" alt="">
                    </div>
                    <div class="bd" style="width: 720px;margin: auto;">
                        <ul class="teacher_index_head_list flex-container"><!--循环li-->
                            <li>
                                <div class="teacher_index_head_small"><img src="http://www.gmatonline.cn/files/attach/images/content/20150911/14419615925597.jpg" alt=""></div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--GMAT考试工具-->
<section class="bk5">
    <div class="w12">
        <ul id="breadcrumb" class="flex-container">
            <li>
                <a href="#" target="_blank">考试工具</a>
            </li>
            <li>
                <a href="" target="_blank">考试时间</a>
            </li>
            <li>
                <a href="" target="_blank">考试地点</a>
            </li>
            <li>
                <a href="" target="_blank">考试内容</a>
            </li>
            <li>
                <a href="" target="_blank">考试流程</a>
            </li>
            <li>
                <a href="" target="_blank">考试费用</a>
            </li>
        </ul>
    </div>
</section>
<!--GMAT课程活动 热门资讯-->
<div class="bk-last anne-flex">
    <div class="commonZx anne-flex txtMarquee-bottom">
        <div class="left-zx-img">
            <img src="/cn/images/gmatImages/subN-silde01.jpg" alt="图片">
        </div>
        <div class="right-zx-info bd">
           <ul><!--循环li-->
               <li>
                   <b>•</b>
                   <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                   <span>2018-10-10</span>
                   <div class="clearfix"></div>
               </li>
               <li>
                   <b>•</b>
                   <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                   <span>2018-10-10</span>
                   <div class="clearfix"></div>
               </li>
               <li>
                   <b>•</b>
                   <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                   <span>2018-10-10</span>
                   <div class="clearfix"></div>
               </li>
               <li>
                   <b>•</b>
                   <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                   <span>2018-10-10</span>
                   <div class="clearfix"></div>
               </li>
               <li>
                   <b>•</b>
                   <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                   <span>2018-10-10</span>
                   <div class="clearfix"></div>
               </li>
               <li>
                   <b>•</b>
                   <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                   <span>2018-10-10</span>
                   <div class="clearfix"></div>
               </li>
               <li>
                   <b>•</b>
                   <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                   <span>2018-10-10</span>
                   <div class="clearfix"></div>
               </li>
               <li>
                   <b>•</b>
                   <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                   <span>2018-10-10</span>
                   <div class="clearfix"></div>
               </li>

           </ul>
        </div>
    </div>
    <div class="commonZx anne-flex txtMarquee-bottom_1">
        <div class="left-zx-img">
            <img src="/cn/images/gmatImages/subN-slide02.jpg" alt="图片">
        </div>
        <div class="right-zx-info bd">
            <ul><!--循环li-->
                <li>
                    <b>•</b>
                    <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                    <span>2018-10-10</span>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <b>•</b>
                    <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                    <span>2018-10-10</span>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <b>•</b>
                    <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                    <span>2018-10-10</span>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <b>•</b>
                    <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                    <span>2018-10-10</span>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <b>•</b>
                    <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                    <span>2018-10-10</span>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <b>•</b>
                    <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                    <span>2018-10-10</span>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <b>•</b>
                    <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                    <span>2018-10-10</span>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <b>•</b>
                    <a href="" title="GMAT数学易错考点提升营，5天进阶Q51！">GMAT数学易错考点提升营，5天进阶Q51！</a>
                    <span>2018-10-10</span>
                    <div class="clearfix"></div>
                </li>

            </ul>
        </div>
    </div>
</div>
<!--查看更多-->
<div class="konw_more"><a href="">查看更多</a></div>
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
    //名师专栏
    jQuery(".picFocus").slide({
        mainCell: ".tinter_wrap",
        effect: "leftLoop",
        interTime: 5000,
//                autoPlay: true,
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
        interTime: 100
    });
    //课程活动 热门资讯
    jQuery(".txtMarquee-bottom").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:8,interTime:50,trigger:"click"});
    jQuery(".txtMarquee-bottom_1").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:8,interTime:50,trigger:"click"});
</script>