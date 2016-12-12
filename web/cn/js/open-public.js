$(function(){
    //设置遮罩层高度
      $(".maskLayer").css({
          height:$(document).height()
      });
});

//关闭弹出层
function closeL(o){
    $(".maskLayer").hide();
    $(o).parent().hide();
}
//点击登录
function openLogin(){
    $(".maskLayer").show();
    $("#login").show();
}

//忘记密码
function forgetCode(){
    $("#login").hide();
    $("#foundCode").show();
}

//忘记密码点击提交
function present(){
    $("#foundCode").hide();
    $("#reminder").show();
    //    自动跳转
    var s=$("#second").find("span").html();
    var timer=setInterval(function(){
        s--;
        $("#second").find("span").html(s);
        if(s<=0){
            clearInterval(timer);
            location.reload();
        }
    },1000);
}