<?
include "link.php";

$tableName = "adminuser";
$rowNum = 5;
$sqlCode = "SELECT * FROM ".$tableName;
echo $sqlCode;

$result = mysql_query($sqlCode); 

echo "<table border=1>";
$cid = 0;
while ($row = mysql_fetch_assoc($result)) {
 echo "<tr>";
 foreach ($row as $as) { 
            $row[key($row)] = addslashes($as);
			//echo $cid."&nbsp;";
			
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
		echo "<td><a href=a_AdminUser.php?WebNo=1&SubWebNo=10&No=".$row["No"].">修改</a></td>";
		$cid = 0;
 echo "</tr>";
}
echo "</table>";
mysql_close($link);

?>