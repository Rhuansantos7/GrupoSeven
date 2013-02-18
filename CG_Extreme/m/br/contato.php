<html>
	<head>
		<title>CG Extreme - Mobile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style/mobile.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/main.js"></script>
	</head>
	
	<body>
		<?php include('include/banner.php');?>
		
		<div class="banner_top">
			<img src="images/contato/banner_contato.jpg" alt=""title=""/>
		</div><!--close city bank info-->
	
		<?php
			if (isset($_POST['BTEnvia'])){
				//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
			 	//====================================================
				$email_remetente = "contato@cgextreme.com.br"; // deve ser um email do dominio
				//====================================================
			 
			 
				//Configurações do email, ajustar conforme necessidade
				//====================================================
				$email_destinatario = "contato@cgextreme.com.br"; // qualquer email pode receber os dados
				$email_reply = "$email";
				$email_assunto = "Contato CG Extreme - Mobile";
				//====================================================
			 
			 
				//Variaveis de POST, Alterar somente se necessário
				//====================================================
				$nome = $_POST['nome'];
				$email = $_POST['email'];
			 	$mensagem = $_POST['assunto'];
				//====================================================
			 
				//Monta o Corpo da Mensagem
				//====================================================
				$email_conteudo = "Nome = $nome \n"; 
				$email_conteudo .= "Email = $email \n"; 
				$email_conteudo .=  "Mensagem = $assunto \n";
			 	//====================================================
			 
				//Seta os Headers (Alerar somente caso necessario)
				//====================================================
				$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
				//====================================================
			 
			 
				//Enviando o email
				//====================================================
				if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
					echo "<div class='emailSuccess'>E-Mail enviado com sucesso!</div>"; 
				}
			  	else{
					echo "<div class='emailFail'>Falha no envio do E-Mail!</div>";
				}
				//====================================================
			}	
			?>
		
		<div class="contact_form">
			<h2>Reserve seu ingresso!</h2>
			<p>Tire suas d&#250;vidas e se comunique com a gente, Teremos o maior prazer em atender voc&#234;!</p>
			
			<form name="contato" action="<? $PHP_SELF; ?>" method="POST">
				<input type="text" name="nome" placeholder="Nome">
				<input type="text" name="email" placeholder="E-mail">
				<input type="text" name="assunto" placeholder="Assunto">
				
				<input name="BTEnvia" class="sendFormBtn" type="submit" value="Enviar">
			</form>
		</div><!--close citiBank  map-->
			
		<?php include('include/footer.php');?>
	</body>
</html>