<link rel="stylesheet" href="/cn/css/header.css"/>
<link rel="stylesheet" href="/cn/css/footer.css"/>
<link rel="stylesheet" href="/cn/css/public.css"/>
    <link rel="stylesheet" href="/cn/schools/css/academyDetails.css"/>

    <script type="text/javascript" src="/cn/schools/js/academyDetails.js"></script>

<div class="academXQ-content">

    <div class="academXQ-left">
        <div class="acadL-top">
            <img src="/cn/schools/images/academy_yuanx.png" alt="标题图标" height="32"/>
            <span>院校资料</span>
        </div>
        <div class="academXQ-center">
            <div class="academXQ-cL">
                <div class="adL-left">
                    <span></span>
<!--                    <img src="http://academy.fawn/--><?php //echo $details[0]['image']?><!--" alt="学校图片"/>-->
                    <img src="http://schools.smartapply.cn/<?php echo $details[0]['image']?>" alt="学校图片"/>
                </div>
                <div class="adL-right">
                    <ul>
                        <li><h4><?php echo $details[0]['name']?></h4></li>
                        <li><?php echo $details[0]['title']?></li>
                        <li>建校时间：<?php echo $details[0]['s_time']?></li>
                        <li>学校人数：<?php echo $details[0]['s_pesonal']?></li>
                        <li>学校类型：<?php echo $details[0]['s_type']?></li>
                        <li>所在地：<?php echo $details[0]['s_place']?></li>
                        <li>地理位置：<?php echo $details[0]['s_wz']?></li>
                    </ul>
                </div>
                <div style="clear: both"></div>
                <div class="adL-bottom">
                    <ul>
                        <li><span></span> 学校排名<?php echo $details[0]['s_rank']?></li>
                        <li><span></span> 官网：<?php echo $details[0]['s_url']?></li>
                        <li>
                            <a href="/evaluation.html">
                                <img src="/cn/schools/images/academy_gou.png" alt="勾图标"/>
                                <span>录取几率免费评估</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="academXQ-cR">
