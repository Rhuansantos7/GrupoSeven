<?php require_once('funcao.php'); ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
<title>Sistema De Credenciamento - Procurar</title>
<link rel="stylesheet" href="style/main.css">
<link rel="stylesheet" href="style/Menu.css">
	
	<!-- fonts used -->
	<link href='http://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Allerta+Stencil' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Keania+One' rel='stylesheet' type='text/css'>

</head>

<body>


<div id="Alternativo">
<?php include("include/menu.php")?>
</div><!-- close Alternativo -->

	<div id="Topo">
		<span>Credenciamento</span>
		<img src="img/cg-extreme-logo.png" alt="cg-extreme-logo" width="71">
	</div><!-- close topo -->
	
	
	
	<div id="PesquisaRg">
	
	<div class="ColRg">
		<form method="POST" action="" enctype="multipart/form-data">
			<span class="TextoPadrao">R.G.</span>:<input class="inputRg" type="text" placeholder="Digite o seu RG" name="rg">
	</div><!-- close ColRg -->
	
	<div class="ColRg">
		<select name="banco" class="SelectOption">
			<option value="publico">Publico
			<!-- <option value="imprensa">Imprensa
			<option value="vip">Vip -->
		</select>	
	</div><!-- close ColRg -->
	
	<div class="ColRg">
		<input type="submit" value="" class="ButtonSearch" name="envio" src="img/ir.png" alt="ir" width="34" height="26">
	</div><!-- close ColRg-->
	
	

	</div><! -- close pesquisaRg -->

<div id="content">

<?php
if(isset($_POST['envio'])){
error_reporting(0);
conexao();

selecionar($sql);

$rg = $_POST['rg'];
$banco = $_POST['banco'];

if(isset($_POST['envio'])){
	$sql = mysql_query("SELECT * FROM $banco WHERE rg =".$_POST['rg']);
	 
	if($rg>0) {
	 
		   // Exibe as informações de cada usuário
		   while ($usuario = mysql_fetch_object($sql)) {
		   	// Exibimos a foto
		   	
		   	
	echo "<div id='ContentDados'>";
		   	
		echo"<div id='ContentRight'>";	
		   	
	   	
	   	echo "<div id='FotoPerfil'><br /><br /> <img src='fotos/".$usuario->foto." 'alt='Foto de exibição'  width='124' height='120'/></div>";
	   	// Exibimos o nome e email
	   	echo "<span class='TextoPadraoTm2'><b></b></span>
	   	 <span class='DadosPrenS'>" . $usuario->nome ."</span> <br /><br/>";
		   
		   
	   
	   	echo "<span class='TextoPadraoTm2'><b>Numero do Ingresso:</b></span>
	   		<span class='DadosPren'>" . $usuario->num_ingresso . "</span><br />";
		  

		   	
	   	echo "<span class='TextoPadraoTm2'><b>Data Nascimento:</b></span>
			<span class='DadosPren'>" . $usuario->data_nasc . "</span><br />";

		echo "<span class='TextoPadraoTm2'><b>sexo:</b><br /></span>
			<span class='DadosPren'>" . $usuario->sexo . "</span><br />";
					
			echo"</div>";// close ContetRight
				
				
				
				
			echo"<div id='ContentLeft'>";	
				
				
				echo "<span class='TextoPadraoTm2'><b>Rede Social:</b><br /></span>
					<span class='DadosPren'>" . $usuario->rede_social . "</span><br />";
					
					
				echo "<span class='TextoPadraoTm2'><b>RG:</b><br /></span>
					<span class='DadosPren'>" . $usuario->rg . "</span><br />";
					
				echo "<span class='TextoPadraoTm2'><b>Telefone:</b><br /></span>
					<span class='DadosPren'>" . $usuario->telefone . " </span><br />";
			   		
				echo "<span class='TextoPadraoTm2'><b>Onde comprou o ingresso ?</b><br /> </span>
					<span class='DadosPren'>" . $usuario->ingresso . "</span><br /><br />";
			
			echo"</div>";// close ContenLeft
			
			
			echo "<a href='select.php'><input type='' value='' class='ButtonConsulta'></a>";
			
			
			
			echo"</div>";// close ContentDados
			
			
		}
	}
  }
}
	
?>


</form>

</div><!-- close div content -->
<div id="Rodape"></div><!-- close Rodape -->
</body>
</html>