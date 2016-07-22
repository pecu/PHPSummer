<form action="forgetPass.php" method="post">
<table>
	<tr><td>帳號</td><td><input name="Name"></input></td>
	<tr><td>寄至</td><td><input name="Email"></input></td>
	<tr><td><input type="submit" value="詢問"></td>	
	<!-- 驗證詢問者的問題在此設計 -->
</table>
</form>
<?
	include "link_org.php";
	
	$Name = $_POST["Name"];
	
	$setTodb = "SELECT Name FROM adminuser WHERE Name='".$Name."'";
	//echo $setTodb;
	$result = mysql_query($setTodb);
	$row = mysql_fetch_assoc($result);
	
	if( $row["Name"] != "" )
	{
		$pass = "default";
		$setTodb = "UPDATE adminuser SET PassWord='".$pass."' WHERE Name='".$Name."'";
		//echo $setTodb;
		$result = mysql_query($setTodb);		
		$emailAdd = $_POST["Email"];
		$mailBody = "<table border=1><tr><td>帳號:".$Name."</td></tr><tr><td>重設密碼:".$pass."</td></tr></table>";
		//mail($Email, 'PHP Class 寄送密碼', $mailBody);	// 虛擬主機涵蓋smtp server時才可使用
		include "send.php";
		mysql_close($link);
		$url = "index.php?WebNo=0";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
	}
?>