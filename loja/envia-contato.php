<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once("PHPMailerAutoload.php");

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = ":D";
$mail->Password = ":D";

$mail->setFrom(":D", "Minha Loja");
$mail->addAddress(":D");
$mail->Subject = "Obrigado Pelo contato <3";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail: {$email}\nmensagem:{$mensagem}";
echo !extension_loaded('openssl')?"Not Available":"Available";
if($mail->send()) {
	$_SESSION["success"] = "Mensagem enviada com sucesso";
	header("Location: index.php");
} else {
	$_SESSION["danger"] = "Erro ao enviar mensagem" . $mail->ErrorInfo;
	header("Location: contato.php");
}
die();