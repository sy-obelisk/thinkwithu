$(function(){
    //获取值在页面定位
    var id=$("body").attr("data-value");
     if(id){
         var top=$("#"+id)[0].offsetTop;
         $("html,body").animate({scrollTop:top + "px"}, 500);
     }

    //    头部导航固定在顶部
    if($('.headNav').html()){
        var cubuk_seviye = $(document).scrollTop();
        var header_yuksekligi = $('.headNav').offset().top;
        $(window).scroll(function() {
            var kaydirma_cubugu = $(document).scrollTop();

            if (kaydirma_cubugu > header_yuksekligi){
                $('.headNav').addClass('headNavFix');
            }
            else {
                $('.headNav').removeClass('headNavFix');
            }
            cubuk_seviye = $(document).scrollTop();
        });
    }


//    左边悬浮窗关闭
    $(".leftFloatW i").click(function(){
        $(this).parent().hide("slide");
        $(".shrink").slideDown();
    });

    //自定义下拉
    $(".secFont ul li").click(function(){
        $(this).parent().parent().siblings("span").html($(this).html());
        $(this).parent().parent().slideUp();
    });
//    日历调用函数
});
//    悬浮窗随滚动条滚动
//$(document).ready(function () {
//    var windowH=$(window).height();//可视区域高度
//    var scrollbox = $(".bigXFC");
//    var scrollbox02 = $(".leftFloatW");
//    $(window).scroll(function () {
//        var offsetTop = $(window).scrollTop()+142;
//        var offsetTop02 =$(window).scrollTop()+212;
//        scrollbox.stop().animate({top: offsetTop}, {duration: 800});
//        scrollbox02.stop().animate({top: offsetTop02}, {duration: 800});
//    })
//});
//右边悬浮窗关闭(隐藏显示)
var flag=true;
function closeXFC(o){
    if(flag){
        $(o).find("i").hide();
        $(o).next(".floatWindow").hide("slide");
        $(o).css("right","0");
        flag=false;
    }else{
        $(o).find("i").show();
        $(o).next(".floatWindow").show("slide",function(){
            $(o).css("right","123px");
        });
        flag=true;
    }

}
//点击下拉函数(首页和悬浮窗用到过)
function selectInfo(o){
    $(o).next("div.secFont").slideToggle();
}
//头部搜索框
function shiqu(o){
    if($(o).val()==""){
        $(o).val("热门搜索美国留学");
    }
}
//左边悬浮窗输入框处理
function nameP(o,vals){
    if($(o).val()==""){
        $(o).val(vals);
    }
}

//日历
function moth(uls,htmls,begin,last){
    setInterval(function(){
        if($(uls).css("display")=="block"){
            $(htmls).html(last);
        }else{
            $(htmls).html(begin);
        }
    },10);
}

//左边悬浮窗点击缩小后的图片
function leftSuspen(o){
    $(o).slideUp().siblings(".leftFloatW").show("slide");
}
//关闭中间弹窗
function closeCenter(o){
    $(o).parents(".centerMask").hide();
}
//新增弹窗
//    回到顶部
function scroll_Top(){
    $("html,body").animate({scrollTop:0},1000);
}
//隐藏弹窗
function hideLayer(){
    $(".rightLayer").hide('slide');
    $(".rightLayer_two").show('slide');
}
//    展示弹窗
function showLayer(){
    $(".rightLayer").show('slide');
    $(".rightLayer_two").hide('slide');
}