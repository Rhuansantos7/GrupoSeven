// JavaScript Document
$(document)
    .ready(function(e) {
    hVideo_qtd = $("#b-slide ul li")
        .length;
    a = 8;
    $("#b-slide-list ul li")
        .each(function(index, element) {
        a--;
        $("#b-slide-list-control ul")
            .append("<li i='" + index + "'></li>");
    });
    $("#b-slide-list-control ul li:eq(6)")
        .css("background", "url(../img/slider/bullets_hover.png) no-repeat");
    var img = 4;
    var imgAnt = 0;
    var eixo = 0;
    var time = 7000;
    var loop;
    var status = false;

    function setAnimation() {
        $("#b-slide ul li:eq(" + imgAnt + ")")
            .fadeOut("slow");
        $("#b-slide ul li:eq(" + img + ")")
            .fadeIn("slow");

        $("#b-slide-list-control ul li:eq(" + img + ")")
            .css("background", "url(../img/slider/bullets_hover.png) no-repeat");
        $("#b-slide-list-control ul li:eq(" + imgAnt + ")")
            .css("background", "");
    }

    function interval() {
        loop = setInterval(function() {
            status = false;
            imgAnt = img;
            img--;
            if (img < 0) {
                img = 4;
                imgAnt = 0;
            }
            setAnimation();
        }, time)
    }
    interval();
    $("#b-slide-list-control ul li")
        .click(function(e) {
        imgAnt = img;
        img = $(this)
            .attr("i");
        setAnimation();
        if (status == true) {
            clearInterval(loop);
            interval();
            status = false;
        }
        
        
    });
    
   
$(".fancybox").fancybox();



});







$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		delay:   5000,
	});
});


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



///////// animação Topo Home

$("#caminho").delay("1000").animate({
		width: "980px"
	},5000, function(){
		$(this).fadeOut();
	});

		
	
	$("#aviao_top").animate({
		marginLeft:"1000px"
	},7000,function(){
		$(this).fadeOut();
	});

	
	$("#logo_top").delay(6000).animate({
		marginTop: "0px"
	},2000);
	
		$("#data_top").delay(7000).animate({
		width: "332px"
	},1500);
	
		$("#text_top").delay(8000).fadeIn("slow");
		
		
		
///////// Contador

		$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
	$('#defaultCountdown').countdown({until: new Date(2013, 4 - 1, 27, 8),});
	$('#year').text(austDay.getFullYear());
});

	$("#TimeEvent").delay(3000).animate({
		marginTop: "-200px"
	},3000);

});