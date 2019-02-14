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
                        <a href="<?php echo 'http://gmat.viplgw.cn'.$v['detailUrl']?>" target="_blank">查看课程</a>
                        <a href="<?php echo $v['url']?>" target="_blank">试听课程</a>
                    </li>
                <?php }
            }
        }?>
        <li>
            <img class="Course_img" src="/cn/images/gmat_erji.png" alt="">
            <p>GMAT一对一VIP课程</p>
            <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=%E6%96%B0%E5%AE%98%E7%BD%91%EF%BC%88thinkwithu%EF%BC%89&cw=%E5%AE%98%E7%BD%91%E5%8F%B3%E4%BE%A7%E5%AE%A2%E6%9C%8D%E5%88%97%E8%A1%A8http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=%E6%96%B0%E5%AE%98%E7%BD%91%EF%BC%88thinkwithu%EF%BC%89&cw=%E5%AE%98%E7%BD%91%E5%8F%B3%E4%BE%A7%E5%AE%A2%E6%9C%8D%E5%88%97%E8%A1%A8" target="_blank">查看课程</a>
            <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=%E6%96%B0%E5%AE%98%E7%BD%91%EF%BC%88thinkwithu%EF%BC%89&cw=%E5%AE%98%E7%BD%91%E5%8F%B3%E4%BE%A7%E5%AE%A2%E6%9C%8D%E5%88%97%E8%A1%A8http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=%E6%96%B0%E5%AE%98%E7%BD%91%EF%BC%88thinkwithu%EF%BC%89&cw=%E5%AE%98%E7%BD%91%E5%8F%B3%E4%BE%A7%E5%AE%A2%E6%9C%8D%E5%88%97%E8%A1%A8" target="_blank">试听课程</a>
        </li>
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
                <li><p>面授课程</p></li>
                <li><p>直播课程</p></li>
                <li><p>视频课程</p></li>
                <li><p>习题课程</p></li>
                <li><p>留学套餐</p></li>
            </ul>
        </div>
        <div class="content_bd bd">
