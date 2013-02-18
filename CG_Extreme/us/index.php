<!doctype html>
<html>
<head>
	<title>CG Extreme</title>
	<link rel="icon" href="five.png" type="image/png" />
	<link rel="stylesheet" href="style/main.css" />
	<link href='http://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
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
	<script type="text/javascript">
		$(document).ready(function() {
		    $('.slideshow').cycle({
				fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
			});
		});
	</script>

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

<body>
<?php include('include/menu.php'); ?>
<div class="content"> 
  <!--Slider-->
  <center>
    <div id="b-banner">
      <div id="b-slide-list">
        <div id="b-description">
          <div id="b-delimiter">
            <div id="b-left">
              <h1></h1>
              <h2></h2>
            </div>
            <div id="b-right">
              <div id="b-slide-list-control">
                <ul>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="b-slide">
          <ul>
          	<a href="ingressos.php"><li i='0' style="background:url(img/slider/01.jpg) no-repeat center top;"></li></a>
            <li i='1' style="background:url(img/slider/02.jpg) no-repeat center top;"></li>
           	<a href="local.php"><li i='2' style="background:url(img/slider/03.jpg) no-repeat center top;"></li></a>
          	<a href="evento.php"><li i='3' style="background:url(img/slider/04.jpg) no-repeat center top;"></li></a>
           	<a href="palestrantes.php"><li i='4' style="background:url(img/slider/05.jpg) no-repeat center top; display:block;"></li></a>
          </ul>
        </div>
      </div>
    </div>
  </center>
  <!--Slider-->
 	 <div id="content_home">

   	 <div id="news_home">
     <span class="destaque_news">On April 27th and 28th of 2013</span>
     <span class="txt_pd_home"> 
<p>The very first digital entertainment</p>
<p>spectacle in Brazil is taking place</p>
<p>at Citibank Hall,</p>
the most important theatre in Latin America!
      </span>
     <br>
     </div>
     
      	<a href="midia.php"><div id="midia_home"> 
	    <div class="slideshow">
		<img src="img/media/bric-financial-news-logo.png" />
		<img src="img/media/daily-finance-logo.png"  />
		<img src="img/media/yahoo-news-logo.png" />
		<img src="img/media/animation-world-network-logo.png" />
		<img src="img/media/cgw-logo.png" />
		</div>
	    
    </div><!-- close midia home --></a>
    <!--close news_home-->
    <div id="video_home">
    
    <iframe width="500" height="330" src="http://www.youtube.com/embed/xA_WZHUghi8" frameborder="0" allowfullscreen></iframe>

    </div>
    <div id="wallpaper">
     <span class="txt_wall">
      <p class="downloads">DOWNLOADS</p>
      <p class="donwload_sub">Get in the mood of this experience! Download wallpapers and Facebook covers
right now!</p>
      </span>
      <a href="download.php"><div id="bt_baixar"></div></a>
      <!--close bt_baixar--> 
    </div>
    <!--close wallpaper--> 
    
	
		<div id="ingresso_home">
		<p class="venda"><span class="red">2st lot</span> of tickets available for purchase</p>
		<p class="venda"> <a href="ingressos.php"><img src="img/home/ingresso.png"></a></p>
		<br><br>
		<iframe width="500" height="330" src="http://www.youtube.com/embed/JQgpbLO0Kvo?fs=1" frameborder="0" allowfullscreen></iframe>
		</div>
		
		
		<div id="organizacao_home">
		<p class="org">&nbsp;</p>
		
		<br />
		<a href="http://www.sevencg.com.br" target="new"> <p class="grupo_seven"><img src="img/pd/gruposeven.png"></p></a>
		<a href="http://www.fullsail.edu/" target="new"> <p class="fullsail"><img src="img/pd/fullsail.png"></p></a>
		<Br>
		<a href="evento.php"><img src="img/home/organizadores.png"></a>
		</div>
		
		</div>
		<!--close content_home--> 
		</div>
		<!--close content-->
		
		 <?php include('include/rodape.php'); ?>

</body>
</html>