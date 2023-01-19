<?php 

	if(!isset($_SESSION)){
		session_start();
	}

	if(!isset($_SESSION['id'])){

		die("Você não pode acessar está pagina, porque você não está logado. <p><a href=\"register.php\">Criar conta</a></p>");
	}
?>


