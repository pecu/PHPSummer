<?
include "link.php";

$tableName = "adminuser";
$rowNum = 5;
$sqlCode = "SELECT * FROM ".$tableName;
//echo $sqlCode;

$result = mysql_query($sqlCode);
?>
<form action="a_AdminUser.php?WebNo=1&SubWebNo=20" method="post">
<?
echo "<table border=1>";
echo "<tr><td>刪除</td><td>流水號</td><td>帳號</td><td>密碼</td><td>權限</td></tr>";
$cid = 0;
while ($row = mysql_fetch_assoc($result)) {
 echo "<tr>";
 echo "<td><input type=\"checkbox\" name=\"delNo[]\" value=\"".$row["No"]."\"></td>";
 foreach ($row as $as) { 
            $row[key($row)] = addslashes($as);
			switch( $cid )
			{
				case 3:
					switch($as)
					{
						case 1:
							echo "<td>最高權限</td>";
						break;
						
						case 2:
							echo "<td>一般權限</td>";
						break;
						
						default:
							echo "<td>沒有權限</td>";
						break;
					}
				break;
				
				default:
					echo "<td>".addslashes($as)."</td>";			
				break;
			}
			$cid = $cid + 1;
            next ($row);			
        }
		$cid = 0;
 echo "</tr>";
}
?>
<tr><td colspan="5"><input type="submit" value="確定刪除"></td></tr>
</table>

<?
mysql_close($link);

?>
</form>