<?php
	include("login.php");
	loginCheck();
	
	$nome = $_POST['nomePesquisa'];	
	$sql = "SELECT NomeUsuario, email, Nascimento
		    FROM usuarios
			WHERE NomeUsuario = '".$nome."' 
			LIMIT 1";
	$query = mysql_query($sql) or die(mysql_error()) ;
	$result = mysql_fetch_assoc($query);
	if(!$result)
	{
		echo "Não existe o usuáro presquisado";
	}
	$_SESSION['usuarioNome'] = $result['NomeUsuario'];
	$_SESSION['email'] = $result['email'];
	$_SESSION['nascimento'] = $result['Nascimento'];
	echo $_SESSION['usuarioNome']." ". $_SESSION['email']." ". $_SESSION['nascimento'];
?>