<?
	include "link.php";

	$tableName = "adminuser";
	$rowNum = 5;

	$PassWord = $_POST["PassWord"];
	$Pri = $_POST["Pri"];
	$No = $_POST["No"];

	$setTodb = "UPDATE ".$tableName." SET PassWord='".$PassWord."', Pri=".$Pri." WHERE No=".$No;
	
	echo $setTodb;
	
	$result = mysql_query($setTodb);
	mysql_close($link);
	
	session_start();
	if( $_SESSION["Name"] == "" )
	{	
		$url = "index.php";
	}
	else
	{
		$url = "a_AdminUser.php?WebNo=1&SubWebNo=1";
	}
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
?>