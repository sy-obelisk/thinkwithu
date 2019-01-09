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
            <div class="search-lu-group">
                <img src="/cn/schools/images/academy_gifIcon.gif" alt="gif动态图" style="margin-left: 20px"/>
                <div class="search-school">
                    <label class="sea-name"><span>目标学校:</span></label>
                    <div class="sea-input">
                        <input type="text" placeholder="" id="top-schoolName" name="schoolName">
                    </div>
                </div>
                <div class="search-major">
                    <label class="sea-name"><span>目标专业:</span></label>
                    <div class="sea-input">
                        <input type="text" placeholder="" id="top-schoolMajor" name="schoolName">
                    </div>
                </div>
                <div class="searchBtn" onclick="searchSure()">确定</div>
                <div class="clearfix"></div>
            </div>
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
                        <li cid="<?php echo $v['id']?>" data-value="<?php echo $v['name']?>">
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
                     <span>找到<span id="s_school_right">0</span>所学校</span>
<!--                     <span style="margin-left: 10px">|<label class="nowNum" style="margin-left: 10px"></label>/<label class="totleNum"></label></span>-->
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
        $('.changeC').eq(0).parent().addClass('on');
        var changeC = $('.changeC').eq(0).html();
        $('#changeContent').html(changeC);//专业方向默认第一个专业大类的数据
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

        var majorName = $('.proDirection').find('.on').attr('data-value');
        var majorDetailsName = $('#changeContent').find('.on').html();
        $('.cond_dir_content').html(majorName);
        $('.cond_name_content').html(majorDetailsName);

        var schoolId = $('#school_country').find('.on').attr('cid');
        var rankId = $('.totalRanking').find('.on').attr('cid');
        var majorId = $('.proDirection').find('.on').attr('cid');
        var majorDetailsId = $('#changeContent').find('.on').attr('cid');


        if(pagenum =='' || pagenum==null){
            pagenum =1;
        }if(pagesize =='' || pagesize==null){
            pagesize =10;
        }
        //学校接口
        $.ajax({
            url: '/cn/schools/select',
            data: {
               country:schoolId,//学校id
               page:pagenum,//页数
               rank:rankId,//排名id
               major:majorId,//专业大类id
               majorDetails:majorDetailsId,//专业名称id
               type:'',
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
                if(data.data){

                    var str = "";
                    var pages = "";
                    $.each(data.data,function(k,v) {
                        str +=' <li>'+
                        '<div class="centTwo-left">'+
                        '<a href="/schools-detail/'+ v.id+'.html">'+
                        '<div class="imgCover"><img src="http://schools.smartapply.cn/'+ v.image+'" alt="学校图片"></div>'+
                        '<p>已有<span class="viewNum"> '+ v.viewCount+'</span>人关注</p>'+
                        '</a>'+
                        '</div>'+
                        '<div class="centTwo-center">'+
                        '<h4><a href="/schools-detail/'+ v.id+'.html">'+ v.name+'</a></h4>'+
                        '<ul>'+
                        '<li>'+ v.title +'</li>'+
                        '<li>所在地：'+ v.place+'</li>'+
                        '<li>地理位置：'+ v.seat+'</li>'+
                        '<li>官网：<a href="'+ v.listeningFile +'" target="_blank">'+ v.listeningFile+'</a></li>';
                                $.each(v.major,function (c,i) {
                                    str += '<li>专业项目：<span style="color: rgb(68,153,233)">'+ i.title +'</span><span style="margin: 0px 10px">学位：'+ i.degree +'</span>专业类别：<span>'+ i.name +'</span></li>';
                                    console.log(str)
                                });
                        str+='</ul>'+
                        '</div>'+
                        '<div class="centTwo-right">'+
                        '<div class="shcoolRank">学校排名：'+ v.rank+'</div>'+
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

                    $("#s_school").html(data.count);
                    $("#s_school_right").html(data.count);

                    $("#page_s").html(data.pageStr);

                    $('.iPage').click(function () {
                        var page_1 = $(this).html();
                        schoolslist(page_1,10,'')
                    });

                    // $('.nowNum').html(data.data.page);
                    // $('.totleNum').html(data.totalPage);

                }

                if(data.data.length==0){
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


    //搜索确认
    function searchSure() {
        var schoolId_s = $('#top-schoolName').val();//目标学校id
        var majordeId = $('#top-schoolMajor').val();//目标专业id
        if(!schoolId_s&&!majordeId){
            alert('请先填写目标学校或者目标专业');
            return false
        }
        $.get('/cn/schools/search',{school:schoolId_s,majorId:majordeId},function (data) {
            $('#schooldata').empty();
            if(data.data.data){
                var str = "";
                var pages = "";
                $.each(data.data.data,function(k,v) {
                    str +=' <li>'+
                        '<div class="centTwo-left">'+
                        '<a href="/schools-detail/'+ v.id+'.html">'+
                        '<div class="imgCover"><img src="http://schools.smartapply.cn/'+ v.image+'" alt="学校图片"></div>'+
                        '<p>已有<span class="viewNum"> '+ v.viewCount+'</span>人关注</p>'+
                        '</a>'+
                        '</div>'+
                        '<div class="centTwo-center">'+
                        '<h4><a href="/schools-detail/'+ v.id+'.html">'+ v.name+'</a></h4>'+
                        '<ul>'+
                        '<li>'+ v.title +'</li>'+
                        '<li>所在地：'+ v.place+'</li>'+
                        '<li>地理位置：'+ v.seat+'</li>'+
                        '<li>官网：<a href="'+ v.listeningFile +'" target="_blank">'+ v.listeningFile+'</a></li>'+
                        '</ul>'+
                        '</div>'+
                        '<div class="centTwo-right">'+
                        '<div class="shcoolRank">学校排名：'+ v.rank+'</div>'+
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
                    schoolslist(page_1,10,'')
                });

                // $('.nowNum').html(data.data.page);
                // $('.totleNum').html(data.totalPage);

            }

            if(data.data.data.length==0){
                $("#schooldata").html('<li>暂无相关数据</li>');
                $("#s_school").html(0);
                $("#page_s").html('');
            }
        },'json')
    }
</script>
