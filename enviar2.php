<?php

$nombre = $_POST ['nombre'];
$mail = $_POST ['mail'];
$asunto = $_POST ['asunto'];

$mensaje = "Este mensaje fue enviado por". $nombre; 
$mensaje = "Su E-mail es" $mail;
$mensaje = "Mensaje:" . $_POST ['mensaje'];

$para= 'marianelabihurriet@gmail.com';
$asunto= 'Mensaje de Mi sitio web';

mail($para, $asunto, $mensaje);

header("location:index.html");
?>
