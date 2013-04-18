<!doctype html>
<html>
<?php include('metas.php'); ?>
<body>
<?php include('include/menu.php'); ?>




	
	<div id="ContentVideos">
		<div id="VideoDestaque">
		<img src="img/videos/banner-videos.jpg" alt="banner-videos" width="986" height="343">
		
		<div class="VideosDestaques">
			
		</div>
	
		</div><!-- Close VideoDestaque -->
		
		<div id="UltimosVideos">
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=x4pAcbSHw4U"><img src="img/videos/thumbnails/0.jpg" alt="0" width="220" height="140"></a>
				<span class="TxtVideos">CG Extreme - Trailer oficial</span>
			</div>
			
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=b0bFm5V6Gko"><img src="img/videos/thumbnails/2.jpg" alt="0" width="220" height="140"></a>
				<span class="TxtVideos">Ed Jones - O Pioneiro dos efeitos especiais</span>
			</div>
			
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=CWNpj88lvJE"><img src="img/videos/thumbnails/1.jpg" alt="0" width="220" height="140"></a>
				<span class="TxtVideos">PROMOÇÃO CG EXTREME - CALL OF DUTY MW3</span>
			</div>
			
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=oALSUg-scN0"><img src="img/videos/thumbnails/3.jpg" alt="0" width="220" height="140"></a>
				<span class="TxtVideos">Apresentador do CG Extreme</span>
			</div>
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=yiAARBRgi9k"><img src="img/videos/thumbnails/4.jpg" alt="0" width="220" height="140"></a>
				<span class="TxtVideos">Pavilhão de Carreiras - Aguardamos o seu portfolio!</span>
			</div>
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=-z01dWOTmHQ"><img src="img/videos/thumbnails/5.jpg" alt="0" width="220" height="140"></a>
				<span class="TxtVideos">Artistas falando do CG Extreme</span>
			</div>
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=7GeMovTmacE"><img src="img/videos/thumbnails/6.jpg" alt="0" width="220" height="140"></a>
				<span class="TxtVideos">CGExtreme #Embarque Nessa</span>
			</div>
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=urdS0fcLopc"><img src="img/videos/thumbnails/7.jpg" alt="0" width="220" height="140"></a>
				<span class="TxtVideos">CG Extreme - Trailer Oficial 2</span>
			</div>
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=xA_WZHUghi8"><img src="img/videos/thumbnails/0.jpg" alt="0" width="220" height="140"></a>
				<span class="TxtVideos">Chamada SEVEN e FULL SAIL - CG Extreme</span>
			</div>
					
		</div><!-- close UltimosVideos -->
	</div><!-- close ContentVideos -->
	
	
	
<?php include('include/rodape.php'); ?>


<script type="text/javascript">
$(document).ready(function() {
	$('.VideosDestaques').cycle({ 
	    fx:    'curtainX', 
	    sync:  false, 
	    delay: -2000 
    });
 });
 
 $('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});
</script>

<script  type="text/javascript">

$(".MiniaturasVideos").live(function(e){
	$('.PlayVideos').show("slow");
});
</script>


</body>
</html>