<?
	include "link.php";

	$tableName = "Products";
	$rowNum = 5;

	$Name = $_POST["Name"];
	$Price = $_POST["Price"];
	$Qulity = $_POST["Qulity"];
	$StoreNo = $_POST["StoreNo"];

	$setTodb = "INSERT INTO ".$tableName."(Name, Price, Quility, StoreNo) VALUES('".$Name."',".$Price.",".$Qulity.",".$StoreNo.")"; 
	
	//echo $setTodb;
	
	$result = mysql_query($setTodb);
	
	$imageName = mysql_insert_id().".jpg";
	if( $_FILES["file"]["error"] <= 0 )
	{
		move_uploaded_file($_FILES["file"]["tmp_name"], "./photo/".$imageName);
	}
	
	mysql_close($link);

	$url = "b_Products.php?WebNo=2&SubWebNo=0";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 	
?>