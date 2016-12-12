$(function(){
    //$(".aB-ul ul li").bind({
    //    "mouseenter":function(){
    //        var html=$(this).find("div.hideContent").html();
    //        $(".aB-content").html(html);
    //    }
    //});
    //右边留学评估切换
    $(".studyCont ul li").click(function(){
        $(this).parent().parent().siblings("span").find(".li-values").html($(this).html());
        $(this).parent().parent().slideToggle();
    });
});


//右边留学评估切换
function selectStudy(o){
    $(o).siblings("div.studyCont").slideToggle();
}