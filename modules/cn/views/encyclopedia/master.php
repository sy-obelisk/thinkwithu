<link rel="stylesheet" href="/cn/css/encyclopedia/encyMaster.css">
<link rel="stylesheet" href="/cn/css/encyclopedia/reset.css">

<section class="masterCover">

    <div class="w12 bg_w">
        <!--banner-->
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
                                <a href="<?php echo $v['url'] ?>">
                                    <img src="<?php echo $v['image'] ?>" alt="">
                                    <div class="mess-bot-mask"><?php echo $v['name']?></div>
                                </a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <!--右边列表-->
            <div class="mess-b-right">
                <div class="title">今日头条 <img src="/cn/images/ency/hot.png" alt="图标"></div>
                <div class="bd">
                    <ul>
                        <?php foreach ($list as $v) { ?>
                            <li>
                                <p><span>留学资讯</span><a href=""><?php echo $v['name'] ?></a></p>
                                <div class="clearfix">
                                    <div class="r-con-info ellipsis fl">
                                        <?php echo $v['abstract'] ?>
                                    </div>
                                    <div class="hexi-time fr"><?php echo $v['createTime'] ?></div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <script>
                jQuery(".banner_l").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:true});
                jQuery(".mess-b-right").slide({mainCell:".bd ul",effect:"topLoop",autoPlay:true,vis:5});
            </script>
        </div>
        <!--下半部列表-->
        <div class="botList">
            <!--左-->
            <div class="study-left">
                <div class="qh_dcontent">
                    <div class="qh_dhd hd">
                        <ul>
                            <li class="on" data-catid="118">全部</li>
                            <li data-catid="121">留学问答</li>
                            <li data-catid="119">留学规划</li>
                            <li data-catid="128" >留学国家</li>
                            <li data-catid="120">留学手续</li>
                            <li data-catid="115">GMAT</li>
                            <li data-catid="116">托福</li>
                        </ul>
                    </div>
                    <div class="qh_dbd bd">
                        <!--外层循环ul class="wc" 内层循环li class="nc"-->
                        <?php foreach ($data as $val) { ?>
                            <ul class="wc">
                                <li>
                                    <div class="dbd_content">
                                        <ul class="consult_list"><!--列表内容-->
                                            <?php foreach ($val as $k => $v) {
                                                if (is_numeric($k)) {
                                                    ?>
                                                    <li class="nc" data-id="5934"><!--循环li-->
                                                        <div class="clearfix">
                                                            <div class="consult_img fl">
                                                                <a href="/encyclopedia/<?php echo $v['id'] ?>.html">
                                                                    <img src="http://www.thinkwithu.com<?php echo $v['image'] ?>" alt="资讯左侧图片">
                                                                </a>
                                                            </div>
                                                            <div class="consult_text fr">
                                                                <p class="ellipsis consult_tit">
                                                                    <a href="/encyclopedia/<?php echo $v['id'] ?>.html"><?php echo $v['name'] ?></a>
                                                                </p>

                                                                <p class="ellipsis-2 consult_de"><?php echo $v['abstract'] ?></p>

                                                                <div class="consult_view clearfix">
                                                                    <div class="fl">
                                                                        <div class="xiaobian_tx">
                                                                            <a href="">
                                                                                <img
                                                                                    src="http://www.smartapply.cn/cn/images/editor-user/JL.png"
                                                                                    alt="小编头像">
                                                                            </a>
                                                                        </div>
                                                                        <span class="xiaob_name">
                                                                            <a href="javascript:void(0);">申友</a>
                                                                        </span>
                                                                        <span><?php echo $v['createTime'] ?></span>
                                                                        <span class="view_line">|</span>
                                                                        <span>阅读（<?php echo $v['viewCount'] ?>）</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php }
                                            } ?>
                                        </ul>
                                        <!--分页-->
                                        <div class="pageSize tm">
                                            <ul>
                                                <?php for($i=1;$i<=$val['total'];$i++){?>
                                                    <li data-value="<?php echo $val['total']?>" class="total mr02"><span class="colorRed"><?php echo $i;?></span></li>
                                                <?php }?>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        <?php } ?>
                    </div>
                </div>

                <script type="text/javascript">
                    jQuery(".qh_dcontent").slide({trigger:"click"});
                </script>
            </div>
            <!--右-->
            <div class="study-right">
                <div class="TopList">
                    <div class="common-title-h">您可能感兴趣的学校</div>
                    <div class="interSchool">
                        <ul>
                            <?php foreach ($school['data'] as $k => $v) {
                                if (is_numeric($k)) {
                                    ?>
                                    <li>
                                        <div class="inter-num"><?php echo $k + 1 ?></div>
                                        <div class="inter-img">
                                            <img src="http://schools.smartapply.cn<?php echo $v['image'] ?>" alt="学校图片">
                                        </div>
                                        <div class="inter-info">
                                            <h4><a href="/schools/<?php echo $v['id'] ?>.html"><?php echo $v['name'] ?>
                                                    （<?php echo $v['title'] ?>）</a></h4>
                                            <span>排名：<b><?php echo $v['s_rank'] ?></b> | 查看人数：<b><?php echo $v['viewCount']+rand(30,80) ?></b></span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                <?php }
                            } ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
    //分页
    $(".pageSize ul li.total").click(function() {
        $(".pageSize ul li.total").removeClass('on');
        $(this).addClass('on');
        var catId=$(".qh_dhd ul li.on").attr("data-catid");
        var page=$(this).children().html();
        var consult_list = $(this).parents('.dbd_content').find('.consult_list')
        ajaxStr(catId,page,consult_list);

    });
    function ajaxStr(catId,page,consult_list) {
        var str='';
        $.ajax({
            url:"/cn/api/major",
            type:"get",
            data:{
                catId:catId,
                page:page
            },
            dataType:"json",
            success:function (data) {
                consult_list.empty();
                var da=data.data;
                for(var i=0;i<da.length;i++){
                    str+='<li class="nc" data-id="'+ da[i].id +'">' +
                        '<div class="clearfix">' +
                        '<div class="consult_img fl">' +
                        '<a href="/encyclopedia/'+ da[i].id +'.html">' +
                        '<img src="http://www.thinkwithu.com'+da[i].image+'" alt="资讯左侧图片">' +
                        '</a>' +
                        '</div>' +
                        '<div class="consult_text fr">' +
                        '<p class="ellipsis consult_tit">' +
                        '<a href="/encyclopedia/'+ da[i].id +'.html">' +da[i].name+ '</a>' +
                        '</p>' +
                        '<p class="ellipsis-2 consult_de">'+da[i].abstract+'</p>' +
                        '<div class="consult_view clearfix">' +
                        '<div class="fl">' +
                        '<div class="xiaobian_tx">' +
                        '<a href="">' +
                        '<img src="http://www.smartapply.cn/cn/images/editor-user/JL.png"> '+
                        '</a>' +
                        '</div>' +
                        '<span class="xiaob_name">' +
                        '<a href="javascript:void(0);">申友</a>' +
                        '</span>' +
                        '<span>'+da[i].createTime+'</span>' +
                        '<span class="view_line">|</span>' +
                        '<span>阅读（'+da[i].viewCount+'）</span>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</li>';
                }
                consult_list.html(str);

            }
        })
    }

</script>


