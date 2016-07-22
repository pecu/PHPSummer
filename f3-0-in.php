<?
	include "link.php";

	$tableName = "Users";
	$rowNum = 5;

	$Name = $_POST["Name"];
	$PassWord = $_POST["PassWord"];
	$Tel = $_POST["Tel"];
	$Bir = $_POST["Bir"];
	$Address = $_POST["Address"];
	$Email = $_POST["Email"];

	$setTodb = "INSERT INTO ".$tableName."(Name, PassWord, Tel, Bir, Address, Email) 
					VALUES('".$Name."','".$PassWord."','".$Tel."','".$Bir."','".$Address."','".$Email."')"; 
	
	//echo $setTodb;
	
	$result = mysql_query($setTodb);
	
	$fileName = mysql_insert_id();
	//echo $_FILES["file"]["tmp_name"];
	if( $_FILES["file"]["error"] <= 0 )
	{
		move_uploaded_file($_FILES["file"]["tmp_name"], "./files/".$fileName);
	}

	mysql_close($link);
	
	$url = "c_Users.php?WebNo=3&SubWebNo=0";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
?>