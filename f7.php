<form action="g_Money.php?WebNo=7" method="post">
<input type="text" name="tempDate" id="dateinput" value="點此輸入日期"></input>
<input type="submit" value="查詢"></input>
</form>
<!-- Include jQuery -->
<script src="jquery.js"></script>
<!-- Include Core Datepicker JavaScript -->
<script src="ui.datepicker.js" type="text/javascript" charset="utf-8"></script>	
<!-- Attach the datepicker to dateinput after document is ready -->
<script type="text/javascript" charset="utf-8">
jQuery(function($){
$("#dateinput").datepicker();
});
</script>

<?
include "link.php";
$tempDate = $_POST["tempDate"];
list($month, $day, $year) = split('[/]', $tempDate);
// 製造SQL語法
$tableName = "SELECT ordered.No, ordered.Oyear, ordered.Omonth, ordered.Oday, products.Name, products.Price, ordered.Num
 FROM ordered LEFT JOIN products ON ordered.Pno = products.No";
$rowNum = 5;
if( $month != "" )
{
	$sqlCode = $tableName." WHERE Omonth=".$month;
}
else
{
	$sqlCode = $tableName;
}
//echo $sqlCode;

// 將正確的SQL語法送入MySQL執行
$result = mysql_query($sqlCode); 

echo "<table border=1>";
?>
<tr><td>訂單流水號</td><td>訂購日期</td><td>商品名稱</td><td>商品價格</td><td>訂購數量</td></tr>
<?
$sum = 0;
while ($row = mysql_fetch_assoc($result)) {
 echo "<tr>";
 echo "<td>".$row["No"]."</td>";
 echo "<td>".$row["Oyear"]."-".$row["Omonth"]."-".$row["Oday"]."</td>";
 echo "<td>".$row["Name"]."</td>";
 echo "<td>".$row["Price"]."</td>";
 echo "<td>".$row["Num"]."</td>"; 
 echo "</tr>";
 $sum = $sum + $row["Price"]*$row["Num"];
}
echo "<tr><td>總銷售額</td><td colspan=4>".$sum."</td>";
echo "</table>";
mysql_close($link);

?>