<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		
<title>CG Extreme</title>
<link rel="icon" href="five.png" type="image/png" />
		
		<link rel="stylesheet" href="style/main.css" />
	    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Keania+One' rel='stylesheet' type='text/css'>
		
		<script type="text/javascript" src="js/jquery1.8.js"></script>
		<script type="text/javascript" src="js/validation.js"></script>
		
	</head>
	
	<body>
		<?php include('include/menu.php'); ?>

		
		<div class="content">
			<div class="pageBanner contatos">
				
			</div><!--close palestrante banner-->
			
			<div class="wrapper">	
				<div class="contactForm">
					<div class="subTitle">
						<p><span class="textoImportante">Doubts or suggestions?</span>We’ll be happy to hear<span class="textoImportante"> you !</span></p>
					</div><!--close subtitle-->	
					

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
	$email_assunto = "Contato CG Extreme";
	//====================================================
 
 
	//Variaveis de POST, Alterar somente se necessário
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
 	$mensagem = $_POST['mensagem'];
	//====================================================
 
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n"; 
	$email_conteudo .=  "Telefone = $telefone \n";
	$email_conteudo .=  "Mensagem = $mensagem \n";
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

					<form action="<? $PHP_SELF; ?>" method="POST">
						<div class="formSection">
							<div class="formInput">
								<input type="text" name="nome" placeholder="Name" class="userInput_name">
							</div><!--close form input-->
						</div><!--close formSection-->
						
						<div class="formSection">
							<div class="formInput">
								<input type="text" name="email" placeholder="E-mail" class="userInput_email">
							</div><!--close form input-->
						</div><!--close formSection-->
						
						<div class="formSection">
							<div class="formInput">
								<input type="text" name="assunto" placeholder="Subject" class="userInput_subject">
							</div><!--close form input-->
						</div><!--close formSection-->
						
						<div class="formSection">
							<div class="formInput">
								<textarea placeholder="Message" name="mensagem" class="userInput_comment"></textarea>
							</div><!--close form input-->
						</div><!--close formSection-->
						
						<input type="submit" name="BTEnvia" value="Send" class="blueBtn sendContactFormBtn">
					</form> 	
				</div><!--close contactForm-->		
				
				<div class="maisInformacoes">
        	<h2> MORE INFO</h2>
          
					<p>Contato@cgextreme.com.br</p>
					<p>+55 21 2509-6323 /+55 21 2221-5502</p>
        </div><!--close informacoes-->
				
				<div class="maisInformacoes">
        	<h2> SUPPORT AND BUSINESS </h2>
          
					<p>Contact us for supporting CG Extreme in any way</p>
          <br />
          <p>Seven Media Produtora</p>
          <p> Tel.: +55 21 2509-6323</p>
          <p style="padding-left:37px;">+55 21 6931-9192</p>
          <p> E-mail: comercial@cgextreme.com.br</p>
        </div><!--close informacoes-->
				
				<div class="maisInformacoes">
        	<h2> PRESS </h2>
          
					<p>Talk to our press office and get interviews, materials and information</p>
					<Br/>
          <p>Alexandre Fontoura</p>
          
          <p>+55 21 9124-6924 /+55 21 9757-5828</p>
          <p>+55 21 2610-3075 /+55 21 3027-2998 (Office)</p>
          <p>afontoura@gmail.com</p>
          <p>Alexandre@tuiuiu.com</p>
        </div><!--close informacoes-->
        
		<div class="clear"></div>
		</div><!--close content-->
		
<?php include('include/rodape.php'); ?>
	</body>
</html>