<?php require_once('funcao.php'); ?>
<!doctype html>
<html>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
<title>Documento sem título</title>
<link rel="stylesheet" href="style/main.css">


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

if (form.empresa.value=="" || form.empresa.value.length < 3) {
alert("Preencha o nome da empresa corretamente.");
form.empresa.focus();
return false;
}

if (form.telefone.value=="") {
		alert("Preencha o telefone corretamente.");
		form.telefone.focus();
		return false;
		}
		
if (form.datanasc.value=="" || form.datanasc.value.length != 10) {
			alert("Preencha a data de nascimento corretamente ou coloque as barras '/' ");
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

	<div id="Topo">
		<span>Credenciamento</span>
		<img src="img/cg-extreme-logo.png" alt="cg-extreme-logo" width="71" height="55">
	</div><!-- close topo -->
	
	
	<form method="POST" action="" enctype="multipart/form-data" onsubmit="return valida(this);">
		<span class="DadosPrenS">Nome:</span>
				<br /> 
			<input type="text" name="nome" class="InputCadastro">
				<br />
				
		<span class="DadosPrenS">Numero do Ingresso:</span>
				<br />
			<input type="text" name="num_ingresso" class="InputCadastro">
				<br />	
				
		<span class="DadosPrenS">Data de nascimento:</span>
				<br />
			<input type="text" name="datanasc" class="InputCadastro">
				<br />
				
		<span class="DadosPrenS">Sexo:</span> 
				<br />
			<input type="radio" value="masculino" name="sexo">Masculino <br />
			<input type="radio" value="feminino" name="sexo">Feminino <br />
				<br />	
				
		<span class="DadosPrenS">Rede social (Facebook):</span>
				<br />
			<input type="text" name="rede_social" class="InputCadastro">
		 		<br />						

		<span class="DadosPrenS">E-mail:</span>
				<br />
			<input type="text" name="email" class="InputCadastro">
				<br />
			
		<span class="DadosPrenS">Empresa:</span>
				<br />
			<input type="text" name="empresa" class="InputCadastro">
				<br />

		<span class="DadosPrenS">RG:</span>
				<br />
			<input type="text" name="rg" class="InputCadastro">
				<br />
		<span class="DadosPrenS">Foto:</span>
				<br />
			<input name="arquivo" type="file" >
				<br />
			
		<span class="DadosPrenS">Telefone:</span>
					<br />
				<input type="text" name="telefone" class="InputCadastro">
			  		<br />		
				
		<span class="DadosPrenS">Onde comprou seu ingresso?</span>
				<br />
			<input type="text" name="ingresso" class="InputCadastro">
				<br />

		<input type="submit" value="enviar" >
	</form>


<?php


	error_reporting(0);
		
	
	
	
	
	
	conexao(); // conecta ao banco de dados
		
		
		//variaveis
	$nome = $_POST['nome'];
	$tel = $_POST['telefone'];
	$email = $_POST['email'];
	$empresa = $_POST['empresa'];
	$data_nasc = $_POST['datanasc'];
	$sexo = $_POST['sexo'];
	
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
						  $dir = "sistema_credenciamento/fotos/";
						  
								if (!file_exists($dir)){ //seta permissão de diretório
									mkdir($dir, 0755);  
								}
						  
						  $caminho = $dir.$novonome;
						  move_uploaded_file($arquivo['tmp_name'],$caminho);


//código para inserir na tabela
	  $sql_inserir = "INSERT INTO vip (nome, telefone, email, empresa, data_nasc, sexo, rede_social, rg, foto, ingresso, num_ingresso) VALUES ('$nome' , '$tel' , '$email' , '$empresa' , '$data_nasc' , '$sexo' , '$rede_social' , '$rg' , '$novonome' , '$ingresso', '$num_ingresso')";

    

	
	inserir($sql_inserir); // função para verificar se funcionou os dados na tabela


						  
						  echo '<script type="text/javascript">alert("Arquivo enviado!")</script>';
						  echo '<meta http-equiv="refresh" content="1; url=vip.php" />';  

					
					} 


	

	
?>


</body>
</html>