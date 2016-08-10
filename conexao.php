<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "academia";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
	// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
	
?>
