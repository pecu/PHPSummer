<?php

$mailBody = $_POST["mailbody"];
$emailAdd = $_POST["email"];

set_time_limit(2000);//設定PHP執行時間

include "send.php";

$url = "e_Store.php?WebNo=6";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";
?>
