<?php
if( ! isset( $_POST['nombre'])){
    header("Location: index.html");
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$message2 = $_POST['mensaje'];

$header = "From: $email . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain; charset=utf-8";

$message = "Este mensaje fue enviado por: " . $nombre . "\r\n";
$message .= "Su apellido es: " . $apellido . " \r\n";
$message .= "Su mail es: " . $email . " \r\n";
$message .= "Su pedido de oración es: " . $message2 . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$destinatario = "ffluna@gmail.com";
$asunto = 'Pedido de oración';

$rta = mail($destinatario, $asunto, utf8_decode($message), $header);
var_dump($rta);

?>
