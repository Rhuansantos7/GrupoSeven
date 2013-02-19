//-------------------------------------------------------------- MENU HOME---------------------------------------------------------------- 

$(document).ready(function(e) {
$("#menu").append('<div class="tooltip"></div>');



	$("#menu").animate({
		marginTop:"0px",
		width: "54px"
	},4000);
	$("#menu").animate({
		marginTop:"0px",
		width: "250px"
	},1000);
	
	$("#realizacao").delay(7000).animate({
		opacity:"0.9",
	},2000);
	
	$("#logo").delay(4000).animate({
		marginTop: "100px"
	},4000);
	
	$("#data").delay(4000).animate({
		marginTop: "390px",
		width: "380px",
		marginLeft: "20px"
	
	},4000);
	
	$("#aviao").delay(3000).animate({
		marginLeft: "340px"
	
		},5000,function(){
		$(this).fadeOut();
	});
	
	$("#text").delay(4000).animate({
		width: "386px"
	
	},2000);


	
// -------------------------------------------------------------- CAMINHO ----------------------------------------------------------------
	
	$("#caminho").delay(4000).animate({
		height: "1200px"
	},2000);
	
		$(".caminho0").click(function(){
			$("#caminho").animate({
				height: "1200px"
			},3000);
		});
	
	$(".caminho1").click(function(){
		$("#caminho").animate({
			height: "2400px"
		},3000);
	});
	
	
	
		$(".caminho1").click(function (){
			$("#titulo_palestrante").delay(2000).fadeIn("Slow");
			$(".col_left").delay(3000).fadeIn("Slow");
			$(".col_right").delay(4000).fadeIn("Slow");
		});
	
	
	
	
	
	$(".caminho2").click(function (){
		$("#caminho").animate({
			height: "3791px"
		},3000)
		$("#passaporte_close").delay(1500).animate({
			marginLeft: "-370px"
		},2000);
		$("#passaporte_open").delay(1500).animate({
			marginLeft: "-250px"
		},2000);
		$("#titulo_ingresso").delay(3000).fadeIn("Slow");
		$("#ticket").delay(4000).fadeIn("fast");
		$("#lote").delay(5000).fadeIn("fast");

		
	});

	
	
	
// -------------------------------------------------------------- NAVEGACAO ----------------------------------------------------------------
                $('ul a').bind('click',function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500,'');
               
                    event.preventDefault();
                });
 
// ------------------------------------------------------------- MENU ----------------------------------------------------------------


	$("*[rel=tooltip]").mouseover(function(e) 
	{
		$('.tooltip').html($(this).attr('te'));
		var el = $(this);
	
		$('.tooltip').fadeIn(0).animate({left: el.position().left}, 'fast');
	});
		
	$('#menu').mouseout(function (){$('.tooltip').fadeOut(0)});
});