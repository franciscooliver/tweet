<?php

	
	require_once("db.class.php");

	
	$objDb = new db();
	$link = $objDb->conecta_mySql();

	$sql = "SELECT * FROM usuarios ";

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){



		$dados_usuario = array();
		//associa os registros de cada linha ao array
		while($linha = mysqli_fetch_array($resultado_id,MYSQLI_ASSOC)){
			$dados_usuario[] = $linha;
		}

		foreach ($dados_usuario as $usuarios) {
			echo($usuarios['email']);
			echo '<br> <br>';
		}
		

	} else {

		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
	}

?>