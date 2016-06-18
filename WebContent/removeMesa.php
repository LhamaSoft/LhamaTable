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
			$sql2 = "DELETE
					 FROM chatmensagens
					 WHERE mesaID = '".$_SESSION['mesaID']."'";
			mesaClear();
			unset($_SESSION['nomeMesa']);
			unset($_SESSION['mestreID']);
			header("location:perfil.xhtml");
			}
			else
			{
				echo "Somente o Mestre tem permissão para deletar a mesa. Ponha-se no seu lugar =P";
					
			}
			
			function mesaClear()
		{
			$sql = "UPDATE usuarios
					SET mesaID = 0
					WHERE mesaID = '".$_SESSION['mesaID']."' ";
			$query = mysql_query($sql) or die (mysql_error());	
			
		}

?>