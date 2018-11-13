$(function(){
    //继续添加按钮点击
    var n = 0;
    $("#add_1").click(function () {
        n++;
        $(this).before('<ul class="sortUl">' +
            '<li><input name="work[' + n + '][]" type="radio"  value="1" id="shixi_'+n+'1"/><label for="shixi_'+n+'1">国内四大</label></li>' +
            '<li><input name="work[' + n + '][]" type="radio"  value="2" id="shixi_'+n+'2"/><label for="shixi_'+n+'2">500强</label></li>' +
            '<li><input name="work[' + n + '][]" type="radio"  value="3" id="shixi_'+n+'3"/><label for="shixi_'+n+'3">外企</label></li>' +
            '<li><input name="work[' + n + '][]" type="radio"  value="4" id="shixi_'+n+'4"/><label for="shixi_'+n+'4">国企</label></li>' +
            '<li><input name="work[' + n + '][]" type="radio"  value="5" id="shixi_'+n+'5"/><label for="shixi_'+n+'5">私企</label></li>' +
            '</ul>' +
            '<ul class="yearTime">' +
            '<li><input name="year[' + n + ']" type="radio"  value="1" id="year_'+n+'1"/><label for="year_'+n+'1">1个月及以内</label></li>' +
            '<li><input name="year[' + n + ']" type="radio"  value="2" id="year_'+n+'2"/><label for="year_'+n+'2">2-3个月</label></li>' +
            '<li><input name="year[' + n + ']" type="radio"  value="3" id="year_'+n+'3"/><label for="year_'+n+'3">3个月-1年</label></li>' +
            '<li><input name="year[' + n + ']" type="radio"  value="4" id="year_'+n+'4"/><label for="year_'+n+'4">1年-3年</label></li>' +
            '<li><input name="year[' + n + ']" type="radio"  value="5" id="year_'+n+'5"/><label for="year_'+n+'5">3-5年</label></li>' +
            '<li><input name="year[' + n + ']" type="radio"  value="6" id="year_'+n+'6"/><label for="year_'+n+'6">5年以上</label></li>' +
            '</ul>' +
            '<textarea name="live[' + n + ']" placeholder="请如实填写跟申请方向相关的工作经验，若没有完整工作经验，请填写相关实习经验，每项描述不低于30字，请尽量填写大于30天的相关经历，若没有可不填；"></textarea>');
        changeShowYear();
    });

    $("#add_2").click(function () {
        $(this).before('<textarea name="project[]" placeholder="请如实填写跟申请方向相关的项目经验，如相关比赛经历、商业项目、实验项目、论文发表等。每项描述文字不低于30字。若没有可不填。">' +
            '</textarea>');
    });
    $("#add_3").click(function () {
        $(this).before('<textarea name="studyTour[]" placeholder="请如实填写海外游学经历，如交换项目、海外实践课程等。若没有可不填。">' +
            '</textarea>');
    });
    $("#add_4").click(function () {
        $(this).before('<textarea name="active[]" placeholder="请如实填写你所参与的公益项目，若没有可不填。">' +
            '</textarea>');
    });
    $("#add_5").click(function () {
        $(this).before('<textarea name="price[]" placeholder="请如实填写你所获奖经历，若没有可不填">' +
            '</textarea>');
    });
    //专业选择
    $(".second_page ul li").click(function(){
        var num=$(".t-major-mask").attr("qufen");
        $(this).addClass("on").siblings("li").removeClass("on");
        $(this).parents("li").addClass("on").siblings("li").removeClass("on").find("li").removeClass("on");
        var id=$(this).attr("data-id");
        var pid=$(this).attr("data-pid");
        var name=$(this).attr("data-name");
        if(num==2){
            $("#major-input").siblings("input.fangId").val(id);
            $("#major-input").siblings("input.fangPid").val(pid);
            $("#major-input").siblings("input.fangName").val(name);
        }else{
            $("#step4-major").siblings("input.fangId").val(id);
            $("#step4-major").siblings("input.fangPid").val(pid);
            $("#step4-major").siblings("input.fangName").val(name);
        }
    });

    $("#xinqu li input").change(function(){
        var num= $("#xinqu li input:checked").length;
        if(num>=3){
            alert("感兴趣的留学服务最多只可以选择两项哦！");
            $(this).removeAttr("checked");
            return false;
        }
    });
    changeShowYear();

});
function changeShowYear() {
    $(".sortUl li input").change(function () {
        $(this).parents("ul").siblings("ul.yearTime").slideDown();
    });
}
function nextStep1(){
    var gpa=$("#gpa").val();
    var gmat=$("#gmat").val();
    var toefl=$("#toefl").val();

    if(gpa){
        if (isNaN(gpa)) {
            alert("请输入正确的科目分数！");
            return false;
        }
        if((gpa<2.5) || (gpa>100) || ((gpa>4)&&(gpa<50))){
            alert("gpa数值填写范围为2.5-4.0或者50-100！");
            return false;
        }
    }else{
        alert("GPA为必填项！");
        return false;
    }
    if(gmat){
        if (isNaN(gmat)) {
            alert("请输入正确的科目分数！");
            return false;
        }
        if((gmat<200)){
            alert("gre数值填写范围为200-340，gmat数值填写范围为400-800");
            return false;
        }
        if((gmat>340)&&(gmat<400)){
            alert("gre数值填写范围为200-340，gmat数值填写范围为400-800");
            return false;
        }
        if((gmat>800)){
            alert("gre数值填写范围为200-340，gmat数值填写范围为400-800");
            return false;
        }
    }
    if(toefl){
        if (isNaN(toefl)) {
            alert("请输入正确的科目分数！");
            return false;
        }
        if((toefl<5)){
            alert("toefl数值填写范围为60-120！,ielts数值填写范围为5.0-9.0！");
            return false;
        }
        if((toefl>120)){
            alert("toefl数值填写范围为60-120！,ielts数值填写范围为5.0-9.0！");
            return false;
        }
        if((toefl<60) && (toefl>9)){
            alert("toefl数值填写范围为60-120！,ielts数值填写范围为5.0-9.0！");
            return false;
        }
    }else{
        alert("TOEFL/IELTS为必填项！");
        return false;
    }

    $(".step-1").hide();
    $(".step-2").fadeIn();
    $(".choose-step ul li").eq(1).addClass("on");
}
function prevStep1(){
    $(".step-2").hide();
    $(".step-1").fadeIn();
    $(".choose-step ul li").eq(1).removeClass("on");
}
function nextStep2(){
    var biye=$("#biye").val();
    var schoolName=$("#schoolName").val();
    var majorInput=$("#major-input").val();
    if(!biye || !schoolName ||!majorInput){
        alert("必填项内容不能为空！");
        return false;
    }
    $(".step-2").hide();
    $(".step-3").fadeIn();
    $(".choose-step ul li").eq(2).addClass("on");
}
function prevStep2(){
    $(".step-3").hide();
    $(".step-2").fadeIn();
    $(".choose-step ul li").eq(2).removeClass("on");
}
function nextStep3(){
    $(".sortUl").each(function () {
        var sortLen=$(".sortUl li input:checked").length;
        var yearLen=$(".yearTime li input:checked").length;
        if(sortLen<=0 || yearLen<=0){
            alert("实习/工作经验必选！");
            return false;
        }else if(sortLen!=yearLen){
            alert("实习/工作经验中两项选项为必选！");
            return false;
        }else{
            $(".step-3").hide();
            $(".step-4").fadeIn();
            $(".choose-step ul li").eq(3).addClass("on");
            $(document).scrollTop(0);//回到顶部
        }

    });

}
function prevStep3(){
    $(".step-4").hide();
    $(".step-3").fadeIn();
    $(".choose-step ul li").eq(3).removeClass("on");
}
function nextStep4(){
    var check=$(".step-4 ul li input:checked").length;
    var major=$("#step4-major").val();
    var uName=$("#userName_1").val();
    var uPhone=$("#phone_1").val();
    if(!check || !major|| !uName|| !uPhone){
        alert("必填项内容不能为空！");
        return false;
    }
}
//专业弹窗
function closeMajorC(){
    $(".t-major-mask").hide();
}
function showNextP(){
    $(".first_page").hide();
    $(".second_page").fadeIn();
    $(".t-m-in").css("marginTop","-"+$(".t-m-in").height()/2+"px");
}
function showPrevP(){
    $(".first_page").fadeIn();
    $(".second_page").hide();
    $(".t-m-in").css("marginTop","-"+$(".t-m-in").height()/2+"px");
}
function showMajorC(o,quNum){
    $(".t-major-mask").show().attr("qufen",quNum);
}
function sureMajor(){
    var num=$(".t-major-mask").attr("qufen");
    var h=$(".second_page ul li.on").html();
    // var h=$(".first-ul li.on span").html();
    $(".t-major-mask").hide();
    if(num==2){
        $("#major-input").val(h);
    }else{
        $("#step4-major").val(h);
    }
}
//提交表单
function chooseSub(){
    var num=$("#mudidi input:checked").length;
    var zhuanye=$("#step4-major").val();
    var len=$("#xinqu li input:checked").length;
    var uName=$("#userName_1").val();
    var uPhone=$("#phone_1").val();
    if(!num || !zhuanye|| !uName|| !uPhone){ /*|| len<=0*/
        alert("请注意必填项！");
        return false;
    }
    //获取对应值
    var gpa = $('#gpa').val();//gpa
    var gmat = $('#gmat').val();//gmat/gre
    var toefl = $('#toefl').val();//toefl/ielts
    var education = $("#xueli input:checked").val();//学历
    var school = $('#biye').val();//就读毕业院校
    var schoolName = $('#schoolName').val();//学校具体名称
    var major01 = $('#major-input').val();//专业

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/cn/api/school-storage" ,
        data:{

        },
        success: function (result) {
            if(result.code==1){
                console.log('提交成功');
            }
            else {
                alert("提交失败！");
            }
        },
        error : function() {
            alert("提交失败！");
        }
    });


    // $("#chooseSchool").submit();
}