<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'marco.palmero2001@gmail.com';
$asunto = 'Galletanas';

mail($para, $asunto, utf8_decode($message), $header);

if(mail('marco.palmero2001@gmail.com', $asunto, $message)){
    echo "mail enviado";
}else{
    echo "algo salió mal";
}
alert("Correo enviado!");

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>