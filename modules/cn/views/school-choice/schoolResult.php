<link rel="stylesheet" href="/cn/css/schoolChoose/choice-result.css">


<section class="result_cover">
    <div class="back_condition">
        <div class="condition_top">背景条件分析</div>
        <p class="userName"><?php echo $res['userName']?></p>
        <div class="grads">
            <p>你的得分</p>
            <p><?php echo $res['score']?></p>
        </div>
        <div class="result_content">
            <div class="content_left">
               <div>
                   <div class="Disadvantage">劣势</div>
                   <div class="contentList">
                       <?php if ($res['schoolGrade'] > 3) { ?>
                           <li><b>•</b><span>院校背景：<?php echo $res['attendSchool'] ?></span></li>
                       <?php } ?>
                       <?php if ($res['gpa'] < 3) { ?>
                           <li><b>•</b><span>GPA：<?php echo $res['gpa'] ?></span></li>
                       <?php } ?>
                       <?php if (($res['gmat'] > 400 && $res['gmat'] < 650) || ($res['gmat'] < 400 && $res['gmat'] < 310)) { ?>
                           <li><b>•</b><span>GMAT/GRE：<?php echo $res['gmat'] ?></span></li>
                       <?php } ?>
                       <?php if (($res['toefl'] < 95 && $res['toefl'] > 10) || ($res['toefl'] < 6 && $res['toefl'] < 10)) { ?>
                           <li><b>•</b><span>TOEFL/IELTS：<?php echo $res['toefl'] ?></span></li>
                       <?php } ?>
                   </div>
               </div>
                <div>
                    <div class="advantage">优势</div>
                    <div class="contentList">
                        <?php if ($res['schoolGrade'] <3) { ?>
                            <li><b>•</b><span>院校背景：<?php echo $res['attendSchool'] ?></span></li>
                        <?php } ?>
                        <?php if ($res['gpa'] > 3.5) { ?>
                            <li><b>•</b><span>GPA：<?php echo $res['gpa'] ?>，打败了<?php echo $score['gpa']['num']?>位评测者</span></li>
                        <?php } ?>
                        <?php if (($res['gmat'] > 400 && $res['gmat'] > 720) || ($res['gmat'] < 400 && $res['gmat'] > 325)) { ?>
                            <li><b>•</b><span>GMAT/GRE：<?php echo $res['gmat'] ?>，打败了<?php echo $score['gpa']['num']?>位评测者</span></li>
                        <?php } ?>
                        <?php if (($res['toefl'] >110 && $res['toefl'] > 10) || ($res['toefl'] >7 && $res['toefl'] < 10)) { ?>
                            <li><b>•</b><span>TOEFL/IELTS：<?php echo $res['toefl'] ?>，打败了<?php echo $score['toefl']['num']?>位评测者</span></li>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="content_right">
                <i class="z_s iconfont s_j">&#xe60b;</i>
                <i class="y_s iconfont s_j">&#xe60b;</i>
                <i class="z_x iconfont s_j">&#xe60b;</i>
                <i class="y_x iconfont s_j">&#xe60b;</i>
                <p class="c_t_t">你的背景条件符合</p>
                <p class="c_t_n"><?php echo count($data['res'])+count($data['sprint'])?></p>
                <p class="c_t_f">所开设<?php echo $res['majorName'] ?>专业院校的申请要求</p>
                <div class="bshare-custom icon-medium" style="width: 90px;height: 25px;background: rgb(166,94,162);float: left;margin-left: 20px"><div class="bsPromo bsPromo2"></div>
                    <a title="分享到新浪微博" class="bshare-sinaminiblog" style="background: url('/cn/images/school/weibo.png') 4px no-repeat;background-size: contain"> <span style="color: white;margin-top: 3px;margin-left: 4px;display: inline-block">炫耀一下</span></a>
                </div>
                <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script>
                <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
                <div class="c_p">
                    <a href="">重新评估</a>
                </div>
            </div>
        </div>

        <div class="announcement">
            <div class="anno_left"></div>
            <div class="anno_right">
                <li><b>•</b><span>此报告未考虑文书质量与面试质量</span></li>
                <li><b>•</b><span>用户须填写实际情况,保证结果的准确性</span></li>
                <li><b>•</b><span>此报告匹配标准近5年留学录取成果大数据作为技术支撑,并不能百分百代表实际录取结果,仅供参考</span></li>
            </div>
        </div>
    </div>


    <div class="choic_report">
        <div class="condition_top">以下是你的选校报告</div>
        <div class="c_cyx">
            <p class="c_cyx_title">冲刺院校(<?php echo count($data['sprint'])?>)</p>
            <div class="line"></div>
<!--            院校-->
            <?php foreach($data['sprint'] as $v){?>
            <div class="school"><!--有多个冲刺院校就循环类名  school-->
                <div class="school_left">
                    <img src="http://schools.smartapply.cn<?php echo $v['image']?>" alt="">
                </div>
                <div class="school_middle">
                    <p class="name_cn"><?php echo $v['name']?></p>
                    <p class="name_en"><?php echo $v['title']?></p>
                    <span class="z_b"></span><span>所在地区:<?php echo $v['place']?></span>
                </div>
                <div class="school_right">
                    <a href="tencent://message/?uin=3382135617&Site=www.cnclcy&Menu=yes" target="_blank" class="r_k">人工精准选校入口</a>
                    <div class="ds_yx_al">
                        <span class="d_s"></span>
                        <span>推荐导师</span>
                        <span class="a_l"></span>
                        <span>热门案例</span>
                        <span class="y_x_x"></span>
                        <span>查看院校</span>
                    </div>
                    <div class="r_bottom">
                        <span class="p_lr">评论:</span>
                        <span class="P_num"><?php echo rand(20,50)?></span>
                        <span class="c_kr">查看人数:</span>
                        <span class="c_num"><?php echo rand(2000,5000)?></span>
                    </div>
                </div>
            </div>
            <?php }?>

            <p class="c_cyx_title">目标院校(<?php echo count($data['res'])?>)</p>
            <div class="line"></div>
            <?php foreach($data['res'] as $v){?>
            <div class="school"><!--有多个目标院校就循环类名  school-->
                <div class="school_left">
                    <img src="http://schools.smartapply.cn<?php echo $v['image']?>" alt="">
                </div>
                <div class="school_middle">
                    <p class="name_cn"><?php echo $v['name']?></p>
                    <p class="name_en"><?php echo $v['title']?></p>
                    <span class="z_b"></span><span>所在地区:<?php echo $v['place']?></span>
                </div>
                <div class="school_right">
                    <a href="" target="_blank" class="r_k">人工精准选校入口</a>
                    <div class="ds_yx_al">
                        <span class="d_s"></span>
                        <span>推荐导师</span>
                        <span class="a_l"></span>
                        <span>热门案例</span>
                        <span class="y_x_x"></span>
                        <span>查看院校</span>
                    </div>
                    <div class="r_bottom">
                        <span class="p_lr">评论:</span>
                        <span class="P_num"><?php echo rand(20,50)?></span>
                        <span class="c_kr">查看人数:</span>
                        <span class="c_num"><?php echo rand(2000,5000)?></span>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>

