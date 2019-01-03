<link rel="stylesheet" href="/cn/css/header.css"/>
<link rel="stylesheet" href="/cn/css/footer.css"/>
<link rel="stylesheet" href="/cn/css/public.css"/>
<link rel="stylesheet" href="/cn/schools/css/academyBase.css?v=1.1"/>

<script type="text/javascript" src="/cn/schools/js/academyBase.js?v=1.1"></script>

<!-----------------------------头部end------------------------------>
<!--banner-->
<div class="adad-top">
    <img src="cn/schools/images/academy_bigBG.jpg" alt="图片">
</div>
<!--内容-->
<div class="">

</div>
<div class="academy-con">
    <!--左-->
    <div class="academy-cLeft">
        <!--国家-->
        <div class="cen-one cenBack01">
            <ul id="school_country">
                <div class="country_nav"><img src="/cn/schools/images/nav-img.png" alt=""><span>留学导航</span></div>
<!--                <li cid="" onclick="schoolslist(1,10,'')">不限</li>-->
                <?php foreach($country as $v) { ?>
                    <li cid="<?php echo $v['id']?>" onclick="schoolslist(1,10,<?php echo $v['id']?>,this)">
                        <?php echo $v['name']?>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <!--搜索-->
        <div class="acad-top">
            <img src="/cn/schools/images/academy_gifIcon.gif" alt="gif动态图" style="margin-left: 20px"/>
            <span id="valN" data-html="搜学校">目标学校 : </span>

            <input type="text" id="keyword" placeholder=""/>

            <span class="targetPro">目标专业 : </span>

            <input type="text" id="keyword_1" placeholder=""/>

            <div class="searchBtn" onclick="schoolslist(1,10,'',this)">确定</div>

        </div>
        <!--已选条件-->
        <div class="acad_condition">
            <span class="cond_title">已选条件:</span><span class="cond_direction">专业方向:<label class="cond_dir_content"></label></span><span class="cond_name">专业名称:<label class="cond_name_content"></label></span>
        </div>
        <div class="acad-center">

            <div class="cen-one cenBack02 totalRanking">
                <ul>
                    <div style="display: inline-block;float: left"><b>综合排名：</b></div>
<!--                    <li cid="" onclick="schoolslist(1,10,'')">不限</li>-->
                    <?php foreach($rank as $v) { ?>
                        <li cid="<?php echo $v['id']?>" onclick="schoolslist(1,10,<?php echo $v['id']?>,this)">
                            <?php echo $v['name']?>
                        </li>
                    <?php
                    }
                    ?>
                </ul>

            </div>
            <!--专业方向 与其他不同-->
            <div class="cen-one cenBack02 proDirection" id="major">
                <ul>
                    <div style="display: inline-block;float: left"><b>专业方向：</b></div>
<!--                    <li cid="" onclick="schoolslist(1,10,'')">-->
<!--                        不限-->
<!--                    </li>-->
                    <?php foreach($major as $v) { ?>
                        <li cid="<?php echo $v['id']?>">
                            <?php echo $v['name']?>
                            <div class="changeC">
                                <ul>
                                    <?php
                                    foreach($v['son'] as $vr) { ?>
                                        <li cid="<?php echo $vr['id']?>" onclick="schoolslist(1,10,<?php echo $vr['id']?>,this)">
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
            <!--点击专业方向时改变的内容-->
            <div class="chagneMajor">
<!--                <span class="triangle triLeft01"></span>-->
                <div class="chagneName"><b>专业名称：</b></div>
                <div id="changeContent">

                </div>
            </div>
        </div>
         <div class="acad-center02">
             <div class="findSchool">
                 <span class="findSchoolSpan">*共找到<span id="s_school">0</span>所符合条件的学校</span>
                 <div  class="findSchoolRight">
                     <span>找到<span id="s_school_right">0</span>所学校</span><span style="margin-left: 10px">|<label class="nowNum" style="margin-left: 10px"></label>/<label class="totleNum"></label></span>
                 </div>
             </div>
             <!--学校列表-->
             <ul id="schooldata">

             </ul>
             <!--分页-->
             <div class="page pagetop">
                 <ul id="page_s">
                 </ul>
                 <div style="clear: both"></div>
             </div>
         </div>
    </div>
    <!--右-->
    <div class="content_right">
        <div class="right_title">
            <span>本周热门院校</span>
            <span class="change_right"><i class="iconfont icon_change">&#xe609;</i>换一批</span>
        </div>
        <div class="right_con"><!--循环 right_con_son -->
            <?php foreach($school['data'] as $k=>$v){
                if(is_numeric($k)){?>
                    <div class="right_con_son">
                        <div class="son_img">
                            <img src="http://schools.smartapply.cn<?php echo $v['image']?>" alt="学校logo">
                            <p>已有<span><?php echo $v['viewCount']+rand(10,100) ?></span>人评估</p>
                        </div>
                        <p class="son_sc_name"><?php echo $v['name']?></p>
                        <p><?php echo $v['title']?></p>
                        <p>学校排名:<?php echo $v['s_rank']?></p>
                        <p>位于:<?php echo $v['s_wz']?></p>
                        <a href="/schools/<?php echo $v['id']?>.html">查看更多信息>></a>
                    </div>
                <?php }}?>
        </div>
    </div>
    <div style="clear: both"></div>
</div>
<!--底部媒体合作-->
<div class="new-f-1">
    <h2>媒体报道</h2>
    <div class="new_f_line"></div>
    <ul class="top">
        <li>
            <img src="http://www.smartapply.cn/cn/images/index3-img/index3-footerwb.png" alt="新浪">
        </li>
        <li>
            <img src="http://www.smartapply.cn/cn/images/index3-img/index3-footersh.png" alt="搜狐">
        </li>
        <li>
            <img src="http://www.smartapply.cn/cn/images/index3-img/index3-footersb.png" alt="市报">
        </li>
        <li>
            <img src="http://www.smartapply.cn/cn/images/index3-img/index3-footeryc.png" alt="晚报">
        </li>
    </ul>
    <h2>合作机构</h2>
    <div class="new_f_line"></div>
    <ul class="bot">
        <li>
            <img src="http://www.smartapply.cn/cn/images/nfooter-1.png" alt="图片">
        </li>
        <li>
            <img src="http://www.smartapply.cn/cn/images/nfooter-2.png" alt="图片">
        </li>
        <li>
            <img src="http://www.smartapply.cn/cn/images/nfooter-3.png" alt="图片">
        </li>
        <li>
            <img src="http://www.smartapply.cn/cn/images/nfooter-4.png" alt="图片">
        </li>
    </ul>
</div>


<script type="text/javascript">

    $(function(){
        schoolslist(1,10,'','');
        hotschool();
    });
    /**
     * 院校数据
     */
    function schoolslist(pagenum,pagesize,u,obj){

        $(obj).siblings().removeClass('on');
        if($(obj).hasClass("on")){
            $(obj).removeClass("on");
        }else{
            $(obj).addClass("on");
        }

        var schoolId = $('#school_country').find('.on').attr('cid');
        var rankId = $('.totalRanking').find('.on').attr('cid');
        var majorId = $('.proDirection').find('.on').attr('cid');
        var majorDetailsId = $('#changeContent').find('.on').attr('cid');


        if(pagenum =='' || pagenum==null){
            pagenum =1;
        }if(pagesize =='' || pagesize==null){
            pagesize =10;
        }
        //我的课程
        $.ajax({
            url: '/cn/schools/select',
            data: {
               country:schoolId,//学校id
               page:pagenum,//页数
               rank:rankId,//排名id
               major:majorId,//专业大类id
               majorDetails:majorDetailsId,//专业名称id
               schoolSystem:'',//公立还是私立
               tuition:' ',//学费
//                 keyword: keyword,
//                 type: type,
//                 catid: catid,
//                 schoolid: schoolid,
//                 pageNumber: pagenum,
//                 pageSize: pagesize
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
                        '<div class="imgCover"><img src="http://schools.smartapply.cn/'+ v.image+'" alt="学校图片"></div>'+
                        '<p>已有<span class="viewNum"> '+ v.viewCount+'</span>人关注</p>'+
                        '</a>'+
                        '</div>'+
                        '<div class="centTwo-center">'+
                        '<h4><a href="/schools/'+ v.id+'.html">'+ v.name+'</a></h4>'+
                        '<ul>'+
                        '<li>'+ v.title +'<span class="comment">有0条热门评论</span></li>'+
                        '<li>所在地：'+ v.s_place+'</li>'+
                        '<li>地理位置：'+ v.s_wz+'</li>'+
                        '<li>官网：<a href="'+ v.s_url +'" target="_blank">'+ v.s_url+'</a></li>'+
                        '</ul>'+
                        '</div>'+
                        '<div class="centTwo-right">'+
                        '<div class="shcoolRank">学校排名：'+ v.s_rank+'</div>'+
                        '<div class="guwen">'+
                        '<a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">'+
                        '<span>和顾问聊聊</span>'+
                        '</a>'+
                        '</div>'+
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
                    $("#s_school_right").html(data.data.count);

                    $("#page_s").html(data.data.pageStr);

                    $('.iPage').click(function () {
                        var page_1 = $(this).html();
                        schoolslist(page_1,10,catid)
                    });

                    $('.nowNum').html(data.data.page);
                    $('.totleNum').html(data.data.total);
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
    //右侧换一批
    var countNum = 0;
    var flag = true;
    $('.change_right').click(function () {
        if(flag==true){

        }else {
            countNum+=1;
        }
        $.get('/cn/api/school',{count:countNum},function(re){
            var str = "";
            flag = false;
            for(var i=0;i<6;i++){
                str+='<div class="right_con_son">';
                str+='<div class="son_img">';
                str+='<img src="http://schools.smartapply.cn'+ re.school[i].image +'" alt="学校logo">';
                str+='<p>已有<span>'+ (parseInt(re.school[i].viewCount)+parseInt(Math.floor(Math.random()*(100 - 1) + 1)))+'</span>人评估</p>';
                str+='</div>';
                str+='<p class="son_sc_name">'+ re.school[i].name  +'</p>';
                str+='<p>'+ re.school[i].title  +'</p>';
                str+='<p>学校排名'+ re.school[i].s_rank  +'</p>';
                str+='<p>位于'+ re.school[i].s_wz  +'</p>';
                str+='<a href="/schools/'+ re.school[i].id +'.html">查看更多信息>></a>';
                str+='</div>';
            }
            $('.right_con').html(str);

        },'json')
    });
</script>
