<?php

	class db{

		private $host = "localhost";
		private $usuario = "root";
		private $senha = "";
		private $db = "twiter_clone";

		public function conecta_mySql(){
			//conecta ao banco de dados
			$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->db); 
			//codificacao do charset do php com o banco de dados
			mysqli_set_charset($con, 'utf8');

			//verifica se houve erro na conexao
			if(mysqli_connect_errno()){
				echo "Erro ao conectar com o BD mysql: ".mysqli_connect_error();
			}

			return $con;
		}

	}

?>