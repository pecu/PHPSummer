<?
include "link.php";

$sqlCode = "SELECT products.No, products.Name, products.Price, products.Quility, store.Name as Sname FROM 
products LEFT JOIN store
ON products.StoreNo = store.No";

//echo $sqlCode;

$result = mysql_query($sqlCode); 

echo "<table border=1>";
echo "<tr><td>編號</td><td>品名</td><td>價格</td><td>數量</td><td>供貨廠商</td><td>修改</td></tr>";
while ($row = mysql_fetch_assoc($result))
{
	echo "<tr>";
	echo "<td>".$row["No"]."</td>";
	echo "<td>".$row["Name"]."</td>";
	echo "<td>".$row["Price"]."</td>";
	echo "<td>".$row["Quility"]."</td>";
	echo "<td>".$row["Sname"]."</td>";
	
	echo "<td><a href=b_Products.php?WebNo=2&SubWebNo=10&No=".$row["No"].">修改</a></td>";
	
	echo "</tr>";
}
echo "</table>";
mysql_close($link);

?>