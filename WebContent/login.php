<?php 
		//conecta no DB	
		$link = mysql_connect('localhost', 'root', '');
			if(!$link)
			{
				die('n�o foi possivel conectar' . mysql_error());
			}
		
		//seleciona DB
		mysql_select_db('lhamatable', $link) or die("MySQL: N�o foi poss�vel conectar-se ao banco de dados [".$_SG['banco']."].");
		
		//inicia sess�o
		session_start();
		
		//verifica se o usu�rio e senha existem
		
		function loginDo($email, $senha)
		{
			$sql = "SELECT ID, NomeUsuario, email, fotoUsuario, tipoUsuario
					FROM usuarios 
					WHERE email = '".$email."' AND senha = '".$senha."' LIMIT 1";
			$query = mysql_query($sql) or die(mysql_error()) ;
			$result = mysql_fetch_assoc($query);
			//se n�o
			if(empty($result))
			{
				echo 'Erro no Login';
			}
			else
			{
				$_SESSION['usuarioNome'] = $result['NomeUsuario'];
				$_SESSION['ID'] = $result['ID'];
				$_SESSION['email'] = $result['email'];
				$_SESSION['fotoUsuario'] = $result['fotoUsuario'];
				$_SESSION['tipoUsuario'] = $result['tipoUsuario'];
				header("location:perfil.xhtml");
			}
		}
			
		function loginCheck()
		{
			if(!isset($_SESSION['usuarioNome']) OR !isset($_SESSION['ID']))
			{
				echo 'Login Error';
				loginFail();
			}
		}
		
		function loginFail()
		{
			unset($_SESSION['usuarioNome'], $_SESSION['ID']);
			header("location:index.xhtml");
		}
		
?>		