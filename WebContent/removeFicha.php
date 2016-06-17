<?php
			include("login.php");
			loginCheck();

			
			//retorna mesa buscada
			$nomeFicha = $_POST['nomeFicha'];
			$caminhoFicha = "fichas/". $_SESSION['nomeMesa']. "_" .$nomeFicha . ".txt";
			unlink($caminhoFicha);
			if($_SESSION['ID'] == $_SESSION['mestreID'])
			{
			$sql = "DELETE
					FROM ficha
					WHERE nome = '".$nomeFicha."' ";
			$query = mysql_query($sql) or die (mysql_error());
			header("location:mesa.xhtml");
			}
			
		

?>