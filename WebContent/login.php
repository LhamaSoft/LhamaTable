<?php 
		//conecta no DB	
		$link = mysql_connect('localhost', 'root', '');
			if(!$link)
			{
				die('não foi possivel conectar' . mysql_error());
			}
		
		//seleciona DB
		mysql_select_db('lhamatable', $link) or die("MySQL: Não foi possível conectar-se ao banco de dados [".$_SG['banco']."].");
		
		//inicia sessão
		session_start();
		
		//verifica se o usuário e senha existem
			
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