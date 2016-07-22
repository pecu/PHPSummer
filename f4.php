<?
include "link.php";

$rowNum = 5;
$sqlCode = "SELECT ordered.no, ordered.Oyear, ordered.Omonth, ordered.Oday, products.Name, ordered.Num, products.Price, ordered.Uno FROM ordered
LEFT JOIN products ON ordered.Pno=products.No;";

//echo $sqlCode;
$result = mysql_query($sqlCode); 

echo "<table border=1>";
echo "<tr><td>訂單編號</td><td>購買日期<td>購買商品</td><td>購買數量</td><td>總價</td><td>購買人</td></tr>";

while ($row = mysql_fetch_assoc($result)) {
 echo "<tr>";
 echo "<td>".$row["no"]."</td>";
 echo "<td>20".$row["Oyear"]."/".$row["Omonth"]."/".$row["Oday"]."</td>";
 echo "<td>".$row["Name"]."</td>";
 echo "<td>".$row["Num"]."</td>";
 echo "<td>".$row["Num"]*$row["Price"]."</td>";
 echo "<td><a href=\"#\" onmouseover=\"document.getElementById('DetailInfo').src='f4-New.php?No=".$row["Uno"]."'\">詳細資料</a></td>";
 echo "</tr>";
}
echo "</table>";

mysql_close($link);

?>
<iframe frameborder=0 src="" id="DetailInfo" width="200" height="200"></iframe>
