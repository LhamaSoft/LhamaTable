<?php
		include("login.php");
		loginCheck();
		
		$novoNome = $_POST['alteraMesa'];
		$novaSenha = $_POST['novaSenha'];
		$sql = "UPDATE mesa
				SET nomeMesa = '".$novoNome."', senhaMesa = '".$novaSenha."'
				WHERE ID = '".$_SESSION['mesaID']."' ";
		$query = mysql_query($sql) or die (mysql_error());
		header("location:perfil.xhtml");
		

?>