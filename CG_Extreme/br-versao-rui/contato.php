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
						<p><span class="textoImportante">Dúvidas ou sugestões?</span> Teremos o maior prazer em atender <span class="textoImportante">você!</span></p>
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
								<input type="text" name="nome" placeholder="Nome" class="userInput_name">
							</div><!--close form input-->
						</div><!--close formSection-->
						
						<div class="formSection">
							<div class="formInput">
								<input type="text" name="email" placeholder="E-mail" class="userInput_email">
							</div><!--close form input-->
						</div><!--close formSection-->
						
						<div class="formSection">
							<div class="formInput">
								<input type="text" name="assunto" placeholder="Assunto" class="userInput_subject">
							</div><!--close form input-->
						</div><!--close formSection-->
						
						<div class="formSection">
							<div class="formInput">
								<textarea placeholder="Mensagem" name="mensagem" class="userInput_comment"></textarea>
							</div><!--close form input-->
						</div><!--close formSection-->
						
						<input type="submit" name="BTEnvia" value="Enviar" class="blueBtn sendContactFormBtn">
					</form> 	
				</div><!--close contactForm-->		
				
				<div class="maisInformacoes">
        	<h2> MAIS INFORMAÇÕES </h2>
          
					<p>contato@cgextreme.com.br</p>
					<p>21 2509-6323 / 21 2221-5502</p>
        </div><!--close informacoes-->
				
				<div class="maisInformacoes">
        	<h2> APOIO E PATROCÍNIO </h2>
          
					<p>Entre em contato conosco e aproveite a oportunidade de inserir a sua marca neste espetáculo!</p>
          <br />
          <p>Seven Media Produtora</p>
          <p> Tel.: +55 21 2509-6323</p>
          <p style="padding-left:37px;">+55 21 6931-9192</p>
          <p> E-mail: comercial@cgextreme.com.br</p>
        </div><!--close informacoes-->
				
				<div class="maisInformacoes">
        	<h2> IMPRENSA </h2>
          
					<p>Entre em contato com nossa assessoria de imprensa para agendar entrevistas, colher materiais e informações sobre o evento</p>
					<Br/>
          <p>Alexandre Fontoura</p>
          
          <p>21 9124-6924 / 9757-5828</p>
          <p>21 2610-3075 / 3027-2998 (Escritório)</p>
          <p>afontoura@gmail.com</p>
          <p>alexandre@tuiuiu.com</p>
        </div><!--close informacoes-->
        
				<div class="clear"></div>
			</div><!--close wrapper-->
<?php include('include/rodape.php'); ?>
		</div><!--close content-->
	</body>
</html>