<!--            --><?php //foreach($course['data']['mainCourse'] as $key=> $val){?>

            <?php foreach ($course['data']['mainCourse'] as $key => $val) {
                if ($val['name'] == '经典课程') { ?>
                    <ul>
                        <div class="fraction_details">
                            <div class="fraction_name"><!--课程名称-->
                                <div class="left_name">课程名称</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div class="couse"><a href="" target="_blank"><?php echo $v['contenttitle'] ?></a></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_price"><!--课程价格-->
                                <div class="left_price">价格</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['price'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_value"><!--性价比-->
                                <div class="left_value">性价比</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['cost'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_startTime"><!--开课时间-->
                                <div class="left_startTime">开课时间</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['times'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_Time"><!--课程时长-->
                                <div class="left_Time">课程时长</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['hour'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_try"><!--试听-->
                                <div class="left_try">试听</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><a href="<?php echo $v['url'] ?>" target="_blank">试听</a></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_sign"><!--报名-->
                                <div class="left_sign">报名</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div>
                                        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="
                                           target="_blank">立即报名</a></div>
                                <?php } ?>
                            </div>
                        </div>
                    </ul>
                <?php }
            } ?>
            <?php foreach ($course['data']['mainCourse'] as $key => $val) {
                if ($val['name'] == '面授课程') {
                    ?>
                    <ul>
                        <div class="fraction_details">
                            <div class="fraction_name"><!--课程名称-->
                                <div class="left_name">课程名称</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div class="couse"><a href="" target="_blank"><?php echo $v['contenttitle'] ?></a></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_price"><!--课程价格-->
                                <div class="left_price">价格</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['price'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_value"><!--性价比-->
                                <div class="left_value">性价比</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['cost'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_startTime"><!--开课时间-->
                                <div class="left_startTime">开课时间</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['times'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_Time"><!--课程时长-->
                                <div class="left_Time">课程时长</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['hour'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_try"><!--试听-->
                                <div class="left_try">试听</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><a href="<?php echo $v['url'] ?>" target="_blank">试听</a></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_sign"><!--报名-->
                                <div class="left_sign">报名</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div>
                                        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="
                                           target="_blank">立即报名</a></div>
                                <?php } ?>
                            </div>
                        </div>
                    </ul>
                <?php }
            } ?>
            <?php foreach ($course['data']['mainCourse'] as $key => $val) {
                if ($val['name'] == '直播课程') {
                    ?>
                    <ul>
                        <div class="fraction_details">
                            <div class="fraction_name"><!--课程名称-->
                                <div class="left_name">课程名称</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div class="couse"><a href="" target="_blank"><?php echo $v['contenttitle'] ?></a></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_price"><!--课程价格-->
                                <div class="left_price">价格</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['price'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_value"><!--性价比-->
                                <div class="left_value">性价比</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['cost'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_startTime"><!--开课时间-->
                                <div class="left_startTime">开课时间</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['times'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_Time"><!--课程时长-->
                                <div class="left_Time">课程时长</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['hour'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_try"><!--试听-->
                                <div class="left_try">试听</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><a href="<?php echo $v['url'] ?>" target="_blank">试听</a></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_sign"><!--报名-->
                                <div class="left_sign">报名</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div>
                                        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="
                                           target="_blank">立即报名</a></div>
                                <?php } ?>
                            </div>
                        </div>
                    </ul>
                <?php }
            } ?>
            <?php foreach ($course['data']['mainCourse'] as $key => $val) {
                if ($val['name'] == '视频课程') {
                    ?>
                    <ul>
                        <div class="fraction_details">
                            <div class="fraction_name"><!--课程名称-->
                                <div class="left_name">课程名称</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div class="couse"><?php echo $v['contenttitle'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_price"><!--课程价格-->
                                <div class="left_price">价格</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['price'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_value"><!--性价比-->
                                <div class="left_value">性价比</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['cost'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_startTime"><!--开课时间-->
                                <div class="left_startTime">开课时间</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['times'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_Time"><!--课程时长-->
                                <div class="left_Time">课程时长</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['hour'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_try"><!--试听-->
                                <div class="left_try">试听</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><a href="<?php echo $v['url'] ?>" target="_blank">试听</a></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_sign"><!--报名-->
                                <div class="left_sign">报名</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div>
                                        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="
                                           target="_blank">立即报名</a></div>
                                <?php } ?>
                            </div>
                        </div>
                    </ul>
                <?php }
            } ?>
            <?php foreach ($course['data']['mainCourse'] as $key => $val) {
                if ($val['name'] == '习题课程') {
                    ?>
                    <ul>
                        <div class="fraction_details">
                            <div class="fraction_name"><!--课程名称-->
                                <div class="left_name">课程名称</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div class="couse"><a href="" target="_blank"><?php echo $v['contenttitle'] ?></a></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_price"><!--课程价格-->
                                <div class="left_price">价格</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['price'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_value"><!--性价比-->
                                <div class="left_value">性价比</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['cost'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_startTime"><!--开课时间-->
                                <div class="left_startTime">开课时间</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['times'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_Time"><!--课程时长-->
                                <div class="left_Time">课程时长</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['hour'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_try"><!--试听-->
                                <div class="left_try">试听</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><a href="<?php echo $v['url'] ?>" target="_blank">试听</a></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_sign"><!--报名-->
                                <div class="left_sign">报名</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div>
                                        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="
                                           target="_blank">立即报名</a></div>
                                <?php } ?>
                            </div>
                        </div>
                    </ul>
                <?php }
            } ?>
            <?php foreach ($course['data']['mainCourse'] as $key => $val) {
                if ($val['name'] == '留学套餐') {
                    ?>
                    <ul>
                        <div class="fraction_details">
                            <div class="fraction_name"><!--课程名称-->
                                <div class="left_name">课程名称</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div class="couse"><a href="" target="_blank"><?php echo $v['contenttitle'] ?></a></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_price"><!--课程价格-->
                                <div class="left_price">价格</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['price'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_value"><!--性价比-->
                                <div class="left_value">性价比</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['cost'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_startTime"><!--开课时间-->
                                <div class="left_startTime">开课时间</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['times'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_Time"><!--课程时长-->
                                <div class="left_Time">课程时长</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><?php echo $v['hour'] ?></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_try"><!--试听-->
                                <div class="left_try">试听</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div><a href="<?php echo $v['url'] ?>" target="_blank">试听</a></div>
                                <?php } ?>
                            </div>
                            <div class="fraction_sign"><!--报名-->
                                <div class="left_sign">报名</div>
                                <?php foreach ($val['courses'] as $v) { ?>
                                    <div>
                                        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="
                                           target="_blank">立即报名</a></div>
                                <?php } ?>
                            </div>
                        </div>
                    </ul>
                <?php }
            } ?>

<!--            --><?php //}?>
        </div>
    </div>
</section>
<!--GMAT提分展示-->
<section class="Score ruhe-tifen">
    <p class="Score_title">申友GMAT如何帮你提分,我们更懂你</p>
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
            <a href="/case.html" class="more-x">more>></a>
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
                                    <img src="http://www.thinkwithu.com<?php echo $v['image']?>" alt="图片"/>
                                </div>
                                <div class="right-vInfo">
                                    <p class="vInfo_name"><?php echo $v['name']?></p>
                                    <p class="vInfo_grads">分数: <?php echo $v['score']?></p>
                                    <p class="vInfo_time">出分时间:<?php echo $v['time']?></p>
                                    <p class="vInfo_class">班型: <?php echo $v['flag']?></p>
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
                    <?php foreach($teacher as $v){?>
                        <li class="tout_wrap relative">
                            <div class="teacher_info_wrap">
                                <p class="t_name"><?php echo $v['name']?></p>
                                <div class="teacher_tag">
<!--                                    <span>GMAT</span>-->
<!--                                    <span>留学</span>-->
<!--                                    <span>职业规划家</span>-->
<!--                                    <span>英语教育名家</span>-->
                                    <?php echo $v['abstract']?>
                                </div>
                                <div class="teacher_cg">
                                <?php echo $v['description']?>
                                </div>

                            </div>
                            <div class="teacher_index_big_head ani">
                                <img
                                    src="http://www.thinkwithu.com<?php echo $v['image']?>"
                                    alt="GMAT名师"/>
                            </div>
                        </li>
                    <?php }?>
                </ul>
            </div>
            <div class="hd hd_repleate">
                <div class="prev pre_btn"><img src="/cn/images/gmatImages/bk4_crow_left.png" alt=""></div>
                <div class="next pre_btn"><img src="/cn/images/gmatImages/bk4_crow_right.png" alt=""></div>
                <div class="picMarquee-left2 relative">
<!--                    <div class="prev pre_btn"><img src="/cn/images/gmatImages/bk4_crow_left.png" alt=""></div>-->
<!--                    <div class="next pre_btn"><img src="/cn/images/gmatImages/bk4_crow_right.png" alt=""></div>-->
                    <div class="bd" style="width: 720px;margin: auto;">
                        <ul class="teacher_index_head_list flex-container"><!--循环li-->
                            <?php foreach($teacher as $v){?>
                                <li>
                                    <div class="teacher_index_head_small">
                                        <img
                                            src="http://www.thinkwithu.com<?php echo $v['image']?>"
                                            alt="GMAT名师">
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
<section class="bk5">
    <div class="w12">
        <ul id="breadcrumb" class="flex-container">
            <li>
                <a href="#" target="_blank">考试工具</a>
            </li>
            <li>
                <a href="http://gmat.viplgw.cn/guide/32.html" target="_blank">考试时间</a>
            </li>
            <li>
                <a href="http://gmat.viplgw.cn/guide/41.html" target="_blank">考试地点</a>
            </li>
            <li>
                <a href="http://gmat.viplgw.cn/guide/42.html" target="_blank">考试内容</a>
            </li>
            <li>
                <a href="http://gmat.viplgw.cn/guide/43.html" target="_blank">考试流程</a>
            </li>
            <li>
                <a href="http://gmat.viplgw.cn/guide/44.html" target="_blank">考试费用</a>
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
               <?php foreach($active as $v){?>
               <li>
                   <b>•</b>
                   <a href="/word-details/<?php echo $v['id']?>/107.html" title="<?php echo $v['name']?>"><?php echo $v['name']?></a>
                   <span><?php echo substr($v['createTime'],0,strpos($v['createTime'],' ')+1)?></span>
                   <div class="clearfix"></div>
               </li>
               <?php }?>
           </ul>
        </div>
    </div>
    <div class="commonZx anne-flex txtMarquee-bottom_1">
        <div class="left-zx-img">
            <img src="/cn/images/gmatImages/subN-slide02.jpg" alt="图片">
        </div>
        <div class="right-zx-info bd">
            <ul><!--循环li-->
                <?php foreach($news as $v){?>
                <li>
                    <b>•</b>
                    <a href="/word-details/<?php echo $v['id']?>/118.html" title="<?php echo $v['name']?>"><?php echo $v['name']?></a>
                    <span><?php echo substr($v['createTime'],0,strpos($v['createTime'],' ')+1)?></span>
                    <div class="clearfix"></div>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<!--查看更多-->
<div class="konw_more"><a href="/list/118.html">查看更多</a></div>
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
    //课程活动 热门资讯
    jQuery(".txtMarquee-bottom").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:8,interTime:50,trigger:"click"});
    jQuery(".txtMarquee-bottom_1").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:8,interTime:50,trigger:"click"});
</script>