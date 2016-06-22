<?php
	include("login.php");
	loginCheck();
	
	if(isset($_POST['mensagem']))
	{
		$mensagem = $_POST['mensagem'];
	}
	else if(isset($_POST["d4"]))
	{
		$dado = rand(1, 4);
		$mensagem = "Rolou o D4 e conseguiu um: $dado";
	}
	else if(isset($_POST["d6"]))
	{
		$dado = rand(1, 6);
		$mensagem = "Rolou o D6 e conseguiu um: $dado";
	}
	else if(isset($_POST["d8"]))
	{
		$dado = rand(1, 8);
		$mensagem = "Rolou o D8 e conseguiu um: $dado";
	}
		else if(isset($_POST["d10"]))
	{
		$dado = rand(1, 10);
		$mensagem = "Rolou o D10 e conseguiu um: $dado";
	}
		else if(isset($_POST["d12"]))
	{
		$dado = rand(1, 12);
		$mensagem = "Rolou o D12 e conseguiu um: $dado";
	}
	else if(isset($_POST["d20"]))
	{
		$dado = rand(1, 20);
		$mensagem = "Rolou o D20 e conseguiu um: $dado";
		if($dado == 1)
		{
			$mensagem = "$mensagem . ERROU!";
		}
		else if($dado == 20)
		{
			$mensagem = "$mensagem. Bem Jogado!";
		}
	}
	else if(isset($_POST["d100"]))
	{
		$dado = rand(1, 100);
		$mensagem = "Rolou o D100 e conseguiu um: $dado";
	}
	
	if($mensagem != "")
	{
	$sql = "INSERT INTO chatmensagens (mensagem, mesaID, jogador)
			VALUES ('".$mensagem."', '".$_SESSION['mesaID']."', '".$_SESSION['ID']."')";
	$query = mysql_query($sql) or die(mysql_error());
	header("location:mesa.xhtml");
	}
?>