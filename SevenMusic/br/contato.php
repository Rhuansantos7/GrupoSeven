<!doctype html><!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]--><!--[if IE 7]>    <html class="ie7 oldie"> <![endif]--><!--[if IE 8]>    <html class="ie8 oldie"> <![endif]--><!--[if gt IE 8]><!--><html class="">	<!--<![endif]-->	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		<?php			if (isset($_POST['BTEnvia'])){			 				//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO			 	//====================================================				$email_remetente = "contato@sevenmp.com.br"; // deve ser um email do dominio				//====================================================			 			 				//Configurações do email, ajustar conforme necessidade				//====================================================				$email_destinatario = "contato@sevenmp.com.br"; // qualquer email pode receber os dados				$email_reply = "$email";				$email_assunto = "Contato sevenmp.com.br";				//====================================================			 			 				//Variaveis de POST, Alterar somente se necessário				//====================================================				$nome = $_POST['nome'];				$email = $_POST['idade'];				$telefone = $_POST['telefone'];			 	$mensagem = $_POST['email'];			 	$mensagem = $_POST['bairro'];			 	$mensagem = $_POST['cidade'];			 	$mensagem = $_POST['mensagem'];				//====================================================			 				//Monta o Corpo da Mensagem				//====================================================				$email_conteudo = "Nome = $nome \n"; 				$email_conteudo .= "Idade = $idade \n"; 				$email_conteudo .= "Email = $email \n"; 				$email_conteudo .=  "Telefone = $telefone \n";				$email_conteudo .=  "Bairro = $bairro \n";				$email_conteudo .=  "Cidade = $cidade \n";				$email_conteudo .=  "Mensagem = $mensagem \n";			 	//====================================================			 				//Seta os Headers (Alerar somente caso necessario)				//====================================================				$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );				//====================================================			 			 				//Enviando o email				//====================================================				if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){					echo "</b>E-Mail enviado com sucesso!</b>"; 				}			  	else{					echo "</b>Falha no envio do E-Mail!</b>";				}				//====================================================			}			?>	</head>	<?php include("include/topo.php"); ?>	<div id="banner"></div>		<div id="contato-box">		<div id="contato-left">			<form action="<? $PHP_SELF; ?>" method="post">				<div class="formSection">					<label for="user-nome">						<p class="titulo2">Nome:</p>												<input id="user-nome" class="formInput" type="text" name="nome" placeholder="Nome">					</label><!--close town-->				</div><!--close formSection-->								<div class="formSection">					<label for="user-idade">						<p class="titulo2">Idade:</p>												<input id="user-idade" class="formInput" type="text" name="idade" placeholder="Idade" maxlength="2">					</label><!--close town-->				</div><!--close formSection-->								<div class="formSection">					<label for="user-telefone">						<p class="titulo2">Telefone:</p>												<input id="user-telefone" class="formInput" type="text" name="telefone" placeholder="Telefone" maxlength="10">					</label><!--close town-->				</div><!--close formSection-->								<div class="formSection">					<label for="user-email">						<p class="titulo2">E-Mail:</p>												<input id="user-email" class="formInput" type="text" name="email" placeholder="E-Mail">					</label><!--close town-->				</div><!--close formSection-->								<div class="formSection">					<label for="user-bairro">						<p class="titulo2">Bairro:</p>												<input id="user-bairro" class="formInput" type="text" name="bairro" placeholder="Bairro">					</label><!--close town-->				</div><!--close formSection-->								<div class="formSection">					<label for="user-cidade">						<p class="titulo2">Cidade:</p>												<input id="user-cidade" class="formInput" type="text" name="cidade" placeholder="Cidade">					</label><!--close town-->				</div><!--close formSection-->								<div class="formSection">					<label for="user-mensagem">						<p class="titulo2">Mensagem:</p>												<textarea  id="user-mensagem" class="formInput" type="text" name="mensagem" placeholder="Envie sua mensagem"></textarea>					</label><!--close town-->				</div><!--close formSection-->								<input name="BTEnvia" class="css3button submit enviarMusicContato" type="submit" value="Enviar Menssagem">				<input class="css3button clear" type="reset" value="Limpar Formulário">			</form><!--close form-->		</div><!--close contato left-->			<div id="contato-right">			<p class="titulo2">HORÁRIO DE FUNCIONAMENTO</p>						<p class="texto2">Segunda a Sexta: das 09 As 21 hrs</p>						<p class="texto2">Sabados: das 09 às 18 hrs</p>						<p class="titulo2">ENDEREÇO</p>			<p class="texto2">Av. Visconde de Rio Branco, 243</p>			<p class="texto2">Niterói - RJ</p>			<p class="titulo2">TELEFONE</p>			<p class="texto2">(21) 4127-0771 - (21) 4127-0772</p>		</div><!--close contato right-->			<div id="social-box"> 			<a href="#" target="_new">				<div id="facebook"> </div>			</a> 						<a href="#" target="_new">				<div id="twitter"> </div>			</a> 						<a href="#" target="_new">				<div id="youtube"> </div>			</a> 		</div><!--close social box-->	</div><!--close contato box--><?php include("include/rodape.php"); ?></body></html>