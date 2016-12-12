<link rel="stylesheet" href="/cn/css/header.css"/>
<link rel="stylesheet" href="/cn/css/footer.css"/>
<link rel="stylesheet" href="/cn/css/public.css"/>
    <link rel="stylesheet" href="/cn/schools/css/academyBase.css"/>

    <script type="text/javascript" src="/cn/schools/js/academyBase.js"></script>

<!-----------------------------头部end------------------------------>
<div class="adad-top">
    <img src="cn/schools/images/academy_bigBG.jpg" alt="图片">
</div>
<div class="academy-con">
    <div class="academy-cLeft">
        <div class="acad-top">
            <img src="cn/schools/images/academy_yuanx.png" alt="图标"/>
            <b>院校搜索</b>
            <span>国内最大的留学院校</span>
            <img src="/cn/schools/images/academy_gifIcon.gif" alt="gif动态图" style="margin-left: 130px"/>
            <div class="rightSearch">
                <div class="search-left">
                    <div class="havePos">
                        <span id="valN">搜学校</span>
                        <i class="fa fa-caret-down"></i>
                        <div>
                            <ul>
                                <li>搜学校</li>
                                <li>搜专业</li>
                            </ul>
                        </div>
                    </div>
                    <input type="text" id="keyword" placeholder="请输入您要查找的院校"/>
                </div>
                <div class="search-right" onclick="schoolslist(1,10,'')"></div>
                <div style="clear: both"></div>
            </div>
        </div>

        <div class="acad-center">
            <div class="cen-one cenBack01">
                  <ul id="school_country">
                      <li><b>选择国家：</b></li>
                      <li cid="" onclick="schoolslist(1,10,'')">不限</li>
                      <?php foreach($country as $v) { ?>
                          <li cid="<?php echo $v['id']?>" onclick="schoolslist(1,10,<?php echo $v['id']?>)">
                              <?php echo $v['name']?>
                          </li>
                      <?php
                      }
                      ?>
                  </ul>
              </div>
            <div class="cen-one cenBack02">
                <ul>
                    <li><b>综合排名：</b></li>
                    <li cid="" onclick="schoolslist(1,10,'')">不限</li>
                    <?php foreach($rank as $v) { ?>
                        <li cid="<?php echo $v['id']?>" onclick="schoolslist(1,10,<?php echo $v['id']?>)">
                            <?php echo $v['name']?>
                        </li>
                    <?php
                    }
                    ?>
                </ul>

            </div>
            <div class="cen-one cenBack01">
                <ul>
                    <li><b>申请阶段：</b></li>
                    <li cid="" onclick="schoolslist(1,10,''">不限</li>
                    <?php
                    foreach($degree as $v) { ?>
                        <li cid="<?php echo $v['id']?>" onclick="schoolslist(1,10,<?php echo $v['id']?>)">
                            <?php echo $v['name']?>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!--专业方向 与其他不同-->
            <div class="cen-one cenBack02" id="major">
                <ul>
                    <li><b>专业方向：</b></li>
                    <li cid="" onclick="schoolslist(1,10,'')">
                        不限
                    </li>
                    <?php foreach($major as $v) { ?>
                        <li cid="<?php echo $v['id']?>">
                            <?php echo $v['name']?>
                            <div class="changeC">
                                <ul>
                                    <?php
                                    foreach($v['son'] as $vr) { ?>
                                        <li cid="<?php echo $vr['id']?>" onclick="schoolslist(1,10,<?php echo $vr['id']?>)">
                                            <?php echo $vr['name']?>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                </ul>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!--移动到专业方向时改变的内容-->
            <div class="chagneMajor">
                <span class="triangle triLeft01"></span>
                <div id="changeContent">
                </div>
            </div>
            <div class="cen-one cenBack01">
                <ul>
                    <li><b>年总费用：</b></li>
                    <li cid="" onclick="schoolslist(1,10,'')">不限</li>
                    <?php foreach($cost as $v) { ?>
                        <li cid="<?php echo $v['id']?>" onclick="schoolslist(1,10,<?php echo $v['id']?>)">
                            <?php echo $v['name']?>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="cen-one cenBack02">
                <ul>
                    <li><b>学校类型：</b></li>
                    <li cid="" onclick="schoolslist(1,10,'')">不限</li>
                    <?php foreach($type as $v) { ?>
                        <li cid="<?php echo $v['id']?>" onclick="schoolslist(1,10,<?php echo $v['id']?>)">
                            <?php echo $v['name']?>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <!-----------选校报告入口------------->
        <div class="chooseSchool">
            <div class="slideFont">
                <div class="slideBd">
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['fields' => 'time,place','category' => "139",'pageSize'=>5]);
                        foreach($data as $v) {
                        ?>
                        <li><span style="color: red;">*</span><?php echo $v['time']?>来自<?php echo $v['place']?>的<?php echo $v['name']?>免费获取了选校报告！</li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(".slideFont").slide({mainCell:".slideBd ul",effect:"topLoop",autoPlay:true});
            </script>
            <a href="/evaluation.html">
                <span>选校报告入口<img src="cn/schools/images/academy_cirecleJ.png" alt="选校入口图标"/></span>
            </a>
        </div>

         <div class="acad-center02">
             <span>*共找到<span id="s_school">0</span>所符合条件的学校</span>
             <ul id="schooldata">
             </ul>
             <!--分页-->
             <div class="page pagetop">
                 <ul id="page_s">
                 </ul>
                 <div style="clear: both"></div>
             </div>
         </div>

    <!--本周热招院校-->
    <div class="prospectus">
        <div class="prospectus-top">
            <span>本周热门院校</span>
            <img src="/cn/schools/images/academy_hotIcon.gif" alt="hot图标" height="100%" style="vertical-align: middle"/>
            <a href="javascript:void(0);" id="hotpage" pid="1" onclick="hotschool()">换一批</a>
        </div>
        <div class="prospectus-bottom">
            <ul id="hotschool">
            </ul>
        </div>
    </div>
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
                    <img src="cn/schools/images/academy_ganyan.png" alt="感言图片" class="topImg"/>
                    <div>
                        <ul>

                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "178,102",'pageSize'=>8]);
                            foreach($data as $v) {
                                ?>
                                <li><img src="cn/schools/images/quesAnswer_dianIcon.png" alt="点图标"/>
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
                    <img src="cn/schools/images/academy_ganyan.png" alt="感言图片" class="topImg"/>
                    <div>
                        <ul>

                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "177,102",'pageSize'=>8]);
                            foreach($data as $v) {
                                ?>
                                <li><img src="cn/schools/images/quesAnswer_dianIcon.png" alt="点图标"/><a href="/word-details/<?php echo $v['id']?>/102.html"><?php echo $v['title']?></a></li>
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
        <img src="cn/schools/images/quesAnswer_phone02.png" alt="联系电话"/>
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
        schoolslist(1,10,'');
        hotschool();
    });
    /**
     * 院校数据
     */
    function schoolslist(pagenum,pagesize,u){
        var schoolid = $("#schoolid").val();
        var keyword = $("#keyword").val();
        var valN = $("#valN").html();
        var catids = '';
        var catid = '';
        $(".cen-one ul li.on").each(function(){
            catids +=$(this).attr("cid")+",";
        });
        if(u){
            catid=u;
            if(catids){
                catid = catids+u;
            }
        }else{
            catid=catids;
        }
        if(keyword){
            if(valN=='搜学校'){
                var type = 1;
            }else{
                var type = 0;
            }
            catid = '';
        }
        if(pagenum =='' || pagenum==null){
            pagenum =1;
        }if(pagesize =='' || pagesize==null){
            pagesize =10;
        }
        //我的课程
        $.ajax({
            url: '/cn/schools/select',
            data: {
                keyword: keyword,
                type: type,
                catid: catid,
                schoolid: schoolid,
                pageNumber: pagenum,
                pageSize: pagesize
            },
            type: 'post',
            cache: false,
            dataType: 'json',
            success: function (data) {
                $('#schooldata').empty();
                if(data.code == 1){
                    var str = "";
                    var pages = "";
                    $.each(data.data,function(k,v) {
                        str +=' <li>'+
                        '<div class="centTwo-left">'+
                        '<a href="/schools/'+ v.id+'.html">'+
                        '<img src="http://schools.smartapply.cn/'+ v.image+'" alt="学校图片">'+
                        '<p>已有'+ v.viewCount+'人关注</p>'+
                        '</a>'+
                        '</div>'+
                        '<div class="centTwo-center">'+
                        '<h4><a href="/schools/'+ v.id+'.html">'+ v.name+' <span>'+ v.title+'</span></a></h4>'+
                        '<ul>'+
                        '<li>学校排名：'+ v.s_rank+'</li>'+
                        '<li>位于：'+ v.s_wz+'</li>'+
                        '<li><a href="/schools/'+ v.id+'.html">查看更多该校信息>></a></li>'+
                        '</ul>'+
                        '</div>'+
                        '<div class="centTwo-right">'+
                        '<div class="guwen">'+
                        '<a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">'+
                        '<span>和顾问聊聊</span>'+
                        '</a>'+
                        '</div>'+
                        '<span>已有352人评估</span>'+
                        '<div style="clear: both"></div>'+
                        '<a href="/evaluation.html">免费留学评估</a>'+
                        '</div>'+
                        '<div style="clear: both"></div>'+
                        '</li>';
                        if(v.name){
                            $("#schooldata").html(str);
                        }

                    });

                    $("#s_school").html(data.data.count);
                    if(data.data.total >1){
                        pages +='<li>总数：'+ data.data.count+'</li>'+
                        '<li><a href="javascript:void(0);" onclick="schoolslist('+parseInt(data.data.page)+',10,'+catid+')">首页</a></li>'+
                        '<li><a href="javascript:void(0);" onclick="schoolslist('+(parseInt(data.data.page)-1)+',10,'+catid+')">上一页</a></li>'+
                        '<li><a href="javascript:void(0);" id="changenext" onclick="schoolslist('+(parseInt(data.data.page)+1)+',10,'+catid+')">下一页</a></li>'+
                        '<li class="mr"><a href="javascript:void(0);" onclick="schoolslist('+parseInt(data.data.total)+',10,'+catid+')">尾页</a></li>'+
                        '<li class="mr02">页次：<span class="colorRed">'+data.data.page+'</span>/'+data.data.total+'</li>'+
                        '<li class="mr02"><input id="gopage" type="text"/></li>'+
                        '<li><input type="button" value="GO" onclick="schoolpage('+data.data.total+')"/></li>';
                    }
                    $("#page_s").html(pages);
                    if(parseInt(data.data.page) ==parseInt(data.data.total)){
                        $("#changenext").removeAttr("onclick");
                    }
                }

                if(data.code == 0){
                    $("#schooldata").html('<li>暂无相关数据</li>');
                    $("#s_school").html(0);
                    $("#page_s").html('');
                }
            },
            error: function () {
                alert("网络通讯失败");
            }
        });
    }
    /**
     * 跳转指定分页
     * @param total
     * @returns {boolean}
     */
    function schoolpage(total){
        var page = $("#gopage").val();
        if(page =='' || page==null){
            alert('请输入页码');
            return false;
        }
        if(page >total){
            page = total;
        }
        if(page <0){
            page = 1;
        }
        schoolslist(page,10);
    }
    /**
     * 热门院校
     */
    function hotschool(){
        var pg = $("#hotpage").attr('pid');
        if(pg==3){
            pg = 1;
        }
        //我的课程
        $.ajax({
            url: '/cn/schools/select',
            data: {
                hot: 'hot',
                pageNumber: pg,
                pageSize: 4
            },
            type: 'post',
            cache: false,
            dataType: 'json',
            success: function (data) {
                $('#hotschool').empty();
                if(data.code == 1){
                    var str = "";
                    $.each(data.data,function(k,v) {
                        str +='<li>'+
                        '<div class="bTop-img">'+'<a href="/schools/'+ v.id+'.html">'+
                        '<img src="http://schools.smartapply.cn/'+ v.image+'" alt="学校图片"></a>'+
                        '<p>已有'+ v.viewCount+'人评估</p>'+
                        '</div>'+
                        '<div class="bBot-info">'+
                        '<ul>'+
                        '<li><a href="/schools/'+ v.id+'.html">'+ v.name+'</a></li>'+
                        '<li>'+ v.title+'</li>'+
                        '<li>学校排名：'+ v.s_rank+'</li>'+
                        '<li>位于：'+ v.s_place+'</li>'+
                        '<li><a href="/schools/'+ v.id+'.html">查看更多该校信息>></a></li>'+
                        '<li><a href="/evaluation.html">录取几率免费评估></a></li>'+
                        '</ul>'+
                        '</div>'+
                        '</li>';
                        if(v.name){
                            $("#hotschool").html(str);
                            $("#hotpage").attr('pid',parseInt(pg)+1);
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
