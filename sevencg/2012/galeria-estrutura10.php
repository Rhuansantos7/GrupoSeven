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
   <li><img src="galeria_estrutura/thumb/161.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/161.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/162.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/162.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/163.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/163.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/164.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/164.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/165.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/165.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/166.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/166.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/167.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/167.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/168.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/168.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/169.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/169.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/170.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/170.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/171.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/171.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/172.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/172.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/173.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/173.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/174.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/174.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/175.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/175.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/176.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/176.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/177.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/177.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/178.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/178.jpg" title="Seven Computação Gráfica" /></li>
 </ul>
 <!-- Fim Galeria --> 
</div>
<div class="galeria-top-rodape">
 <div class="txt-galeria"> <a href="galeria-estrutura.php">1</a> <a href="galeria-estrutura2.php">2</a> <a href="galeria-estrutura3.php">3</a> <a href="galeria-estrutura4.php">4</a> <a href="galeria-estrutura5.php">5</a> <a href="galeria-estrutura6.php">6</a> <a href="galeria-estrutura7.php">7</a> <a href="galeria-estrutura8.php">8</a> <a href="galeria-estrutura9.php">9</a> <a href="galeria-estrutura10.php">10</a> <a href="galeria-estrutura11.php">11</a> <a href="galeria-estrutura12.php">12</a> <a href="galeria-estrutura13.php">13</a> </div>
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