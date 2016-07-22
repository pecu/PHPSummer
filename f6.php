<?
include "link.php";

$tableName = "Products";
$rowNum = 5;
$sqlCode = "SELECT ordered.Pno, products.Name, products.Price, SUM( ordered.Num ) as total
FROM ordered LEFT JOIN products ON ordered.Pno = products.No
GROUP BY ordered.Pno ORDER BY total DESC";
//echo $sqlCode;

$result = mysql_query($sqlCode); 
$max = 0;

$mailBody = "";
$mailBody = $mailBody."<table border=1>";
$mailBody = $mailBody."<tr><td>商品名稱</td><td>商品價格</td><td>總銷售額</td><td>名次</td></tr>";
$index = 1;
while ($row = mysql_fetch_assoc($result)) {
 if( $index == 1 )
	$mailBody = $mailBody."<tr id=first>";
 else
	$mailBody = $mailBody."<tr>";
 $mailBody = $mailBody."<td>".$row["Name"]."</td>";
 $mailBody = $mailBody."<td>NT$".$row["Price"]."</td>";
 $mailBody = $mailBody."<td>NT$".$row["total"]*$row["Price"]."</td>";
 $mailBody = $mailBody."<td>".$index."</td>";
 $mailBody = $mailBody."</tr>";
 $index = $index + 1;
}
echo $mailBody;
?>
<tr>
<form action="f6-send.php" method="post">
<td colspan=4>分享至
<input name="mailbody" type="hidden" value="<? echo $mailBody; ?>"></input>
<input name="email"></input><input type="submit" value="寄出">
</td>
</form>
<?
echo "</table>";
mysql_close($link);
?>