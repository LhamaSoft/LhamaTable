<?php
	include("login.php");

	//$pasta = "fotosUsuario/";
	//$imagem = $pasta . $_SESSION['usuarioNome'] . $_SESSION['ID'];
	//$uploadOk = 1;
	if(isset($_POST["submit"]))
	{
		$check = getimagesize($_FILES['perfilImagem']["tmp_name"]);
		if($check !== false)
		{
			$pasta = "fotosUsuario/";
			$ext = explode("/", $check["mime"]);
			$imagem = $pasta . $_SESSION['usuarioNome'] . $_SESSION['ID'] . "." .$ext[1];
			$uploadOk = 1;	
		}
		else 
		{
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	
	if ($uploadOk == 0) 
	{
		echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
	}	 
	else 
	{
		move_uploaded_file($_FILES["perfilImagem"]["tmp_name"], $imagem);
		$sqlUp = "UPDATE usuarios 
				  SET caminhoFoto = '".$imagem."' 
				  WHERE ID = '".$_SESSION['ID']."' ";
		$queryUp = mysql_query($sqlUp) or die(mysql_error());
		header("location:perfil.xhtml");
	}
?>