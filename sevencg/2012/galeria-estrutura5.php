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
<li><img src="galeria_estrutura/thumb/73.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/73.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/74.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/74.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/75.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/75.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/76.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/76.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/77.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/77.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/78.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/78.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/79.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/79.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/80.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/80.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/81.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/81.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/82.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/82.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/83.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/83.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/84.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/84.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/85.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/85.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/86.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/86.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/87.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/87.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/88.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/88.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/89.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/89.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/90.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/90.jpg" title="Seven Computação Gráfica" /></li>
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