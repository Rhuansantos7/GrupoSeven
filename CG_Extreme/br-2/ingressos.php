<!doctype html>
<html>
<head>
	<title>CG Extreme - Ingressos</title>
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
	<div id="banner_ingresso"> </div>
	<div id="ingressos_content">
	<a href="http://premier.ticketsforfun.com.br/shows/show.aspx?sh=CGEXTREU13" target="new"><div id="primeiro_dia"></div>
	<div id="segundo_dia"></div>
	<div id="combo"></div></a>

	<Center><a href="http://www.sevencg.com.br/2012/unidades.php" target="new"><img src="img/ingresso/1-lote-ingressos.png"></a></Center>
	</div>
<?php include('include/rodape.php'); ?>
</body>
</html>