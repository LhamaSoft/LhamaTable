<?php
			include("login.php");
			loginCheck();

			
			//retorna mesa buscada
			$nomeFicha = $_POST['nomeFicha'];
			if($_SESSION['ID'] == $_SESSION['mestreID'])
			{
			$sql = "DELETE
					FROM ficha
					WHERE nome = '".$nomeFicha."' ";
			$query = mysql_query($sql) or die (mysql_error());
			$result = mysql_fetch_assoc($query);
			}
			
		

?>