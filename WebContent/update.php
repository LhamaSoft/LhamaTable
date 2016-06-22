<?php 
	include("login.php");
	loginCheck();

	//verifica se o usuário e senha existem
	$novoUser = $_POST['novoUser'];
	$novoEmail = $_POST['novoEmail'];
	$novaSenha = MD5($_POST['novaSenha']);
	$senha = MD5($_POST['inputPassword']);
	$email = $_POST['inputEmail'];
	$sql = "UPDATE usuarios
			SET email = '".$novoEmail."',  senha = '".$novaSenha."', NomeUsuario = '".$novoUser."'
			WHERE email = '".$email."' AND senha = '".$senha."' 
			LIMIT 1";
	$query = mysql_query($sql) or die(mysql_error()) ;
	$result = mysql_affected_rows();
	if($result == 1)
	{
		session_destroy();
		header("location:index.xhtml");
	}
	else
	{
		echo $result;
		echo "<script language='javascript' type='text/javascript'>alert('Suas credencias nao conferem.');window.location.href='perfil.xhtml';</script>";
	}
?>