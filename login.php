<?
if( $_SESSION["Name"] == "" )
{
	echo "<form action=\"login-check.php\" method=\"post\">
	<table border=1>
	<tr><td>帳號</td><td><input name=\"Name\"></input></td>
	<tr><td>密碼</td><td><input type=password name=\"PassWord\"></input></td>
	<tr><td><input type=\"submit\" value=\"登入\"></td><td><a href=\"index.php?WebNo=-1&SubWebNo=1\">忘記密碼</a></td>
	<tr><td colspan=2>若無帳號請按<a href=\"index.php?WebNo=-1\">新增</a></input></td></tr>
	</table>
	</form>";
}
else
{
	session_start();
	unset($_SESSION["Name"]);
	unset($_SESSION["pri"]);
	session_write_close();
	
	$url = "index.php?WebNo=0";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
}
?>