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
                       <?php if ($score['defect'] != false) { ?>
                           <?php foreach ($score as $k => $v) {
                               if ($k != 'defect' && $k != 'advantage' && $v['type'] == 0) { ?>
                                   <li><b>•</b><span><?php echo $v['name'] ?>：<?php echo $v['score'] ?>，打败了<?php echo $v['num'] ?>人</span></li>
                               <?php }
                           } ?>
                       <?php } else {
                           echo ' <li><span>无明显劣势</span></li>';
                       } ?>
                   </div>
               </div>
                <div>
                    <div class="advantage">优势</div>
                    <div class="contentList">
                        <?php if ($score['advantage'] != false) { ?>
                            <?php foreach ($score as $k => $v) {
                                if ($k != 'defect' && $k != 'advantage' && $v['type'] == 1) { ?>
                                    <li><b>•</b><span><?php echo $v['name'] ?>：<?php echo $v['score'] ?>，打败了<?php echo $v['num'] ?>人</span></li>
                                <?php }
                            } ?>
                        <?php } else {
                            echo ' <li><b>•</b><span>你的整体成绩条件暂无明显申请优势，请继续刷分！</span></li>';
                        } ?>
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
                        <span><a href="/teachers.html" target="_blank">推荐导师</a></span>
                        <span class="a_l"></span>
                        <span><a href="/case.html" target="_blank">热门案例</a></span>
                        <span class="y_x_x"></span>
                        <span><a href="/schools/<?php echo $v['id']?>.html" target="_blank">查看院校</a></span>
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
                    <a href="" target="_blank" class="r_k">人工精准选校入口 ></a>
                    <div class="ds_yx_al">
                        <span class="d_s"></span>
                        <span><a href="/teachers.html" target="_blank">推荐导师</a></span>
                        <span class="a_l"></span>
                        <span><a href="/case.html" target="_blank">热门案例</a></span>
                        <span class="y_x_x"></span>
                        <span><a href="/schools/<?php echo $v['id']?>.html" target="_blank">查看院校</a></span>
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

