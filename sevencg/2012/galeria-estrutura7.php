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
  <li><img src="galeria_estrutura/thumb/108.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/108.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/109.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/109.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/110.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/110.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/111.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/111.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/112.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/112.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/113.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/113.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/114.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/114.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/115.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/115.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/116.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/116.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/117.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/117.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/118.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/118.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/119.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/119.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/120.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/120.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/121.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/121.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/122.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/122.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/123.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/123.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/124.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/124.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/125.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/125.jpg" title="Seven Computação Gráfica" /></li>
</ul>
<!-- Fim Galeria -->
</div>

<div class="galeria-top-rodape">
  <div class="txt-galeria">
<a href="galeria-estrutura.php">1</a> <a href="galeria-estrutura2.php">2</a> <a href="galeria-estrutura3.php">3</a> <a href="galeria-estrutura4.php">4</a> <a href="galeria-estrutura5.php">5</a> <a href="galeria-estrutura6.php">6</a> <a href="galeria-estrutura7.php">7</a> <a href="galeria-estrutura8.php">8</a> <a href="galeria-estrutura9.php">9</a> <a href="galeria-estrutura10.php">10</a> <a href="galeria-estrutura11.php">11</a> <a href="galeria-estrutura12.php">12</a> <a href="galeria-estrutura13.php">13</a> </div>
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