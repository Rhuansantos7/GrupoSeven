  $(function () {

      // Slideshow 
      $("#slider1").responsiveSlides({
	      speed: 800
      });

    });
    
	
		$(document).ready(function(e) {
			$("#menu").click(function () {
				$("#menu_list").toggle().animate({
					marginTop: '-9.6em',
				},1000);
			});
		});