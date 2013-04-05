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
	<meta name="keywords" content="cgextreme, cg extreme, Seven, Fullsail, Citibank hall, Chance Glasco, Nathaniel Howe, Sebastian Krys, Cordy Rierson, Laurie Brugger, Jayson Whitmore, grupo seven">
	<meta name="description" content="cgextreme web site">
	<meta name="author" content="seven media">
	<meta charset="utf-8">
	

	

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
		
		/*
		if ($ipad == true) 
		{ 
			echo "<script>window.location='tablet/index.php'</script>";
		}
		*/
	?> 


</head>