<?php
		loginCheck();
		
		function exibeMesas()
		{
			$sql = "SELECT nomeMesa, mestreID
					FROM mesa
					WHERE mestreID = '".$_SESSION['ID']."' ";
			$query = mysql_query($sql) or die (mysql_error());
			while($row = mysql_fetch_row($query));
			{
				$nomeMesa = $row[2];
				echo  $nomeMesa ;
			}
		}

?>