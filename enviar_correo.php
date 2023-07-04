<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  $destinatario = "ffluna@gmail.com";
  $asunto = "Mensaje de contacto";

  $contenido = "Nombre: $nombre\n";
  $contenido .= "Apellido: $apellido\n";
  $contenido .= "Email: $email\n";
  $contenido .= "Mensaje: $mensaje\n";

  $headers = "From: $email\n";
  $headers .= "Reply-To: $email\n";

  if (mail($destinatario, $asunto, $contenido, $headers)) {
    echo "El mensaje se ha enviado correctamente.";
  } else {
    echo "Error al enviar el mensaje.";
  }
}
?>