<link rel="stylesheet" href="/cn/css/caseSearch.css">


<section class="searchCover">
    <div class="detailsCon">
        <div class="con_title">
            <a href="/">首页 ></a>
            <a href="/case.html">案例库 ></a>
            <span>案例搜索</span>
        </div>
    </div>
    <div class="content">
        <!--左边-->
        <div class="content_left">
            <ul class="search_list">
                <?php foreach($data as $k=>$v){?>
                <li>
                    <div class="result_img">
                        <img src="http://www.thinkwithu.com<?php echo $v['image']?>" alt="">
                    </div>
                    <div class="result_name">
                        <p><?php echo $v['title']!=false?$v['title']:$v['name']?></p>
                        <a href="/case/<?php echo $v['id']?>.html">[点击详情]</a>
                    </div>
                    <div class="result_time">
                       <p><?php $v['createTime']?></p>
                    </div>
                </li>
                <?php }?>
            </ul>
        </div>
        <!--右边-->
        <div class="content_right">
            <div class="right_title">
                <span class="right_new">热门案例</span>
                <span class="right_more"><a href="" target="_blank">More>></a></span>
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