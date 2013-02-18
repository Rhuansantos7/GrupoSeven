// JavaScript Document
$(document).ready(function (e) {

////////////////////////////////////////////////////////////////////////////
	$("#videoBox").css({'width': '900px', 'height':'520px', 'border':'3px solid #999', 'position':'fixed', 'left':'50%', 'top':'-50%', 'margin-top':'-250px' , 'margin-left':'-450px', 'z-index':'101', 'display':'none'});
	$(".videoBox").click(function(e) {
		$("#videoBox").append('<iframe width="100%" height="100%" src="" frameborder="0" allowfullscreen></iframe>');
		$("#videoBox iframe").attr("src", "http://www.youtube.com/embed/"+$(".videoBox").attr("link"))
        $("#videoBox").animate({top:"50%"}, {duration: 'slow'}, {easing: 'easeOutBounce'});
		$("#blackbox-bg").fadeIn("slow");
		$("#videoBox").show();
    });
	
	$("#blackbox-bg").click(function(e) {
		setTimeout (function () {$("#videoBox").html('')}, 500)
        $("#videoBox").animate({top:"-50%"}, {duration: 'slow'}, {easing: 'easeOutBounce'});
		$("#blackbox-bg").fadeOut("slow");
		delay = setTimeout (function () {$("#videoBox").show();}, 1000);
    });
})