<?
$nowNo = $_GET["WebNo"];
echo "<ul>";
if($_SESSION["pri"] == 1)
{
	for($i = 0; $i < count($menulist); $i++)
	{
		echo "<li><a href=\"".$mainWeb."?WebNo=".$nowNo."&SubWebNo=".$i."\">".$menulist[$i]."</a></li>";
	}
}
else if($_SESSION["pri"] == 2)
{
	echo "<li><a href=\"".$mainWeb."?WebNo=".$nowNo."&SubWebNo=0\">".$menulist["0"]."</a></li>";
	echo "<li><a href=\"".$mainWeb."?WebNo=".$nowNo."&SubWebNo=3\">".$menulist["3"]."</a></li>";
}
else
{
}
echo "</ul>";
?>