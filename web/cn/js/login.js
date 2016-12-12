$(function(){
//  获得文本高度
    var zzcHei=$(document).height();
    $(".maskLayer").css("height",zzcHei+"px");
});
//关闭窗口
function closeLogin(o){
    $(o).parent().hide();
    $(".maskLayer").hide();
}
//立即注册
function  RegisterNow(o){
    $(o).parents("div.Dialog").fadeOut().next("div.Dialog").fadeIn(1000);
}
//忘记密码
function forgetPassword(o){
    $(o).parents("div.Dialog").fadeOut().next().next("div.Dialog").fadeIn(1000);
}
//已有账号,回到登录
function reLogin(o){
    $(o).parents("div.Dialog").fadeOut().prev("div.Dialog").fadeIn(1000);
}
//又想起来了，回到登录
function reLoginThink(o){
    $(o).parents("div.Dialog").fadeOut().prev().prev("div.Dialog").fadeIn(1000);
}
//只验证不能为空
function notNull(o){
    if(!$(o).val()){
        $(o).parent().find("p").css("visibility","visible");
    }else{
        $(o).parent().find("p").css("visibility","hidden");
    }
}

//验证手机号
function verifyPhone(o){
    var reg=/((\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$)/;
    if(!$(o).val()){
        $(o).parent().find("p").css("visibility","visible").html("手机号不能为空!");
    }else if(!reg.test($(o).val())){
        $(o).parent().find("p").css("visibility","visible").html("手机号格式不正确!");
    }else{
        $(o).parent().find("p").css("visibility","hidden");
    }
}
//验证邮箱
function verifyEmail(o){
    var reg=/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
    if(!$(o).val()){
        $(o).parent().find("p").css("visibility","visible").html("邮箱不能为空!");
    }else if(!reg.test($(o).val())){
        $(o).parent().find("p").css("visibility","visible").html("邮箱格式不正确!");
    }else{
        $(o).parent().find("p").css("visibility","hidden");
    }
}
//验证用户名
function verifyUserName(o){
    if(!$(o).val()){
        $(o).parent().find("p").css("visibility","visible").html("用户名不能为空!");
    }else{
        $(o).parent().find("p").css("visibility","hidden");
    }
}
//验证密码
function verifyCode(o){
    var reg=/^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,22}$/;
    if(!$(o).val()){
        $(o).parent().find("p").css("visibility","visible").html("密码不能为空!");
    }else if(!reg.test($(o).val())){
        $(o).parent().find("p").css("visibility","visible").html("密码是由数字加字母构成且长度不能小于6位!");
    }else{
        $(o).parent().find("p").css("visibility","hidden");
    }
}

//获取验证码倒计时
function countdown(e,timeN) {
    var _that =  $(e);
    var type = _that.attr('data-value');
    var contentType = _that.attr('data-type');
    if(type == 1){
        var phone = _that.parent().prev().find('input').val();
        if(phone == ""){
            _that.parent().prev().find("p").css("visibility","visible").html("请输入您的手机号!");
            return false;
        }
        if(contentType == 1){
            contentType = 4;
        }else if(contentType == 2){
            contentType = 5;
        }else{
            contentType = 8;
        }
        $.post('/cn/api/phone-code',{phoneNum:phone,type:contentType},function(re){
            alert(re.message);
        },'json')
    }else{
        var mail = _that.parent().prev().find('input').val();
        if(mail == ""){
            _that.parent().prev().find("p").css("visibility","visible").html("请输入您的邮箱!");
            return false;
        }
        if(contentType ==1){
            contentType = 6;
        }else{
            contentType = 7;
        }
        $.post('/cn/api/send-mail',{email:mail,type:contentType},function(re){
            alert(re.message);
        },'json')
    }
    var timeNum = timeN;
    $(e).attr("disabled",true);
    _that.unbind("click").val(timeNum + "秒后重发");
    var timer = setInterval(function () {
        _that.val(timeNum + "秒后重发");
        timeNum--;
        if (timeNum <= 0) {
            clearInterval(timer);
            $(e).removeAttr("disabled");
                _that.val("获取验证码");
                _that.bind("click", "#anPhone", get_Phonecode);
        }
    }, 1000);
}