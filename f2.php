<?
include "link.php";

$tableName = "Products";
$rowNum = 5;
$sqlCode = "SELECT * FROM ".$tableName;
echo $sqlCode;

$result = mysql_query($sqlCode); 

echo "<table border=1>";
$line = 0;
$modNo = 3;
$tempData = array($modNo);
$num_rows = mysql_num_rows($result);


while ($row = mysql_fetch_assoc($result))
{
	if( $line%$modNo == 0 )
	{
		echo "<tr>";
	}
	echo "<td><a href=\"showImg_big.php?id=".$row["No"]."\" target=\"_blank\"><img src=showImg.php?id=".$row["No"]." width=80\"></td>";
	$tempData[$line%$modNo] = $row["Name"].",".$row["Price"].",".$row["Quility"];
	//echo $line%$modNo."=".$tempData[$line%$modNo]."<br>";
	if( $line%$modNo == $modNo-1 )
	{
		echo "</tr><tr>";
		for($i=0; $i<$modNo; $i++)
		{
			list($Name, $Price, $Quility) = split('[,]', $tempData[$i]);
			echo "<td>品名:".$Name."<br>價格:".$Price."<br>數量:".$Quility."</td>";		
		}
		echo "</tr>";
	}
	$line  = $line  + 1;
}
echo "</tr><tr>";
for($i=0; $i<$num_rows%$modNo; $i++)
{
	list($Name, $Price, $Quility) = split('[,]', $tempData[$i]);
	echo "<td>品名:".$Name."<br>價格:".$Price."<br>數量:".$Quility."</td>";		
}
echo "</tr>";

/*
while ($row = mysql_fetch_assoc($result))
{
	if( $line%$modNo == 0 )
	{
		echo "<tr>";
	}
	echo "<td>品名:".$row["Name"]."<br>";
	echo "價格:".$row["Price"]."<br>";
	echo "數量:".$row["Quility"]."</td>";
	echo "<td><a href=\"showImg_big.php?id=".$row["No"]."\" target=\"_blank\"><img src=showImg.php?id=".$row["No"]." width=80\"></td>";
	if( $line%$modNo == $modNo-1 )
	{
		echo "</tr>";
	}
	$line = $line + 1;
}
*/
echo "</table>";
mysql_close($link);
?>