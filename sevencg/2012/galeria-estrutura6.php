<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8" />

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
<div id="container-galeria">
<br>
<!-- Inicio Galeria-->
<ul>
 <li><img src="galeria_estrutura/thumb/90.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/90.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/91.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/91.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/92.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/92.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/93.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/93.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/94.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/94.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/95.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/95.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/96.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/96.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/97.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/97.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/98.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/98.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/99.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/99.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/100.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/100.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/101.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/101.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/102.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/102.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/103.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/103.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/104.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/104.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/105.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/105.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/106.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/106.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/107.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/107.jpg" title="Seven Computação Gráfica" /></li>
</ul>
<!-- Fim Galeria -->
</div>

<div class="galeria-top-rodape">
  <div class="txt-galeria">
<a href="galeria-estrutura.php">1</a> <a href="galeria-estrutura2.php">2</a> <a href="galeria-estrutura3.php">3</a> <a href="galeria-estrutura4.php">4</a> <a href="galeria-estrutura5.php">5</a> <a href="galeria-estrutura6.php">6</a> <a href="galeria-estrutura7.php">7</a> <a href="galeria-estrutura8.php">8</a> <a href="galeria-estrutura9.php">9</a> <a href="galeria-estrutura10.php">10</a> <a href="galeria-estrutura11.php">11</a> <a href="galeria-estrutura12.php">12</a> <a href="galeria-estrutura13.php">13</a></div>
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