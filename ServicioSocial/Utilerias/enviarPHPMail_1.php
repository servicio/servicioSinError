<!--Re:-->
<?php
session_start();
include "./class.phpmailer.php";
include "./class.smtp.php";




$de = "shanaxchornos@gmail.com";
$para = $correo; //$_GET["email"];
$asunto = "Contraseña";
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
$mail->Body = $pass; //$mensaje; //El mensaje de correo
$mail->WordWrap = 50; //# de columnas
$mail->MsgHTML($mensaje); //Se indica que el cuerpo del correo tendra formato HTML

$utilierias =  new Utilerias();
$passMd5 = $utilierias->genera_md5($pass);
$sql ="INSERT INTO usuarios(usuario, pass, tipo) values('$usuario','$passMd5', '3')";
mysql_query($sql, $cn->Conectarse());
$sqlActualizar = "UPDATE datosregistrousuario set autorizado = 1 where usuario = '$usuario'";
mysql_query($sqlActualizar, $cn->Conectarse());
if ($mail->Send()) {//Enviamos el correo por PHPMailer
    $respuesta = "El mensaje a sido enviado desde tu cuenta de Gmail :)";
} else {
    $respuesta = "El mensaje no a sido enviado :(";
    $respuesta .= "Error: " . $mail->ErrorInfo;
}

echo $respuesta;
?>