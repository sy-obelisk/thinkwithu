$(function(){
    var zzcH = $(document).height();
    $(".zzcAll").css({"height": zzcH + "px"});
    $('.purpleColor').bind('click',function(){
        var id = $(this).attr('data-value');
        $.post('/cn/api/get-join',{id:id},function(re){
            $(".contentTc").find('ul').html(re.description);
            $(".zzcAll").show();
            $(".contentTc").show();
        },'json')
    })
});

function closePos(){
    $(".zzcAll").hide();
    $(".contentTc").hide();
}

function showPos(_this){
    $(".zzcAll").show();
    $(".contentTc").show();
}