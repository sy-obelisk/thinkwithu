$(function(){
    $("#no").change(function(){
        $(this).siblings("ul").find("li input").attr("placeholder","如未参加考试，可填写目标分数");
    });
    $("#yes").change(function(){
        $(this).siblings("ul").find("li input").attr("placeholder","请填写真实分数");
    });
    $("#no02").change(function(){
        if(this.checked){
            $(this).siblings("textarea").slideUp();
        }else{
            $(this).siblings("textarea").slideDown();
        }
    });
    $("#yes02").change(function(){
        if(this.checked){
            $(this).siblings("textarea").slideDown();
        }else{
            $(this).siblings("textarea").slideUp();
        }
    });
    $(".check_ul.last li input").change(function(){
        var num= $(".check_ul.last li input:checked").length;
        if(num>=3){
            alert("感兴趣的留学服务最多只可以选择两项哦！");
            $(this).removeAttr("checked");
            return false;
        }
    });
});

function bcNextPage(){
    var time=$("#time").val();//出国时间
    var country=$("#country").val();
    var major=$("#major").val();
    var yes02=$("#yes02");
    if(!time || !country || !major){
        alert("请注意必填项！*为必填选项");
        return false;
    }
    if(yes02[0].checked){
        var xuelijl=$("#xuelijl").val();
        if(!xuelijl){
            alert("请填写学历经历！");
            return false;
        }
    }

    $(".secondPage").fadeIn();
    $(".firstPage").hide();
}

function  bcPrevPage(){
    $(".secondPage").hide();
    $(".firstPage").fadeIn();
}

function subBackground(){
    var time=$("#time").val();//出国时间
    var country=$("#country").val();//意向国家
    var major=$("#major").val();//意向专业
    var qustion=$(".check_ul li input:checked").length;//最关心问题
    var name=$("#n-name").val();//姓名
    var phone=$("#n-phone").val();//电话
    var reg=/^1[3|4|5|7|8][0-9]\d{8}$/;
    var weChat=$("#n-wechat").val();//微信
    var buchong=$("#buchong").val();//补充了解（非必填）
    var len= $(".check_ul.last li input:checked").length;//感兴趣的留学服务
    if(!time || !country || !major || !qustion || !name || !phone || !weChat ){
        alert("请将必填项填写完整！*为必填选项");
        return false;
    }else if(!reg.test(phone)){
        alert("电话格式不正确！");
        return false;
    }
    else{
        console.log(1111);
        $("#backForm").submit();
        alert('提交成功')
    }
}