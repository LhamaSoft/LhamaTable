<?php
			include("login.php");
			loginCheck();
			
			
			$novoNome = $_POST['alteraFicha'];
			$sql = "UPDATE ficha
				SET nome = '".$novoNome."'
				WHERE ID = '".$_SESSION['mesaID']."' ";
			$query = mysql_query($sql) or die (mysql_error());
			header("location:perfil.xhtml");
?>