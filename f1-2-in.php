<?
	include "link.php";

	$tableName = "adminuser";
	$rowNum = 5;
	
	$DelNo = $_POST["delNo"];
	
	print_r($DelNo);
	
	for( $i = 0; $i < count($DelNo); $i++ )
	{
		$No = $DelNo[$i];
		$setTodb = "DELETE FROM ".$tableName." WHERE No=".$No;
	
		echo $setTodb;
	
		$result = mysql_query($setTodb);
	}
	mysql_close($link);	

	
	session_start();
	if( $_SESSION["Name"] == "" )
	{	
		$url = "index.php";
	}
	else
	{
		$url = "a_AdminUser.php?WebNo=1&SubWebNo=2";
	}
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
?>