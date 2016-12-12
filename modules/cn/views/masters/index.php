
    <link rel="stylesheet" href="/cn/css/MastersGathered.css"/>



<div class="gatheredImg">
    <img src="/cn/images/masterGathered_bigImg.jpg" alt="大图"/>
</div>
<div class="masterGather" id="teacher">
    <div class="gatherLeft">
        <div class="galeftHd hd">
            <p>名师云集 <span>ELITE TEAM</span></p>
            <ul>
                <li <?php echo $id == 140?'class="on"':''?>>
                    <img src="/cn/images/masterGathered_small01.png" alt="图"/>
                    <b>留学顾问</b>
                </li>
                <li <?php echo $id == 139?'class="on"':''?>>
                    <img src="/cn/images/masterGathered_small02.png" alt="图"/>
                    <b>GMAT讲师</b>
                </li>
                <li <?php echo $id == 141?'class="on"':''?>>
                    <img src="/cn/images/masterGathered_small02.png" alt="图"/>
                    <b>托福名师</b>
                </li>
                <li <?php echo $id == 246?'class="on"':''?>>
                    <img src="/cn/images/masterGathered_small02.png" alt="图"/>
                    <b>海外mentor</b>
                </li>
            </ul>
        </div>
        <div style="clear: both"></div>
        <div class="galeftBd">
            <ul <?php echo $id == 140?'style="display:block"':''?>>
                <li>
                    <ul class="inbdUL">
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'speaker,job','category' => "140",'pageSize'=>8]);
                        $total = $data['total'];
                        $count = $data['count'];
                        unset($data['count']);
                        unset($data['total']);
                        unset($data['pageStr']);
                        foreach($data as $v) {
                            ?>
                            <li>
                                <div class="topImg">
                                    <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html">
                                        <img src="<?php echo $v['image']?>" alt="老师图片"/>
                                    </a>
                                 </div>
                                <div class="greyDiv">
                                    <p><?php echo $v['name']?></p>
                                    <p>职位:<?php echo $v['job']?></p>
                                </div>
                                <div class="abroadDiv">
                                    <a href="/evaluation.html">留学评估</a>
                                    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">在线咨询</a>
                                </div>
                            </li>

                        <?php
                        }
                        ?>

                        <!--分页-->
                        <div data-value="140" class="page" style="clear: both">
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

                </li>

            </ul>
            <ul <?php echo $id == 139?'style="display:block"':''?>>
                <li>
                    <ul class="inbdUL">
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'job,speaker','category' => "139",'pageSize'=>8]);
                        $total = $data['total'];
                        $count = $data['count'];
                        unset($data['count']);
                        unset($data['total']);
                        unset($data['pageStr']);
                        foreach($data as $v) {
                            ?>
                            <li>
                                <div class="topImg">
                                    <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html">
                                        <img src="<?php echo $v['image']?>" alt="老师图片"/>
                                    </a>
                                </div>
                                <div class="greyDiv">
                                    <p><?php echo $v['name']?></p>
                                    <p><?php echo $v['job']?></p>
                                    <p title="<?php echo $v['speaker']?>">主讲:<?php echo $v['speaker']?></p>
                                </div>
                                <div class="abroadDiv">
                                    <a href="/evaluation.html">留学评估</a>
                                    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">在线咨询</a>
                                </div>
                            </li>

                        <?php
                        }
                        ?>

                        <!--分页-->
                        <div data-value="139" class="page" style="clear: both">
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

                </li>

            </ul>
            <ul <?php echo $id == 141?'style="display:block"':''?>>
                <li>
                    <ul class="inbdUL">
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'job,speaker','category' => "141",'pageSize'=>8]);
                        $total = $data['total'];
                        $count = $data['count'];
                        unset($data['count']);
                        unset($data['total']);
                        unset($data['pageStr']);
                        foreach($data as $v) {
                            ?>
                            <li>
                                <div class="topImg">
                                    <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html">
                                        <img src="<?php echo $v['image']?>" alt="老师图片"/>
                                    </a>
                                </div>
                                <div class="greyDiv">
                                    <p><?php echo $v['name']?></p>
                                    <p><?php echo $v['job']?></p>
                                    <p>主讲:<?php echo $v['speaker']?></p>
                                </div>
                                <div class="abroadDiv">
                                    <a href="/evaluation.html">留学评估</a>

                                    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">在线咨询</a>
                                </div>
                            </li>

                        <?php
                        }
                        ?>

                        <!--分页-->
                        <div data-value="141" class="page" style="clear: both">
                            <ul>
                                <li>总数：<?php echo $count?></li>
                                <li data-value="1" class="num"><a href="javascript:;">首页</a></li>
                                <li data-value="0" class="num"><a href="javascript:;">上一页</a></li>
                                <li data-value="2" class="num"><a href="javascript:;">下一页</a></li>
                                <li data-value="<?php echo $total?>" class="mr num"><a href="javascript:;">尾页</a></li>
                                <li data-value="<?php echo $total?>" class="total mr02">页次：<span class="colorRed">1</span>/<?php echo $total?></li>
                                <li class="mr02"><input type="text"/></li>
                                <li class="goButton"><input type="button" value="GO"/></li>
                                <li class="num"></li>
                            </ul>
                        </div>
                    </ul>

                </li>

            </ul>
            <ul <?php echo $id == 246?'style="display:block"':''?>>
                <li>
                    <ul class="inbdUL">
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'job,speaker','category' => "246",'pageSize'=>8]);
                        $total = $data['total'];
                        $count = $data['count'];
                        unset($data['count']);
                        unset($data['total']);
                        unset($data['pageStr']);
                        foreach($data as $v) {
                            ?>
                            <li>
                                <div class="topImg">
                                <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html">
                                    <img src="<?php echo $v['image']?>" alt="老师图片"/></a>
                                </div>
                                <div class="greyDiv">
                                    <p><?php echo $v['name']?></p>
                                    <p><?php echo $v['job']?></p>
<!--                                    <p>主讲:--><?php //echo $v['speaker']?><!--</p>-->
                                </div>
                                <div class="abroadDiv">
                                    <a href="/evaluation.html">留学评估</a>

                                    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">在线咨询</a>
                                </div>
                            </li>

                        <?php
                        }
                        ?>

                        <!--分页-->
                        <div data-value="246" class="page" style="clear: both">
                            <ul>
                                <li>总数：<?php echo $count?></li>
                                <li data-value="1" class="num"><a href="javascript:;">首页</a></li>
                                <li data-value="0" class="num"><a href="javascript:;">上一页</a></li>
                                <li data-value="2" class="num"><a href="javascript:;">下一页</a></li>
                                <li data-value="<?php echo $total?>" class="mr num"><a href="javascript:;">尾页</a></li>
                                <li data-value="<?php echo $total?>" class="total mr02">页次：<span class="colorRed">1</span>/<?php echo $total?></li>
                                <li class="mr02"><input type="text"/></li>
                                <li class="goButton"><input type="button" value="GO"/></li>
                                <li class="num"></li>
                            </ul>
                        </div>
                    </ul>

                </li>

            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".gatherLeft").slide({mainCell:".galeftBd",trigger:"mouseover"});
    </script>
    <div class="gatherRight">
        <div class="testimonials">
            <div class="testimonHd hd">
                <ul>
                    <li><a href="/case.html#allCase">留学学员感言</a></li>
                    <li><a href="/case.html#allCase">高分学员感言</a></li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="testimonBd">
                <ul>
                    <li>
                        <a href="#"><img src="/cn/images/masterGathered_shitanfu.jpg" alt="斯坦福图片"/></a>
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "178,102",'pageSize'=>8]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/102.html"><?php echo $v['title']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#"><img src="/cn/images/masterGathered_shitanfu02.jpg" alt="斯坦福图片"/></a>
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "177,102",'pageSize'=>8]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/102.html"><?php echo $v['title']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".testimonials").slide({mainCell:".testimonBd",trigger:"mouseover"});
        </script>

        <div class="evaluate">
            <a href="/evaluation.html"><input type="button" value="留学评估" class="evaOne"/></a>
        </div>
        <div class="evaluate">
            <a href="/cn/index/question"><input type="button" value="留学问答" class="evaTwo"/></a>
        </div>
        <div style="clear: both"></div>
        <!--全国咨询热线-->
        <div class="totalNRC">
            <p>全国咨询热线</p>
            <img src="/cn/images/index_purplePhone.png" alt="大电话图标" width="30px"/>
            <b>400-600-1123</b>
        </div>
    </div>

    <div style="clear: both"></div>
