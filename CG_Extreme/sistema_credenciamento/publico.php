<?php require_once('funcao.php'); ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
<title>Sistema De Credenciamento - Cadastrar</title>
<link rel="stylesheet" href="style/main.css">
<link rel="stylesheet" href="style/Menu.css">
	
	<!-- fonts used -->
	<link href='http://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Allerta+Stencil' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Keania+One' rel='stylesheet' type='text/css'>


<script>
function valida(form) {

if (form.nome.value=="") {
alert("Preencha o nome corretamente.");
form.nome.focus();
return false;
}

var filtro_mail = /^.+@.+\..{2,3}$/
if (!filtro_mail.test(form.email.value) || form.email.value=="") {
alert("Preencha o e-mail corretamente.");
form.email.focus();
return false;
}

if (form.habilidade.value=="" || form.habilidade.value.length < 8) {
alert("Preencha o campo Habilidade corretamente.");
form.habilidade.focus();
return false;
}

if (form.telefone.value=="") {
alert("Preencha o telefone corretamente.");
form.telefone.focus();
return false;
}

if (form.datanasc.value=="" || form.datanasc.value.length != 10) {
alert("Preencha a data de nascimento corretamente.");
form.datanasc.focus();
return false;
}

if (form.sexo[0].checked==false && form.sexo[1].checked==false) {
alert("Selecione o sexo.");
return false;
}

if (form.rg.value=="" || form.rg.value.length != 10) {
		alert("Preencha o RG corretamente.");
		form.rg.focus();
		return false;
		}
		
if (form.ingresso.value=="") {
		alert("Preencha o nome do lugar onde comprou o ingresso corretamente.");
		form.ingresso.focus();
		return false;
		}
		
if (form.num_ingresso.value=="") {
		alert("Preencha o Numero do Ingresso corretamente.");
		form.num_ingresso.focus();
		return false;
		}

		if (form.arquivo.value=="") {
		alert("Coloque a foto.");
		form.arquivo.focus();
		return false;
		}
}
</script>



</head>

<body>

	<div id="Alternativo">
		<?php include("include/menu.php")?>
	</div><!-- close Alternativo -->
	
	<div id="Topo">
		<span>Credenciamento</span>
		<img src="img/cg-extreme-logo.png" alt="cg-extreme-logo" width="71">
	</div><!-- close topo -->

	<div id="Topo2">
		<span>
			<br />Preencha seus Dados
		</span>
	</div><!-- close Topo2 -->
	
	<div id="content">
	<br />
<form method="POST" action="" enctype="multipart/form-data" onsubmit="return valida(this);">



	<div id="ContentPublic">
		<div id="PublicLeft">
			<span class="TextoPadraoTm2 TituloDados">Nome:</span>
				<br /> 
			<input type="text" class="DadosPren" name="nome" placeholder="Seu Nome" class="InputCadastro">
				<br />
				
		<span class="TextoPadraoTm2 TituloDados" >Numero do Ingresso:</span>
				<br />
			<input type="text" class="DadosPren" placeholder="Ex:1234567890" name="num_ingresso" class="InputCadastro">
				<br />	
				
		<span class="TextoPadraoTm2 TituloDados">Data de nascimento:</span>
				<br />
			<input type="text" class="DadosPren" placeholder="Ex: 19/04/1994" name="datanasc" class="InputCadastro">
				<br />
				
		<span class="TextoPadraoTm2 TituloDados">Sexo:</span> 
				<br />
			<input type="radio" value="masculino" name="sexo" class="TextoPadraoTm2">Masculino <br />
			<input type="radio" value="feminino" name="sexo" class="TextoPadraoTm2">Feminino <br />
				<br />	
				
		<span class="TextoPadraoTm2 TituloDados">Rede social (Facebook):</span>
				<br />
			<input type="text" class="DadosPren" placeholder="Ex:Facebook/SeuPerfil123" name="rede_social" class="InputCadastro">
		 		<br />
		 </div><!-- close PublicLeft -->


		 <div id="PublicRight">

			<span class="TextoPadraoTm2 TituloDados">E-mail:</span>
					<br />
				<input type="text" class="DadosPren" name="email" class="InputCadastro" placeholder="email@bláblá.com.br">
					<br />
				
			<span class="TextoPadraoTm2 TituloDados">Habilidade:</span>
					<br />
				<input type="text" class="DadosPren" name="habilidade" placeholder="Ex: Programação Web" class="InputCadastro"><br />
					<br />
	
			<span class="TextoPadraoTm2 TituloDados">RG:</span>
					<br />
				<input type="text" class="DadosPren" name="rg" class="InputCadastro" placeholder="Ex: 0000000000">
					<br />
			<span class="TextoPadraoTm2 TituloDados">Foto:</span>
					<br />
				<input name="arquivo" type="file" >
					<br />		
			<span class="TextoPadraoTm2 TituloDados">Telefone:</span>
						<br />
					<input type="text" class="DadosPren" name="telefone" class="InputCadastro">
				  		<br />		
					
			<span class="TextoPadraoTm2 TituloDados">Onde comprou seu ingresso?</span>
					<br />
				<input type="text" class="DadosPren" name="ingresso" class="InputCadastro">
					<br /><br />
					
			</div><!-- close PublicRight -->		

		<input type="submit" value="" class="ButtonConsulta">
	</form>
	
	</div><!-- close content -->


