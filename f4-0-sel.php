<?
include "link.php";

// 製造SQL語法
$tableName = "users";
$rowNum = 5;
$sqlCode = "SELECT No, Name FROM ".$tableName;
echo $sqlCode;

// 將正確的SQL語法送入MySQL執行
$result = mysql_query($sqlCode); 

while ($row = mysql_fetch_assoc($result)) {
	echo "<option value=\"".$row["No"]."\">".$row["No"]."[".$row["Name"]."]</option>";
}
mysql_close($link);

?>