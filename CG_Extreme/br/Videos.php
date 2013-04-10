<!doctype html>
<html>
<?php include('metas.php'); ?>
<body>
<?php include('include/menu.php'); ?>




	
	<div id="ContentVideos">
		<div id="VideoDestaque">
		
		
		<div class="VideosDestaques">
			<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo">Youtube</a>
		</div>
	
		</div><!-- Close VideoDestaque -->
		
		<div id="UltimosVideos">
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo"><img src="img/videos/thumbnails/0.jpg" alt="0" width="220" height="140"></a>
			</div>
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo"><img src="img/videos/thumbnails/1.jpg" alt="0" width="220" height="140"></a>
			</div>
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo"><img src="img/videos/thumbnails/2.jpg" alt="0" width="220" height="140"></a>
			</div>
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo"><img src="img/videos/thumbnails/3.jpg" alt="0" width="220" height="140"></a>
			</div>
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo"><img src="img/videos/thumbnails/4.jpg" alt="0" width="220" height="140"></a>
			</div>
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo"><img src="img/videos/thumbnails/5.jpg" alt="0" width="220" height="140"></a>
			</div>
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo"><img src="img/videos/thumbnails/6.jpg" alt="0" width="220" height="140"></a>
			</div>
			<div class="MiniaturasVideos">
				<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo"><img src="img/videos/thumbnails/7.jpg" alt="0" width="220" height="140"></a>
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


</body>
</html>