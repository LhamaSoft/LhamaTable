<?php
			include("login.php");
			loginCheck();

			
			//retorna mesa buscada
			$nomeMesa = $_POST['removeMesa'];
			if($_SESSION['ID'] == $_SESSION['mestreID'])
			{
			$sql = "DELETE
					FROM mesa
					WHERE nomeMesa = '".$_SESSION['nomeMesa']."' ";
			$query = mysql_query($sql) or die (mysql_error());
			$result = mysql_fetch_assoc($query);
			unset($_SESSION['nomeMesa']);
			unset($_SESSION['mestreID']);
			header("location:perfil.xhtml");
			}
			
		

?>