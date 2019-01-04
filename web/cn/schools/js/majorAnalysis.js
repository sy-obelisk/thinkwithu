$(function () {
    $('.proTitleUl li').click(function () {
       var index = $(this).index();
        $('.proTitleUl li').removeClass('on');
        $(this).addClass('on');
        $('.proContent ul').hide();
        $('.proContent ul').eq(index).fadeIn();
    })
});
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