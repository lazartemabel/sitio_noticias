<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", apellidos " . $apellidos . ", con telefono " . $telefono . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());
$para = 'ana.marcela.cairo@gmail.com';
$asunto = 'Contacto desde la pagina Web';

mail($para, $asunto, utf8_decode($mensaje), $header);
if(mail){
  	echo("<script language='JavaScript' type='text/JavaScript'>alert('Su mensaje ha sido enviado satisfactoriamente');open('http://www.noticiastacna.com','_parent'); </script>");
  } else 
  	echo("<script language='JavaScript' type='text/JavaScript'>alert('Ha ocurrido un error y NO se pudo enviar su mensaje. Int&eacute;ntelo m&aacute;s tarde o escr&iacute;banos al mail de contacto.');</script>");
?>
