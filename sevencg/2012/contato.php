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

<!-- pricipal-->

<center>
 <div id="topo-contatoimg"> </div>
 </div>
</center>
<div id="formulario-de-contato">
 <div id="contato-txt"> FORMULÁRIO DE CONTATO</div>
</div>
<div id="formulario-contato">
 <style>


</style>
 <div id="box_contato0">
  <div id="box_contato2">
   <div id="box_barra_contato2">
    <div id="barra_contato2a"></div>
    <div id="barra_contato2b" class="txt_barra"></div>
   </div>
   <div id="linha_contato2a"></div>
   <div id="bg_empresa">
    <div id="bg_empresa_txt">
     <style type="text/css"> 

</style>
     <script type="text/javascript" src="js/jquery.maskedinput.js"></script> 
     <script type="text/javascript"> 
	$(document).ready(function(){
		$("#idade").mask("99");
		$("#telefone").mask("(99) 9999-9999");
	});
	function verifica()
	{
			if(contato.nome.value == "")
			{
			alert("Preencha seu nome!");
			return false;
			}
			if( contato.email.value=="" || contato.email.value.indexOf('@') == -1 || contato.email.value.indexOf('.')== -1)
			{
			alert("Preencha seu email!");
			return false;
			}
			if(contato.telefone.value == "")
			{
			alert("Preencha seu telefone!");
			return false;
			}
			if(contato.unidade.value == "Nenhuma")
			{
				alert("Diga qual a sua unidade!");
				return false;		
			}
	}
</script>
     <?php
if (isset($_POST['BTEnvia'])){

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$idade = $_POST['idade'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$bairro = $_POST['bairro'];
	$unidade = $_POST['unidade'];
	$assunto = $_POST['assunto'];
 	$mensagem = $_POST['msg'];
 
	$email_remetente = $email;
 
	$email_destinatario = "contatosite@sevencg.com.br"; 
	$email_reply = $email;
	$email_assunto = "Contato Seven C.G.";

	$email_conteudo = "<h3>Nome:</h3> $nome ($email) \n"; 
	$email_conteudo .=  "<h3>Telefone:</h3> $telefone \n";
	$email_conteudo .=  "<h3>Idade:</h3> $idade \n";
	$email_conteudo .=  "<h3>Estado:</h3> $estado ";
	$email_conteudo .=  "<h3>Cidade:</h3> $cidade ";

	$email_conteudo .=  "<h3>Bairro:</h3> $bairro \n";
	$email_conteudo .=  "<h3>Unidade:</h3> $unidade \n";
	$email_conteudo .=  "<h3>Assunto:</h3> $assunto \n";
	$email_conteudo .=  "<h3>Mensagem:</h3> $mensagem \n";

	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	

	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
		echo "<p style='padding:20px'>E-Mail enviado com sucesso!</p><p><a class='laranja' href='?pag=contato'>Voltar</a></p>"; 
	}
  	else{
		echo "<p></b>Falha no envio do E-Mail!</b></p><p><a class='laranja' href='?pag=contato'>Voltar</a></p>";
	}
	//====================================================
}else{ echo '
<form action="?pag=contato" method="post" class="formu" name="contato" onSubmit=" return verifica()">
<div id="box_form">
<div id="texto">Nome *</div><div id="campo"><input name="nome" id="nome" type="text"/></div>
<div id="texto">E-mail *</div><div id="campo"><input name="email" id="email" type="text"/></div>
<div id="texto3">Telefone *</div><div id="campo3"><input name="telefone" id="telefone" type="text"/></div>
<div id="texto3">Idade</div><div id="campo3"><input name="idade" id="idade" type="text"/></div>
<div id="texto3">Estado</div><div id="campo3"><input name="estado" id="estado" type="text"/></div>
<div id="texto3">Cidade</div><div id="campo3"><input name="cidade" id="cidade" type="text"/></div>
<div id="texto3">Bairro</div><div id="campo3"><input name="bairro" id="bairro" type="text"/></div>
<div id="texto3">Unidade*</div><div id="campo3"><select name="unidade" id="unidade">
  <option value="Nenhuma" >Selecione Uma unidade</option>
  <option value="Copacabana">Copacabana | RJ</option>
  <option value="SaoGoncalo">S&atilde;o Gon&ccedil;alo | RJ</option>
  <option value="Madureira">Madureira | RJ</option>
  <option value="Caxias">Duque de Caxias | RJ</option>
  <option value="Nova Iguacu">Nova Igua&ccedil;u | RJ</option>
  <option value="Santa Rita">Santa Rita | SP</option>
  <option value="Centro Seven Game">Centro - Seven Game | RJ</option>
  <option value="Niteroi">Niteroi | RJ</option>
  <option value="Belo Horizonte">Belo Horizonte | MG</option>
  <option value="Corporate">Centro - Seven Corporate | RJ</option>
  <option value="Campo Grande">Campo Grande | RJ</option>
    <option value="Brasília">Brasília | DF</option>
</select></div>
<div id="texto">Assunto</div><div id="campo"><input name="assunto" id="assunto" type="text"/></div>
<div id="campo2">Mensagem<br/><textarea name="msg" cols="45" rows="6"></textarea></div>

<div id="texto"></div><div id="campo4">
 <br> <p class="branco"><input type="submit" name="BTEnvia" value="Enviar" />  * Campos obrigatórios</p>
</div>
</div>

</form>
';}	
?>
    </div>
   </div>
   <div id="linha_contato2a"></div>
  </div>
 </div>
</div>

<!-- fim da principal --> 

<!-- rodape -->
<?php include('include/rodape.php');?>
<!-- fim do rodape --> 

<!-- todos os scripts -->
<?php include('include/scripts.php');?>

<!-- fim dos scripts -->

</body>
</html>
