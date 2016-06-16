<?php
			include("login.php");
			loginCheck();
			
		//recebe os dados do usuário
		$nomeMesa = $_POST['nomeMesa'];
		$senhaMesa = $_POST['senhaMesa'];
		
		//verifica se existem 2 mesas com o mesmo nome
		$sql1 = "SELECT nomeMesa
				FROM mesa
				WHERE nomeMesa = '".$nomeMesa."'"; 
		$query1 = mysql_query($sql1) or die (mysql_error());
		$resultD = mysql_fetch_assoc($query1);
		if($resultD)
		{
			echo 'já existe uma mesa com esse nome';
		}
		else
		{
			//se não cria mesa;
			$sql2 = "INSERT INTO mesa (mestreID,nomeMesa,senhaMesa) 
					VALUES ('".$_SESSION['ID']."','".$nomeMesa."','".$senhaMesa."')"; 
			$query2 = mysql_query($sql2) or die(mysql_error()) ;
			$result = mysql_fetch_assoc($query2);
			if(!$result)
			{
				echo 'erro no cadastro';
			}
		}
		
		?>