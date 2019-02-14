$(function(){
//    课程介绍
    jQuery("#classJieshao").slide({trigger:"click"});
    $('.place li').click(function () {
        $('.place li').removeClass('on');
        $(this).addClass('on');
    });
});
//计算减
function subtractNum(o){
    var old=parseInt($(o).siblings("input[type='text']").val());
    if(old<=1){
        alert("亲，不能再减了哦！");
    }else{
        old--;
    }
    $(o).siblings("input[type='text']").val(old);
}

function addNum(o){
    var old=parseInt($(o).siblings("input[type='text']").val());
    old++;
    $(o).siblings("input[type='text']").val(old);
}
function importNum(o){
    var this_val=$(o).val();
    if(this_val<=0){
        alert("请重新输入，数量不能为0哦!");
        $(o).val("1");
    }
}