<?php


	error_reporting(0);
		

	
	conexao(); // conecta ao banco de dados
		
	$nome = $_POST['nome'];
	$tel = $_POST['telefone'];
	$email = $_POST['email'];
	$data_nasc = $_POST['datanasc'];
	$sexo = $_POST['sexo'];
	$habilidade = $_POST['habilidade'];
	$rede_social = $_POST['rede_social'];
	$rg = $_POST['rg'];
	$ingresso = $_POST['ingresso'];
	$num_ingresso = $_POST['num_ingresso'];
	
		
$arquivo = $_FILES['arquivo'];
					if ($arquivo['type'] == "image/jpeg" || $arquivo['type']== "image/pjpeg")
						{
								   
									    if (!empty($arquivo["name"])) {
		 
											// Largura máxima em pixels
											$largura = 670;
											// Altura máxima em pixels
											$altura = 720;
											// Tamanho máximo do arquivo em bytes
											if ($arquivo['size']>900000)
											  {
												exit('Arquivo muito grande. Tamanho máximo permitido 900kb. O arquivo enviado contém '.round($arquivo['size']/1024).'kb');  
											  }
									   
										   
										}		
							  if ($arquivo['size']>900000) //verifica se o arquivo tem mais de 500kb
							  {
								exit('Arquivo muito grande. Tamanho máximo permitido 900kb. O arquivo enviado contém '.round($arquivo['size']/1024).'kb');  
							  }
						  
						  $novonome = md5(mt_rand(1,10000).$arquivo['name']).'.jpg'; //nome em md5
						  $dir = "fotos/";
						  
								if (!file_exists($dir)){ //seta permissão de diretório
									mkdir($dir, 0755);  
								}
						  
						  $caminho = $dir.$novonome;
						  move_uploaded_file($arquivo['tmp_name'],$caminho);


//código para inserir na tabela
	  $sql_inserir = "INSERT INTO publico (nome, telefone, email, habilidade, data_nasc, sexo, rede_social, rg, foto, ingresso, num_ingresso) VALUES ('$nome' , '$tel' , '$email' , '$habilidade' , '$data_nasc' , '$sexo' , '$rede_social' , '$rg' , '$novonome' , '$ingresso', '$num_ingresso')";

    

	
	inserir($sql_inserir); // função para verificar se funcionou os dados na tabela


						  
						  echo '<script type="text/javascript">alert("Arquivo enviado!")</script>'; //js de alerta de envio
						  echo '<meta http-equiv="refresh" content="1; url=publico.php" />';  //link para redirecionamento

					
					} 

	
?>

<div id="Rodape"></div><!-- close Rodape -->
</body>
</html>