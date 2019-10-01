<?php

session_start();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\OAuth;

require_once("PHPMailer.php");
require_once("Exception.php");
require_once("SMTP.php");

$nome = $_POST["nome"];
$email= $_POST["email"];

$mensagem = $_POST["mensagem"];

$mail = new PHPMailer(true);
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPAuth = true;
$mail->Username = "leonardo.anselmo@gmail.com";
$mail->Password = "t2X3t4x5T6x7T8x9T0x-T1x2T3x4T5x6T7x";

$mail->setFrom("leonardo.anselmo@gmail.com", "Leonardo Anselmo");
$mail->addAddress("leonardo.anselmo@gmail.com");
$mail->Subject = "Email de contato da loja";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";

if($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location: index.php");
} else {
    $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: contato.php");
}
die();