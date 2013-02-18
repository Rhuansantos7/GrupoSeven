<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8" />
<title>Seven CG</title>
<link rel="stylesheet" href="css/glisse.css" />
<link rel="stylesheet" href="css/app.css" />

<?php include('include/metas.php'); ?>
<?php include('include/css.php'); ?>
<title>Seven CG</title>
<style type="text/css">
li {display:inline; margin:10px; cursor:pointer;}
.myphotos{margin:10px; border:2px solid #666;}
</style>
</head>
<body>
<link rel="stylesheet" title="Standard" href="css/slider.css" type="text/css" media="screen" />
<?php include('barrinha_bolada.php');?>

<!--menu-->
<?php include('include/menu.php');?>
<!-- fim do menu--> 

<div class="galeria-top-rodape">
  <div class="txt-galeria">Nossa Estrutura</div>
</div>
<div id="container-galeria14">
<br>
<!-- Inicio Galeria-->
<ul>
  <li><img src="img/galeria_estrutura/thumb/145.jpg" class="myphotos" rel="group1" data-glisse-big="img/galeria_estrutura/img/145.jpg" title="Seven Computação Gráfica" /></li>  
  <li><img src="img/galeria_estrutura/thumb/146.jpg" class="myphotos" rel="group1" data-glisse-big="img/galeria_estrutura/img/146.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="img/galeria_estrutura/thumb/147.jpg" class="myphotos" rel="group1" data-glisse-big="img/galeria_estrutura/img/147.jpg" title="Seven Computação Gráfica" /></li>
  
  <li><img src="img/galeria_estrutura/thumb/148.jpg" class="myphotos" rel="group1" data-glisse-big="img/galeria_estrutura/img/148.jpg" title="Seven Computação Gráfica" /></li>  
  <li><img src="img/galeria_estrutura/thumb/149.jpg" class="myphotos" rel="group1" data-glisse-big="img/galeria_estrutura/img/149.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="img/galeria_estrutura/thumb/150.jpg" class="myphotos" rel="group1" data-glisse-big="img/galeria_estrutura/img/150.jpg" title="Seven Computação Gráfica" /></li>
  
  <li><img src="img/galeria_estrutura/thumb/151.jpg" class="myphotos" rel="group1" data-glisse-big="img/galeria_estrutura/img/151.jpg" title="Seven Computação Gráfica" /></li>  
  <li><img src="img/galeria_estrutura/thumb/152.jpg" class="myphotos" rel="group1" data-glisse-big="img/galeria_estrutura/img/152.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="img/galeria_estrutura/thumb/153.jpg" class="myphotos" rel="group1" data-glisse-big="img/galeria_estrutura/img/153.jpg" title="Seven Computação Gráfica" /></li>
  
</ul>
<!-- Fim Galeria -->
</div>

<div class="galeria-top-rodape">
  <div class="txt-galeria">
<a href="galeria-estrutura.php">1</a> <a href="galeria-estrutura2.php">2</a> <a href="galeria-estrutura3.php">3</a> <a href="galeria-estrutura4.php">4</a> <a href="galeria-estrutura5.php">5</a> <a href="galeria-estrutura6.php">6</a> <a href="galeria-estrutura7.php">7</a> <a href="galeria-estrutura8.php">8</a> <a href="galeria-estrutura9.php">9</a> <a href="galeria-estrutura10.php">10</a> <a href="galeria-estrutura11.php">11</a> <a href="galeria-estrutura12.php">12</a> <a href="galeria-estrutura13.php">13</a> <a href="galeria-estrutura14.php">14</a></div>
</div>
<!-- rodape -->
<?php include('include/rodape.php');?>
<!-- fim do rodape --> 

<!-- todos os scripts -->
<?php include('include/scripts.php');?>
<!-- fim dos scripts --> 

<!-- JS --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/glisse.js"></script> 
		<script>
            $(function () {
                
                $('.myphotos').glisse({speed: 500, changeSpeed: 550, effect:'roll', fullscreen: false}); 
            });
        </script>
<!-- JS -->
</body>
</html>