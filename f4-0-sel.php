<?
include "link.php";

// �s�ySQL�y�k
$tableName = "users";
$rowNum = 5;
$sqlCode = "SELECT No, Name FROM ".$tableName;
echo $sqlCode;

// �N���T��SQL�y�k�e�JMySQL����
$result = mysql_query($sqlCode); 

while ($row = mysql_fetch_assoc($result)) {
	echo "<option value=\"".$row["No"]."\">".$row["No"]."[".$row["Name"]."]</option>";
}
mysql_close($link);

?>