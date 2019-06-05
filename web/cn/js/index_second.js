$(function(){
//    给分类li添加点击事件
    $(".greyChoose ul li").bind("click",clickClassify);
});



//去掉对应元素样式
function closeClassify(o,num){
    var _that=$(o);
    var lis=_that.parents("li");
    lis.remove();
    $(".greyChoose ul li").each(function(){
        var _this=$(this);
        var html=_that.prev("span").html();
        var self=_this.html();
        if(html==self){
            _this.removeClass("on");
        }
        //去掉全部的样式（判断）
        if(num==3){
            $(".greyChoose ul:nth-child(1) li").eq(1).removeClass("on");
        }else if(num==4){
            $(".greyChoose ul:nth-child(2) li").eq(1).removeClass("on");
        }

    });
}

