<ul>
<?
for($i = 0; $i < count($menulist); $i++)
{
    echo "<li><a href=\"".$menuFile[$i]."?WebNo=".$i."\">".$menulist[$i]."</a></li>";
}
?>
</ul>