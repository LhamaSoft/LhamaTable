<?php
	include("login.php");
	loginCheck();
	

	$mensagem = $_POST['pvdMensagem'];
	$destID = $_POST['pvdID'];
	if($mensagem != "")
	{
	$sql = "INSERT INTO privadoMensagens (mensagem, destID, jogador)
			VALUES ('".$mensagem."', '".$destID."', '".$_SESSION['ID']."')";
	$query = mysql_query($sql) or die(mysql_error());
	header("location:perfil.xhtml");
	}
?>