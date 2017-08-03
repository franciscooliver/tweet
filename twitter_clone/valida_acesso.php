<?php

	session_start();
	require_once("db.class.php");

	$usuario = $_POST["usuario"];
	//criptografa a senha do usuario
	$senha =  md5($_POST["senha"]);

	$objDb = new db();
	$link = $objDb->conecta_mySql();

	$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){

		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['usuario'])){

			$_SESSION['usuario'] = $dados_usuario['usuario'];
			$_SESSION['email'] = $dados_usuario['email'];
			
			header('Location: home.php');

		}else{
			header('Location: index.php?erro=1');
		}

	} else {

		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
	}

	
	
?>