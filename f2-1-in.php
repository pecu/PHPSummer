<?
	include "link.php";

	$Name = $_POST["Name"];
	$Price = $_POST["Price"];
	$Qulity = $_POST["Qulity"];
	$StoreNo = $_POST["StoreNo"];
	$No = $_POST["No"];
	
	$setTodb = "UPDATE Products SET Name='".$Name."', 
	Price=".$Price.", Quility=".$Qulity.", StoreNo=".$StoreNo." WHERE No=".$No;
	//echo $setTodb;
	
	$result = mysql_query($setTodb);
	
	if( $_FILES["file"]["error"] <= 0 )
	{
		$imageName = $No.".jpg";
		move_uploaded_file($_FILES["file"]["tmp_name"], "./photo/".$imageName);
	}
	
	mysql_close($link);
	
	$url = "b_Products.php?WebNo=2&SubWebNo=3";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 	
	
?>