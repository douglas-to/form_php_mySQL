<?php

	include_once("conexao.php"); 

	if(isset($_POST['userName']) || isset($_POST['userEmail'])){

		$name = $_POST['userName'];
		$email = $_POST['userEmail'];
		$password = password_hash($_POST['userPassword'], PASSWORD_DEFAULT);

		$clearInputName = $mysqli->real_escape_string($name);
		$clearInputEmail = $mysqli->real_escape_string($email);
		$clearInputPassword = $mysqli->real_escape_string($password);
		
		$mysqli->query("INSERT INTO users (name, email, password) VALUES('$name', '$email', '$password')");	
	}

	header('Location: ../index.php');
?>