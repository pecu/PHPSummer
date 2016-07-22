<?
	include "link.php";

	$tableName = "products";
	$rowNum = 5;
	
	$DelNo = $_POST["delNo"];
	
	
	for( $i = 0; $i < count($DelNo); $i++ )
	{
		$No = $DelNo[$i];
		$setTodb = "DELETE FROM ".$tableName." WHERE No=".$No;
	
		//echo $setTodb;
	
		$result = mysql_query($setTodb);
		
		$path = "./photo/";
		$files = $path.$No.".jpg";
		
		//echo $files."<br>";
		
		if(file_exists($files))
		{
			//echo $files."<br>";
			unlink($files);
		}
	}
	mysql_close($link);	

	
	session_start();
	if( $_SESSION["Name"] == "" )
	{	
		$url = "index.php";
	}
	else
	{
		$url = "b_Products.php?WebNo=2&SubWebNo=3";
	}
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
?>