<!--                <img src="http://academy.fawn/--><?php //echo $details[0]['s_logo']?><!--" alt="图片"/>-->
                <img src="http://schools.smartapply.cn/<?php echo $details[0]['s_logo']?>" alt="图片"/>
            </div>
            <div style="clear: both"></div>
        </div>
          <!--------------学校简介------------------->
        <div class="academXQ-centerT">
            <div class="acad_commonT">
                <img src="/cn/schools/images/academyD_xing.png" alt="五角星图标"/>
                <b>学校简介</b>
                <span>| School Intrduction</span>
            </div>
            <?php echo $details[0]['s_text']?>
        </div>
        <!------------------------基本数据------------------------>
        <div class="acad_commonT">
            <img src="/cn/schools/images/academyD_xing.png" alt="五角星图标"/>
            <b>基本数据</b>
            <span>| Basic Data</span>
        </div>
         <div class="basicData">
             <ul>
                 <li>
                     <div class="basic-left">排名</div>
                     <div class="basic-right">
                         <span><?php
                             if(empty($details[0]['s_rank'])){
                                 echo  "暂无详情内容";
                             }else{
                                 echo $details[0]['s_rank'];
                             }
                             ?></span>
                     </div>
                     <div style="clear: both"></div>
                 </li>
                 <li>
                     <div class="basic-left">年总费用</div>
                     <div class="basic-right">
                         <span>
                             <?php
                             if(empty($details[0]['s_cost'])){
                                 echo  "暂无详情内容";
                             }else{
                                 echo $details[0]['s_cost'];
                             }
                             ?>
                           </span>
                     </div>
                     <div style="clear: both"></div>
                 </li>
             </ul>
         </div>
        <!------------------------基本数据 end------------------------>
        <div class="acad_commonT">
            <img src="/cn/schools/images/academyD_xing.png" alt="五角星图标"/>
            <b>专业详情</b>
            <span>| Professional Details</span>
        </div>
        <div class="academXQ-bottom">
            <div class="aB-ul">
                <ul>
                    <li onclick="majorlist(this,<?php echo $details[0]['id']?>,426)">商科
                    <div class="hideContent">
                        <ul id="majormsg">
                        </ul>
                    </div>
                    </li>
                    <li onclick="majorlist(this,<?php echo $details[0]['id']?>,440)">文科
                        <!--隐藏部分-->
                        <div class="hideContent">
                            <ul id="majormsg">
                            </ul>
                        </div>
                    </li>
                    <li onclick="majorlist(this,<?php echo $details[0]['id']?>,452)">理科
                        <!--隐藏部分-->
                        <div class="hideContent">
                            <ul id="majormsg">
                            </ul>
                        </div>
                    </li>
                    <li onclick="majorlist(this,<?php echo $details[0]['id']?>,466)">工科
                        <div class="hideContent">
                            <ul id="majormsg">
                            </ul>
                        </div>
                    </li>
                    <li onclick="majorlist(this,<?php echo $details[0]['id']?>,480)">艺术与设计
                        <div class="hideContent">
                            <ul id="majormsg">
                            </ul>
                        </div>
                    </li>
                    <li onclick="majorlist(this,<?php echo $details[0]['id']?>,495)">法律与医学
                        <div class="hideContent">
                            <ul id="majormsg">
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!--显示内容部分-->
            <div class="aB-content">
                <ul id="majormain">
                    暂无相关数据
                </ul>
            </div>
        </div>
        <!-------------------------------金牌顾问-------------------------->
        <div class="goldCon">
            <div class="gold-top">
                <img src="/cn/schools/images/academy_zan.gif" alt="gif图标" height="100%"/>
                <span>申友留学金牌顾问</span>
                <a href="javascript:void(0);" onclick="teachers();" nid="2" id="teacherpg">换一批</a>
            </div>
            <div class="gold-bot">
                <ul id="teachers">
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'job,abstract','category' => "139",'pageSize'=>5]);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <div class="goldHead">
                                <img src="<?php echo $v['image']?>" alt="老师照片"/>
                            </div>
                            <span><?php echo $v['name']?></span>
                            <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">
                                <img src="/cn/schools/images/academyD_weixin.png" alt="微信图标">
                                和顾问聊聊</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <!-------------------------------金牌顾问 end-------------------------->

    </div>

    <div class="academy-cRight">
    <!--留学评估-->
        <div class="studyPlan">
            <div class="study-top">
                <b>留学评估</b>
                <span>Assesment</span>
            </div>
            <div class="study-bottom">
                <ul>
                    <li>
                        <div class="want">
                            <span>我想申请 <b>*</b><span class="li-values"></span></span>
                            <div class="rightBtn" onclick="selectStudy(this)"></div>
                            <div class="studyCont">
                                <ul>
                                    <li>本科</li>
                                    <li>硕士</li>
                                    <li>博士</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="want">
                            <span>我想去哪 <b>*</b><span class="li-values"></span></span>
                            <div class="rightBtn" onclick="selectStudy(this)"></div>
                            <div class="studyCont">
                                <ul>
                                    <li>美国</li>
                                    <li>英国</li>
                                    <li>香港</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="want">
                            <span>我想攻读 <b>*</b><span class="li-values"></span></span>
                            <div class="rightBtn" onclick="selectStudy(this)"></div>
                            <div class="studyCont">
                                <ul>
                                    <li>商科</li>
                                    <li>理工科</li>
                                    <li>文科</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="want">
                            <span>所在城市 <b>*</b><span class="li-values"></span></span>
                            <div class="rightBtn" onclick="selectStudy(this)"></div>
                            <div class="studyCont">
                                <ul>
                                    <li>北京</li>
                                    <li>天津</li>
                                    <li>上海</li>
                                    <li>重庆</li>
                                    <li>黑龙江</li>
                                    <li>吉林</li>
                                    <li>辽宁</li>
                                    <li>河北</li>
                                    <li>山东</li>
                                    <li>江苏</li>
                                    <li>安徽</li>
                                    <li>浙江</li>
                                    <li>福建</li>
                                    <li>广东</li>
                                    <li>海南</li>
                                    <li>云南</li>
                                    <li>贵州</li>
                                    <li>四川</li>
                                    <li>湖南</li>
                                    <li>湖北</li>
                                    <li>河南</li>
                                    <li>山西</li>
                                    <li>陕西</li>
                                    <li>甘肃</li>
                                    <li>青海</li>
                                    <li>新疆</li>
                                    <li>西藏</li>
                                    <li>内蒙古</li>
                                    <li>广西</li>
                                    <li>香港</li>
                                    <li>澳门</li>
                                    <li>国外</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="study_btn">
                <a href="/evaluation.html">立即免费评估</a>
            </div>
        </div>
        <?php
        $data = \app\modules\cn\models\Content::getContent(['category' => "252",'pageSize'=>1]);
        foreach($data as $v) {
            ?>
            <a href="#"><img src="<?php echo $v['image']?>" alt="右边banner"/></a>
        <?php
        }
        ?>
        <div class="dissRight conR-eiji">
            <div class="newActive newActive-erji">
                <b>最新活动</b>
            </div>
            <div class="calendar">
                <div class="calendarHd calendarHd-erji">
                    <ul>
                        <li><?php echo date('Y年m月')?></li>
                    </ul>
                    <a href="javascript:;" class="prev"><i class="fa fa-caret-left"></i></a>
                    <a href="javascript:;" class="next"><i class="fa fa-caret-right "></i></a>
                </div>
                <div style="clear: both"></div>
                <div class="calendarBd">
                    <?php
                    $week = date("N",strtotime(date("Y-m-01")));
                    ?>
                    <ul class="calUl01">
                        <li>
                            <ul>
                                <li>Sun.</li>
                                <li>Mon.</li>
                                <li>Tues.</li>
                                <li>Wed.</li>
                                <li>Thur.</li>
                                <li>Fri.</li>
                                <li>Sat.</li>
                                <?php
                                for($a=1;$a<=$week;$a++) {
                                    ?>
                                    <li></li>
                                <?php
                                }
                                ?>
                                <?php
                                $StartMonth   = date("Y-m-01"); //开始日期
                                $EndMonth     = date("Y-m-d",strtotime("$StartMonth +1 month -1 day")); //结束日期
                                $ToStartMonth = strtotime( $StartMonth ); //转换一下
                                $ToEndMonth   = strtotime( $EndMonth ); //一样转换一下
                                $i            = false; //开始标示
                                while( $ToStartMonth < $ToEndMonth ) {
                                    $NewMonth = !$i ? date('Y-m-d', strtotime('+0 Month', $ToStartMonth)) : date('Y-m-d', strtotime('+1 day', $ToStartMonth));
                                    $ToStartMonth = strtotime($NewMonth);
                                    $i = true;
                                    ?>
                                    <li>
                                        <?php
                                        if (in_array($NewMonth, $activityDate)){
                                            ?>
                                            <a href="/public-class/<?php echo $activity[$NewMonth]['id']?>.html" class="on on-erji"><?php echo date("d", strtotime($NewMonth)) ?></a>

                                            <div class="classOn classOn-erji">
                                                <?php echo $activity[$NewMonth]['name']?>
                                            </div>
                                        <?php
                                        }else {
                                            ?>
                                            <?php echo date("d", strtotime($NewMonth)) ?>
                                        <?php
                                        }
                                        ?>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                    <?php
                    $StartMonth   = date("Y-m-01");
                    $week = date("N",strtotime(date("Y-m-01",strtotime("$StartMonth +1 month"))));
                    ?>
                    <ul class="calUl02">
                        <li>
                            <ul>
                                <li>Sun.</li>
                                <li>Mon.</li>
                                <li>Tues.</li>
                                <li>Wed.</li>
                                <li>Thur.</li>
                                <li>Fri.</li>
                                <li>Sat.</li>
                                <?php
                                for($a=1;$a<=$week;$a++) {
                                    ?>
                                    <li></li>
                                <?php
                                }
                                ?>
                                <?php
                                $StartMonth   = date("Y-m-01",strtotime("$StartMonth +1 month")); //开始日期
                                $EndMonth     = date("Y-m-d",strtotime("$StartMonth +1 month -1 day")); //结束日期
                                $ToStartMonth = strtotime( $StartMonth ); //转换一下
                                $ToEndMonth   = strtotime( $EndMonth ); //一样转换一下
                                $i            = false; //开始标示
                                while( $ToStartMonth < $ToEndMonth ) {
                                    $NewMonth = !$i ? date('Y-m-d', strtotime('+0 Month', $ToStartMonth)) : date('Y-m-d', strtotime('+1 day', $ToStartMonth));
                                    $ToStartMonth = strtotime($NewMonth);
                                    $i = true;
                                    ?>
                                    <li>
                                        <?php
                                        if (in_array($NewMonth, $activityDate)){
                                            ?>
                                            <a href="/public-class/<?php echo $activity[$NewMonth]['id']?>.html" class="on on-erji"><?php echo date("d", strtotime($NewMonth)) ?></a>

                                            <div class="classOn classOn-erji">
                                                <?php echo $activity[$NewMonth]['name']?>
                                            </div>
                                        <?php
                                        }else {
                                            ?>
                                            <?php echo date("d", strtotime($NewMonth)) ?>
                                        <?php
                                        }
                                        ?>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(".calendar").slide({titleCell:".calendarHd ul",mainCell:".calendarBd",trigger:"click",autoPage:"autoPage"});
            </script>
        </div>

        <div style="clear: both"></div>

    <div class="speech">
        <div class="speechHd hd">
            <ul>
                <li>留学感言</li>
                <li>培训感言</li>
            </ul>
        </div>
        <div class="speechBd">
            <ul>
                <li>
                    <img src="/cn/schools/images/academy_ganyan.png" alt="感言图片" class="topImg"/>
                    <div>
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "178,102",'pageSize'=>8]);
                            foreach($data as $v) {
                                ?>
                                <li><img src="/cn/schools/images/quesAnswer_dianIcon.png" alt="点图标"/>
                                    <a href="/word-details/<?php echo $v['id']?>/102.html">
                                        <?php
                                        if($v['title']){
                                            echo $v['title'];
                                        }else{
                                            echo $v['name'];
                                        }
                                        ?>
                                    </a></li>
                            <?php
                            }
                            ?>
                   </ul>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <img src="/cn/schools/images/academy_ganyan.png" alt="感言图片" class="topImg"/>
                    <div>
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "177,102",'pageSize'=>8]);
                            foreach($data as $v) {
                                ?>
                                <li><img src="/cn/schools/images/quesAnswer_dianIcon.png" alt="点图标"/><a href="/word-details/<?php echo $v['id']?>/102.html"><?php echo $v['title']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".speech").slide({mainCell:".speechBd",trigger:"mouseover"});
    </script>
    <img src="/cn/schools/images/quesAnswer_phone02.png" alt="联系电话"/>
    </div>
    <div style="clear: both"></div>
    <script type="text/javascript">
        moth(".calUl02",".calendarHd ul li",'<?php echo date("Y年m月")?>','<?php $firstday=date("Y-m"); echo date("Y年m月",strtotime("$firstday +1 month"))?>');
        moth(".evecalUl02",".everyCahd ul li",'<?php echo date("Y年m月")?>','<?php $firstday=date("Y-m"); echo date("Y年m月",strtotime("$firstday +1 month"))?>');
    </script>
