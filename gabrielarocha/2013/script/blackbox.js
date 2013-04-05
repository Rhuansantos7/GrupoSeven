// JavaScript Document
$(document).ready(function (e) {

////////////////////////////////////////////////////////////////////////////

 
	var map;
	var latlng = new google.maps.LatLng(-22.95370, -43.17337);
	var myOptions = {
		zoom: 17,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	
	var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	
		
	 
	
	$(".blackbox-map").click(function(e) {
		a = $(this).attr("cord")
		var q = a.split(', ')
		
		map.setCenter(new google.maps.LatLng(q[0], q[1]));
		var marker = new google.maps.Marker({
			position: map.getCenter(),
			map: map
		});
		$("#bl-contact").html($(this).attr("address"))
        $("#blackbox").animate({top:"50%"}, {duration: 'slow'}, {easing: 'easeOutBounce'});
		$("#blackbox-bg").fadeIn("slow")
		$("#blackbox").show();
    });
	
	$("#blackbox-bg").click(function(e) {
        $("#blackbox").animate({top:"150%"}, {duration: 'slow'}, {easing: 'easeOutBounce'});
		$("#blackbox-bg").fadeOut("slow")
		delay = setTimeout (function () {$("#blackbox").show();}, 1000);
    });
})