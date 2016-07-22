<?
include "link.php";

// 製造SQL語法
$tableName = "users";
$rowNum = 5;
$sqlCode = "SELECT * FROM ".$tableName;
echo $sqlCode;

// 將正確的SQL語法送入MySQL執行
$result = mysql_query($sqlCode); 

echo "<table border=1>";
while ($row = mysql_fetch_assoc($result)) {
 echo "<tr>";
 foreach ($row as $as) { 
            $row[key($row)] = addslashes($as); 
			echo "<td>".addslashes($as)."</td>";
            next ($row);
        }
 echo "<td><a href=./files/".$row["No"]." target=_blank>附加檔案下載</a>"; 
 echo "</tr>";
}
echo "</table>";
mysql_close($link);

?>