</div>

<script type="text/javascript">
    jQuery(".connection").slide({mainCell:".connectBd",trigger:"mouseover"});
    $(function(){
        majorlist();
    });
    /**
     * 院校数据
     */
    function majorlist(o,contentid,catid) {
        $(o).addClass("on").siblings().removeClass("on");
        if(contentid=='' || contentid==null){
            contentid = '<?php echo $details[0]['id']?>';
        } if(catid=='' || catid==null){
            catid = 172;
        }
        //我的课程
        $.ajax({
            url: '/cn/schools/major',
            data: {
                contentid: contentid,
                catid: catid
            },
            type: 'post',
            cache: false,
            dataType: 'json',
            success: function (data) {
                if (data.code == 1) {
                    var str = "";
                    $.each(data.data, function (k, v) {
                        str += ' <li>'+
                        '<b></b>'+
                        '<a href="/schools/majormsg/'+ v.pid+'/'+ v.catId+'.html">'+ v.name+'</a>'+
                        '<br><span>学位类型：'+ v.s_degree+' 专业方向：'+ v.s_direction+'</span>'+
                        '</li>';
                        $("#majormsg").html(str);
                        $("#majormain").html(str);
                    });
                }
                if(data.code == 0){
                    $("#majormain").html('暂无该信息');
                }
            },
            error: function () {
                alert("网络通讯失败");
            }
        });
    }

    function teachers(){
        var pg = $("#teacherpg").attr('nid');
        if(pg==4){
            pg = 1;
        }
        //我的课程
        $.ajax({
            url: '/cn/schools/teacher',
            data: {
                pageNumber: pg
            },
            type: 'post',
            cache: false,
            dataType: 'json',
            success: function (data) {
                $('#teachers').empty();
                if(data.code == 1){
                    var str = "";
                    $.each(data.data,function(k,v) {
                        str +='<li>'+
                        '<div class="goldHead">'+
                        '<img src="'+ v.image+'" alt="老师照片"/>'+
                        '</div>'+
                        '<span>'+ v.name+'</span>'+
                        '<a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="  target="_blank">'+
                        '<img src="/cn/schools/images/academyD_weixin.png" alt="微信图标">和顾问聊聊</a>'+
                        '</li>';
                        if(v.name){
                            $("#teachers").html(str);
                            $("#teacherpg").attr('nid',parseInt(pg)+1);
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
