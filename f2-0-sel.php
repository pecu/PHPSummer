<?
include "link.php";

$check = $_GET["WebNo"].$_GET["SubWebNo"];

if( $check = 210 )
{
	$sqlCode = "SELECT products.No, store.Name AS Sname, store.No AS Sno FROM products
				RIGHT JOIN store ON products.StoreNo = store.No WHERE products.No=".$No;
	//echo $sqlCode;
	$result = mysql_query($sqlCode); 
	$row = mysql_fetch_assoc($result);
	if( $row["No"] == $No )
	{
		echo "<option value=\"".$row["Sno"]."\" selected>".$row["Sname"]."</option>";
	}
	$Done = $row["Sno"];
}

// 製造SQL語法
$tableName = "Store";
$sqlCode = "SELECT * FROM ".$tableName;
echo $sqlCode;
// 將正確的SQL語法送入MySQL執行
$result = mysql_query($sqlCode); 
$cid = 0;
while ($row = mysql_fetch_assoc($result))
{
	if( $row["No"] != $Done )
		echo "<option value=\"".$row["No"]."\">".$row["Name"]."</option>";
}
mysql_close($link);
?>