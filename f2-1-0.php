<?
include "link.php";

$No = $_GET["No"];

$sqlCode = "SELECT products.No, products.Name, products.Price, products.Quility, store.Name as Sname, store.No as Sno FROM 
products LEFT JOIN store
ON products.StoreNo = store.No WHERE products.No =".$No;

$result = mysql_query($sqlCode);
$row = mysql_fetch_assoc($result);

?>

<form action="f2-1-in.php" method="post" enctype="multipart/form-data">
<table border=1>
<input type="hidden" name="No" value="<? echo $No; ?>">
<tr><td>商品名稱</td><td><input name="Name" value="<? echo $row["Name"]; ?>"></input></td>
<tr><td>商品價格</td><td><input name="Price" value="<? echo $row["Price"]; ?>"></input></td>
<tr><td>上架數量</td><td><input name="Qulity" value="<? echo $row["Quility"]; ?>"></input></td>
<tr><td>進貨廠商</td><td>
<SELECT name="StoreNo">
<? 
include "f2-0-sel.php";
?>
</SELECT>
</td>
<tr><td>上傳圖片</td><td><input type="file" name="file" id="file">
<tr><td></td><td><input type="submit" value="確定更改"></input></td>
</table>
</form>