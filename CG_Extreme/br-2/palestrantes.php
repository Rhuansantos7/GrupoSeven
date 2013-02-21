<!doctype html>
<html>
	<head>
			<title>CG Extreme - Palestrantes</title>
	<link rel="icon" href="five.png" type="image/png" />
	<link rel="stylesheet" href="style/main.css" />
	<link href='http://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Allerta+Stencil' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	
	<!-- font palestrantens -->
	<link href='http://fonts.googleapis.com/css?family=Keania+One' rel='stylesheet' type='text/css'>
	
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
		<?php include('include/menu.php'); ?>
	
		<div class="content">
			<div class="palestranteBanner todos">
				
			</div><!--close palestrante banner-->
			
			
			<div class="wrapper">
				<div id="content_palestrantes">
					<div class="palestranteList">
						<ul>
				          <li><a href="nathaniel_howe.php">Nathaniel <br/> Howe</a></li>
				          <li><a href="sebastian_krys.php">Sebastian <br/> Krys</a></li>
				          <li><a href="cordy_rierson.php">Cordy <br/> Rierson</a></li>
				          <li><a href="chance_glasco.php">Chance <br/> Glasco</a></li>
				          <li><a href="laurie_brugger.php">Laurie <br/> Brugger</a></li>
				          <li><a href="jayson_whitmore.php">Jayson <br/> Whitmore</a></li>
						</ul>
					</div><!--close palestranteList-->
				
				
				<div class="palestranteGallery">
					<div class="html5Video">
          
						<iframe src="http://player.vimeo.com/video/55466612?badge=0" width="960" height="400" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						
          				<span class="txt_pd_home">
          					Conheça os profissionais que a indústria aclamou como destaques em suas áreas e entenda por que você não pode perder o CG Extreme. Pensando sempre em excelência, o Grupo Seven e a Full Sail University, trazem para o CG Extreme, alguns dos maiores profissionais do entretenimento mundial! Com anos de experiência e dedicação, cada um deles é referência nas áreas em que atuam, e são responsáveis por trabalhos reconhecidos no mundo inteiro.
Acabe agora com a sua curiosidade e conheça cada um deles!
						</span>
					</div><!--close main video-->
				</div><!--close palestrante gallery-->
			</div><!--close wrapper-->
		</div><!--close content-->
	</div><!-- close content_palestrantes-->
<?php include('include/rodape.php'); ?>

    
	</body>
</html>