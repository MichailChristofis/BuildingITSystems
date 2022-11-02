<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require_once "vendor/autoload.php";
$subject=$_POST["subject"];
$email=$_POST["email"];
$message="New message from: RecipeWise<br />".$_POST["message"];
$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->Host = "premium32.web-hosting.com";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'support@recipewis.recipes';
$mail->Password = '6YvgCpYfeEKKz4w';
$mail->From = "support@recipewis.recipes";
$mail->FromName = "RecipeWise";
$mail->addAddress($email);
$mail->isHTML(true);
$mail->Subject=$subject;
$mail->Body=$message;
try {
  $mail->send();
  echo "Message has been sent successfully";
  json_encode(["resp"=> 1]);
} catch (Exception $e) {
  echo "Mailer Error: " . $mail->ErrorInfo;
}
?>