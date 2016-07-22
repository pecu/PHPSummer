<div class=\"post\"><h2 class=\"title\">Welcome to Varicolored</h2><p class=\"meta\"><span class=\"date\">January 15, 2013</span><span class=\"posted\">Posted by <a href=\"#\">Someone</a></span></p>
						<div style=\"clear: both;\">&nbsp;</div>
						<div class=\"entry\">

<?

$nowNo = $_GET["WebNo"];
$SubWebNo = $_GET["SubWebNo"];

$check = $nowNo.$SubWebNo;

switch ($check)
{
	case -1:
		include "f1-0.php";
		break;
	case -11:
		include "forgetPass.php";
		break;
    case 0:
		include "login.php";
        break;

	case 1:
	case 13:	// 帳號管理的列出
		include "f1.php";
        break;
	case 10:	// 帳號管理的新增
		include "f1-0.php";
		break;
	case 11:	// 帳號管理的修改
		if($_SESSION["pri"] == 1)
		{
			echo "歡迎".$_SESSION["Name"]."進入帳號修改頁面";
			include "f1-1.php";
		}
		break;
	case 110:	// 帳號管理修改內頁
		include "f1-1-0.php";
		break;
	case 1100:	// 帳號管理修改內頁 - 確定送至SQL執行
		echo "確定送至SQL執行";
		include "f1-1-in.php";
		break;
	case 12:	// 帳號管理的刪除
		include "f1-2.php";
		break;
	case 120:	// 帳號管理的刪除 - 確定送至SQL執行
		include "f1-2-in.php";
		break;
    case 2:
	case 23:
		include "f2.php";
        break;
	case 21:	// 商品管理的修改
		include "f2-1.php";
		break;
	case 210:	// 商品管理的修改內頁 (f2-1-in.php update)
		include "f2-1-0.php";
		break;	
	case 22:	// 商品管理的刪除
		include "f2-2.php";
		break;	
	case 20:	// 商品管理的新增
		include "f2-0.php";
		break;		

    case 3:
	case 33:
		include "f3.php";
        break;
	case 30:
		include "f3-0.php";
		break;		

    case 4:
	case 43:
		include "f4.php";
        break;
	case 40:
		include "f4-0.php";
		break;		

    case 5:
	case 53:
		include "f5.php";
        break;
	case 50:
		include "f5-0.php";
		break;
		
    case 6:
		include "f6.php";
        break;

    case 7:
		include "f7.php";
        break;
	case 8:	// 公司地點
	case 80:
		include "f8.php";
		break;
	case 81:
		include "f8-1.php";
		break;
		
}
?>
</div></div>