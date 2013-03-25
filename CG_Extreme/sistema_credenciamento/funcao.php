<?php
//função para conexão do bd
		function conexao(){
			$banco = 'cgextreme';
			$usuario = 'cgextreme';
			$senha = 's3v3nrh2413';
			$host = 'mysql.cgextreme.com.br';
			$conn = mysql_connect($host, $usuario, $senha) or die ('erro na conexao' . mysql_error());
			mysql_select_db($banco) or die ('erro ao conecatar ao banco de dados: ' . mysql_error());
			mysql_query("SET NAMES 'utf8'");
			mysql_query("SET character_set_connection=utf8");
			mysql_query("SET character_set_clients=utf8");
			mysql_query("SET character_set_results=utf8");
		}
		
	
	
	
	//função para verificar a inserção na tabela
	function inserir($sql){
			if(mysql_query($sql)){
				return TRUE;
				echo "dados cadastrados";
				} else {
					return FALSE;}
		}
		
		
	function selecionar($sql){
		return mysql_query($sql);
		}
		
?>