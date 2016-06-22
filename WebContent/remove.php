<?php 
		include("login.php");
		loginCheck();
		if(isset($_POST['remConfEmail']) AND isset($_POST['remConfSenha']))
		{
			$email = $_POST['remConfEmail'];
			$senha = MD5($_POST['remConfSenha']);
			$sqlMesaSel = "SELECT ID, nomeMesa
						FROM mesa
						WHERE mestreID = '".$_SESSION['ID']."' ";
			$queryMesaSel = mysql_query($sqlMesaSel) or die(mysql_error());
			while($rowMesaSel = mysql_fetch_row($queryMesaSel))
			{
				$mesaID = $rowMesaSel[0];
				$nomeMesa = $rowMesaSel[1];								
				//seleciona fichas da mesa em que é mestre
				$sqlFichaSel = "SELECT nome
								FROM ficha
								WHERE mesaID = '".$mesaID."' ";
				$queryFichaSel = mysql_query($sqlFichaSel) or die(mysql_error());
				while($rowFichaSel = mysql_fetch_row($queryFichaSel))
				{
					//apaga as fichas das mesas
					$nomeFicha = $rowFichaSel[0];
					$caminhoFicha = "fichas/". $nomeMesa. "_" .$nomeFicha . ".txt";
					unlink($caminhoFicha);
				}
				//apaga as fichas do DB
				$sqlFichaDel = "DELETE
								FROM ficha
								WHERE mesaID = '".$mesaID."' ";
				$queryFichaDel = mysql_query($sqlFichaDel) or die(mysql_error());
			}
			
			//Apaga a mesa do DB
			$sqlMesaDel = "DELETE
							FROM mesa
							WHERE mestreID = '".$_SESSION['ID']."' ";
			$queryMesaDel = mysql_query($sqlMesaDel) or die(mysql_error());*/
			
			$sql = "INSERT INTO removidos (dataCadastro, email, ID, Nascimento, senha, NomeUsuario, tipoUsuario)
					SELECT dataCadastro, email, ID, Nascimento, senha, NomeUsuario, tipoUsuario
					FROM usuarios
					WHERE email = '".$email."' AND senha = '".$senha."' AND ID = '".$_SESSION['ID']."' LIMIT 1";
			$sql2 ="DELETE
					FROM usuarios
					WHERE email = '".$email."' AND senha = '".$senha."' AND ID = '".$_SESSION['ID']."' LIMIT 1";		
			$query = mysql_query($sql) or die(mysql_error()) ;
			$result = mysql_fetch_assoc($query);
			$query2 = mysql_query($sql2) or die(mysql_error()) ;
			if(!$result)
			{
				echo "<script language='javascript' type='text/javascript'>alert('Houve um erro na exclusão da conta.');</script>";;
			}
			else
			{
				session_destroy();
				echo "<script language='javascript' type='text/javascript'>window.location.href='index.xhtml';</script>";
			}
		}
?>