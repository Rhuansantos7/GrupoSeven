<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
#container{
	width:1000px; /* Largura do Container */
	height:800px;
	margin:auto; /* Centralizador */
} 
#formulario_contato{ width:700px; height:300px; margin-left:30px;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gabriela Rocha</title>
</head>
<link rel="stylesheet" type="text/css" href='css/contato.css'>
<?php include('includes/menu.php'); ?>
<div id="container">	
	<?php include('includes/logo.php'); ?>
    
    <div id="contato"></div>
    <div id="wrap"></div>
    <div id="wrap-text">
    <p>CONVIDE A GABRIELA ROCHA PARA CULTOS E APRESENTAÇÕES</p>
    </div>
    
         <div id="formulario_contato">	
    
<?php
if (isset($_POST['BTEnvia'])){
 
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 	//====================================================
	$email_remetente = "contato@gabrielarocha.com.br"; // deve ser um email do dominio
	//====================================================
 
 
	//Configurações do email, ajustar conforme necessidade
	//====================================================
	$email_destinatario = "contato@gabrielarocha.com.br"; // qualquer email pode receber os dados
	$email_reply = "$email";
	$email_assunto = "Contato formmail";
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
    <p class="textos">
        Nome:<br />
        <input type="text" class="form" size="35" name="nome">
    </p>
 
        
              <label for="email" class="textos" ><p>E-mail: </p>
              </label><input id="email" class="form" type=email required name=email>
   
    </p>
 
    <p class="textos">
        Telefone:<br />
        <input type="text" class="form" size="35" name="telefone">
    </p>
 
<p class="textos">
        Mensagem:<br />
    <textarea name="mensagem" class="form" cols="35" rows="7"></textarea>
  </p>
 <br />
    <p>
        <input type="submit" style="cursor:pointer;" name="BTEnvia" value="Enviar">
        <input type="reset" style="cursor:pointer;" name="BTApaga" value="Apagar">
    </p>
    
    </div>
    
    
   
    	</div>
   
    
</div>
<br><br><br><br><br><br><br><br>
<?php include('includes/rodape.php'); ?>
</body>
</html>