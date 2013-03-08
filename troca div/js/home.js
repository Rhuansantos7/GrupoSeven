// JavaScript Document

$(document).ready(function(e) {
	$("#view li:eq(0)").fadeIn("slow");
	
	var ant = 0;
	var index = 0;
    $(".box").click(function(e) {
		ant = index;
		index = $(this).attr("i");
		if(ant != index)
		
		{
			$("#view li:eq("+index+")").fadeIn("slow");
			$("#view li:eq("+ant+")").fadeOut("slow");
		}
    });

});