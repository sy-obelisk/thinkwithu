
$(function(){

//    立即报名
    $(".sign-content ul li").click(function(){
        var html=$(this).html();
        $(this).parent().parent().slideUp().siblings("span").html(html);
    });
});

function upXiala(o){
    $(o).siblings(".sign-content").slideToggle();
}

