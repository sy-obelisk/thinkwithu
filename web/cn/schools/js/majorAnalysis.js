
function getCode(o) {
    var countdown=60;
    var str = 1;
    var phone = document.getElementById('tel').value;
    $.post('/cn/api/phone-code',{type:2,phoneNum:phone},function(re){
        if(re.code==1){
            alert(re.message);
            $(o).attr('disabled',true);
            $(o).html(countdown+'秒后重发');
            var timer = setInterval(function () {
                $(o).html(countdown + "秒后重发");
                countdown--;
                if (countdown < 0) {
                    clearInterval(timer);
                    $(o).removeAttr("disabled");
                    $(o).html('获取验证码');
                    if (str == 1) {
                        //1表示手机短信验证
                    }

                }
            }, 1000);
        }else {
            alert(re.message);
        }

    },"json");
}
function recommed() {
    var extendValue=[];
    extendValue[0] = $('.userName').val();
    extendValue[1] = $('.country').val();
    extendValue[2] = $('.situation').val();
    extendValue[3] = $('.phone').val();

    if($('.code_marjo').val()==''){
        alert('请先获取验证码');
        return false
    }
    if(extendValue[0]!=''||extendValue[1]!=''||extendValue[2]!=''||extendValue[3]!=''){

    }
    else {
        alert('请先填写信息');
        return false
    }
    $.post('/cn/api/recommend-counselor',{
        extendValue:extendValue
    },function(re){

    },'json');
}