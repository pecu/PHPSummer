<?
// 使用 GOOGLE phpmailer API
// http://code.google.com/a/apache-extras.org/p/phpmailer/
include("./PHPMailer_5.2.2/class.phpmailer.php"); //匯入PHPMailer類別


$mail= new PHPMailer(); //建立新物件
$mail->IsSMTP(); //設定使用SMTP方式寄信
$mail->SMTPAuth = true; //設定SMTP需要驗證
$mail->SMTPSecure = "ssl"; // Gmail的SMTP主機需要使用SSL連線
$mail->Host = "smtp.gmail.com"; //Gamil的SMTP主機
$mail->Port = 465;  //Gamil的SMTP主機的埠號(Gmail為465)。
$mail->CharSet = "utf-8"; //郵件編碼

$mail->Username = "pecu610@gmail.com"; //寄信Gamil帳號
$mail->Password = ""; //寄信Gmail密碼
$mail->From = $mail->Username; //寄件者信箱，也可以與寄信的帳號一樣

$mail->FromName = "pecu"; //寄件者姓名
$mail->Subject ="PECU PHP CLASS";  //郵件標題
$mail->Body = $mailBody; //郵件內容，可以使用html格式
$mail->IsHTML(true); //郵件內容為html ( true || false)
$mail->AddAddress($emailAdd); //收件者郵件及名稱，信要寄到哪個信箱
$mail->Send();
?>