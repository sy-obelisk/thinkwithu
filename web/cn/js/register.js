$(function(){

});


function showTS(o){
    $(o).siblings("span.markedWords").show();
}
//验证用户名
var name = false;
function authName(o){
    var regs = /^[a-zA-Z\d]\w{1,13}[a-zA-Z\d]$/;
    var textVal = $(o).val();
    if (!$(o).val()) {
        $(o).siblings("span.markedWords").html("用户名为空!").show();
    } else if ($(o).val().length < 3 ) {
        $(o).siblings("span.markedWords").html("用户名不得小于3个字符!").show();
        name = false;
    } else if ($(o).val() && !regs.test(textVal)) {
        $(o).siblings("span.markedWords").html("用户名不能含有中文!").show();
        name = false;
    } else {
        $(o).siblings("span.markedWords").html("请填写用户名,用户名不得小于3个字符").hide();
        name = true;
    }
    return name;
}

//验证密码
var code=false;
function authCode(o){
    var textVal=$(o).val();
    var regs= /^[A-Za-z0-9_-]+$/;
    if(!textVal){
        $(o).siblings("span.markedWords").html("密码为空!").show();
        code=false;
    }else if(!regs.test(textVal)){
        $(o).siblings("span.markedWords").html("密码是由数字+字母组成,不能含有特殊字符!").show();
        code=false;
    }else if(textVal.length<6){
        $(o).siblings("span.markedWords").html("密码长度不能小于6!").show();
        code=false;
    }
    else{
        $(o).siblings("span.markedWords").html("请填写密码,最小长度为6个字符").hide();
        code=true;
    }
    return code;
}

//确认密码
var recode=false;
function authReCode(o){
    var prev=$(o).parent().prev("li").find("input").val();
    var now=$(o).val();
    if(!now){
        $(o).siblings("span.markedWords").html("再次输入密码不能为空!").show();
        recode=false;
    }else if(prev!=now){
        $(o).siblings("span.markedWords").html("两次输入的密码不一致!").show();
        recode=false;
    }else{
        $(o).siblings("span.markedWords").html("请再次输入密码").hide();
        recode=true;
    }
    return recode;
}

//验证邮箱
var email=false;
function authEmail(o){
    var textVal=$(o).val();
    var regs= /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
    if(!$(o).val()){
        $(o).siblings("span.markedWords").html("邮箱为空!").show();
        email=false;
    }else if(!regs.test(textVal)){
        $(o).siblings("span.markedWords").html("邮箱格式不正确!").show();
        email=false;
    }else{
        $(o).siblings("span.markedWords").html("请输入邮箱地址").hide();
        email=true;
    }
    return email;
}
var nick=false;
function authCommon(o){
    if(!$(o).val()){
        $(o).siblings("span.markedWords").html("不能为空!").show();
        nick=false;
    }else{
        $(o).siblings("span.markedWords").html("用户资料").hide();
        nick=true;
    }
    return nick;
}

//提交
function submitBtn(){
    if(!name || !code || !recode || !email || !nick){
        alert("请检查你的信息是否填写完整!");
    }else{
        alert("注册成功!");
    }
}