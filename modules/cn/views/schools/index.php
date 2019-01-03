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
                        <input type="text" placeholder="" oninput="showData()" id="top-schoolName" name="schoolName">
                        <input type="hidden" name="schoolId" class="schoolId">
                        <input type="hidden" name="schoolRank" class="schoolRank">
                        <input type="hidden" name="country" class="s_country">
                        <div class="s-i-select">
                            <ul>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="search-major">
                    <label class="sea-name"><span>目标专业:</span></label>
                    <div class="s-m-select">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle pro_choice" data-toggle="dropdown">
                                <span class="b_val" id="top-majorName"></span>
                                <input type="hidden" value="" name="majorId" id="majordeId">
                                <input type="hidden" name="majorName" id="majorName">
                            </button>
                            <ul class="dropdown-menu pro_category" role="menu">

                            </ul>
                        </div>
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
            <div class="right_con_son">
                <div class="son_img">
                    <img src="http://schools.smartapply.cn/files/2015/0115/20150115033833448.jpg" alt="学校logo">
                    <p>已有<span>5047</span>人评估</p>
                </div>
                <p class="son_sc_name">波士顿学院</p>
                <p>Boston College</p>
                <p>学校排名:32</p>
                <p>位于:Massachusetts（马萨诸塞州）</p>
                <a href="/schools/11664.html">查看更多信息&gt;&gt;</a>
            </div>
            <div class="right_con_son">
                <div class="son_img">
                    <img src="http://schools.smartapply.cn/files/2015/0115/20150115033833448.jpg" alt="学校logo">
                    <p>已有<span>5047</span>人评估</p>
                </div>
                <p class="son_sc_name">波士顿学院</p>
                <p>Boston College</p>
                <p>学校排名:32</p>
                <p>位于:Massachusetts（马萨诸塞州）</p>
                <a href="/schools/11664.html">查看更多信息&gt;&gt;</a>
            </div>
            <div class="right_con_son">
                <div class="son_img">
                    <img src="http://schools.smartapply.cn/files/2015/0115/20150115033833448.jpg" alt="学校logo">
                    <p>已有<span>5047</span>人评估</p>
                </div>
                <p class="son_sc_name">波士顿学院</p>
                <p>Boston College</p>
                <p>学校排名:32</p>
                <p>位于:Massachusetts（马萨诸塞州）</p>
                <a href="/schools/11664.html">查看更多信息&gt;&gt;</a>
            </div>
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







    //    就读毕业院校下拉框显示
    $('.Pro_choose').click(function () {
        if($(this).hasClass('open')){
            $(this).removeClass('open');
            $('.school_category').slideUp();
        }else {
            $(this).addClass('open');
            $('.school_category').slideDown();
        }

    });
    //    专业选择下拉框显示
    $('.pro_choice').click(function () {
        if($(this).hasClass('open')){
            $(this).removeClass('open');
            $('.pro_category').slideUp();
        }else {
            $(this).addClass('open');
            $('.pro_category').slideDown();
        }

    });
    //    下拉之后赋值
    function  fuzhi(o){
        var newVal=$(o).find("a").html();
        var majorId=$(o).attr("data-id");
        var s_value=$(o).attr("data-value");
        $(o).parents("ul").siblings("button").find(".b_val").html(newVal);
        $(o).parents("ul").siblings("button").find("input.school_value").val(s_value);
        $(o).parents("ul").siblings("button").find("input#majordeId").val(majorId);
        $(o).parents("ul").siblings("button").find("input#majorName").val(newVal);
        //就读毕业院校下拉框关闭
        $('.Pro_choose').removeClass('open');
        $('.school_category').slideUp();

        //专业选择下拉框关闭
        $('.pro_choice').removeClass('open');
        $('.pro_category').slideUp();
    }
    //    显示专业点击选择
    $(".second_page ul li").click(function(){
        $(this).addClass("on").siblings("li").removeClass("on");
        $(this).parents("li").addClass("on").siblings("li").removeClass("on").find("li").removeClass("on");
    });
    //    显示专业弹窗
    function showMajorC(o){
        $(".t-major-mask").show();
    }
    //    关闭专业弹窗
    function closeMajorC(){
        $(".t-major-mask").hide();
    }
    //    保存选择的专业类别
    function sureMajor(){
        var h=$(".second_page ul li.on").html();
        var pid=$(".second_page ul li.on").attr("data-pid");
        $(".t-major-mask").hide();
        $("#major-input").val(h).siblings("input[type='hidden']").val(pid);
    }

    //    院校搜索
    function showData(){
        var v=$("#top-schoolName").val();
        if(v){
            $(".s-i-select").find("ul").html("");
            $.ajax({
                url:"http://schools.smartapply.cn/cn/api/words-school",
                type:"get",
                data:{
                    keywords:v
                },
                dataType:"json",
                jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
                jsonpCallback: "success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
                success:function(data){
                    var str='';
                    if(data.code==1){
                        if(data.data){
                            for(var i=0;i<data.data.length;i++){
                                str+='<li onclick="schoolFuZhi(this)" data-id="'+data.data[i].id+'"' +
                                    ' data-rank="'+data.data[i].rank+'"' +
                                    'data-country="'+data.data[i].country+'"><b>'+data.data[i].name+'</b><span>('+data.data[i].title+')</span></li>';
                            }
                            $(".s-i-select").find("ul").html(str);
                            $(".s-i-select").slideDown();
                            return false;
                        }
                    }
                }
            });

        }else{
            $(".s-i-select").slideUp();
        }
    }
    //    院校搜索下拉框赋值
    function schoolFuZhi(o){
        var newV=$(o).find("b").html();
        $(o).parents(".s-i-select").hide().siblings("input").val(newV).attr("data-lid",$(o).attr("data-id"))
            .siblings("input.schoolId").val($(o).attr("data-id"))
            .end().siblings("input.schoolRank").val($(o).attr("data-rank"))
            .end().siblings("input.s_country").val($(o).attr("data-country"));
        searchMajor($(o).attr("data-id"));
    }
    //    搜索专业
    function searchMajor(id){
        $(".search-major").find(".dropdown-menu").html("");
        $.ajax({
            url:"http://schools.smartapply.cn/cn/api/id-major",
            type:"get",
            data:{
                id:id
            },
            dataType:"json",
            jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
            jsonpCallback: "success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
            success:function(data){
                var str='';
                if(data){
                    for(var i=0;i<data.length;i++){
                        str+='<li onclick="fuzhi(this)" data-id="'+data[i].id+'">'+
                            '<a href="javascript:void(0);">'+data[i].name+'</a>'+
                            '</li>';
                    }
                    $(".search-major").show().find(".dropdown-menu").html(str);
                }
            }
        });
    }
    //搜索确认
    function searchSure() {
        var schoolId_s = $('.schoolId').val();//目标学校id
        var majordeId = $('#majordeId').val();//目标专业id
        $.get('/cn/schools/search',{school:schoolId_s,majorId:majordeId},function (re) {
            
        },'json')
    }
</script>
