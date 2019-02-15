<link rel="stylesheet" href="/cn/css/classDetails-gmat.css">
<script type="text/javascript" src="/cn/js/classDetails.js"></script>

<div id="content_big">
    <!--首页导航栏-->
    <div id="content_head">
        <ul>
            <li><a href="/">首页</a>&gt;<a href="/gmatsheet.html">GMAT课程</a>&gt;<a href="#"><?php  echo str_replace("雷哥", "申友",$livelessondata['contenttitle'])?></a></li>
        </ul>
    </div>
    <!--雷哥基金串讲-->
    <div id="con_video">
        <div class="video_left">
            <img src="http://gmat.viplgw.cn<?php echo $livelessondata['contentthumb']?>" alt="图片">
<!--            <div class="blackMask">--><?php //echo str_replace("雷哥", "申友",$livelessondata['contenttitle'])?><!--</div>-->
        </div>
        <div class="video_right">
            <span class="vedio_r_bigtitle"><?php echo str_replace("雷哥", "申友",$livelessondata['contenttitle'])?></span><!--课程名称-->
            <ul>
                <?php if ($livelessondata['contentcatid'] == 1){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 32 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 36 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 34 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 33 "] ?></li><!--开课日期-->
                <?php } elseif ($livelessondata['contentcatid'] == 2) { ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 357 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 357 "] ?></span>
                    </li><!--原价-->

                    <li>主讲老师：<?php echo $livelessondata['data'][" 41 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 206 "] ?></li><!--开课日期-->
                <?php } elseif ($livelessondata['contentcatid'] == 111) { ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 565 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 566 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 568 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 567 "] ?></li><!--开课日期-->
                <?php } elseif ($livelessondata['contentcatid'] == 118) { ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 611 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 612 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 614 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 613 "] ?></li><!--开课日期-->
                <?php } elseif ($livelessondata['contentcatid'] == 119) { ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 620 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 621 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 623 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 622 "] ?></li><!--开课日期-->
                <?php } elseif ($livelessondata['contentcatid'] == 120) { ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 629 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 630 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 632 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 631 "] ?></li><!--开课日期-->
                <?php } elseif ($livelessondata['contentcatid'] == 121) { ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 638 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 639 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 641 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 640 "] ?></li><!--开课日期-->
                <?php } elseif ($livelessondata['contentcatid'] == 91) { ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 266 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 270 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 278 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 274 "] ?></li><!--开课日期-->
                <?php } elseif ($livelessondata['contentcatid'] == 92) { ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 267 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 271 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 279 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 275 "] ?></li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 93){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 268 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 272 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 280 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 276 "] ?></li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 94){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 269 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 273 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 281 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 277 "] ?></li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 95){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 295 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 299 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 307 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 303 "] ?></li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 96){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 296 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 300 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 308 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 304 "] ?></li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 97){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 297 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 301 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 309 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 305 "] ?></li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 98){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 298 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 302 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 310 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 306 "] ?></li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 99){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 331 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 343 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 337 "] ?></li><!--课程时长-->
                    <li>性价比： <?php echo $livelessondata['data'][" 340 "] ?></li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 100){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 332 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 344 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 338 "] ?></li><!--课程时长-->
                    <li>性价比： <?php echo $livelessondata['data'][" 341 "] ?></li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 101){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 333 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 345 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 339 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 336 "] ?></li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 102){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 355 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 355 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：请咨询</li><!--课程时长-->
                    <li>开课日期：请咨询</li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 23){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 540 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 534 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 111 "] ?></li><!--课程时长-->
                    <li>开课日期：请咨询</li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 20){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 154 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 528 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 121 "] ?></li><!--课程时长-->
                    <li>开课日期：请咨询</li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 21){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 155 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 529 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 120 "] ?></li><!--课程时长-->
                    <li>开课日期：请咨询</li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 22){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 539 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 533 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 112 "] ?></li><!--课程时长-->
                    <li>开课日期：请咨询</li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 19){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 153 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 527 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 122 "] ?></li><!--课程时长-->
                    <li>开课日期：请咨询</li><!--开课日期-->
                <?php }
                elseif ($livelessondata['contentcatid'] == 29){ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 156 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 530 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 119 "] ?></li><!--课程时长-->
                    <li>开课日期：请咨询</li><!--开课日期-->
                <?php }
                else{ ?>
                    <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                        <span class="vi_r_price"><?php echo $livelessondata['data'][" 278 "] ?></span>
                        &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $livelessondata['data'][" 266 "] ?></span>
                    </li><!--原价-->

                    <li>课程时长：<?php echo $livelessondata['data'][" 270 "] ?></li><!--课程时长-->
                    <li>开课日期： <?php echo $livelessondata['data'][" 274 "] ?></li><!--开课日期-->
                <?php }
                ?>

            </ul>
            <div class="course-btns">

                <a target="_blank" href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">点击咨询</a>
            </div>
            <div class="vi_r_bluexian"></div>
            <div class="vi_r_fenxiang">
                <span>共<span style="color: #d01917;font-size: 20px"><?php echo $livelessondata['views']?></span>次浏览</span><!--浏览次数-->
                <div class="bshare-custom icon-medium" style="float: right"><div class="bsPromo bsPromo2"></div>
                    <a title="分享到QQ空间" class="bshare-qzone"></a>
                    <a title="分享到新浪微博" class="bshare-sinaminiblog"></a>
                    <a title="分享到人人网" class="bshare-renren"></a>
                    <a title="分享到腾讯微博" class="bshare-qqmb"></a>
                    <a title="分享到网易微博" class="bshare-neteasemb"></a>
                    <a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a>
                </div>
                <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script>
                <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
            </div>
        </div>
    </div>
    <!--课程介绍-->
    <div id="classJieshao">
        <!--课程介绍头部-->
        <div id="discuss" class="class_jieshao_head hd">
            <ul>
                <li class="on">
                    <input type="button" value="课程详情">
                </li>
                <li class="">
                    <input type="button" value="名师专家">
                </li>
                <li class="">
                    <input type="button" value="用户评价">
                </li>
                <li class="">
                    <input type="button" value="资料下载">
                </li>
            </ul>
        </div>
        <!--课程表的内容-->
        <!--下面变换的div -->
        <div class="keti_xq_bianh bd">
            <!--课程详情-->
            <ul class="intr-wrap">
                <div>
                    <?php
                        echo html_entity_decode(str_replace("/files/", "http://gmat.viplgw.cn/files/", $livelessondata['contenttext']), ENT_QUOTES, 'UTF-8');
                    ?>
                    <!--课程详情输出内容-->
                </div>
            </ul>
            <!--名师专家-->
            <ul class="keti_teacher_box">
                <?php
                if($liveteacher!=false){
                    echo str_replace('&nbsp;','',html_entity_decode(str_replace("/files/", "http://gmat.viplgw.cn/files/", $liveteacher[0]['text']), ENT_QUOTES, 'UTF-8'));

                }
                ?>
            </ul>
            <ul>
                <li>
                    <div class="liuyan_user_big">
                        <ol id="disContent"><!--循环li-->
                            <?php if ($comment != false) {
                                foreach ($comment as $v) {
                                    ?>
                                    <li>
                                       <div class="imgUser">
                                           <img
                                                   src="http://gmat.viplgw.cn/app/web_core/styles/images/tiku_meidt_userimg.png"
                                                   alt="" width="50"
                                                   style="float: left">
                                       </div>
                                        <div class="user_liuyan">
                                            <p><span class="size_9"><?php echo $v['username'] ?></span></p>
                                            <span><?php echo $v['content'] ?></span>
                                        </div>
                                    </li>
                                <?php }
                            } ?>
                        </ol>

                    </div>
                </li>
                <li style="clear: both"></li>
            </ul>
            <!--资料下载-->
            <ul class="jiangy_xiaz">
                <li>
<!--                    <p class="p_title">参考资料（是你所听课程需要的学习资料，更好地辅助你的学习）</p>-->
<!--                    <ol>-->
                        <li><!--循环P标签-->
<!--                            <p style="line-height: 16px;">-->
<!--                                <img src="/cn/images/icon_pdf.gif">-->
<!--                                        <span title="GMAT数学术语.pdf"-->
<!--                                              href="/files/attach/file/20150609/1433817061715360.pdf">GMAT数学术语.pdf</span>-->
<!--                                <a href="/files/attach/file/20150609/1433817061715360.pdf"-->
<!--                                   target="_blank">下载</a>-->
<!--                            </p>-->
<!---->
<!--                        </li>-->
<!--                    </ol>-->
                    <p class="p_title">暂无资料可以下载！</p>
                </li>
            </ul>
        </div>
    </div>
    <div id="uidSign" data-uid="0" style="display:none">
        <a href="http://www.51js.com" target="_blank" id="link">text</a>
    </div>
</div>



