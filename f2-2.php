<?
include "link.php";

$tableName = "products";
$rowNum = 5;
$cannotdelete = "SELECT DISTINCT products.No
FROM ordered LEFT JOIN products ON ordered.Pno = products.No";
$cannotdeleteSQL = mysql_query($cannotdelete);

echo "<table border=1>";
echo "<tr><td>刪除</td><td>流水號</td><td>品名</td><td>價格</td><td>數量</td><td>供貨廠商</td></tr>";
while($row = mysql_fetch_assoc($cannotdeleteSQL))
{
	$sqlCode = "SELECT products.No, products.Name, products.Price,
				products.Quility, store.Name as Sname FROM products LEFT JOIN store
				On store.No = products.StoreNo WHERE products.No =".$row["No"];
	$result = mysql_query($sqlCode);
	$row = mysql_fetch_assoc($result);
	echo "<tr>";
	//echo "<td><input type=\"checkbox\" name=\"delNo[]\" value=\"".$row["No"]."\"></td>";
	echo "<td></td><td>".$row["No"]."</td>";
	echo "<td>".$row["Name"]."</td>";
	echo "<td>".$row["Price"]."</td>";
	echo "<td>".$row["Quility"]."</td>";
	echo "<td>".$row["Sname"]."</td>";
	echo "</tr>";
}
?>
<form action="f2-2-in.php" method="post">
<?
$candelete = "SELECT products.No, products.Name, products.Price, products.Quility, store.Name AS Sname
FROM products
LEFT JOIN store ON store.No = products.StoreNo
WHERE products.No NOT 
IN (

SELECT DISTINCT products.No
FROM ordered
LEFT JOIN products ON ordered.Pno = products.No
)
LIMIT 0 , 30 ";
$candeleteSql = mysql_query($candelete);

while ($row = mysql_fetch_assoc($candeleteSql)) {
 echo "<tr>";
 echo "<td><input type=\"checkbox\" name=\"delNo[]\" value=\"".$row["No"]."\"></td>";
 echo "<td>".$row["No"]."</td>";
 echo "<td>".$row["Name"]."</td>";
 echo "<td>".$row["Price"]."</td>";
 echo "<td>".$row["Quility"]."</td>";
 echo "<td>".$row["Sname"]."</td>";
 echo "</tr>";
}
?>
<tr><td colspan="5"><input type="submit" value="確定刪除"></td></tr>
</table>

<?
mysql_close($link);

?>
</form>