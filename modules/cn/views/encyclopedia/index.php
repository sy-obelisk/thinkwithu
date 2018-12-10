<link rel="stylesheet" href="/cn/css/encyclopedia/encyIndex.css">
<link rel="stylesheet" href="/cn/css/encyclopedia/reset.css">

<section class="encyCover">
    <div class="w12 bg_w">
        <!--        banner-->
        <div class="bannerWrap">
            <!--左边轮播-->
            <div class="banner_l">
                <div class="bannerHd hd">
                    <ul><!--循环li-->
                        <?php foreach($banner as $v){?>
                            <li></li>
                        <?php }?>
                    </ul>
                </div>
                <div class="bannerBd bd">
                    <ul><!--循环li-->
                        <?php foreach($banner as $v){?>
                            <li>
                                <a href="<?php echo $v['url'] ?>"> <img src="<?php echo $v['image'] ?>" alt=""></a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <!--右边列表-->
            <div class="banner_r">
                <div class="br_tit inm">
                    <span>本科头条</span>
                    <img src="/cn/images/ency/hot.png" alt="">
                </div>
                <div class="bd">
                    <ul class="br_news_list"><!--循环li-->
                        <?php foreach ($data as $v) { ?>
                            <li>
                                <p class="br_name ellipsis"><a href="/encyclopedia/<?php echo $v['id'] ?>.html" target="_blank"><?php echo $v['name'] ?></a></p>
                                <p class="ellipsis-2 br_de">  <?php echo $v['abstract'] ?></p>
                                <div class="flex-container">
                                    <span class="br_date"><?php echo $v['createTime'] ?></span>
                                    <a class="br_online" target="_blank" href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=新官网（thinkwithu）&cw=">在线咨询</a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <script>
            jQuery(".banner_l").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:true});
            jQuery(".banner_r").slide({mainCell:".bd ul",effect:"topLoop",autoPlay:true,vis:3});
        </script>
        <!--        留学咨询-->
        <div>
            <!--留学资讯-->
            <div class="flex-container information_nav">
                <div class="flex-container">
                    <div class="infor_name">
                        <img src="/cn/images/ency/zi_x.png" alt="">
                        <span>留学资讯</span>
                    </div>
                    <div class="infor_tel">
                        <img src="/cn/images/ency/phone.png" alt="">
                        <span>400-600-1123</span>
                    </div>
                </div>
                <dl class="country_list">
                    <dt class="on">美国</dt>
                    <dt class="">英国</dt>
                    <dt class="">澳洲</dt>
                    <dt class="">香港</dt>
