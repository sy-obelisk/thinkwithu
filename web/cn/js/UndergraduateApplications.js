$(function(){
//名师团队
    $(".summerBd ul li").bind({
        "mouseenter":function(){
            $(this).find(".summerTop").css({
                width:"178px",
                height:"178px",
                marginTop:"-20px",
                marginLeft:"-20px"
            }).find(".summer-mask").show().end().end().find(">span").hide().next("p").hide();

        },
        "mouseleave":function(){
            $(this).find(".summerTop").css({
                width:"140px",
                height:"140px",
                marginTop:"0",
                marginLeft:"0"
            }).find(".summer-mask").hide().end().end().find(">span").show().next("p").show();
        }
    });

});
