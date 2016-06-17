<?php
		include("login.php");
		loginCheck();
		
		$uploadDir = '/fichas';
		
		$nomeFicha = $_POST['nomeFicha'];
		$caminhoFicha = "fichas/". $_SESSION['nomeMesa']. "_" .$nomeFicha . ".txt";
		$ficha = fopen($caminhoFicha, "w");
		$txt = "Ficha padrão LhamaTable";
		fwrite($ficha, $txt);
		
		$nomeFicha = $_POST['nomeFicha'];
		$sql1 = "SELECT nome, mesaID
				FROM ficha
				WHERE nome = '".$nomeFicha."' AND mesaID = '".$_SESSION['mesaID']."' "; 
		$query1 = mysql_query($sql1) or die (mysql_error());
		$resultD = mysql_fetch_assoc($query1);
		if($resultD)
		{
			echo 'já existe uma mesa com esse nome';
		}
		else
		{
			$sql2 = "INSERT INTO ficha (nome, mesaID, caminhoFicha) 
					VALUES ('".$nomeFicha."', '".$_SESSION['mesaID']."', '".$caminhoFicha."')"; 
			$query2 = mysql_query($sql2) or die(mysql_error()) ;
			header("location:mesa.xhtml");
		}
?>