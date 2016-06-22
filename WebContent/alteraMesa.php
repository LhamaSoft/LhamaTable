<?php
		include("login.php");
		loginCheck();
		
		
		if($_SESSION['ID'] == $_SESSION['mestreID'])
		{
			$novoNome = $_POST['alteraMesa'];
			$novaSenha = $_POST['novaSenha'];
			$sql = "UPDATE mesa
					SET nomeMesa = '".$novoNome."', senhaMesa = '".$novaSenha."'
					WHERE ID = '".$_SESSION['mesaID']."' ";
			$query = mysql_query($sql) or die (mysql_error());
			mesaClear();
			header("location:perfil.xhtml");
		}
		else
		{
			echo "Somente o mestre pode fazer alterações na mesa";
		}
		
		function mesaClear()
		{
			$sql = "UPDATE usuarios
					SET mesaID = 0
					WHERE mesaID = '".$_SESSION['mesaID']."' ";
			$query = mysql_query($sql) or die (mysql_error());	
		}

?>