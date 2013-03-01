<!doctype html>
<html>
<?php include('metas.php'); ?>

<body>
<?php include('include/menu_animado.php'); ?>


<!-- <embed class="banner_swf" src="banner/banner-mists.swf" height="570" width="100%"> -->
<div id="banner_home">
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%" id="banner_formacao" align="absmiddle">
				<param name="movie" value="estrutura_pronta4.swf" />
				<param name="quality" value="high" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="transparent" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object data="estrutura_pronta4.swf" type="application/x-shockwave-flash" width="100%" height="100%" align="absmiddle">
					<param name="movie" value="estrutura_pronta4.swf" />
					<param name="quality" value="high" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="transparent" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						teste
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>



</div><!-- close banner_home -->
<div class="MarcadorBanner"></div> <! close MarcadorBanner -->
	
<div id="content_home">
		
		<div id="news_home">
			<span class="titulo_home">NEWS</span>
	
	
		</div><!-- close new_home -->
	
	

<! --------------------------------------- GALLERY VIDEO ------------------------------->			
		<div id="videos_home">
			<span class="titulo_home">VÍDEOS</span>
			
				
			<div id="content_video_home">
				<!-- A wrapper DIV to center the Gallery -->
				<div style="text-align:center;">
				
					<div style="display:none;margin:0 auto;" class="html5gallery" data-skin="light" data-width="370" data-height="250" data-autoplayvideo="false">
					
						<!-- Add Youtube video to Gallery -->
						<a href="http://www.youtube.com/watch?v=urdS0fcLopc&feature=share&list=UUOCnRD7UIj34ZsxAOonqNlQ"><img src="http://i1.ytimg.com/vi/urdS0fcLopc/hqdefault.jpg" alt=""></a>
						<a href="http://www.youtube.com/watch?v=7GeMovTmacE"><img src="http://img.youtube.com/vi/YE7VzlLtp-4/2.jpg" alt="Youtube Video"></a>

					</div>
				
				</div>
			</div><!-- close content_video_home -->
		</div><!-- close videos_home -->
<! --------------------------------------- GALLERY VIDEO ------------------------------->		


<! ---------------------------------------  CG EXTREME NA MÍDIA ------------------------------->		


		
		<div id="HomeMidia">
			<div id="LogoMidia">
				</div><!-- close LogoMidia -->
			
			<div class="LogoM">
				<div class="slideshow">
					<img src="img/home/na-midia-jovempan.png" />
					<img src="img/home/na-midia-tecmundo.png" />
				</div><!-- close slideshow -->
			</div><!-- close LogoM1 -->
			
			
			<div class="LogoM" style="margin-left:50px;">
				<div class="slideshow">
					<img src="img/home/na-midia-jovempan.png" />
					<img src="img/home/na-midia-tecmundo.png" />
				</div><!-- close slideshow -->
			</div><!-- close LogoM1 -->
		
		</div><!-- close home midia -->
		
		
		<div class="redesHome">
			<span class="titulo_home">TWEETS</span>
				<div class="ContentSocial">
			<a class="twitter-timeline" href="https://twitter.com/sevencg" data-widget-id="306856534745423873">Tweets de @sevencg</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



				
				</div><!-- close ContentSocial -->
		</div><!-- close redesHome -->
		
		
		<div class="redesHome">
		<span class="titulo_home">FACEBOOK</span>
			<div class="ContentSocial"> 
			<div class="fb-like-box" data-href="http://www.facebook.com/sevencomputacaografica" data-width="292" data-height="360" data-show-faces="true" data-stream="false" data-header="false"></div>
				<div id="fb-root"></div>
			</div><!-- close ContentSocial -->
		</div><!-- close redesHome -->
		
		
	</div><!-- close content home -->
	
<?php include('include/rodape.php'); ?>

</body>
</html>













<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=405004916221406";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script type="text/javascript">

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

</script>