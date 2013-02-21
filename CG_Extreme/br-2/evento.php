<!doctype html>
<html>
<head>
  	<title>CG Extreme - Evento</title>
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
	<div id="banner_evento">
	</div><!-- close banner evento -->

	<div id="content_evento">
		<div id="logo_evento"><img src="img/evento/cgextreme.png"></div><!-- close logo evento -->
		<br>
		<span class="evento_d">27 e 28 de Abril</span> 
		<br><br>
		<div id="content_txt_evento">
		
		<span class="txt_evento">
			O CG Extreme vai trazer para o Rio de Janeiro os maiores nomes em
			Computação Gráfica no cinema, na música e nos games, responsáveis por trabalhos
			conceituados e premiados em todo o mundo.
			
			Pensado para envolver o visitante numa experiência ímpar, o CG Extreme é o
			primeiro espetáculo de entretenimento digital do país. A proposta é promover a
			troca de experiências entre plateia e palestrantes ao mesmo tempo em que o público
			sente-se entretido e ativo. É diferente de tudo que você já viu. Por quê continuar
			comparecendo a palestras maçantes e antiquadas? Embarque nessa experiência!
		</span>
	</div><!-- close content evento -->


	<div id="content_evento2">
		<div id="evento_left">
		<p class="center_img"><a href="http://www.sevencg.com.br" target="new"><img src="img/evento/grupo_seven.png"></a></p>
		<span class="text_right">
			O Grupo Seven foi fundado em 2009 e estabelecida com a missão de revolucionar a
			formação profissional em computação gráfica no Brasil.
			Desde então, o Grupo Seven tem se reinventado, ano após ano, prezando a
			qualidade do ensino e a infraestrutura de suas escolas.
			O Grupo Seven, agora, representa no Brasil uma das maiores potências mundiais em
			educação voltada para o mercado de entretenimento, a Full Sail University.
		</span>
	</div><!-- close content evento2 -->


	<div id="evento_right">
		<p class="center_img"><a href="http://www.fullsail.edu/" target="new"><img src="img/evento/fullsail.png"></a></p>
	<span class="text_right">
		Com 33 anos de experiência em educação, a Full Sail University é uma das entidades
		educacionais mais prestigiadas do mundo em educação superior voltada para o
		mercado de entretenimento.
		Muitos dos profissionais formados pela Full Sail já foram agraciados com Oscars®,
		GRAMMYS® e EMMYS ®, dentre outros prêmios reconhecidos mundialmente.
		A excelência dos formados pela Full Sail é reconhecida por profissionais como
		Christopher Nolan (diretor da Trilogia Batman) e empresas como a Dreamworks, que
		confiaram no talento e conhecimento dos profissionais.
	</span>
	</div><!-- close evento right-->
	</div>
	<br />
	<div id="video_evento">
		<iframe width="800" height="500" src="http://www.youtube.com/embed/cUxXd86ERS4" frameborder="0" allowfullscreen></iframe>
	</div><!-- close video evento -->
</div><!-- close content -->
 
  
<?php include('include/rodape.php'); ?>  </div>

</body>
</html>