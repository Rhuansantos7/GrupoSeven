<!doctype html>
<html>
<?php include('metas.php'); ?>

<body>
<?php include('include/menu.php'); ?>

<?php
if (isset($_POST['BTEnvia'])){
 
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 	//====================================================
	$email_remetente = "opportunity@cgextreme.com.br"; // deve ser um email do dominio
	//====================================================
 
 
	//Configurações do email, ajustar conforme necessidade
	//====================================================
	$email_destinatario = "opportunity@cgextreme.com.br"; // qualquer email pode receber os dados
	$email_reply = "$email";
	$email_assunto = "Contato CG Extreme - Empregadores";
	//====================================================
 
 
	//Variaveis de POST, Alterar somente se necessário
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
 	$ramo = $_POST['ramo'];
 	$skype = $_POST['skype'];
 	$site = $_POST['site'];
 	$evento = $_POST['evento'];
 	$vagas = $_POST['vagas'];
 	$candidatos = $_POST['candidatos'];
 	$horario = $_POST['horario'];
	//====================================================
 
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n"; 
	$email_conteudo .=  "Telefone = $telefone \n";
	$email_conteudo .=  "ramo = $ramo \n";
	$email_conteudo .=  " telefone = $telefone \n";
	$email_conteudo .=  " skype = $skype \n";
	$email_conteudo .=  " site = $site \n";
	$email_conteudo .=  " evento = $evento \n";
	$email_conteudo .=  " candidatos = $candidatos \n";
	$email_conteudo .=  " horario = $horario \n";
 	//====================================================
 
	//Seta os Headers (Alerar somente caso necessario)
	//====================================================
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
 
 
	//Enviando o email
	//====================================================
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
		echo "</b>E-Mail enviado com sucesso!</b>"; 
	}
  	else{
		echo "</b>Falha no envio do E-Mail!</b>";
	}
	//====================================================
}	
?>

		<div class="banner_pavilhao"></div> <! close baner pavilhao -->
		<div class="MarcadorBanner"></div> <! close MarcadorBanner -->
		
	<div id="ContentPavilhaoBussola">
		
	<div id="ConteudoEmpregadores">
		<span class="titulo_home">Empregadores</span>
		<div class="ImgTopoPavilhao"><img src="img/pavilhao/banner-empregadores.jpg" alt="" /></div><!-- close ImgTopoPavilhao -->
			<div class="ContentTextPavilhao">
				<div class="content">
					<div class="contactForm">
					
					<span class="TextoPadraoPavilhao">
						Um dos principais objetivos do Pavilhão é atender às necessidades das empresas com mão-de-obra qualificada e
						direcionada para o universo de computação gráfica. Se você quer prospectar sua marca ou buscar novos
						talentos para expandir seus negócios, o Pavilhão de Carreiras é o lugar certo.</span>
						<br><br><br>

				<form action="<? $PHP_SELF; ?>" method="POST">

					<div class="formSection">
					<p class="TextFormPavilhao">Nome</p>
						<div class="formInput">
							<input type="text" name="nome" placeholder="Nome" class="userInput_name">
						</div><!--close form input-->
					</div><!--close formSection-->
					
					<div class="formSection">
					<p class="TextFormPavilhao">E-mail</p>
						<div class="formInput">
							<input type="text" name="email" placeholder="E-mail" class="userInput_email">
						</div><!--close form input-->
					</div><!--close formSection-->
					

					<div class="formSection">
						<p class="TextFormPavilhao">Ramo de atuação</p>
						<div class="formInput">
							<input type="text" name="ramo" placeholder="" class="userInput_subject">
						</div><!--close form input-->
					</div><!--close formSection-->
					
					
						<div class="formSection">
						<p class="TextFormPavilhao">Telefone</p>
						<div class="formInput">
							<input type="text" name="telefone" placeholder="" class="userInput_subject">
						</div><!--close form input-->
					</div><!--close formSection-->
					
					
						<div class="formSection">
						<p class="TextFormPavilhao">Skype</p>
						<div class="formInput">
							<input type="text" name="skype" placeholder="" class="userInput_subject">
						</div><!--close form input-->
					</div><!--close formSection-->
					
					
					<div class="formSection">
					<p class="TextFormPavilhao">Site</p>
						<div class="formInput">
							<input type="text" name="site" placeholder="Ex:www.cgextreme.com.br" class="userInput_subject">
						</div><!--close form input-->
					</div><!--close formSection-->
					

					<div class="formSectionPavilhao">
					<p class="TextFormPavilhao">Como ficou sabendo sobre o evento ?</p>
						<div class="formInputPavilhao">
							<textarea placeholder="" name="evento" class="userInput_comment"></textarea>
						</div><!--close form input-->
					</div><!--close formSection-->
					
					<div class="formSectionPavilhao">
					<p class="TextFormPavilhao">Possui quais vagas disponíveis no momento?</p>
						<div class="formInputPavilhao">
							<textarea placeholder="" name="vagas" class="userInput_comment"></textarea>
						</div><!--close form input-->
					</div><!--close formSection-->

					
					<div class="formSectionPavilhao">
					<p class="TextFormPavilhao">Procura candidatos com qual perfil?</p>
						<div class="formInputPavilhao">
							<textarea placeholder="" name="candidatos" class="userInput_comment"></textarea>
						</div><!--close form input-->
					</div><!--close formSection-->
					
					
					<div class="formSectionPavilhao">
					<p class="TextFormPavilhao">Qual é o melhor horário para contato?</p>
						<div class="formInputPavilhao">
							<textarea placeholder="" name="horario" class="userInput_comment"></textarea>
						</div><!--close form input-->
					</div><!--close formSection-->

					<input type="submit" name="BTEnvia" value="Enviar" class="blueBtn sendContactFormBtn">
				</form> 				
					
					</div><!--close contactForm-->
				</div><! close content -->
			</div><!-- close ContentTextPavilhao -->
		</div><!-- close ConteudoEmpregadores-->
			
			
