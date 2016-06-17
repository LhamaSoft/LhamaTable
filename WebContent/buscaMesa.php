<?php
			include("login.php");
			loginCheck();

			
			//retorna mesa buscada
			$idMesa = $_POST['idMesa'];
			$senhaMesa = $_POST['senhaMesa'];
			$sql = "SELECT nomeMesa, mestreID, ID
					FROM mesa
					WHERE ID = '".$idMesa."' AND senhaMesa = '".$senhaMesa."' ";
			$query = mysql_query($sql) or die (mysql_error());
			$result = mysql_fetch_assoc($query);
			$_SESSION['nomeMesa'] = $result['nomeMesa'];
			$_SESSION['mesaID'] = $result['ID'];
			$_SESSION['mestreID'] = $result['mestreID'];
			
			$sql2 = "SELECT NomeUsuario
					FROM usuarios
			        WHERE ID = '".$result['mestreID']."' ";
			$query2 = mysql_query($sql2) or die (mysql_error());
			$result2 = mysql_fetch_assoc($query2);
			$_SESSION['mestreNome'] = $result2['NomeUsuario'];
			
			$sql3 = "UPDATE usuarios
					SET mesaID = '".$_SESSION['mesaID']."'
			        WHERE ID = '".$_SESSION['ID']."'";
			$query3 = mysql_query($sql3) or die (mysql_error());
			
			
			header("location:mesa.xhtml");
?>