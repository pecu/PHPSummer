<?
$nowNo = $_GET["WebNo"];
$SubWebNo = $_GET["SubWebNo"];

$check = $nowNo.$SubWebNo;

switch ($check)
{
	case 1:
	case 10:
	case 110:
	case 11:
	case 12:
	case 13:
		include "smf1.php";
        break;
    case 2:
	case 20:
	case 23:
	case 21:
	case 22:
	case 210:
		include "smf2.php";
        break;
    case 3:
	case 30:
	case 33:
		include "smf3.php";
        break;
    case 4:
	case 40:
	case 43:
		include "smf4.php";
        break;
    case 5:
	case 50:
	case 53:
		include "smf5.php";
	case 8:
	case 80:
	case 81:
		include "smf8.php";
        break;
}
							
?>