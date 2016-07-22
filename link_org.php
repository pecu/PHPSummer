<?
		$localhost = "localhost";
		$mysql_user = "phpClassTestUser";
		$mysql_password = "ntuphpClass";
		$link = mysql_connect($localhost, $mysql_user, $mysql_password);

		if (!$link) {
		die('Could not connect: ' . mysql_error());
		}
		//echo 'Connected successfully<br>';

		$MyDatabase = "phpclass";
		$db_selected = mysql_select_db($MyDatabase, $link);
		if (!$db_selected) {
		die ('Can\'t use foo : ' . mysql_error());
		}
		//echo 'Connected database '.$MyDatabase.' successfully<br>';
?>