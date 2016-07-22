<?

if( $_SESSION["Name"] == "" )
	$admin = "登入";
else
	$admin = "登出";	

$menulist = array( $admin, "帳號管理", "商品管理", "客戶管理", 
				   "訂單管理", "廠商管理", "暢銷商品", "統計", "地圖" );
$menuFile = array( "index.php", "a_AdminUser.php", "b_Products.php", "c_Users.php",
				   "d_Order.php", "e_Store.php", "f_ProductOne.php", "g_Money.php", "index.php" );

include "menulist.php";
	
?>