<head>
	<title>CG Extreme</title>
	
	<!-- five ico -->
	<link rel="icon" href="five.png" type="image/png" />
	<!-- main css -->
	<link rel="stylesheet" href="style/main.css" />

	
	<!-- fonts used -->
	<link href='http://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Allerta+Stencil' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Keania+One' rel='stylesheet' type='text/css'>
	
	<!-- metas tag -->
	<meta name="keywords" content="cgextreme, Seven, Fullsail, Citibank hall, Chance Glasco, Nathaniel Howe, Sebastian Krys, Cordy Rierson, Laurie Brugger, Jayson Whitmore">
	<meta name="description" content="cgextreme web site">
	<meta name="author" content="seven media">
	<meta charset="utf-8">
	
	<!-- js -->
	<script type="text/javascript" src="js/jquery1.8.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<!-- include Cycle plugin -->
	<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
	<! --------- -VÍDEO GALLERY ---->
	<script type="text/javascript" src="js/html5gallery/html5gallery.js"></script>    
	
	
	
		<!---- validação de formulario ---->
		<script type="text/javascript" src="js/validation.js"></script>  
	
	
	
		<!---- FANCY BOX ---->
	
	
		<!-- Add mousewheel plugin (this is optional) -->
		<script type="text/javascript" src="js//fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
		
		<!-- Add fancyBox -->
		<link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
		<script type="text/javascript" src="js//fancybox/source/jquery.fancybox.pack.js?v=2.1.3"></script>
		
		<!-- Optionally add helpers - button, thumbnail and/or media -->
		<link rel="stylesheet" href="js//fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
		<script type="text/javascript" src="js//fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script type="text/javascript" src="js//fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
		
		<link rel="stylesheet" href="js//fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
		<script type="text/javascript" src="js//fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	

 <?php
		$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
		$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
		
		if ($iphone || $android || $palmpre || $ipod || $berry == true) 
		{ 
			echo "<script>window.location='http://m.cgextreme.com.br/'</script>";
		}
		
	
		if ($ipad == true) 
		{ 
			echo "<script>window.location='http://cgextreme.com.br/br/evento.php'</script>";
		}
		
	?> 

</head>