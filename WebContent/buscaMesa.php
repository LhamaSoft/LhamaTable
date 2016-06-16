<?php
			include("login.php");
			loginCheck();

			
			//retorna mesa buscada
			$nomeMesa = $_POST['buscaMesa'];
			$sql = "SELECT nomeMesa, mestreID, ID
					FROM mesa
					WHERE nomeMesa = '".$nomeMesa."' ";
			$query = mysql_query($sql) or die (mysql_error());
			$result = mysql_fetch_assoc($query);
			$_SESSION['nomeMesa'] = $result['nomeMesa'];
			$_SESSION['mesaID'] = $result['ID'];
			echo '<a href="mesa.xhtml"</a>';
			$sql2 = "SELECT NomeUsuario
					FROM usuarios
			        WHERE ID = '".$result['mestreID']."'";
			$query2 = mysql_query($sql2) or die (mysql_error());
			$result2 = mysql_fetch_assoc($query2);
			$_SESSION['mestreID'] = $result['mestreID'];
			echo $_SESSION['nomeMesa'];
			//$_SESSION['mestreID'] = $result['mestreID'];
		

?>