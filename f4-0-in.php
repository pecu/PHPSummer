<?
	include "link.php";
	
	$NoAll = $_POST["No"];
	$BUY = $_POST["buy"];
	$QU = $_POST["Quility"];
		
	for( $i=0; $i<count($_POST["No"]); $i++ )
	{
		$QU[$i] = $QU[$i] - $BUY[$i];
		if($BUY[$i] != 0)
		{
			$setTodb = "INSERT INTO Ordered(Oyear, Omonth, Oday, Pno, Uno, Num) 
			VALUES(".date("y").",".date("m").",".date("d").",".$NoAll[$i].",".$_POST["Uno"].",".$BUY[$i].")";
			//echo $setTodb."<br>";
			$result = mysql_query($setTodb);
			
			$setTodb = "UPDATE Products SET Quility=".$QU[$i]." WHERE No=".$NoAll[$i];
			$result = mysql_query($setTodb);
			//echo $setTodb."<br>";
		}

	}
	mysql_close($link);

	$url = "d_Order.php?WebNo=4&SubWebNo=0";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 	
?>