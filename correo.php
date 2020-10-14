<?php
   $destinatario = 'romo.sendejas.rubi@gmail.com'
   //esto es al correo al que se enviara el mensaje
   $nombre = $_POST['nombre'];
   $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];
  $email = $_POST['email'];


  $header = "Enviado desde la pagina Fashion Girl";
  $mensajeCompleto = $mensaje . "\nAtentamente:  "  . $nombre;


  mail($destinatario, $asunto, $mensajeCompleto, $header);
  echo "<script>alert('correo enviado exitosamente')</script>"
  echo "<script>m_settimeout(\"location.href= 'index.html'\",100)</script>";
  





?>