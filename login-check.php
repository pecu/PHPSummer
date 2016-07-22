<?
include "link_org.php";

$Name = $_POST["Name"];
$PassWord = $_POST["PassWord"];

$tableName = "adminuser";
$rowNum = 5;
$sqlCode = "SELECT No, pri FROM ".$tableName." WHERE Name='".$Name."' and PassWord='".$PassWord."'";
echo $sqlCode;

$result = mysql_query($sqlCode); 
$row = mysql_fetch_assoc($result);

if( $row["pri"] == "" )
{
	$url = "index.php?WebNo=0";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 	
}
else
{
	session_set_cookie_params(600);
	session_start();
	$_SESSION["Name"]=$Name;
	$_SESSION["No"]=$row["No"];
	$_SESSION["pri"]=$row["pri"];
	session_write_close();

	$url = "a_AdminUser.php?WebNo=1";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
}
mysql_close($link);

?>