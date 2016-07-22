<?
	include "link.php";

	$tableName = "Store";
	$rowNum = 5;

	$Name = $_POST["Name"];
	$Tel = $_POST["Tel"];
	$Address = $_POST["Address"];
	$Email = $_POST["Email"];
	$userName = $_POST["userName"];

	$setTodb = "INSERT INTO ".$tableName."(Name, Tel, Address, Email, userName) 
	VALUES('".$Name."','".$Tel."','".$Address."','".$Email."','".$userName."')"; 
	
	//echo $setTodb;
	
	$result = mysql_query($setTodb);
	mysql_close($link);
	
	$url = "e_Store.php?WebNo=5&SubWebNo=0";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 	
?>
