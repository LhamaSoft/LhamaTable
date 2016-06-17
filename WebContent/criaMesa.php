<?php
			include("login.php");
			loginCheck();
			
		//recebe os dados do usuário
		$nomeMesa = $_POST['nomeMesa'];
		$senhaMesa = $_POST['senhaMesa'];
		
		//verifica se existem 2 mesas com o mesmo nome
		$sql1 = "SELECT nomeMesa
				FROM mesa
				WHERE nomeMesa = '".$nomeMesa."'"; 
		$query1 = mysql_query($sql1) or die (mysql_error());
		$resultD = mysql_fetch_assoc($query1);
		if($resultD)
		{
			echo 'já existe uma mesa com esse nome';
			header("location:perfil.xhtml");
		}
		else
		{
			//se não cria mesa;
			$sql2 = "INSERT INTO mesa (mestreID,nomeMesa,senhaMesa) 
					VALUES ('".$_SESSION['ID']."','".$nomeMesa."','".$senhaMesa."')"; 
			$query2 = mysql_query($sql2) or die(mysql_error()) ;
			
			$sql3 = "SELECT ID, senhaMesa
					FROM mesa
					WHERE nomeMesa = '".$nomeMesa."' ";
			$query3 = mysql_query($sql3) or die(mysql_error()) ;
			$resultID = mysql_fetch_assoc($query3);
			$idMesa = $resultID['ID'];
			$senha = $resultID['senhaMesa'];
			echo $nomeMesa;
			echo " foi criada com sucesso.";
			echo " O ID de sua mesa é: ";
			echo $idMesa;
			echo ". E a senha é: ";
			echo $senha;
			echo ". Lembre-se de anotar os dados da sua mesa pois serão usados para acesso.";
			echo '<p class="heading"> Retornar a <a href="perfil.xhtml">'. "pagina anterior" .'</a></p>';
		}

		?>