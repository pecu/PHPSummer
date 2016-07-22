<?
	$tableName = "adminuser";
	$rowNum = 5;

	$Name = $_POST["Name"];
	$PassWord = $_POST["PassWord"];
	$Pri = $_POST["Pri"];

	/** Validate captcha */
	if (!empty($_REQUEST['captcha']))
	{
		if (empty($_SESSION['captcha']) || trim(strtolower($_REQUEST['captcha'])) != $_SESSION['captcha'])
		{
			$url = "a_AdminUser.php?WebNo=1&SubWebNo=0&Name=".$Name."&PassWord=".$PassWord."&Pri=".$Pri;
			echo "<script type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
		else
		{
			include "link_org.php";

			$setTodb = "SELECT Name FROM ".$tableName." WHERE Name='".$Name."'";
			//echo $setTodb;
			$result = mysql_query($setTodb);
			$row = mysql_fetch_assoc($result);

			if( $row["Name"] == "" )
			{
				$setTodb = "INSERT INTO ".$tableName."(Name, PassWord, Pri) VALUES('".$Name."','".$PassWord."',".$Pri.")"; 
				
				//echo $setTodb;
				
				$result = mysql_query($setTodb);
				mysql_close($link);
				
				session_start();
				if( $_SESSION["Name"] == "" )
				{	
					$url = "index.php";
				}
				else
				{
					$url = "a_AdminUser.php?WebNo=1&SubWebNo=0";
				}	
				echo "<script type='text/javascript'>";
				echo "window.location.href='$url'";
				echo "</script>";
			}
			else
			{
				//echo $row["Name"];
				mysql_close($link);
				$url = "a_AdminUser.php?
				WebNo=1&SubWebNo=0&Name=".$Name."&PassWord=".$PassWord."&Pri=".$Pri;
				//echo $url;
				echo "<script type='text/javascript'>";
				echo "window.location.href='$url'";
				echo "</script>";
			}			
		}
		unset($_SESSION['captcha']);
		
	}?>