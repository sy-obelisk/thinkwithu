$(function() {
	//    summer school
	$(".summerBd ul li").bind({
		"mouseenter": function() {
			$(this).find(".summerTop").css({
				width: "212px",
				height: "212px",
				marginTop: "-20px",
				marginLeft: "-20px"
			}).find(".summer-mask").show().end().end().find(">span").hide();

		},
		"mouseleave": function() {
			$(this).find(".summerTop").css({
				width: "172px",
				height: "172px",
				marginTop: "0",
				marginLeft: "0"
			}).find(".summer-mask").hide().end().end().find(">span").show();
		}
	});

	//    立即报名
	$(".sign-content ul li").click(function() {
		var html = $(this).html();
		$(this).parent().parent().slideUp().siblings("span").html(html);
	});
	
	//全球金融实习
	$('.bg-img').mouseenter(function() {
		$(this).children('.bg-overplay').addClass('bg-over-on');
	})
	$('.bg-img').mouseleave(function() {
		$('.bg-overplay').removeClass('bg-over-on');
	})
});

function upXiala(o) {
	$(o).siblings(".sign-content").slideToggle();
}