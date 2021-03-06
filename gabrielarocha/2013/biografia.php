<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
#container{
	width:1000px; /* Largura do Container */
	height:1200px; /* Altura do Container */
	margin:auto; /* Centralizador */
} 
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gabriela Rocha</title>
<script type="text/javascript">
			window.onload = function () {
				var divTres = document.getElementById("video");
				var video = document.getElementById("if");
				divTres.onclick = function() {
					if (this.className != "video-animation") {
					video.src= "http://www.youtube.com/embed/jcO5zgBPt0s?list=UU4t2mdI8uAiJDJSRjiWJT1Q&amp;hl=pt_BR&autoplay=1";
					this.className = "video-animation";
					this.style.zIndex = 0;
					video.style.zIndex = 1;
					}
				} 
			}
		</script>
<link rel="stylesheet" type="text/css" href="css/biografia.css">
</head>
<body>
<?php include('includes/menu.php'); ?>
<div id="container"><!-- Container Geral -->
	
	<?php include('includes/logo.php'); ?>
		<div id="bioimage">	<img src="img/biografia/biografia.png" /> </div><!-- Imagem Título da página -->
		<div id="biografia"><!-- Caixa de Biográfia -->
	
    		<p class="biografia"><!-- Texto Biográfia -->
        <br />
        Com apenas 5 anos, Gabriela Rocha iniciou a carreira musical na igreja que frequentava. Foi lá que participou do primeiro concurso de sua vida, um festival de talentos.
A apresentação agradou muito aos pais, que contrataram um professor particular de canto para a filha.<br/>
Em Junho de 2005, Gabriela, com 11 anos, se inscreveu para o Jovens Talentos, no programa de televisão nacional e em Maio de 2007 ganhou o concurso.<br/>
Em março de 2008 fez sua primeira apresentação gospel no quadro “Homenagem ao Artista” a consagrada cantora Aline Barros, tendo grande repercussão no mercado gospel com o vídeo " O poder do teu amor", que já passou dos dois milhões e meio de acessos no youtube. A partir desse programa, passou a participar de todas as homenagens gospel.<br/>
No programa do Raul Gil, Gabriela por mais de trinta vezes emocionou o Brasil com sua voz doce e ungida ministrando ao Senhor.<br/>
Recentemente, Gabriela participou do CD e DVD ao vivo do cantor Thalles Roberto, que é um fenômeno da música gospel , cantando a canção "Nada Alem de Ti", que já é um grande sucesso no Brasil, ocupando o primeiro lugar de várias rádios.<br/>
Agora, Gabriela está terminando o seu novo e tão esperado CD com músicas inéditas.<br/>
Thalles é o produtor do CD, que presentiou a Gabriela com musicas lindíssimas de sua autoria. Podemos aguardar um CD inesquecível e cheio de unção!<br/>
Dona de uma voz marcante, Gabriela tem louvado ao Senhor por todo Brasil e impactado vidas através de suas ministrações com autenticidade e personalidade. Com o foco de levar o amor de Cristo a multidões, a visibilidade de suas ministrações se encontra expressiva nas redes sociais, superando o número de 40 milhões de acessos no youtube, mesmo antes de lançar o seu CD. Com apenas 18 anos e tamanha segurança em Deus, Gabriela tem vivido sua vida pra glorificar e adorar o nome do Senhor.<br/>
Gabriela mora em Niterói (RJ) e faz parte da igreja LAN - Luz 'as Nações, do pastor Philip Murdoch.
        </p><br  /><br  />
        
	</div><!-- fim da Caixa de Biográfia -->
        <div class="video">
        	<div id="video"></div>
            <iframe id="if" width="720" height="350"  frameborder="0"  allowfullscreen wmode="Opaque"></iframe>
        </div>
</div><!-- Fim do Container Geral -->
<br><br>
<?php include('includes/rodape.php'); ?>
</body>
</html>