<link rel="stylesheet" href="/cn/css/index_second.css"/>
<script type="text/javascript" src="/cn/js/index_second.js"></script>
<div id="re_smart">
    <div class="w12">
        <!--当前路径-->
        <div class="location">
            <a class="link_cation" href="/cn/study-mall.html">留学商城</a>
            <em class="link_cation">></em>
            <span class="cur_cation">出国留学</span>
        </div>
        <div>
            <img src="/cn/images/smart_banner.png" alt="">
        </div>
        <div class="clearfix content_wrap">
            <!--灰色选择类别-->
            <div class="greyChoose bg_f fl">
                <h1 class="left_tit">服务类型</h1>
                <ul>
                    <li  data-value="0" class="<?php echo isset($_GET['category'])&&$_GET['category']==0?'on':''?> category diffLi" diff-value='1'>全部</li>
                    <?php
                    $aim = \app\modules\cn\models\Category::find()->where("pid=270 AND id not in (273,274,278)")->orderBy('id DESC')->all();
                    foreach($aim as $v) {
                        ?>
                        <li data-value="<?php echo $v['id']?>" class="<?php echo isset($_GET['category'])&&strstr($_GET['category'],"{$v['id']}")?'on':''?> category"><?php echo $v['name']?></li>
                        <?php
                    }
                    ?>
                </ul>

                <h1 class="left_tit">国家</h1>
                <ul>
                    <li  data-value="0" class="<?php echo isset($_GET['country'])&&$_GET['country']==0?'on':''?> diffLi country" diff-value='2'>全部</li>
                    <?php
                    $country = \app\modules\cn\models\Category::find()->where("pid=286")->orderBy('id DESC')->all();
                    foreach($country as $v) {
                        ?>
                        <li data-value="<?php echo $v['id']?>" class="<?php echo isset($_GET['country'])&&strstr($_GET['country'],"{$v['id']}")?'on':''?> country"><?php echo $v['name']?></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="fr right_wrap bg_f">
                <!--按照什么搜索-->
                <div class="synthesize">
                    <ul class="clearfix">
                        <li><a href="/study-abroad/category-<?php echo isset($_GET['category'])?$_GET['category']:0?>/aim-<?php echo isset($_GET['aim'])?$_GET['aim']:0?>/country-<?php echo isset($_GET['country'])?$_GET['country']:0?>/page-<?php echo isset($_GET['page'])?$_GET['page']:1?>.html">综合</a></li>
                        <li><a href="/study-abroad/category-<?php echo isset($_GET['category'])?$_GET['category']:0?>/aim-<?php echo isset($_GET['aim'])?$_GET['aim']:0?>/country-<?php echo isset($_GET['country'])?$_GET['country']:0?>/page-<?php echo isset($_GET['page'])?$_GET['page']:1?>/buyNum-<?php echo isset($_GET['buyNum'])&&$_GET['buyNum'] == 1?2:1?>.html">销量 <?php if(!isset($_GET['buyNum'])){echo '';}elseif($_GET['buyNum'] == 1){echo '<i class="fa  fa-long-arrow-down"></i>';}else{echo '<i class="fa  fa-long-arrow-up"></i>';}?></a></li>
                        <li><a href="/study-abroad/category-<?php echo isset($_GET['category'])?$_GET['category']:0?>/aim-<?php echo isset($_GET['aim'])?$_GET['aim']:0?>/country-<?php echo isset($_GET['country'])?$_GET['country']:0?>/page-<?php echo isset($_GET['page'])?$_GET['page']:1?>/price-<?php echo isset($_GET['price'])&&$_GET['price'] == 1?2:1?>.html">价格 <i class="fa  fa-caret-down <?php echo isset($_GET['price'])&&$_GET['price'] == 1?'blue':''?>"></i><i class="fa  fa-caret-up <?php echo isset($_GET['price'])&&$_GET['price'] == 2?'blue':''?>"></i></a></li>
                        <li><a href="/study-abroad/category-<?php echo isset($_GET['category'])?$_GET['category']:0?>/aim-<?php echo isset($_GET['aim'])?$_GET['aim']:0?>/country-<?php echo isset($_GET['country'])?$_GET['country']:0?>/page-<?php echo isset($_GET['page'])?$_GET['page']:1?>/time-<?php echo isset($_GET['time'])&&$_GET['time'] == 1?2:1?>.html">最新 <?php if(!isset($_GET['time'])){echo '';}elseif($_GET['time'] == 1){echo '<i class="fa  fa-long-arrow-down"></i>';}else{echo '<i class="fa  fa-long-arrow-up"></i>';}?></a></li>
                    </ul>
                </div>
                <!--内容部分-->
                <div class="allContent">
                    <div class="con-font">
                        <ul class="warelist_wrap">
                            <?php
                            foreach($data as $v) {
                                ?>
                                <li>
                                    <div class="clearfix ware_info_wrap">
                                        <div class="clearfix fl">
                                            <div class="ware_img fl"><img src="<?php echo $v['image']?>" alt=""></div>
                                            <div class="ware_info fl">
                                                <h1 class="ellipsis ware_name"><?php echo $v['name']?></h1>
                                                <p class="ellipsis-2 ware_de"><?php echo $v['answer']?></p>
                                                <div>
                                                    <span class="old_price">原价：<?php echo $v['originalPrice']?></span>
                                                    <span class="now_price">￥<?php echo $v['price']?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="handle_ware clearfix fr tm">
                                            <a href="/goods/<?php echo $v['id']?>.html?cat=<?php echo isset($_GET['category'])?$_GET['category']:0?>">查看详情</a>
                                            <a class="handle_zx" href="tencent://message/?uin=1746295647&Site=www.cnclcy&Menu=yes" target="_blank">立即咨询</a>
                                        </div>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="con-page">
                        <ul>
                            <?php echo $pageStr?>
                            <li class="last-li">
                                <?php
                                if($totalPage>1) {
                                    ?>
                                    <select onchange="selectPage(this)">
                                        <?php
                                        for ($i = 1; $i <= $totalPage; $i++) {
                                            ?>
                                            <option <?php echo $page==$i?'selected':''?> value="<?php echo $i ?>"><?php echo $i ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <?php
                                }
                                ?>
                            </li>
                        </ul>

                        <div style="clear: both"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    function selectPage(_this){
        var page = $(_this).val();
        var str = "<?php if(isset($_GET['buyNum'])){echo "/buyNum-{$_GET['buyNum']}";}elseif(isset($_GET['price'])){echo "/price-{$_GET['price']}";}elseif(isset($_GET['time'])){echo "/time-{$_GET['time']}";}else{echo "";}?>";
        location.href ="/study-abroad/category-<?php echo isset($_GET['category'])?$_GET['category']:0?>/aim-<?php echo isset($_GET['aim'])?$_GET['aim']:0?>/country-<?php echo isset($_GET['country'])?$_GET['country']:0?>/page-"+page+str+".html";
    }
    function clickClassify(){
        var str='',allHtml='';
        var _that=$(this);//点击的li对象
        if(_that.attr("diff-value")=='1'){//留学目标,点击全部
            $(_that).siblings().removeClass("on");
        }else if(_that.attr("diff-value")=='2'){//国家,点击全部
            $(_that).siblings().removeClass("on");
        }
        else{//点击除了全部和第一个li
            str+='<li><div class="blueBox"><span>'+$(this).html()+'</span><span onclick="closeClassify(this)">×</span></div></li>';
            $(this).siblings(".diffLi").removeClass("on");
        }
        if(_that.hasClass("on")){
            _that.removeClass("on")
        }else{
            _that.addClass("on").siblings().removeClass("on");
        }
        var category = '';
        $('.category.on').each(function(){
            var id = $(this).attr('data-value');
            category += id+',';
        })
        category = category.substr(0,category.length-1);
        if(category==''){
            category = 0;
        }
        var aim = '';
        $('.aim.on').each(function(){
            var id = $(this).attr('data-value');
            aim += id+',';
        })
        aim = aim.substr(0,aim.length-1);
        if(aim==''){
            aim = 0;
        }
        var country = '';
        $('.country.on').each(function(){
            var id = $(this).attr('data-value');
            country += id+',';
        })
        country = country.substr(0,country.length-1);
        if(country==''){
            country = 0;
        }
        location.href ="/study-abroad/category-"+category+"/aim-"+aim+"/country-"+country+"/page-1"+".html"
    }

    $('.iPage').click(function(){
        $(this).siblings().removeClass('on');
        $(this).addClass('on');
        var page = $('.con-page').find('.on').html();
        var str = "<?php if(isset($_GET['buyNum'])){echo "/buyNum-{$_GET['buyNum']}";}elseif(isset($_GET['price'])){echo "/price-{$_GET['price']}";}elseif(isset($_GET['time'])){echo "/time-{$_GET['time']}";}else{echo "";}?>";
        location.href ="/study-abroad/category-<?php echo isset($_GET['category'])?$_GET['category']:0?>/aim-<?php echo isset($_GET['aim'])?$_GET['aim']:0?>/country-<?php echo isset($_GET['country'])?$_GET['country']:0?>/page-"+page+str+".html";
    })

    $('.prev').click(function(){
        var page = $('.con-page').find('.on').html();
        if(page == 1){
            return false;
        }else{
            page = parseInt(page)-1;
        }
        var str = "<?php if(isset($_GET['buyNum'])){echo "/buyNum-{$_GET['buyNum']}";}elseif(isset($_GET['price'])){echo "/price-{$_GET['price']}";}elseif(isset($_GET['time'])){echo "/time-{$_GET['time']}";}else{echo "";}?>";
        location.href ="/study-abroad/category-<?php echo isset($_GET['category'])?$_GET['category']:0?>/aim-<?php echo isset($_GET['aim'])?$_GET['aim']:0?>/country-<?php echo isset($_GET['country'])?$_GET['country']:0?>/page-"+page+str+".html";
    })

    $('.next').click(function(){
        var page = $('.con-page').find('.on').html();
        if(page == <?php echo $totalPage?>){
            return false;
        }else{
            page = parseInt(page)+1;
        }
        var str = "<?php if(isset($_GET['buyNum'])){echo "/buyNum-{$_GET['buyNum']}";}elseif(isset($_GET['price'])){echo "/price-{$_GET['price']}";}elseif(isset($_GET['time'])){echo "/time-{$_GET['time']}";}else{echo "";}?>";
        location.href ="/study-abroad/category-<?php echo isset($_GET['category'])?$_GET['category']:0?>/aim-<?php echo isset($_GET['aim'])?$_GET['aim']:0?>/country-<?php echo isset($_GET['country'])?$_GET['country']:0?>/page-"+page+str+".html";
    })
</script>
