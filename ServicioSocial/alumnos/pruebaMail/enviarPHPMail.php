<?php
include './class.phpmailer.php';
include './class.smtp.php';

$de = "shanaxchornos@gmail.com";//$_GET["email"];
$para = "email@coordinacion"; 
$asunto = "Cuestionario Respondido";
$mensaje = "El alumno $alumno ha respondido el Cuestionario";
$cabeceras = "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$cabeceras .= "From: $de \r\n";


////Trabajando con PHPMailer
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->IsHTML = true;
$mail->SMTPAuth = true; //Autentificacion de SMTP
$mail->SMTPSecure = "ssl"; //SSL socket layer
$mail->Host = "smtp.gmail.com"; //Servidor de SMTP 
$mail->Port = 465; // 465
$mail->From = $de; //Remitente (En mi variable)
$mail->AddAddress($para); //Destinatario
$mail->Username = "shanaxchornos@gmail.com";
$mail->Password = "catscagats"; //Aqui va la contraseña valida de tu correo
$mail->Subject = $asunto; //El asunto de correo
$mail->WordWrap = 50; //# de columnas
$mail->MsgHTML($mensaje); //Se indica que el cuerpo del correo tendra formato HTML

if ($mail->Send()) {//Enviamos el correo por PHPMailer
    $respuesta = "El mensaje a sido enviado desde tu cuenta de Gmail :)";
} else {
    $respuesta = "El mensaje no a sido enviado :(";
    $respuesta .= "Error: " . $mail->ErrorInfo;
}

echo $respuesta;
?>