</div>
<div class="ProductMenu">
    <div class="productHd hd">
        <h2>
            产品专区
            <span>PRODUCT AREA</span>
        </h2>
        <b>我们只申请名校&nbsp;&nbsp;&nbsp;&nbsp;培养高分学员  <img src="/cn/images/studentsCase_titlePerson.png" alt="标题人"/></b>
        <ul>
            <li><a href="/cn/study/abroad-products"><span>留学产品</span></a></li>
            <li><span>培训产品</span></li>
        </ul>

    </div>
    <div class="productBd speWidth">
        <ul>

            <li>
                <div class="abroadProduct">
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "113",'pageSize'=>7]);
                    foreach($data as $k => $v) {
                        ?>
                        <div class="product0<?php echo $k+1?>" onmouseover="hideZZC(this)" onmouseout="showZZC(this)">
                            <a href="/picture-details/<?php echo $v['id']?>/113.html"><?php echo $v['title']?><br><?php echo $v['name']?></a>
                            <!--遮罩层-->
                            <div class="productZZC"></div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div style="clear: both"></div>
            </li>

        </ul>
        <ul>
            <li>
                <div class="abroadProduct">
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "109,115",'pageSize'=>7]);
                    foreach($data as $k => $v) {
                        ?>
                        <div class="product0<?php echo $k+1?>" onmouseover="hideZZC(this)" onmouseout="showZZC(this)">
                            <a href="/picture-details/<?php echo $v['id']?>/109,115.html"><?php echo $v['title']?><br><?php echo $v['name']?></a>
                            <!--遮罩层-->
                            <div class="productZZC"></div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
                <div style="clear: both"></div>
            </li>
        </ul>
    </div>
    <div class="product-right">
        <div>热门阅读</div>
        <ul>
            <?php
            $data = \app\modules\cn\models\Content::getContent(['category' => "136,118",'pageSize'=>6]);
            foreach($data as $v) {
                ?>
                <li><a href="/word-details/<?php echo $v['id']?>/118.html"><?php echo $v['name']?></a></li>
            <?php
            }
            ?>
        </ul>
    </div>
    <div style="clear: both"></div>
</div>
<script type="text/javascript">
    jQuery(".ProductMenu").slide({mainCell:".productBd",trigger:"mouseover"});
    function hideZZC(o){
        $(o).find("div.productZZC").hide();
    }
    function showZZC(o){
        $(o).find("div.productZZC").show();
    }
</script>
<script type="text/javascript">
    /**
     * 每日一题分页
     */
    $('body').on('click','.num',function(){
        var _this = this;
        var page = $(this).attr('data-value');
        var total = $(this).siblings('.total').attr('data-value');
        if(page <1){
            return false;
        }
        if(page > total){
            return false;
        }
        var pageSize = 8;
        var category = $(this).closest('.page').attr('data-value');
        $.post('/cn/api/change-content',{fields:'job,speaker',page:page,pageSize:pageSize,category:category},function(re){
            var dataStr = "";
            for(i=0;i<re.data.length;i++){
                dataStr += '<li>';
                dataStr +='<div class="topImg"><a href="/teachers/'+re.data[i].name+'/'+re.data[i].id+'.html"><img src="'+re.data[i].image+'" alt="老师图片"/></a></div>';
                dataStr +='<div class="greyDiv">';
                if(category == 140){
                    dataStr +='<p>'+re.data[i].name+'</p>';
                    dataStr +='<p>职位:'+re.data[i].job+'</p>';
                }else if(category == 246){
                    dataStr +='<p>'+re.data[i].name+'</p><p>'+re.data[i].job+'</p>';
                }
                else{
                    dataStr +='<p>'+re.data[i].name+'</p><p>'+re.data[i].job+'</p>';
                    dataStr +='<p title="'+re.data[i].speaker+'">主讲:'+re.data[i].speaker+'</p>';
                }
                dataStr +='</div>';
                dataStr +='<div class="abroadDiv">';
                dataStr +='<a href="/evaluation.html">留学评估</a>';
                dataStr +='<a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">在线咨询</a>';
                dataStr +='</div>';
                dataStr +='</li>';
            }
            dataStr +='<div data-value="'+category+'" class="page" style="clear: both">';
            dataStr +=re.str;
            dataStr +='</div>';
            $(_this).closest('.inbdUL').html(dataStr);
        },'json')
    });
    //分页搜索
    $('body').on('click','.goButton',function(){
        var page = $(this).prev('li').find('input').val();
        var next = $(this).next('li');
        next.attr('data-value',page);
        next.click();
    })
</script>