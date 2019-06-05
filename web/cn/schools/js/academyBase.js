$(function(){
//    院校搜索
    $(".havePos div ul li").click(function(){
           $("#valN").html($(this).html());
    });
    // $(".cen-one ul li").click(function(){
    //     $(this).siblings().removeClass('on');
    //     if($(this).hasClass("on")){
    //         $(this).removeClass("on");
    //     }else{
    //         $(this).addClass("on");
    //     }
    //
    // });
//右边留学评估切换
    $(".studyCont ul li").click(function(){
        $(this).parent().parent().siblings("span").find(".li-values").html($(this).html());
        $(this).parent().parent().slideToggle();
    });

//    专业方向
    $("#major ul li").bind("click",majorMouse);
    $(".chagneMajor").bind("mouseleave",majorLeave);
});

function majorMouse(){
    $("#major ul li").removeClass('on');
    $(this).addClass('on');
    var _that=$(this);
    var changeCon=_that.find(".changeC").html();//改变的内容
    var triangles=$(".triangle");//三角形
    $(".chagneMajor").show();
    if(_that.index()>0){
        triangles.attr("class","triLeft0"+_that.index()).addClass("triangle");
    }
    $("#changeContent").html(changeCon);
    $(".chagneMajor ul li").bind("click",{par:_that},clickFuns);
}
function clickFuns(event){
    var html=$(this).html();
    var dbUL=$(event.data.par).find("ul li");
    dbUL.each(function(){
        if($(this).html()==html){
            $(this).addClass("on");
        }
    });
    $(this).addClass("on");
    $(event.data.par).addClass("on");
}

function majorLeave(){
    $(this).hide();
}
//右边留学评估切换
function selectStudy(o){
    $(o).siblings("div.studyCont").slideToggle();
}