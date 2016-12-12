$(function(){
     $(".teacerBd ul li").bind({
         "mouseover":function(){
             $(this).find("div.teacherZZC").stop().animate({
                 bottom:"0"
             });
         },
         "mouseout":function(){
             $(this).find("div.teacherZZC").stop().animate({
                 bottom:"-153px"
             });
         }
     });
});
function hideZZC(o){
    $(o).find("div.productZZC").hide();
}
function showZZC(o){
    $(o).find("div.productZZC").show();
}