<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="sts_pet";
	
	//Criar a conexao
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		
	}	
	
?>