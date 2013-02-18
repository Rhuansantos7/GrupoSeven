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
  <li><img src="galeria_estrutura/thumb/19.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/19.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/20.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/20.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/21.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/21.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/22.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/22.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/23.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/23.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/24.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/24.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/25.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/25.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/26.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/26.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/27.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/27.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/28.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/28.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/29.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/29.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/30.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/30.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/31.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/31.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/32.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/32.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/33.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/33.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/34.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/34.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/35.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/35.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/36.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/36.jpg" title="Seven Computação Gráfica" /></li>
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