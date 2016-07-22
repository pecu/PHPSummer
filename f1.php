<form action="a_AdminUser.php?WebNo=1" method="post">
<input name="find"></input>
<input type="submit" value="查詢"></input>
</form>
<?
	include "link.php";

	$tableName = "adminuser";

	$find = $_POST["find"];
	//echo $find."<br>";

	if( $find == "" )
		$sqlCode = "SELECT * FROM ".$tableName;
	else
		$sqlCode = "SELECT * FROM ".$tableName." WHERE Name LIKE '%".$find."%'";

	//echo $sqlCode;

	$result = mysql_query($sqlCode); 

	echo "<table border=1>";
	echo "<tr><td>流水號</td><td>帳號</td><td>密碼</td><td>權限</td></tr>";
	$cid = 0;
	while ($row = mysql_fetch_assoc($result))
	{
		if( $_SESSION["pri"] == 1 )
		{
			//echo "session1".$_SESSION["pri"];
			echo "<tr>";
			foreach ($row as $as)
			{ 
				$row[key($row)] = addslashes($as);
				if( $cid == 3 )
				{
					//echo $cid."&nbsp;"."權限編號".$as;
					switch($as)
					{
						case 1:
							echo "<td>最高權限</td>";
						break;
						case 2:
							echo "<td>一般權限</td>";
						break;
						default:
							echo "<td>未設權限</td>";
						break;
					}
				}
				else
				{
					echo "<td>".addslashes($as)."</td>";
				}
				$cid = $cid + 1;	// 控制目前走到哪欄
			}
			$cid = 0;
			next ($row);
		}
		else
		{
			//echo "session2".$_SESSION["pri"];
			if( $row["Pri"] != 1)
			{
				echo "<tr>";
				foreach ($row as $as)
				{ 
					$row[key($row)] = addslashes($as);
					//echo $cid."&nbsp;";
					if( $cid == 3 )
					{
						switch($as)
						{
							case 2:
								echo "<td>一般權限</td>";
							break;
							default:
								echo "<td>未設權限</td>";
							break;
						}
					}
					else
					{
						echo "<td>".addslashes($as)."</td>";
					}
					$cid = $cid + 1;
					next ($row);
				}
			}			
		}
		$cid = 0;
		echo "</tr>";
	}
	echo "</table>";
	mysql_close($link);
?>