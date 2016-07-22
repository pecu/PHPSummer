<?
ini_set('default_charset', 'utf-8');
include "link.php";

$tableName = "users";
$sqlCode = "SELECT * FROM ".$tableName." WHERE No=".$_GET["No"];
//echo $sqlCode;
$result = mysql_query($sqlCode); 
$row = mysql_fetch_assoc($result);
?>
<table border=1>
<tr><td>客戶編號</td><td><? echo $row["No"]; ?></td></tr>
<tr><td>客戶名稱</td><td><? echo $row["Name"]; ?></td></tr>
<tr><td>客戶電話</td><td><? echo $row["Tel"]; ?></td></tr>
<tr><td>客戶地址</td><td><? echo $row["Address"]; ?></td></tr>
<tr><td>客戶電郵</td><td><? echo $row["Email"]; ?></td></tr>
<tr><td colspan=5><INPUT TYPE="button" value="列印客戶資料" onclick="print()"></td>
</table>
<?
mysql_close($link);
?>