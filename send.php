<?
// �ϥ� GOOGLE phpmailer API
// http://code.google.com/a/apache-extras.org/p/phpmailer/
include("./PHPMailer_5.2.2/class.phpmailer.php"); //�פJPHPMailer���O


$mail= new PHPMailer(); //�إ߷s����
$mail->IsSMTP(); //�]�w�ϥ�SMTP�覡�H�H
$mail->SMTPAuth = true; //�]�wSMTP�ݭn����
$mail->SMTPSecure = "ssl"; // Gmail��SMTP�D���ݭn�ϥ�SSL�s�u
$mail->Host = "smtp.gmail.com"; //Gamil��SMTP�D��
$mail->Port = 465;  //Gamil��SMTP�D������(Gmail��465)�C
$mail->CharSet = "utf-8"; //�l��s�X

$mail->Username = "pecu610@gmail.com"; //�H�HGamil�b��
$mail->Password = ""; //�H�HGmail�K�X
$mail->From = $mail->Username; //�H��̫H�c�A�]�i�H�P�H�H���b���@��

$mail->FromName = "pecu"; //�H��̩m�W
$mail->Subject ="PECU PHP CLASS";  //�l����D
$mail->Body = $mailBody; //�l�󤺮e�A�i�H�ϥ�html�榡
$mail->IsHTML(true); //�l�󤺮e��html ( true || false)
$mail->AddAddress($emailAdd); //����̶l��ΦW�١A�H�n�H����ӫH�c
$mail->Send();
?>