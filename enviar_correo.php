<?php

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $message = $_POST['mensaje'];

  $header = 'From: ' , $email . "\r\n";
  $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
  $header .= "Mine-Version: 1.0 \r\n";
  $header .= "Content-Type: text/plain";

  $message = "Este mensaje fue enviado por: " . $nombre . "\r\n";
  $message = "Su apellido es: " . $apellido . " \r\n";
  $message = "Su mail es: " . $email . " \r\n";
  $message = "Su pedido de oración es: " . $mensaje . " \r\n";
  $message = "Enviado el: " . date('d/m/Y', time());


 
  $destinatario = "ffluna@gmail.com";
  $asunto = "Pedido de oración";

  mail($destinatario, $asunto, utf8_decode($message), $header)
  
  header("Location:index.html");

?>