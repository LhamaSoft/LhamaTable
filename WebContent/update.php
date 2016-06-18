
			<?php 
			include("login.php");
			loginCheck();
			
		    //verifica se o usuário e senha existem
			$novoUser = $_POST['novoUser'];
			$novoEmail = $_POST['novoEmail'];
			$novaSenha = $_POST['novaSenha'];
			$senha = $_POST['inputPassword'];
			$email = $_POST['inputEmail'];
			$sql = "UPDATE usuarios
					SET email = '".$novoEmail."',  senha = '".$novaSenha."', NomeUsuario = '".$novoUser."'
					WHERE email = '".$email."' AND senha = '".$senha."' 
					LIMIT 1";
			$query = mysql_query($sql) or die(mysql_error()) ;
			$result = mysql_fetch_assoc($query);
			if(!$result)
			{
				echo "ERRO!!";
			}
			session_destroy();
			header("location:index.xhtml");