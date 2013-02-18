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
    <li><img src="galeria_estrutura/thumb/179.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/179.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/180.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/180.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/181.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/181.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/182.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/182.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/183.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/183.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/184.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/184.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/185.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/185.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/186.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/186.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/187.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/187.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/188.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/188.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/189.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/189.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/190.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/190.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/191.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/191.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/192.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/192.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/193.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/193.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/194.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/194.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/195.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/195.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/196.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/196.jpg" title="Seven Computação Gráfica" /></li>
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