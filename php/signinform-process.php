<?php 	

	include_once("conexao.php");

	if(isset($_POST['userEmail']) || isset($_POST['userPassword'])){

		$email = $_POST['userEmail'];
		$password = $_POST['userPassword'];
  
		$clearInputEmail = $mysqli->real_escape_string($email);
		$clearInputPassword = $mysqli->real_escape_string($password);				

		$sql_code = "SELECT * FROM users WHERE email = '$email'";
		$sql_exec = $mysqli->query($sql_code) or die('Erro: ' . $mysqli->error);

		$amount_data = $sql_exec->num_rows;

		if($amount_data == 1){
			
			$user = $sql_exec->fetch_assoc();
			if(password_verify($password, $user['password'])){
				session_start();
			}

			$_SESSION['id'] = $user['id'];
			$_SESSION['userName'] = $user['name'];

			header('Location: ../dashboard.php');

		}else{
			echo "falha";
		}

	}

?>
