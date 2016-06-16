<?php
		include("login.php");
		loginCheck();
		
		//recebe os dados do usuário
		$nomeFicha = $_POST['nomeFicha'];
		
		$sql1 = "SELECT nome
				FROM ficha
				WHERE nome = '".$nomeFicha."'"; 
		$query1 = mysql_query($sql1) or die (mysql_error());
		$resultD = mysql_fetch_assoc($query1);
		if($resultD)
		{
			echo 'já existe uma mesa com esse nome';
		}
		else
		{
			$sql2 = "INSERT INTO ficha (nome, mesaID) 
					VALUES ('".$nomeFicha."', '".$_SESSION['mesaID']."')"; 
			$query2 = mysql_query($sql2) or die(mysql_error()) ;
			$result = mysql_fetch_assoc($query2);
			if(!$result)
			{
			}
		}
?>