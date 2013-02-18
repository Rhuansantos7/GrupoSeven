<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('include/metas.php'); ?>
<?php include('include/css.php'); ?>
<title>Seven CG</title>
</head>
<body>
<?php include('barrinha_bolada.php');?>
<!--menu-->
<?php include('include/menu.php');?>
<!-- fim do menu-->
<style>		
#topo_pag_game{
	width:100%;;
	height:384px;
	margin:auto;
	background:url(img/game/game.jpg) no-repeat center;
}
#topo_game_destaque{
	width:1000px;
	height:35px;
	background:url(img/padrao/transparenciapadrao.png);
	margin:auto;
	margin-top:15px;
}
#conteudo_game{
	width:1000px;
	height:480px;
	margin:auto;
	background:url(img/game/back_game.png);
	margin-top:15px;
}
.topogame_divisao{
	width:1000px; height:auto; float:left; padding-top:6px; border:1px solid #F00F; color:#00cccc;
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
}
#conteudo1_pag_game{
	width:500px;
	height:400px;
	float:left;
	margin-top:10px;
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
}
#conteudo2_pag_game{
	width:500px;
	height:350px;
	float:right;
	margin-top:10px;
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
}
.txt_game_top{
}
.game_txt_pag{
	color:#999999; font-size:12px; font-family:Verdana, Geneva, sans-serif; text-align:left; margin-left:35px; width:370px; height:auto;
}
</style>
<!-- fim da principal -->
<div id="topo_pag_game"> </div>
<div id="topo_game_destaque"> <span class="topogame_divisao"> GAME TOTAL </span> </div>
<div id="conteudo_game">
 <div id="conteudo1_pag_game"> <span class="txt_game_top" style="color:#ec681b;"> GAME ART
  <p style="margin-top:15px;"><img src="img/game/01.jpg" width="444" height="151" /> </p>
  </span> <br>
  <p class="game_txt_pag">Game Designer</p>
  <p class="game_txt_pag" >Concept </p>
  <p class="game_txt_pag">Escultura</p>
  <p class="game_txt_pag">3D fundamental </p>
  <p class="game_txt_pag">Blender</p>
  <p class="game_txt_pag">unity </p>
  <br />
  <p  class="game_txt_pag">Você vai aprender:</p>
  <br>
  <p  class="game_txt_pag">Desenvolver todo o conteúdo artístico, utilizando as técnicas mais avançados do mercado. Projetar seus próprios jogos, abrangendo todo o processo, desde conceitos iniciais, passando pelo processo de produção à finalização. O aluno deverá, ainda, desenvolver um Projeto de um jogo, a ser apresentado ao final da sua formação. </p>
 </div>
 <div id="conteudo2_pag_game"> <span class="txt_game_top" style="color:#994393;"> GAME DEVELOPER </span>
  <p style="margin-top:15px;"> <img src="img/game/02.jpg" /> </p>
  <br>
  <p class="game_txt_pag">Web Game</p>
  <p class="game_txt_pag" >XNA 2D e 3D </p>
  <p class="game_txt_pag">Game Mobile</p>
  <p class="game_txt_pag">3D fundamental </p>
  <p class="game_txt_pag">Game Designer</p>
  <p class="game_txt_pag">unity</p>
  <br>
  <p class="game_txt_pag">Você vai aprender: </p>
  <br>
  <p class="game_txt_pag" style="margin-top:-10px;">A lógica de programação para jogos, com ferramentas de última geração.Projetar seus próprios jogos, abrangendo todo o processo, desde conceitos iniciais, passando pelo processo de produção à finalização, utilizando as técnicas mais avançados utilizados no mercado. O aluno deverá, ainda, desenvolver um Projeto de um jogo, a ser apresentado ao final da sua formação. 
   Utilização das principais linguagens de programação do mercado. </p>
 </div>
</div>
<!-- rodape -->
<?php include('include/rodape.php');?>
<!-- fim do rodape --> 
<!-- todos os scripts -->
<?php include('include/scripts.php');?>
<!-- fim dos scripts -->
</body>
</html>
