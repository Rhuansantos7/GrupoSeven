<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
#container{
	width:1000px; /* Largura do Container */
	height:850px; /* Altura do Container */
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
					video.src= "http://www.youtube.com/embed/6b-ZjpEv0D8?list=UU4t2mdI8uAiJDJSRjiWJT1Q&amp;hl=pt_BR&autoplay=1";
					this.className = "video-animation";
					this.style.zIndex = 0;
					video.style.zIndex = 1;
					}
				} 
			}
		</script>
<link rel="stylesheet" type="text/css" href="css/seu_talento.css">
</head>
<body>
<?php include('includes/menu.php'); ?>
<div id="container"><!-- Container Geral -->
	<?php include('includes/logo.php'); ?>
		<div id="bioimage">	<img src="img/seu_talento/talento.png" /> </div><!-- Imagem Título da página -->
		<div id="biografia"><!-- Caixa de Biográfia -->
	
    		<p class="biografia"><!-- Texto Biográfia -->
			<br />
			<strong>CAMPANHA - MOSTRE SEU TALENTO 2 - Músicos</strong><br><br>
			<strong>Regulamento:</strong><br><br>
			DATA: A campanha terá inicio no dia 07/04/2013, com término no dia 12/05/2013. O resultado dos vencedores sairá no dia 25/05/2013.<br><br>
			<strong>COMO PARTICIPAR DA CAMPANHA:</strong><br><br>
			*Campanha válida, APENAS, para participantes residentes no Brasil.<br><br>
			*Os participantes da campanha deverão gravar um vídeo, tocando qualquer instrumento musical, as músicas do CD Jesus da Gabriela Rocha ou qualquer música que esteja no canal oficial dela no YouTube.(www.youtube.com/gabrielarochaoficial). <br> 
			 Não tem necessidade ser a musica toda pois o participante pode ter criatividade para fazer um solo com o instrumento dele.<br><br>

			*O vídeo terá no mínimo 2 minutos e no Maximo 8 minutos. Por exemplo se o participante quiser fazer só um trecho de uma das Musicas de Gabriela Rocha e emendar no solo que o próprio já faz, será permitido.<br><br>

			*Caso mais de uma pessoa participe do vídeo a ser enviado, tocando os instrumentos, cada participante deverá ser destacado no email.<br><br>

			*Os participantes deverão upar o vídeo para o Youtube e enviar o link do vídeo para o email: promocao@gabrielarocha.com.br, com o seguinte texto no campo ASSUNTO: CAMPANHA MOSTRE SEU TALENTO 2. No corpo do email deverá conter, nome do participante, endereço completo e idade.<br><br>
			*Só serão válidos os vídeos enviados para o EMAIL. <br><br>
			<strong>CRITÉRIO DE AVALIAÇÃO:</strong><br><br>A produção da Sony Music, irá selecionar os 02 melhores músicos.<br><br>
			<strong>PREMIAÇÃO DOS VENCEDORES:</strong><br><br>

			*Irão participar de um Pocket Show com Gabriela Rocha e banda.<br>
			*Com direito a passagem aérea.<br>
			*Os ganhadores irão conhecer a sede da Sony Music no Rio de Janeiro.<br>
					</p><br  /><br  />
		<div class="video">
        <iframe  name="janela"  src="https://www.youtube.com/embed/nKVIzC02ZwA" frameborder="0" allowfullscreen></iframe>
		</div>
	</div><!-- fim da Caixa de Biográfia -->
    <br><br><br>
        
        
</div><!-- Fim do Container Geral -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php include('includes/rodape.php'); ?>
</body>
</html>