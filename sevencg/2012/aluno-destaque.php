<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('include/metas.php'); ?>
<?php include('include/css.php'); ?>
<title>Seven CG</title>
</head>
<body>
<link rel="stylesheet" title="Standard" href="css/slider.css" type="text/css" media="screen" />
<?php include('barrinha_bolada.php');?>

<!--menu-->

<?php include('include/menu.php');?>

<!-- fim do menu-->

<div class="galeria-top-rodape">
 <div id="txt-top-galeria1">aluno destaque do mês</div>
 <div id="txt-top-galeria2">Meses anteriores</div>
</div>
<!-- pricipal-->
<div id="container-galeria">
 <div id="foto-aluno"></div>
 <div id="trabalho-destaque"></div>
 <div class="linha"></div>
 <div id="destaque-anterior">
  <p>2012</p>
  <p><br/>
   Janeiro: <br/>
   Antonio da Silva</p>
  <p>Fevereiro: <br/>
   Filomena do Amaral</p>
  <p>Março: <br/>
   Felipe dos Santos</p>
  <p>Abril: <br/>
   Chris Rock</p>
 </div>
 
 <!-- SLIDER -->
 <div id="slider-destaque">
  <div id="contentFlow" class="ContentFlow">
   <div class="loadIndicator">
    <div class="indicator"></div>
   </div>
   <div class="flow">
    <div class="item"> <img class="content" src="pics/pic0.png"/>
     <div class="caption">0</div>
    </div>
    <div class="item"> <img class="content" src="pics/pic1.png"/>
     <div class="caption">1</div>
    </div>
    <div class="item"> <img class="content" src="pics/pic2.png"/>
     <div class="caption">2</div>
    </div>
    <div class="item"> <img class="content" src="pics/pic1.png"/>
     <div class="caption">3</div>
    </div>
   </div>
   <div class="globalCaption"></div>
   <div class="scrollbar">
    <div class="slider">
     <div class="position"></div>
    </div>
   </div>
  </div>
 </div>
 <!-- FIM DO SLIDER --> 
</div>
<!-- fim da principal -->
<div class="galeria-top-rodape">
 <div id="txt-bottom-galeria"></div>
</div>

<!-- rodape -->
<?php include('include/rodape.php');?>
<!-- fim do rodape --> 

<!-- todos os scripts -->
<?php include('include/scripts.php');?>

<!-- fim dos scripts -->

</body>
</html>