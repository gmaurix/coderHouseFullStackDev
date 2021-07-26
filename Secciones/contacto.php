<?php
// Conecto mi form con el server a traves de los name
$nombre = $_POST['nombre'];
$apellido=$_POST['apellido']
$mail = $_POST['email'];
$telefono=$_POST['telefono']
$mensaje = $_POST['mensaje'];
​
// Como funciona con el server
$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
​
// Como me a llegar el cuerpo del mail a mi, o sea lo que la gente escribió en el form
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "El telefono es: " . $telefono . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());
​
$para = 'utn.mauri@gmail.com'; // El mail a donde van a llegar los mensajes
$asunto = 'Mensaje desde Iguana Bar';
​
mail($para, $asunto, utf8_decode($mensaje), $header);
​
header('Location:index.html');
​
?>