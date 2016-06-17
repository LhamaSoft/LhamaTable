<?php
		include("login.php");
		loginCheck();
		
		$novoNome = $_POST['alteraMesa'];
		$novaSenha = $_POST['novaSenha'];
		$sql = "UPDATE mesa
				SET nomeMesa = '".$novoNome."', senhaMesa = '".$novaSenha."'
				WHERE ID = '".$_SESSION['mesaID']."' ";
		$query = mysql_query($sql) or die (mysql_error());
		mesaClear();
		header("location:perfil.xhtml");
		
		
		function mesaClear()
		{
			$sql = "UPDATE usuarios
					SET mesaID = 0
					WHERE mesaID = '".$_SESSION['mesaID']."' ";
			$query = mysql_query($sql) or die (mysql_error());	
		}

?>