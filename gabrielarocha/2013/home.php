<link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" >
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <style type="text/css">
    #apDiv3 {
	position: absolute;
	width: 338px;
	height: 189px;
	z-index: 1001;
}
    </style>
    
    <div id="topo"></div>
    
<div id="rotativo">
        <div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
          <div id="slider" class="nivoSlider">
			<img src="images/banner/01.jpg" alt="" data-transition="slideInLeft" />
			<img src="images/banner/02.jpg" alt=""/>
			<img src="images/banner/03.jpg" alt="" />
			<img src="images/banner/04.jpg" alt=""  />
			<img src="images/banner/05.jpg" alt=""  />
			
                      
             
         
            </div>
               <div id="apDivbanner" style="margin: -50px 0 0 410px; position:absolute; z-index:9;"><img src="images/back_banner.png" width="200" height="69"></div>
              
</div>
    
 </div>
 
 
 
 <!-- Banner Rotativo -->
<div id="divimage"><!-- Inicio Imagens -->
	
   <a href="http://www.youtube.com/watch?v=HEkjg5ZZCMU" target="new"> <div id="images">
     <div id="apDiv3">	</div>	</a>
   
    				
     <a href="contato.php"> <div id="apDiv2"></div> </a>
   </div> <!-- Imagens abaixo do Banner Rotativo -->
</div><!-- Fim Imagens -->
<div id="twitter">
<script charset="utf-8" src="js/twimg.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#caaee3',
      color: '#fffcff'
    },
    tweets: {
      background: '#ffffff',
      color: '#000000',
      links: '#8d4b9c'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('Gabriela_Rocha').start();
</script>
<!-- fim do twiiter -->
</div><!-- Twitter -->
<script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
  
