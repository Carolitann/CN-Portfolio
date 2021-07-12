<?php
$mail = $_POST['email'];
$mensaje = $_POST['mensaje'];
$nombre = $_POST['nombre'];

$header .= 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . "\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y' , time());


$para = 'carolinadevweb@gmail.com'; 

mail($para, utf8_decode($mensaje), $header);

header('Location:index.html');

?>