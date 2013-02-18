// JavaScript Document

$(document).ready(function(e) {
	$(".slideUp").prepend("<div class='s-box'><h1>asas</h1><p>asdasd asd asdkna sdhbas dbkjsadjasdjajsdvkjv</p></div>")
	$(".slideUp").css("overflow", "hidden")
	$(".s-box").css({width: $(".slideUp").width(), height: $(".slideUp").height()/2, marginTop:  '100%',
	 background: 'url(img/a.png) repeat'})
	$(".s-box h1").css({"font-size": "16px", "color": "#fff", "padding-left": "20px", "margin-bottom": "5px"})
	$(".s-box p").css({"font-size": "14px", "color": "#ccc", "padding-left": "20px", "margin-top": 0})
	
    $(".slideUp").hover(
		function ()
		{
			$(".s-box").animate({marginTop: $(".slideUp").height()/2}, {duration: 'slow'}, {easing: 'easeOutBounce'});
		},
		function ()
		{
			$(".s-box").animate({marginTop: '100%'}, {duration: 'slow'}, {easing: 'easeOutBounce'});
		}
	)
});