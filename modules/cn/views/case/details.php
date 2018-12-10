<link rel="stylesheet" href="/cn/css/caseDetails.css">

<section class="caseDetails">
    <div class="detailsCon">
        <div class="con_title">
            <a href="/">首页 ></a>
            <a href="/case.html">案例库 ></a>
<!--            <a href="">最新案例 ></a>-->
            <span> 正文</span>
        </div>
    </div>
    <div class="content">
        <!--左边-->
        <div class="content_left">
            <p class="left_title"><?php echo $data['title']==false?$data['name']:$data['title']?></p><!--标题-->
            <p class="left_time">来源:<?php echo $data['createTime']?></p><!--时间-->
            <div class="con_c"><!--内容-->
                <?php echo $data['description']==false?$data['image']:$data['description']?>
            </div>
        </div>
        <!--右边-->
        <div class="content_right">
            <div class="right_title">
                <span class="right_new">最新案例</span>
                <span class="right_more"><a href="/case.html" target="_blank">More>></a></span>
            </div>
            <div class="right_c">
                <ul><!--循环li-->
                    <?php foreach ($list as $v) { ?>
                        <li>
                            <b>•</b>
                            <a href="/case/<?php echo $v['id'] ?>.html"><?php echo $v['title'] == false ? $v['name'] : $v['title'] ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <script>
        jQuery(".content_right").slide({mainCell:".right_c ul",autoPlay:true,effect:"topMarquee",vis:10,interTime:50,trigger:"click"});
    </script>
</section>