<?php
date_default_timezone_set('America/Mexico_City');
$aviso = "";

if ($_POST['nombre'] != "") {
  $direccion_envio="informes@kaobah.com.mx";
  //Enviamos el correo
  $headers = "From: noreplay@kaobah.com.mx\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $contenido = "";
  $contenido .= '<h4>Contacto Kaobah</h4>';
  $contenido .= '<p>Enviado el '.   date("Y-m-d H:i:s").'</p>';
  $contenido .= '<p>Nombre: <strong>'.htmlspecialchars($_POST['nombre']).'</strong></p>';
  $contenido .= '<p>E-mail: <strong>'.htmlspecialchars($_POST['correo']).'</strong></p>';
  $contenido .= '<p>Mensaje: <strong>'.htmlspecialchars($_POST['mensaje']).'</strong></p>';
  $mail = mail($direccion_envio, 'Contacto NIWA', $contenido, $headers);
  if ($mail) {
    header("Location: gracias-kaobah.html");
    die();
  } else {
    header("Location: contacto-kaobah.html");
    die();
  }
}
?>
