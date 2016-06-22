<?php
	if(isset($_POST["d4"]))
	{
		echo rand(1, 4);
	}
	else if(isset($_POST["d6"]))
	{
		echo rand(1, 6);
	}
	else if(isset($_POST["d8"]))
	{
		echo rand(1, 8);
	}
		else if(isset($_POST["d10"]))
	{
		echo rand(1, 10);
	}
		else if(isset($_POST["d12"]))
	{
		echo rand(1, 12);
	}
	else if(isset($_POST["d20"]))
	{
		echo rand(1, 20);
	}
	else if(isset($_POST["d100"]))
	{
		echo rand(1, 100);
	}
?>