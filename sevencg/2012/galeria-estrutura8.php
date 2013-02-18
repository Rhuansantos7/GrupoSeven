<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Seven CG</title>
<link rel="stylesheet" href="css/glisse.css" />
<link rel="stylesheet" href="css/app.css" />
<?php include('include/metas.php'); ?>
<?php include('include/css.php'); ?>

<style type="text/css">
li { display: inline; margin: 10px; cursor: pointer; }
.myphotos { margin: 10px; border: 2px solid #666; }
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
<div id="container-galeria"> <br>
 <!-- Inicio Galeria-->
 <ul>
  <li><img src="galeria_estrutura/thumb/126.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/126.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/127.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/127.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/128.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/128.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/129.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/129.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/130.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/130.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/131.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/131.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/132.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/132.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/133.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/133.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/134.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/134.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/135.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/135.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/136.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/136.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/137.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/137.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/138.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/138.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/139.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/139.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/140.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/140.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/141.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/141.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/142.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/142.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/143.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/143.jpg" title="Seven Computação Gráfica" /></li>
 </ul>
 <!-- Fim Galeria --> 
</div>
<div class="galeria-top-rodape">
 <div class="txt-galeria"> <a href="galeria-estrutura.php">1</a> <a href="galeria-estrutura2.php">2</a> <a href="galeria-estrutura3.php">3</a> <a href="galeria-estrutura4.php">4</a> <a href="galeria-estrutura5.php">5</a> <a href="galeria-estrutura6.php">6</a> <a href="galeria-estrutura7.php">7</a> <a href="galeria-estrutura8.php">8</a> <a href="galeria-estrutura9.php">9</a> <a href="galeria-estrutura10.php">10</a> <a href="galeria-estrutura11.php">11</a> <a href="galeria-estrutura12.php">12</a> <a href="galeria-estrutura13.php">13</a></div>
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