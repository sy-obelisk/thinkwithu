$(function(){
    //联系方式
    $(".conBd ul li").eq(2).addClass("on");
    $(".conBd ul li").bind({
        "mouseenter":function(){
             if($(this).hasClass("on")){
                 $(this).removeClass("on");
             }else{
                 $(this).addClass("on");
                 $(this).siblings().removeClass("on");
             }
        }
    });
});
//轮播显示上一张
function slidePrev(){
    var liOb=$(".conBd ul li").last();
    $(".conBd ul").prepend(liOb);
}

//轮播显示下一张
function slideNext(){
    var liOb=$(".conBd ul li").first();
    $(".conBd ul").append(liOb);
//    $(".conBd ul li").first().remove();
}