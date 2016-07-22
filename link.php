<?
	session_start();
	if( $_SESSION["Name"] == "" )
	{
		$url = "index.php?WebNo=0";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
	}
	else
	{

		//echo "歡迎".$_SESSION["Name"]."進入本站";

		include "link_org.php";
   
   }
?>