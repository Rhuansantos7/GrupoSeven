// JavaScript Document

$(document).ready(function(e) {
	function closer () {$("#t-box").fadeOut("slow");setTimeout(function (){ $("#t-box").css({width:0, marginLeft:0}) }, 500);}
    $("#t-icon-master").hover( function (e)
	{
		$("#t-box").animate({width:'740px', marginLeft:'-370px'}, {duration: 'slow'}, {easing: 'easeOutBounce'});
	})
	$("#t-toobar").hover(e, function (e){closer ()})
	
	$("#t-box li").hover(
		function (e){$(this).css("background-image", "url(img/toolbar/icons/"+$(this).attr("i")+"_h.png)")
	},
		function (e) {$(this).css("background-image", "url(img/toolbar/icons/"+$(this).attr("i")+".png)")}
	)
});