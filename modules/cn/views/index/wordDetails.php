
<link rel="stylesheet" href="/cn/css/frame.css?v=1.1"/>
<script type="text/javascript" src="/cn/js/index.js"></script>


<div class="fiveAdvantage fiveAdvantage-sanji">
    <img src="/cn/images/quesAnswer_topH02.jpg" alt="内容头部图"/>
</div>
<div class="quesAcontent">
    <div class="contentLeft">

        <div class="frameNav">
            <span>你现在所在的位置：</span>
            <?php
                if($nav[0]['name'] == '首页') {
                    ?>
                    <a href="/">首页</a>
                <?php
                unset($nav[0]);}
            ?>
            <?php
            foreach($nav as $v) {
                ?>
                <a href="<?php echo $v['url']?>"><?php echo $v['name']?></a>
                <img src="/cn/images/frame_rightJ.png" alt="右边箭头"/>
            <?php
            }
?>
            <a href="#"><?php echo $end==102?$data[0]['title']:$data[0]['name']?></a>
        </div>
        <div class="articlesContent">
            <div class="titleFrame">
                <h4><?php echo $end==102?$data[0]['title']:$data[0]['name']?></h4>
                <span>浏览次数：<?php echo $data[0]['viewCount']?> 日期：<?php echo $data[0]['createTime']?></span>
            </div>
            <div class="contentFrame">
                <div class="abstract">
  <?php echo $data[0]['abstract']?>
                </div>
                <div class="abstractContent">
<!--            <pre>-->
                <?php echo $data[0]['description']?>
<!--            </pre>-->

                </div>
            </div>
            <!--分享插件-->
            <div class="bshare-custom icon-medium">
                <span style="font-size: 16px;">分享到：</span>
                <a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a>
                <a title="分享到QQ空间" class="bshare-qzone"></a>
                <a title="分享到新浪微博" class="bshare-sinaminiblog"></a>
                <a title="分享到腾讯微博" class="bshare-qqmb"></a>
                <a title="分享到人人网" class="bshare-renren"></a>
                <a title="分享到微信" class="bshare-weixin" href="javascript:void(0);"></a>
            </div>
            <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script>
            <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>

            <!--上/下一篇-->
            <div class="PreviousNext">
                <div class="PreviousNext">
                    <?php if(count($next)>0) { ?>
                        <a href="/word-details/<?php echo $next[0]['id']?>/<?php echo $changeNeedCategory?>.html">下一篇：<?php echo $end==102?$next[0]['title']:$next[0]['name']?></a>
                    <?php
                    }
                    ?>
                    <?php if(count($prev)>0) { ?>
                        <a href="/word-details/<?php echo $prev[0]['id']?>/<?php echo $changeNeedCategory?>.html">上一篇：<?php echo $end==102?$prev[0]['title']:$prev[0]['name']?></a>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>

        <?php use app\commands\front\RelatedWidget;?>
        <?php RelatedWidget::begin();?>
        <?php RelatedWidget::end();?>
    </div>
    <?php use app\commands\front\RightWidget;?>
    <?php RightWidget::begin(['type' => 2]);?>
    <?php RightWidget::end();?>
    <div style="clear: both"></div>
</div>
