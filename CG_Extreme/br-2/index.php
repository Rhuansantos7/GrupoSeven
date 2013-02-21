<!doctype html>
<html>
<head>
	<title>CG Extreme</title>
	<link rel="icon" href="five.png" type="image/png" />
	<link rel="stylesheet" href="style/main.css" />
	<link href='http://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Allerta+Stencil' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	
	<meta name="keywords" content="cgextreme, Seven, Fullsail, Citibank hall, Chance Glasco, Nathaniel Howe, Sebastian Krys, Cordy Rierson, Laurie Brugger, Jayson Whitmore">
	<meta name="description" content="cgextreme web site">
	<meta name="author" content="seven media">
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery1.8.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<!-- include jQuery library -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<!-- include Cycle plugin -->
	<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
	
	<! --------- -VÍDEO HOME ---- >
	<script type="text/javascript" src="js/html5gallery/html5gallery.js"></script>    

	 <?php
		$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
		$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
		
		if ($iphone || $android || $palmpre || $ipod || $berry == true) 
		{ 
			echo "<script>window.location=' '</script>";
		}
		
		/*
		if ($ipad == true) 
		{ 
			echo "<script>window.location='tablet/index.php'</script>";
		}
		*/
	?>
</head>

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
	
	<div id="content_home">
		<div id="news_home">
			<span class="titulo_home">NEWS</span>
			
		</div><!-- close new_home -->
		<div id="videos_home">
			<span class="titulo_home">VÍDEOS</span>
			
				<! --------------------------------------- GALLERY VIDEO ------------------------------->		
				
			<div id="content_video_home">
				<!-- A wrapper DIV to center the Gallery -->
				<div style="text-align:center;">
				
					<div style="display:none;margin:0 auto;" class="html5gallery" data-skin="light" data-width="370" data-height="250">
					
						<!-- Add Youtube video to Gallery -->
						<a href="http://www.youtube.com/watch?v=urdS0fcLopc&feature=share&list=UUOCnRD7UIj34ZsxAOonqNlQ"><img src="http://img.youtube.com/vi/YE7VzlLtp-4/2.jpg" alt=""></a>
						<a href="http://www.youtube.com/watch?v=uNY3yZtZI0I"><img src="http://img.youtube.com/vi/YE7VzlLtp-4/2.jpg" alt="Youtube Video"></a>

					</div>
				
				</div>
			</div><!-- close content_video_home -->
			<! --------------------------------------- GALLERY VIDEO ------------------------------->		

	
			
		</div><!-- close videos_home -->
	</div><!-- close content home -->
	
<?php include('include/rodape.php'); ?>

</body>
</html>