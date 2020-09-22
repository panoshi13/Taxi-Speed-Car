<?php
$nombre = isset($_POST['nombre']) ? $_POST['nombre']: false;
$mail = isset($_POST['email']) ? $_POST['email']: false;
$empresa = isset($_POST['mensaje']) ? $_POST['mensaje']: false;

if ($nombre && $mail && $empresa) {
    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
    $mensaje .= "Su e-mail es: " . $mail . " \r\n";
    $mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
    $mensaje .= "Enviado el " . date('d/m/Y', time());

    $para = 'taxispeedcar8@gmail.com';
    $asunto = 'Contacto Taxi Speed Car';

    mail($para, $asunto, utf8_decode($mensaje), $header);
    echo "true";
}else{
    echo "false";
}
