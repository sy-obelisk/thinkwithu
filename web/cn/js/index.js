$(function(){
    var changeObj= $(".FocusPicture");
    //changeObj.animate({
    //    height:"448px"
    //},1500,function(){
        setTimeout(function(){
            changeObj.animate({
                height:"0"
            },1000,function(){
                var srcVal=changeObj.attr("data-value");
                changeObj.find("img").attr("src",srcVal);
                changeObj.animate({
                    height:"76px"
                },800);
            });
        },1000);
    //});
});




