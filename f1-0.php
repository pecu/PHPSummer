<form action="f1-0-in.php" method="POST">
<table border=1>
<tr><td>新增帳號</td><td><input name="Name" value=<? echo $_GET["Name"]; ?>></input></td>
<tr><td>密碼設定</td><td><input name="PassWord" value=<? echo $_GET["PassWord"]; ?>></input></td>
<tr><td>權限設定</td><td>
<SELECT name="Pri">
<?
	if( $_GET["Pri"] == 1 )
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
<tr>
<td colspan=2>
<img src="./cool-php-captcha-0.3.1/captcha.php" id="captcha" /><br/>
<!-- CHANGE TEXT LINK -->
<a href="#" onclick="
    document.getElementById('captcha').src='./cool-php-captcha-0.3.1/captcha.php?'+Math.random();
    document.getElementById('captcha-form').focus();"
    id="change-image">看不懂，再產生下一組</a><br/><br/>
<input type="text" name="captcha" id="captcha-form" autocomplete="off" />
</td>
<tr><td colspan=2><input type="submit" value="新增帳號"></input></td>
</table>
<!-- http://code.google.com/p/cool-php-captcha/-->
</form>