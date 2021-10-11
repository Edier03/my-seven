<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$message = $_POST['message'];

$header = 'From: ' .  $mail . " \r\n";
$header ="X-Mailer: PHP" . phpversion() . " \r\n";
$header = "Mime-Version: 1.0  \r\n";
$header = "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name .  " \r\n";
$message = "Su e-mail es: " . $mail .  " \r\n";
$message = "Telefono de contacto: " . $phone .  " \r\n";
$message = "Enviado el: " . date('d/m/y', time());

$para = 'ediermedina03@gmail.com';
$asunto = 'Usuario de My Seven';

mail($para, $asunto, utf8_decode($message), $header);

header("Location: admin.html");
?>