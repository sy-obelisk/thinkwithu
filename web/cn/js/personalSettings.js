$(function(){

});


function copyReader(o,number){
    $(o).siblings("div.groupInput").slideToggle();
    if($(o).find("span").html()=="收起"){
        $(o).find("span").html("编辑").end().find("i").addClass("fa-angle-double-down").removeClass("fa-angle-double-up");
        if(number==2){
            $(o).prev('span').show();
        }else if(number==3){
            $(o).parent("li").css({
                borderBottom:"1px #e5e5e5 solid",
                padding:"25px 0 25px 0"
            });
        }
    }else{
        $(o).find("span").html("收起").end().find("i").addClass("fa-angle-double-up").removeClass("fa-angle-double-down");
        if(number==2){
            $(o).prev('span').hide();
        }else if(number==3){
            $(o).parent("li").css({
                borderBottom:"none",
                padding:"25px 0 0 0"
            });
        }
    }
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
        $(o).parent().find("p").css("visibility","visible").html("电话不能为空!");
    }else if(!reg.test($(o).val())){
        $(o).parent().find("p").css("visibility","visible").html("电话格式不正确!");
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
//验证密码
function verifyCode(o,num){
    var reg=/^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,22}$/;
    if(!$(o).val()){
        $(o).parent().find("p").css("visibility","visible").html("密码不能为空!");
    }else if(!reg.test($(o).val())){
        $(o).parent().find("p").css("visibility","visible").html("密码是由数字加字母构成且长度不能小于6位!");
    }else{
        $(o).parent().find("p").css("visibility","hidden");
    }

    if(num==1){
        var newCode=$(o).parent().prev("li").find("input").val();
        var renew=$(o).val();
        if(newCode!=renew){
            $(o).parent().find("p").css("visibility","visible").html("两次输入的密码不一致!");
        }
    }
}
