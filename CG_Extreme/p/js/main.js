/*
Rhuan Dos Santos Souza
Web Developer:Seven Media produtora
Email:Rhuansantos7@gmail.com
Email alternativo:Rhuan@7media.com.br
*/
$(document).ready(function(init) {

<!-------------------------------------------------------------- animação home ---------------------------------------------------------------- !>

$("#logo").delay(1000).animate({
		marginTop: '-150px',
	},4000);
	$("#caminho").animate({
		width: '300px',
		height: '766',
	},3000);
		$("#caminho").animate({
		width: '1046px',
},2000);

$("#aviao").delay(1000).animate({
		marginLeft: '1000px',
		},8500);
		 $("#embarque").delay(2500).show("").animate({
		 width: '392px',
	
	 },2000);
	 
	 	<!-------------------------------------------------------------- start home ---------------------------------------------------------------- !>

	 
$(".start").click(function (){
	
$("#logo").delay(1000).animate({
		marginTop: '-150px',
	},4000);
	$("#caminho").animate({
		width: '1046px',
		height: '766',
	},3000);

$("#aviao").show("slow");
$("#aviao").animate({
		marginLeft: '1000px',
		},8500);
		 $("#embarque").delay(2500).show("").animate({
		 width: '392px',
	
	 },2000);
	 
});

	 	<!-------------------------------------------------------------- start home ---------------------------------------------------------------- !>

	 
	<!-------------------------------------------------------------- reset home ---------------------------------------------------------------- !>
 
		 
		$(".reset").delay(5000).click(function (){
			$("#logo").animate({
			marginTop: '-3000px',
		});
			$("#caminho").animate({
		width: '0px',
		height: '0px',
		});
			$("#caminho").animate({
		width: '0px',
		});
		
			$("#aviao").animate({
		marginLeft: '-1500px',
		});
		$("#aviao").hide();
			$("#embarque").show("").animate({
		width: '0px',
		
		});
		});
			<!-------------------------------------------------------------- reset home ---------------------------------------------------------------- !>

		
<!-------------------------------------------------------------- animação home ---------------------------------------------------------------- !>


<!-------------------------------------------------------------- PALESTRANTES ---------------------------------------------------------------- !>

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
		
<!-------------------------------------------------------------- PALESTRANTES ---------------------------------------------------------------- !>
            $(function() {
                $('ul.nav a').bind('click',function(event){
                    var $anchor = $(this);
												$('html, body').stop().animate({
											scrollTop: $($anchor.attr('href')).offset().top
                    }, 7000,'easeOutCirc');
                    event.preventDefault();
                });
            });




<!-------------------------------------------------------------- caminho ---------------------------------------------------------------- !>
$(".click_palestrante").click(function (){
	$("#back_palestrantes").animate({
		height: '0px',
	},4000);
});
$(".click_evento").click(function (){
	$("#back_palestrantes").animate({
		height: '2300px',
	},4000);
});
$(".click_ingresso").click(function (){
	$("#back_palestrantes").animate({
		height: '4440px',
	},4000);
});
$(".click_local").click(function (){
	$("#back_palestrantes").animate({
		height: '6300px',
	},4000);
});
$(".click_contato").click(function (){
	$("#back_palestrantes").animate({
		height: '8500px'
	},4000);
});
<!-------------------------------------------------------------- caminho ---------------------------------------------------------------- !>

});