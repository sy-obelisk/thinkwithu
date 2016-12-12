$(function(){
    autoPlayA();
});

function autoPlayA(){
    var au=$(".openD-inLeft audio");
    $("input#auto01").change(function(){
        if($("input#auto01").is(":checked")){
            au[0].play();
        }else{
            au[0].pause();
        }
    });
    $("input#auto02").change(function(){
        if($("input#auto02").is(":checked")){
            au[0].currentTime='1';
        }else{
            au[0].currentTime='0';
        }
    });

}
