<?
include "link.php";

$tableName = "Products";
$rowNum = 5;
$sqlCode = "SELECT * FROM ".$tableName;
echo $sqlCode;

$result = mysql_query($sqlCode); 
?>
<form action="f4-0-in.php" method="post">
<?
echo "<table border=1>";
$line = 0;
$modNo = 3;
while ($row = mysql_fetch_assoc($result))
{
	if( $line%$modNo == 0 )
	{
		echo "<tr>";
	}
	echo "<td>品名：".$row["Name"]."<br>";
	echo "價格：".$row["Price"]."<br>";
	echo "存量：".$row["Quility"]."<input type=\"hidden\" value=\"".$row["Quility"]."\" name=\"Quility[]\"><br>";
	echo "下單：<select name=\"buy[]\">";
	for( $i=0; $i<=$row["Quility"]; $i++ )
	{
		echo "<option value=\"".$i."\">".$i."</option>";
	}
	echo "</select><input type=\"hidden\" value=\"".$row["No"]."\" name=\"No[]\"></td>";
	echo "<td><a href=\"./photo/".$row["No"]."\" target=\"_blank\"><img width=80 src=\"./photo/".$row["No"]."\"></td>";
	if( $line%$modNo == $modNo-1 )
	{
		echo "</tr>";
	}
	$line = $line + 1;
}
echo "</table>";
mysql_close($link);
?>
<tr><td colspan=3>
<select name="Uno">
<?
	include "f4-0-sel.php";
?>
</select>
<input type="submit" value="購買"></td></input>
</table>
</form>