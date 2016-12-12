<link rel="stylesheet" href="/cn/css/ResearchReport.css"/>
<script type="text/javascript" src="/cn/js/public.js"></script>

<div class="fiveAdvantage fiveAdvantage-sanji">
    <img src="/cn/images/quesAnswer_topH02.jpg" alt="内容头部图"/>
</div>
<div class="quesAcontent">
    <div class="contentLeft">

        <div class="everySlide">
            <div class="everyDay">
                <div class="leftYellow"></div>
                <ul>
                    <li>申友每日一题</li>
                    <li>申友机经班冲刺</li>
                </ul>

                <div class="right-phone">
                    <input type="button" value="立即留学评估"/>
                    <span><img src="/cn/images/quesAnswer_phone.png" alt="电话图标"> 400-600-1123</span>
                </div>
                <div style="clear: both"></div>
            </div>
            <div class="everyDayBd">
                <div class="ineveryDay toggleE">
                    <div class="ineveryHd">
                        <ul>
                            <li>全部</li>
                            <li>GMAT</li>
                            <li>托福</li>
                        </ul>
                        <div style="clear: both"></div>
                    </div>
                    <div class="ineveryBd">
                        <ul class="inbdUL">
                            <li>
                                <div class="researchContent">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'abstract','category' => "249",'pageSize'=>10]);
                                        $total = $data['total'];
                                        $count = $data['count'];
                                        unset($data['count']);
                                        unset($data['total']);
                                        unset($data['pageStr']);
                                        foreach($data as $v) {
                                            ?>
                                            <li>
                                                <a href="/word-details/<?php echo $v['id']?>/116.html" class="title"><?php echo $v['name']?></a>
                                                <p>
                                                    <?php echo $v['abstract']?>
                                                </p>
                                                <span>时间:<?php echo $v['createTime']?></span>
                                                <a href="/word-details/<?php echo $v['id']?>/116.html" class="seeMore">查看更多</a>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>

                                <!--分页-->
                                <div data-value="249" class="page" style="clear: both">
                                    <ul>
                                        <li>总数：<?php echo $count?></li>
                                        <li data-value="1" class="num"><a href="javascript:;">首页</a></li>
                                        <li data-value="0" class="num"><a href="javascript:;">上一页</a></li>
                                        <li data-value="2" class="num"><a href="javascript:;">下一页</a></li>
                                        <li data-value="<?php echo $total?>" class="mr num"><a href="#">尾页</a></li>
                                        <li data-value="<?php echo $total?>" class="total mr02">页次：<span class="colorRed">1</span>/<?php echo $total?></li>
                                        <li class="mr02"><input type="text"/></li>
                                        <li class="goButton"><input type="button" value="GO"/></li>
                                        <li class="num"></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="inbdUL">
                            <div class="researchContent">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'abstract','category' => "249,115",'pageSize'=>10]);
                                    $total = $data['total'];
                                    $count = $data['count'];
                                    unset($data['count']);
                                    unset($data['total']);
                                    unset($data['pageStr']);
                                    foreach($data as $v) {
                                        ?>
                                        <li>
                                            <a href="/word-details/<?php echo $v['id']?>/116.html" class="title"><?php echo $v['name']?></a>
                                            <p>
                                                <?php echo $v['abstract']?>
                                            </p>
                                            <span>时间:<?php echo $v['createTime']?></span>
                                            <a href="/word-details/<?php echo $v['id']?>/116.html" class="seeMore">查看更多</a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>

                            <!--分页-->
                            <div data-value="249" class="page" style="clear: both">
                                <ul>
                                    <li>总数：<?php echo $count?></li>
                                    <li data-value="1" class="num"><a href="javascript:;">首页</a></li>
                                    <li data-value="0" class="num"><a href="javascript:;">上一页</a></li>
                                    <li data-value="2" class="num"><a href="javascript:;">下一页</a></li>
                                    <li data-value="<?php echo $total?>" class="mr num"><a href="#">尾页</a></li>
                                    <li data-value="<?php echo $total?>" class="total mr02">页次：<span class="colorRed">1</span>/<?php echo $total?></li>
                                    <li class="mr02"><input type="text"/></li>
                                    <li class="goButton"><input type="button" value="GO"/></li>
                                    <li class="num"></li>
                                </ul>
                            </div>
                        </ul>
                        <ul class="inbdUL">
                            <div class="researchContent">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'abstract','category' => "249,116",'pageSize'=>10]);
                                    $total = $data['total'];
                                    $count = $data['count'];
                                    unset($data['count']);
                                    unset($data['total']);
                                    unset($data['pageStr']);
                                    foreach($data as $v) {
                                        ?>
                                        <li>
                                            <a href="/word-details/<?php echo $v['id']?>/116.html" class="title"><?php echo $v['name']?></a>
                                            <p>
                                                <?php echo $v['abstract']?>
                                            </p>
                                            <span>时间:<?php echo $v['createTime']?></span>
                                            <a href="/word-details/<?php echo $v['id']?>/116.html" class="seeMore">查看更多</a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>

                            <!--分页-->
                            <div data-value="249" class="page" style="clear: both">
                                <ul>
                                    <li>总数：<?php echo $count?></li>
                                    <li data-value="1" class="num"><a href="javascript:;">首页</a></li>
                                    <li data-value="0" class="num"><a href="javascript:;">上一页</a></li>
                                    <li data-value="2" class="num"><a href="javascript:;">下一页</a></li>
                                    <li data-value="<?php echo $total?>" class="mr num"><a href="#">尾页</a></li>
                                    <li data-value="<?php echo $total?>" class="total mr02">页次：<span class="colorRed">1</span>/<?php echo $total?></li>
                                    <li class="mr02"><input type="text"/></li>
                                    <li class="goButton"><input type="button" value="GO"/></li>
                                    <li class="num"></li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="ineveryDay">
                    <ul class="inbdUL">
                        <li>
                        <li>
                            <div class="otherShow">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'abstract','category' => "250",'pageSize'=>10]);
                                    $total = $data['total'];
                                    $count = $data['count'];
                                    unset($data['count']);
                                    unset($data['total']);
                                    unset($data['pageStr']);
                                    foreach($data as $v) {
                                        ?>
                                        <li>
                                            <a href="/word-details/<?php echo $v['id']?>/115.html">
                                                <i class="fa fa-angle-right"></i> <?php echo $v['name']?></a>
                                            <span><?php echo $v['createTime']?></span>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>


                            <!--分页-->
                            <div data-value="250" class="page" style="clear: both">
                                <ul>
                                    <li>总数：<?php echo $count?></li>
                                    <li data-value="1" class="num"><a href="javascript:;">首页</a></li>
                                    <li data-value="0" class="num"><a href="javascript:;">上一页</a></li>
                                    <li data-value="2" class="num"><a href="javascript:;">下一页</a></li>
                                    <li data-value="<?php echo $total?>" class="mr num"><a href="#">尾页</a></li>
                                    <li data-value="<?php echo $total?>" class="total mr02">页次：<span class="colorRed">1</span>/<?php echo $total?></li>
                                    <li class="mr02"><input type="text"/></li>
                                    <li class="goButton"><input type="button" value="GO"/></li>
                                    <li class="num"></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".toggleE").slide({titCell:".ineveryHd li",mainCell:".ineveryBd",trigger:"click"});
            jQuery(".everySlide").slide({titCell:".everyDay li",mainCell:".everyDayBd",trigger:"click"});
        </script>
        <?php use app\commands\front\RelatedWidget;?>
        <?php RelatedWidget::begin();?>
        <?php RelatedWidget::end();?>
    </div>
    <?php use app\commands\front\RightWidget;?>
    <?php RightWidget::begin(['type' => 2]);?>
    <?php RightWidget::end();?>
    <div style="clear: both"></div>
