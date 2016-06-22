<?php
	include("login.php");
	loginCheck();
	session_destroy();
	header("location:index.xhtml");
?>