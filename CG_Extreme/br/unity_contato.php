<?php include('metas.php'); ?>
<body>
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
	$email_assunto = "Contato CG Extreme - Capeonato unity";
	//====================================================
 
 
	//Variaveis de POST, Alterar somente se necessário
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
 	$mensagem = $_POST['mensagem'];
 	$portifolio = $_POST['portifolio'];
 	$gropro = $_POST['gropro'];
 	$group1 = $_POST['group1'];
	//====================================================
 
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n"; 
	$email_conteudo .=  "Telefone = $telefone \n";
	$email_conteudo .=  "portifolio = $portifolio \n";
	
	foreach($_POST["gropro"] as $gropro)
	{
	
	$email_conteudo .=  "Profissão =" . $gropro . "\n";

	}
	
	$email_conteudo .=  "Deseja abrir sua produtora ? = $group1 \n \n \n";
	$email_conteudo .=  "Mensagem = $mensagem \n";

 	//====================================================
 
	//Seta os Headers (Alerar somente caso necessario)
	//====================================================
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
 
 
	//Enviando o email
	//====================================================
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
		echo "</b><span class='sucessEmail'>E-Mail enviado com sucesso!</span></b>"; 
	}
  	else{
		echo "</b><span class='sucessEmai'l>Falha no envio do E-Mail!</span></b>";
	}
	//====================================================
}	
?>


<div id="contentUnityContact">
<div class="content">
					<div class="contactForm">

				<form action="<? $PHP_SELF; ?>" method="POST">

					<div class="formSection">
					<p class="TextFormPavilhaoUnity">Nome</p>
						<div class="formInput">
							<input type="text" name="nome" placeholder="Nome" class="userInput_name">
						</div><!--close form input-->
					</div><!--close formSection-->
					
					<div class="formSection">
					<p class="TextFormPavilhaoUnity">E-mail</p>
						<div class="formInput">
							<input type="text" name="email" placeholder="E-mail" class="userInput_email">
						</div><!--close form input-->
					</div><!--close formSection-->
					
					
					
						<div class="formSection">
						<p class="TextFormPavilhaoUnity">Telefone</p>
						<div class="formInput">
							<input type="text" name="telefone" placeholder="" class="userInput_subject">
						</div><!--close form input-->
					</div><!--close formSection-->
					

					<div class="formSectionPavilhao">
					<p class="TextFormPavilhaoUnity">Link de portifolio</p>
						<div class="formInputPavilhao">
							<textarea placeholder="" name="portifolio" class="userInput_comment"></textarea>
						</div><!--close form input-->
					</div><!--close formSection-->
					
					
					
					<br>
				<fieldset>
			
              	  <legend class="TextFormPavilhaoUnity">Sua profissão ?</legend>
                        <input type="checkbox" name="gropro[]" value="GameDesign" /><span class="TextFormPavilhaoUnity2">Game Design</span><br />
                        <input type="checkbox" name="gropro[]" value="Programador" /><span class="TextFormPavilhaoUnity2">Programador</span><br />
                        <input type="checkbox" name="gropro[]" value="Artista" /><span class="TextFormPavilhaoUnity2">Artista</span><br />
               </fieldset>
               <br>
               	<fieldset>
              	  <legend class="TextFormPavilhaoUnity">Deseja abrir sua produtora ?</legend>
                        <input type="radio" name="group1" value="sim" /<span class="TextFormPavilhaoUnity2">sim</span><br />
                        <input type="radio" name="group1" value="nao" /><span class="TextFormPavilhaoUnity2">não</span><br />
                </fieldset>
                <br>
                						<div class="formSection">
                						<p class="TextFormPavilhaoUnity">Mensagem</p>

							<div class="formInput">
								<textarea placeholder="Mensagem" name="mensagem" class="userInput_comment"></textarea>
							</div><!--close form input-->
						</div><!--close formSection-->
        
        
			
			
					<input type="submit" name="BTEnvia" value="Enviar" class="blueBtn sendContactFormBtn">
				</form> 				
					
					</div><!--close contactForm-->
				</div><! close content -->
				
</div> <!-- close div unity contatc -->

</body>