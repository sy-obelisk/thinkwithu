$(function(){
    $(".dissLeft ul li").bind({
        "mouseenter":function(){
            $(this).find("svg").animate({
                height:"50px"
            });


        },
        "mouseleave":function(){
            $(this).find("svg").animate({
                height:"124px"
            });
        }
    });
});


