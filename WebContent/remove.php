<?php 
		
		include("login.php");
		loginCheck();
		//verifica se o usuário e senha existem
			$email = $_POST['inputEmail'];
			$senha = $_POST['inputPassword'];
			$sql = "INSERT INTO removidos (dataCadastro, email, ID, Nascimento, senha, NomeUsuario, tipoUsuario)
					SELECT dataCadastro, email, ID, Nascimento, senha, NomeUsuario, tipoUsuario
					FROM usuarios
					WHERE email = '".$email."' AND senha = '".$senha."' LIMIT 1";
			$sql2 ="DELETE
					FROM usuarios
					WHERE email = '".$email."' AND senha = '".$senha."' LIMIT 1";		
			$query = mysql_query($sql) or die(mysql_error()) ;
		    $result = mysql_fetch_assoc($query);
			$query = mysql_query($sql2) or die(mysql_error()) ;
			if(!$result)
			{
				echo "ERRO";
			}
			session_destroy();
			header("location:index.xhtml");