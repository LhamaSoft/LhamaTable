<?php
	require_once("login.php");
	$email = $_POST['inputEmail'];
	$senha = $_POST['inputPassword'];
	loginDo($email, $senha);	
?>