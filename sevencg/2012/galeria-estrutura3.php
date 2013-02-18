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
   <li><img src="galeria_estrutura/thumb/37.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/37.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/38.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/38.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/39.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/39.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/40.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/40.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/41.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/41.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/42.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/42.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/43.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/43.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/44.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/44.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/45.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/45.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/46.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/46.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/47.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/47.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/48.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/48.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/49.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/49.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/50.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/50.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/51.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/51.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/52.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/52.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/53.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/53.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/54.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/54.jpg" title="Seven Computação Gráfica" /></li>
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