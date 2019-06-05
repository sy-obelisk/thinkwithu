<link rel="stylesheet" href="/cn/css/classDetails-ielts.css?v=1.1">
<script type="text/javascript" src="/cn/js/classDetails.js"></script>

<div id="content_big">
    <!--首页导航栏-->
    <div id="content_head">
        <ul>
            <li><a href="/">首页</a>&gt;<a href="/ieltssheet.html">雅思课程</a>&gt;<a href="#"><?php echo $data['name']?></a></li>
        </ul>
    </div>
    <!--雷哥基金串讲-->
    <div id="con_video">
        <div class="video_left">
            <p class="video_left_name"><?php echo $data['name']?></p>
            <div class="video_left_type">申友雅思</div>
        </div>
        <div class="video_right">
            <span class="vedio_r_bigtitle"><?php echo $data['name']?></span><!--课程名称-->
            <ul>
                <li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                    <span class="vi_r_price"><?php echo $data['price']?></span>
                    &nbsp;&nbsp;<span class="vi_r_hui">原价<?php echo $data['answer']?></span></li><!--原价-->

                <li>课程时长：<?php echo $data['listeningFile']?></li><!--课程时长-->
            </ul>
<!--            <div class="numBox">-->
<!--                <span>数量：</span>-->
<!--                <input type="button" value="-" onclick="subtractNum(this)" class="btn-s">-->
<!--                <input type="text" value="1" style="width: 30px;" onblur="importNum(this)" id="numT">-->
<!--                <input type="button" value="+" onclick="addNum(this)" class="btn-s">-->
<!--            </div>-->
            <div class="course-btns">

                <a target="_blank" href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">点击咨询</a>
            </div>
            <div class="vi_r_bluexian"></div>
            <div class="vi_r_fenxiang">
                <span>共<span style="color: #d01917;font-size: 20px"><?php echo $data['viewCount']?></span>次浏览</span><!--浏览次数-->
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
                    <?php echo "<h4>适合学员</h4><br>".preg_replace('/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i', '',str_replace("雷哥", "申友",$data['people'])).'</br>'?>
                    <?php echo "<h4>服务介绍</h4><br>".preg_replace('/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i', '',str_replace("雷哥", "申友",$data['item'])).'</br>'?>
                    <!--课程详情输出内容-->
                </div>
            </ul>
            <!--名师专家-->
            <ul class="keti_teacher_box">
                <?php foreach($teacher as $v){?>
                <li class="keti_t_item clearfix">
                    <div class="image">
                        <div class="kong">
                            <span>雅思</span><!--属于哪个课程 托福 雅思 申友 gmat gre-->
                        </div>
                        <div class="name">
                            <p><?php echo $v['name']?></p><!--老师名字-->
                            <p>老师</p>
                        </div>
                        <div class="img">
                            <img src="http://ielts.viplgw.cn<?php echo $v['image']?>" alt="yasi老师"><!--老师图片-->
                        </div>
                    </div>
                    <div class="keti_t_intro">
                        <h6><?php echo $v['alternatives'].'老师'?> </h6><!--右侧标题-->
                        <div class="desc"><?php echo $v['answer'].'<br>'.$v['article']?></div><!--老师介绍-->
                        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">查看详情 &gt;&gt;</a>
                        <div class="classify"><!--老师授课课程--><!--循环span-->
                            <?php $n=explode('<br />',nl2br($v['listeningFile']));
                            foreach($n as $val){
                                echo  "<span>$val</span>";
                            }
                            ?>
                        </div>
                    </div>
                </li>
                <?php }?>
            </ul>
            <!--用户评价-->
            <ul>
                <li>
                    <div class="liuyan_user_big">
                        <ol id="disContent"><!--循环li-->
                            <?php if ($discuss['data'] != false) {
                                foreach ($discuss['data'] as $v) {
                                    ?>
                                    <li>
                                        <div class="imgUser">
                                            <img src="http://ielts.viplgw.cn<?php echo $v['image']?>" alt="" width="50"
                                                 style="float: left">
                                        </div>

                                        <div class="user_liuyan">
                                            <p><span class="size_9"><?php echo $v['userName']?></span></p>
                                            <span><?php echo  str_replace("雷哥", "申友",$v['discussContent'])?></span>
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
                    <?php if ($data['datelist'] != false) { ?>
                        <p class="p_title">参考资料（是你所听课程需要的学习资料，更好地辅助你的学习）</p>
                        <ol>
                            <li><!--循环P标签-->
                                <?php foreach($data['datelist'] as $v){?>
                                <p style="line-height: 16px;">
                                    <img src="/cn/images/icon_pdf.gif">
                                    <span class="parameter" title="<?php echo $v['name']?>" href="http://ielts.viplgw.cn<?php echo $v['listeningFile']?>"><?php echo $v['name']?></span>
                                    <span class="download" onclick="dounw(this)" title="<?php echo $v['name']?>" href="http://ielts.viplgw.cn<?php echo $v['listeningFile']?>">下载</span>
                                </p>
                                <?php }?>
                            </li>
                        </ol>
                    <?php } else { ?>
                        <p class="p_title">暂无资料可以下载！</p>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </div>
    <div id="uidSign" data-uid="0" style="display:none">
        <a href="http://www.51js.com" target="_blank" id="link">text</a>
    </div>
</div>

<script>
    function dounw(o) {
        var url = $(o).attr('href');
        var name = $(o).attr('title');
//        $.get('/cn/course/detaildown',{name:name,url:url},function (re) {
//
//        },'json')
        location.href="/cn/course/detaildown?url="+url+"&name="+name;
    }
</script>



