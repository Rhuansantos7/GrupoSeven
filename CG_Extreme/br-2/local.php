<!doctype html>
<html>
<head>
	<title>CG Extreme - Local</title>
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
	<div class="pageBanner local">
	</div><!--close palestrante banner-->
	
	<div class="wrapper">
		<div class="localInfo">
		<div class="localGallery">
	</div><!--close main video-->
	<br><br>

	<span class="citi">	
		O Citibank Hall, lar dos melhores shows no Rio de Janeiro, será a casa do CG
		Extreme.
		Localizado na Barra da Tijuca, a casa é a mais importante da América Latina e
		já foi palco de astros como Linkin Park, Snow Patrol, Red Hot Chilli Peppers,
		Paramore, Simply Red e muitos outros.
		<br>
		Nos vemos lá!
	</span>
	<br>
	<br>
	
	<div class="cityBankVideo">
		<div class="video">
			<iframe src="http://player.vimeo.com/video/54804405?badge=0" width="960" height="400" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</div><!--close video -->
	</div><!--close cityBankVideo-->


					<div class="cityBankMap">
						<div class="map">
							<iframe width="600" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?q=-22.988896,-43.365313&amp;num=1&amp;t=h&amp;ie=UTF8&amp;z=14&amp;ll=-22.988876,-43.365365&amp;output=embed"></iframe>
						</div><!--close video -->
						
						<div class="info">
							<div class="infoImg">
								<img src="img/pd/logo_citibank.png" />
							</div><!--close infoImg-->
								
							<h3>Endereço :</h3>
							<p>Av. Ayrton Senna, 3000 </p>
							<p>Barra da Tijuca</p>
							<p>CEP 22775-00 - Rio de Janeiro - RJ</p>
							<h3>Referência :</h3>
							<p> Dentro do Via Parque Shopping</p>
							<p>Site: www.credicard.com.br/citibank-hall-rj</p>
						</div><!--close info-->
					</div><!--close cityBankVideo-->
				</div><!--close palestrante gallery-->
        </div><!--close content-->
	<?php include('include/rodape.php'); ?>
		
	</body>
</html>