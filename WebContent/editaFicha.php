<?php
	
	include("login.php");
	loginCheck();
	
	$mensagem = $_POST['editaFicha'];
	file_put_contents($_SESSION['caminhoFicha'], $mensagem);
	unset($_SESSION['caminhoFicha']);
	header("location:mesa.xhtml");
	

?>
