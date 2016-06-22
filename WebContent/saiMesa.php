<?php
	include("login.php");
	loginCheck();
	//require "classes/DB.class.php";
	//require "classes/Chat.class.php";
	//require "classes/ChatBase.class.php";
	//require "classes/ChatLine.class.php";
	//require "classes/ChatUser.class.php";
	
	$sql3 = "UPDATE usuarios
		 SET mesaID = 0
		 WHERE ID = '".$_SESSION['ID']."'";
	$query3 = mysql_query($sql3) or die (mysql_error());
	unset($_SESSION['nomeMesa']);
	unset($_SESSION['mesaID']);
	//$response = Chat::logout();
	//echo json_encode($response);
	header("location:perfil.xhtml");
?>