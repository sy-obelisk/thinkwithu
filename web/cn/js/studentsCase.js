$(function(){

});
function univer(o){
    var h1=$(o).find("input:hidden").eq(0).val();
    var imgSrc=$(o).find("input:hidden").eq(1).val();
    var uniInfo=$(o).find("input:hidden").eq(2).val();
    $(".admissRight h2").html(h1);
    $(".university .uniLeft img").attr("src",imgSrc);
    $(".university .uniRight span").html(uniInfo);
}