<!-------------------------------------------------------------- ContentFixPavilhao ----------------------------------------------->
	
			<div id="ContentFixPavilhao">
					<div id="MenuPavilhao">
						<ul class="TextoPadraoPavilhao">
							<li><a href="carreira.php">O Pavilhão de Carreira</a></li>
							<li><a href="embarque.php">Embarque na Seven</a></li>
							<li><a href="oportunidade.php">Oportunidades para os alunos</a></li>
							<li><a href="unity.php">Campeonato Unity</a></li>
							<li><a href="bussola.php">Bússola do estudante</a></li>
							<li class="AtivoMenuPavilhao"><a href="empregadores.php">Empregadores</a></li>
						</ul>
				</div><!-- close Menupavilhao -->
				
				
				
				<div id="ContatoPavilhao">
					<div id="TextoContantoPavilhao" class="TextoPadraoPavilhao">
						<p>E-mail: opportunity@cgextreme.com.br</p>
					</div><!-- close TextoContantoPavilhao -->
				</div><!-- ContatoPavilhao -->
				
				
			
			</div><!-- close ContatoPavilhao -->
			
			
			<div id="rodapePavilhao">
					<div id="rodapePavilhaoLogos">
						<a href="http://www.abragames.org/" target="blank"><img src="img/pavilhao/logo-abragames.png"></a>
						<a href="http://www.youtube.com/user/marcoscct?feature=watch" targert="new"><img src="img/pavilhao/logo-castro-brothers.png"></a>
						<a href="http://www.characterink.com/" target="new"><img src="img/pavilhao/logo-character-ink.png"></a>
						<a href="http://www.istockphoto.com/" target="new"><img src="img/pavilhao/logo-istockphoto.png"></a>
						<a href="http://www.joox.com.br/" target="new"><img src="img/pavilhao/logo-joox.png"></a>
						<a href="http://www.robtec.com/" target="new"><img src="img/pavilhao/logo-robtec.png"></a>
						<a href="http://www.sidneyrezende.com/" target="new"><img src="img/pavilhao/logo-srzd2.png"></a>
						<a href="http://unity3d.com/" target="new"><img src="img/pavilhao/logo-unity.png"></a>
						<a href="http://www.wedologos.com.br/" target="new"><img src="img/pavilhao/logo-wedologos.png"></a>
						<a href="http://www.agenciacravo.com.br/default.php" target="new"><img src="img/pavilhao/logo-agencia-cravo.jpg"></a>
					</div><!-- close rodapePavilhaoLogos -->
				</div><!-- close rodapePavilhao -->
				
				
				
		</div><!-- close ContentFixPavilhao -->	
			
<!-------------------------------------------------------------- ContentFixPavilhao ----------------------------------------------->
	</div><!-- close ContentPavilhao -->

<?php include('include/rodape.php'); ?>

</body>
</html>