<!--                    <dt class="">新加坡</dt>-->
                </dl>
            </div>
            <div class="item_Wrap" style="padding-bottom: 40px;">
                <div class="item_tab"><!--外层循环item_tab-->
                    <div class="flex-container item_tab_wrap"><!--内层循环 item_list-->
                        <div class="item_list">
                            <div class="t1_bg item_bg tm">
                                <div class="item_icon"><img src="/cn/images/ency/item_c1.png" alt=""></div>
                                <p class="item_name">A 本科院校</p>
                            </div>
                            <ul class="news_list">
                                <?php $school['usa']=app\modules\cn\models\Content::getContent(['fields' => 'description,abstract', 'category' => "225,88,135", 'order' => 'c.id desc', 'pageSize' => 3]);//头条
                                foreach($school['usa'] as $v){
                                ?>
                                <li>
                                    <a href="/encyclopedia/<?php echo $v['id'] ?>.html" target="_blank">
                                        <div>
                                            <p class="news_tit ellipsis"><?php echo $v['name']?></p>
                                            <p class="news_de ellipsis-2"><?php echo $v['abstract']?></p>
                                            <div class="news_date"><?php echo $v['createTime']?></div>
                                        </div>
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                            <div class="online_infor tm">
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=新官网（thinkwithu）&cw=">在线咨询</a>
                            </div>
                        </div>
                        <div class="item_list">
                            <div class="t2_bg item_bg tm">
                                <div class="item_icon"><img src="/cn/images/ency/item_c2.png" alt=""></div>
                                <p class="item_name">B 留学费用</p>
                            </div>
                            <ul class="news_list">
                                <?php $school['usa']=app\modules\cn\models\Content::getContent(['fields' => 'description,abstract', 'category' => "119,88,135", 'order' => 'c.id desc', 'pageSize' => 3]);//头条
                                foreach($school['usa'] as $v){
                                    ?>
                                    <li>
                                        <a href="/encyclopedia/<?php echo $v['id'] ?>.html" target="_blank">
                                            <div>
                                                <p class="news_tit ellipsis"><?php echo $v['name']?></p>
                                                <p class="news_de ellipsis-2"><?php echo $v['abstract']?></p>
                                                <div class="news_date"><?php echo $v['createTime']?></div>
                                            </div>
                                        </a>
                                    </li>
                                <?php }?>
                            </ul>
                            <div class="online_infor tm">
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=新官网（thinkwithu）&cw=">在线咨询</a>
                            </div>
                        </div>
                        <div class="item_list">
                            <div class="t3_bg item_bg tm">
                                <div class="item_icon"><img src="/cn/images/ency/item_c3.png" alt=""></div>
                                <p class="item_name">C 申请条件</p>
                            </div>
                            <ul class="news_list">
                                <?php $school['usa']=app\modules\cn\models\Content::getContent(['fields' => 'description,abstract', 'category' => "121,88,135", 'order' => 'c.id desc', 'pageSize' => 3]);//头条
                                foreach($school['usa'] as $v){
                                    ?>
                                    <li>
                                        <a href="/encyclopedia/<?php echo $v['id'] ?>.html" target="_blank">
                                            <div>
                                                <p class="news_tit ellipsis"><?php echo $v['name']?></p>
                                                <p class="news_de ellipsis-2"><?php echo $v['abstract']?></p>
                                                <div class="news_date"><?php echo $v['createTime']?></div>
                                            </div>
                                        </a>
                                    </li>
                                <?php }?>
                            </ul>
                            <div class="online_infor tm">
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=新官网（thinkwithu）&cw=">在线咨询</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item_tab"><!--外层循环item_tab-->
                    <div class="flex-container item_tab_wrap"><!--内层循环 item_list-->
                        <div class="item_list">
                            <div class="t1_bg item_bg tm">
                                <div class="item_icon"><img src="/cn/images/ency/item_c1.png" alt=""></div>
                                <p class="item_name">A 本科院校</p>
                            </div>
                            <ul class="news_list">
                                <?php $school['usa']=app\modules\cn\models\Content::getContent(['fields' => 'description,abstract', 'category' => "225,89,135", 'order' => 'c.id desc', 'pageSize' => 3]);//头条
                                foreach($school['usa'] as $v){
                                    ?>
                                    <li>
                                        <a href="/encyclopedia/<?php echo $v['id'] ?>.html" target="_blank">
                                            <div>
                                                <p class="news_tit ellipsis"><?php echo $v['name']?></p>
                                                <p class="news_de ellipsis-2"><?php echo $v['abstract']?></p>
                                                <div class="news_date"><?php echo $v['createTime']?></div>
                                            </div>
                                        </a>
                                    </li>
                                <?php }?>
                            </ul>
                            <div class="online_infor tm">
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=新官网（thinkwithu）&cw=">在线咨询</a>
                            </div>
                        </div>
                        <div class="item_list">
                            <div class="t2_bg item_bg tm">
                                <div class="item_icon"><img src="/cn/images/ency/item_c2.png" alt=""></div>
                                <p class="item_name">B 留学费用</p>
                            </div>
                            <ul class="news_list">
                                <?php $school['usa']=app\modules\cn\models\Content::getContent(['fields' => 'description,abstract', 'category' => "119,89,135", 'order' => 'c.id desc', 'pageSize' => 3]);//头条
                                foreach($school['usa'] as $v){
                                    ?>
                                    <li>
                                        <a href="/encyclopedia/<?php echo $v['id'] ?>.html" target="_blank">
                                            <div>
                                                <p class="news_tit ellipsis"><?php echo $v['name']?></p>
                                                <p class="news_de ellipsis-2"><?php echo $v['abstract']?></p>
                                                <div class="news_date"><?php echo $v['createTime']?></div>
                                            </div>
                                        </a>
                                    </li>
                                <?php }?>
                            </ul>
                            <div class="online_infor tm">
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=新官网（thinkwithu）&cw=">在线咨询</a>
                            </div>
                        </div>
                        <div class="item_list">
                            <div class="t3_bg item_bg tm">
                                <div class="item_icon"><img src="/cn/images/ency/item_c3.png" alt=""></div>
                                <p class="item_name">C 申请条件</p>
                            </div>
                            <ul class="news_list">
                                <?php $school['usa']=app\modules\cn\models\Content::getContent(['fields' => 'description,abstract', 'category' => "121,89,135", 'order' => 'c.id desc', 'pageSize' => 3]);//头条
                                foreach($school['usa'] as $v){
                                    ?>
                                    <li>
                                        <a href="/encyclopedia/<?php echo $v['id'] ?>.html" target="_blank">
                                            <div>
                                                <p class="news_tit ellipsis"><?php echo $v['name']?></p>
                                                <p class="news_de ellipsis-2"><?php echo $v['abstract']?></p>
                                                <div class="news_date"><?php echo $v['createTime']?></div>
                                            </div>
                                        </a>
                                    </li>
                                <?php }?>
                            </ul>
                            <div class="online_infor tm">
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=新官网（thinkwithu）&cw=">在线咨询</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item_tab"><!--外层循环item_tab-->
                    <div class="flex-container item_tab_wrap"><!--内层循环 item_list-->
                        <div class="item_list">
                            <div class="t1_bg item_bg tm">
                                <div class="item_icon"><img src="/cn/images/ency/item_c1.png" alt=""></div>
                                <p class="item_name">A 本科院校</p>
                            </div>
                            <ul class="news_list">
                                <?php $school['usa']=app\modules\cn\models\Content::getContent(['fields' => 'description,abstract', 'category' => "225,91,135", 'order' => 'c.id desc', 'pageSize' => 3]);//头条
                                foreach($school['usa'] as $v){
                                    ?>
                                    <li>
                                        <a href="/encyclopedia/<?php echo $v['id'] ?>.html" target="_blank">
                                            <div>
                                                <p class="news_tit ellipsis"><?php echo $v['name']?></p>
                                                <p class="news_de ellipsis-2"><?php echo $v['abstract']?></p>
                                                <div class="news_date"><?php echo $v['createTime']?></div>
                                            </div>
                                        </a>
                                    </li>
                                <?php }?>
                            </ul>
                            <div class="online_infor tm">
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=新官网（thinkwithu）&cw=">在线咨询</a>
                            </div>
                        </div>
                        <div class="item_list">
                            <div class="t2_bg item_bg tm">
                                <div class="item_icon"><img src="/cn/images/ency/item_c2.png" alt=""></div>
                                <p class="item_name">B 留学费用</p>
                            </div>
                            <ul class="news_list">
                                <?php $school['usa']=app\modules\cn\models\Content::getContent(['fields' => 'description,abstract', 'category' => "119,91,135", 'order' => 'c.id desc', 'pageSize' => 3]);//头条
                                foreach($school['usa'] as $v){
                                    ?>
                                    <li>
                                        <a href="/encyclopedia/<?php echo $v['id'] ?>.html" target="_blank">
                                            <div>
                                                <p class="news_tit ellipsis"><?php echo $v['name']?></p>
                                                <p class="news_de ellipsis-2"><?php echo $v['abstract']?></p>
                                                <div class="news_date"><?php echo $v['createTime']?></div>
                                            </div>
                                        </a>
                                    </li>
                                <?php }?>
                            </ul>
                            <div class="online_infor tm">
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=新官网（thinkwithu）&cw=">在线咨询</a>
                            </div>
                        </div>
                        <div class="item_list">
                            <div class="t3_bg item_bg tm">
                                <div class="item_icon"><img src="/cn/images/ency/item_c3.png" alt=""></div>
                                <p class="item_name">C 申请条件</p>
                            </div>
                            <ul class="news_list">
                                <?php $school['usa']=app\modules\cn\models\Content::getContent(['fields' => 'description,abstract', 'category' => "121,91,135", 'order' => 'c.id desc', 'pageSize' => 3]);//头条
                                foreach($school['usa'] as $v){
                                    ?>
                                    <li>
                                        <a href="/encyclopedia/<?php echo $v['id'] ?>.html" target="_blank">
                                            <div>
                                                <p class="news_tit ellipsis"><?php echo $v['name']?></p>
                                                <p class="news_de ellipsis-2"><?php echo $v['abstract']?></p>
                                                <div class="news_date"><?php echo $v['createTime']?></div>
                                            </div>
                                        </a>
                                    </li>
                                <?php }?>
                            </ul>
                            <div class="online_infor tm">
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=新官网（thinkwithu）&cw=">在线咨询</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item_tab"><!--外层循环item_tab-->
                    <div class="flex-container item_tab_wrap"><!--内层循环 item_list-->
                        <div class="item_list">
                            <div class="t1_bg item_bg tm">
                                <div class="item_icon"><img src="/cn/images/ency/item_c1.png" alt=""></div>
                                <p class="item_name">A 本科院校</p>
                            </div>
                            <ul class="news_list">
                                <?php $school['usa']=app\modules\cn\models\Content::getContent(['fields' => 'description,abstract', 'category' => "225,90,135", 'order' => 'c.id desc', 'pageSize' => 3]);//头条
                                foreach($school['usa'] as $v){
                                    ?>
                                    <li>
                                        <a href="/encyclopedia/<?php echo $v['id'] ?>.html" target="_blank">
                                            <div>
                                                <p class="news_tit ellipsis"><?php echo $v['name']?></p>
                                                <p class="news_de ellipsis-2"><?php echo $v['abstract']?></p>
                                                <div class="news_date"><?php echo $v['createTime']?></div>
                                            </div>
                                        </a>
                                    </li>
                                <?php }?>
                            </ul>
                            <div class="online_infor tm">
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=新官网（thinkwithu）&cw=">在线咨询</a>
                            </div>
                        </div>
                        <div class="item_list">
                            <div class="t2_bg item_bg tm">
                                <div class="item_icon"><img src="/cn/images/ency/item_c2.png" alt=""></div>
                                <p class="item_name">B 留学费用</p>
                            </div>
                            <ul class="news_list">
                                <?php $school['usa']=app\modules\cn\models\Content::getContent(['fields' => 'description,abstract', 'category' => "119,90,135", 'order' => 'c.id desc', 'pageSize' => 3]);//头条
                                foreach($school['usa'] as $v){
                                    ?>
                                    <li>
                                        <a href="/encyclopedia/<?php echo $v['id'] ?>.html" target="_blank">
                                            <div>
                                                <p class="news_tit ellipsis"><?php echo $v['name']?></p>
                                                <p class="news_de ellipsis-2"><?php echo $v['abstract']?></p>
                                                <div class="news_date"><?php echo $v['createTime']?></div>
                                            </div>
                                        </a>
                                    </li>
                                <?php }?>
                            </ul>
                            <div class="online_infor tm">
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=新官网（thinkwithu）&cw=">在线咨询</a>
                            </div>
                        </div>
                        <div class="item_list">
                            <div class="t3_bg item_bg tm">
                                <div class="item_icon"><img src="/cn/images/ency/item_c3.png" alt=""></div>
                                <p class="item_name">C 申请条件</p>
                            </div>
                            <ul class="news_list">
                                <?php $school['usa']=app\modules\cn\models\Content::getContent(['fields' => 'description,abstract', 'category' => "121,90,135", 'order' => 'c.id desc', 'pageSize' => 3]);//头条
                                foreach($school['usa'] as $v){
                                    ?>
                                    <li>
                                        <a href="/encyclopedia/<?php echo $v['id'] ?>.html" target="_blank">
                                            <div>
                                                <p class="news_tit ellipsis"><?php echo $v['name']?></p>
                                                <p class="news_de ellipsis-2"><?php echo $v['abstract']?></p>
                                                <div class="news_date"><?php echo $v['createTime']?></div>
                                            </div>
                                        </a>
                                    </li>
                                <?php }?>
                            </ul>
                            <div class="online_infor tm">
                                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=新官网（thinkwithu）&cw=">在线咨询</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.country_list dt').click(function () {
            $(this).addClass('on').siblings("dt").removeClass('on');
            var num = $(this).index();
            $('.item_Wrap .item_tab').eq(num).show().siblings('.item_tab').hide();

        })
    </script>
</section>