</div>

<script type="text/javascript">
    /**
     * 名师页面分页
     */
    $('.num').live('click',function(){
        var _this = this;
        var page = $(this).attr('data-value');
        var total = $(this).siblings('.total').attr('data-value');
        if(page <1){
            return false;
        }
        if(page > total){
            return false;
        }
        var pageSize = 5;
        var category = $(this).closest('.page').attr('data-value');
        $.post('/cn/api/change-content',{fields:'abstract',page:page,pageSize:pageSize,category:category},function(re){
            var dataStr = "";
            for(i=0;i<re.data.length;i++){
                if(category==249){
                    dataStr += '<li>'+
                    '<p>'+re.data[i].name+'</p>'+
                    '<p>'+re.data[i].abstract+'</p>'+
                    '<p>'+re.data[i].createTime+'</p>'+
                    '<a href="/word-details/'+re.data[i].id+'/116.html">查看更多</a><br/>'+
                    '<span>---------------------------------------------------------------------------------------------------</span>'+
                    '</li>';
                }if(category==250){
                    dataStr += '<li>'+
                    '<p><a href="/word-details/'+re.data[i].id+'/115.html">'+re.data[i].name+'</a></p>'+
                    '<p>'+re.data[i].createTime+'</p>'+
                    '<a href="/word-details/'+re.data[i].id+'/115.html">查看更多</a><br/>'+
                    '</li>';
                }
            }
            dataStr +='<div data-value="'+category+'" class="page" style="clear: both">';
            dataStr +=re.str;
            dataStr +='</div>';
            $(_this).closest('.inbdUL').html(dataStr);
        },'json')
    });
    //分页搜索
    $('.goButton').live('click',function(){
        var page = $(this).prev('li').find('input').val();
        var next = $(this).next('li');
        next.attr('data-value',page);
        next.click();
    });
    $(function(){
        var searchVal=location.href.split("#")[1];
        if(searchVal=="toggle"){
            $(".everyDay ul li").last().trigger("click");
        }
    });
</script>