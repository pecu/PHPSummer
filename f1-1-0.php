<?
include "link.php";

$tableName = "adminuser";
$rowNum = 5;
$No = $_GET["No"];

$sqlCode = "SELECT * FROM ".$tableName." WHERE No=".$No;
//echo $sqlCode;

$result = mysql_query($sqlCode);
$row = mysql_fetch_assoc($result);

?>

<form action="a_AdminUser.php?WebNo=1&SubWebNo=100" method="post">
<table border=1>
<tr><td>修改帳號</td><td><? echo $row["Name"]; ?>
<input type="hidden" name="No" value="<? echo $_GET["No"]; ?>"></td>
<tr><td>更改密碼</td><td><input name="PassWord" value="<? echo $row["PassWord"]; ?>"></input></td>
<tr><td>更改權限</td><td>
<SELECT name="Pri">
<?
if( $row["Pri"] == 1 )
{
	echo "<option value=\"1\" selected>最高權限</option>";
	echo "<option value=\"2\">一般權限</option>";
}
else
{
	echo "<option value=\"1\">最高權限</option>";
	echo "<option value=\"2\" selected>一般權限</option>";
}
?>
</SELECT></td>
<tr><td></td><td><input type="submit" value="確定更改"></input></td>
</table>
</form>