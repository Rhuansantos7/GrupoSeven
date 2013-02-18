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
    <li><img src="galeria_estrutura/thumb/197.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/197.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/198.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/198.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/199.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/199.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/200.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/200.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/201.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/201.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/202.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/202.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/203.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/203.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/204.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/204.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/205.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/205.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/206.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/206.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/207.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/207.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/208.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/208.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/209.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/209.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/210.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/210.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/211.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/211.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/212.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/212.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/213.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/213.jpg" title="Seven Computação Gráfica" /></li>
  <li><img src="galeria_estrutura/thumb/214.jpg" class="myphotos" rel="group1" data-glisse-big="galeria_estrutura/full_selection/214.jpg" title="Seven Computação Gráfica" /></li>
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