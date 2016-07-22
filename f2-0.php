<form action="f2-0-in.php" method="post" enctype="multipart/form-data">
<table border=1>
<tr><td>商品名稱</td><td><input name="Name"></input></td>
<tr><td>商品價格</td><td><input name="Price"></input></td>
<tr><td>上架數量</td><td><input name="Qulity"></input></td>
<tr><td>進貨廠商</td><td>
<SELECT name="StoreNo">
<? include "f2-0-sel.php"; ?>
</SELECT>
</td>
<tr><td>上傳圖片</td><td><input type="file" name="file" id="file">
<tr><td></td><td><input type="submit" value="新增商品"></input></td>
</table>
</form>