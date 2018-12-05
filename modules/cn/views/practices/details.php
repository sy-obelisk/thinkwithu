
    <link rel="stylesheet" href="/cn/css/studyPractice-details.css"/>

    <script type="text/javascript" src="/cn/js/studyPractice-details.js"></script>


<div class="praDetail-top">
    <img src="/cn/images/quesAnswer_topH02.jpg" alt="头部图片">
</div>

<div class="praDetail-con">
    <div class="detailC-left">
        <div class="detaL-top">
            <ul>
                <li>
                    <span>你现在所在的位置：</span>
                    <a href="#">游学</a>
                    <b>&gt;</b>
                    <a href="javascript:void(0);"><?php echo $details[0]['name']?></a>
                </li>
            </ul>
            <h2>
                <img src="/cn/images/practiceD_titleIcon.png" alt="标题图标"> <?php echo $details[0]['name']?>
            </h2>
            <span class="greyC">浏览次数：<?php echo $details[0]['viewCount']?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日期：<?php echo $details[0]['time']?></span>
            <hr/>
            <!--文字部分-->
            <pre>
                <?php echo $details[0]['synopsis']?>
            </pre>

            <div class="bshare-custom icon-medium"><div class="bsPromo bsPromo2"></div>
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

        </div>
        <!------推荐项目---------->
        <div class="detaL-bottom">
            <div class="detaLB-top">
                <span>推荐项目</span>
                <a href="javascript:void(0);" onclick="hots();" nid="2" id="hogpg">换一批</a>
            </div>
            <div class="detaLB-bot">
                <ul id="hots">
                    <?php foreach($hot as $v) { ?>
                        <li>
                            <div class="botTop">
                                <a href="/practices/<?php echo $v['id']?>.html">
                                    <img src="<?php echo $v['image']?>" alt="详情图片"/>
                                </a>
                            </div>
                            <h4>
                                <a href="/practices/<?php echo $v['id']?>.html">
                                    <img src="/cn/images/practice_titleIcon.png" alt="b标题图标"/>
                                    <span><?php echo $v['name']?></span>
                                </a>
                            </h4>
                            <span>时间：<?php echo $v['time']?></span>
                            <a href="/practices/<?php echo $v['id']?>.html">点击查看详情 &gt;</a>
                        </li>
                    <?php
                    }
                    ?>


                </ul>
            </div>
        </div>
    </div>
    <div class="detailC-right">
        <div class="detailCR-top">
            <span>名额有限，先抢先得</span>
            <img src="/cn/images/practiceD_carIcon.png" alt="分隔图片">
        </div>
        <form action="/cn/api/abroad-apply" onsubmit="return checkSub()" method="post">
            <div class="detailCR-bot">
                <ul>
                    <?php
                    foreach($extendData as $k => $v) {
                        ?>
                        <li>
                            <label><span><?php echo $v['required'] == 1?'*':''?> </span> <?php echo $v['name']?>：</label>

                            <div class="practice-input">
                                <?php if($v['type'] == 0){?>
                                    <input name="extendValue[]"  <?php echo $v['required'] == 1?'class="val"':''?>  type="text"/>
                                <?php } elseif($v['type'] == 5) {
                                    $typeValue = explode(",",$v['typeValue']);
                                    ?>
                                    <!--下拉-->
                                    <div class="sign-xiala">
                                        <span>请选择</span>
                                        <input type="hidden" <?php echo $v['required'] == 1?'class="val"':''?>  name="extendValue[]" value="">
                                        <!--右边的下拉箭头-->
                                        <div class="rightJ" onclick="upXiala(this)"></div>
                                        <!--下拉内容-->
                                        <div class="sign-content">
                                            <ul>
                                                <?php foreach($typeValue as $val) { ?>
                                                    <li><?php echo $val?></li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
<!--                                    <div class="default defa03">-->
<!--                                        <span class="spanVal">请选择</span>-->
<!--                                        <input type="hidden" --><?php //echo $v['required'] == 1?'class="val"':''?><!--  name="extendValue[]" value="">-->
<!--                                        <div class="clickBac clickBac01" onclick="selectInfo(this)"></div>-->
<!--                                        <!--文字-->
<!--                                        <div class="secFont secFont03">-->
<!--                                            <ul>-->
<!--                                                --><?php //foreach($typeValue as $val) { ?>
<!--                                                    <li>--><?php //echo $val?><!--</li>-->
<!--                                                --><?php
//                                                }
//                                                ?>
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                <?php
                                } elseif($v['type'] == 4) {
                                    ?>
                                    <textarea name="extendValue[]" cols="30" rows="10"></textarea>
                                <?php
                                }
                                ?>
                            </div>
                            <div style="clear: both"></div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <input type="submit" value="点击提交 >" class="clickBtn"/>
        </form>
    </div>

    <div style="clear: both"></div>
</div>


<script type="text/javascript">
    function checkSub(){
        $('.spanVal').each(function(){
            var spanVal = $(this).html();
            if(spanVal == '请选择'){
                spanVal = '';
            }
            $(this).next().val(spanVal);
        });

        $('.val').each(function(){
            if($(this).val() == "" || $(this).val() == "请选择"){
                alert('星标志位必填');
                a = 2;
                return false;
            }
        });
    }

    function hots(){
        var pg = $("#hotpg").attr('nid');
        if(pg==3){
            pg = 1;
        }
        //我的课程
        $.ajax({
            url: '/cn/practices/hot',
            data: {
                pageNumber: pg
            },
            type: 'post',
            cache: false,
            dataType: 'json',
            success: function (data) {
                $('#hots').empty();
                if(data.code == 1){
                    var str = "";
                    $.each(data.data,function(k,v) {
                        str +='<li>'+
                        '<div class="botTop">'+
                        '<a href="/practices/'+ v.id+'.html">'+
                        '<img src="'+ v.image+'" alt="详情图片"/>'+
                        '</a>'+
                        '</div>'+
                        '<h4>'+
                        '<a href="/practices/'+ v.id+'.html">'+
                        '<img src="/cn/images/practice_titleIcon.png" alt="b标题图标"/>'+
                        '<span>'+ v.name+'</span>'+
                        '</a>'+
                        '</h4>'+
                        '<span>时间：'+ v.time+'</span>'+
                        '<a href="/practices/'+ v.id+'.html">点击查看详情 &gt;</a>'+
                        '</li>';
                        if(v.name){
                            $("#hots").html(str);
                            $("#hotpg").attr('nid',parseInt(pg)+1);
                        }
                    });
                }
            },
            error: function () {
                alert("网络通讯失败");
            }
        });
    }
</script>
