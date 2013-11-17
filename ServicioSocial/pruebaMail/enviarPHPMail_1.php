<?php

//aqui es donde jalo los datos sin llegar al formulario
//entoces, agarro el correo y genero el pass
include '../autorizarOrechazar.php';
include '../Utilerias/generarPass.php';
$genera = new Utilerias();
$pass = $genera->genera_password();
//$md5 = $genera->genera_md5($pass);

$de = 'coordinacion'; //<-------- aqui, ya? si
$para = 'comodoro_21@hotmail.com';//$_GET["email"]; //<---- este mail es un mail correcto y valido? si, es el mio aja
//y estas usando tambien el tuyo como CORREO MADRE-_-
//no pendejaok


$asunto = 'Contraseña';
$mensaje = "HOla como estas";
$cabeceras = "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$cabeceras .= "From: $de \r\n";

//Trabajando con PHPMailer
//aqui como me dijiste que debian estar incluidos los 3 pues inclui el tercero
include_once ("class.phpmailer.php");
include_once ("class.smtp.php");
//include_once ("class.pop3.php");//<-------este de aqui
//ahora tomo los datos y los envio con las configuraciones de hotmail
//puerto 26, el host y demas,,, pero aun no logro dar con la configuracion correcta
//para que se pueda enviar,,,, en eso ando
// deja que cambia algunas cosas...
$mail = new PHPMailer(); //Objeto de PHPMailer
//$mail->Mailer = "smtp"; //Protocolo SMTP
$mail->IsSMTP();
$mail->SMTPAuth = true; //Autentificacion de SMTP
$mail->SMTPSecure = "tls"; //SSL socket layer
$mail->Host = "pop3.live.com"; //Servidor de SMTP 
//$mail->SMTPAuth = true;
$mail->Port = 465; //Puerto seguro del servidor SMTP 465 espera!!!!
$mail->From = $de; //Remitente (En mi variable)
$mail->AddAddress($para); //Destinatario
$mail->Username = "beliko00@hotmail.com"; /* Tienes que poner una direccion de correo real y de del servidor SMTP seleccionado */
$mail->Password = "guadalupe23"; //Aqui va la contraseña valida de tu correo
$mail->Subject = $asunto; //El asunto de correo
$mail->Body = $mensaje; //El mensaje de correo
$mail->WordWrap = 50; //# de columnas
$mail->MsgHTML($mensaje); //Se indica que el cuerpo del correo tendra formato HTML
//$mail->IsHTML(false);
//$mail->AddAttachment($destino); //Accedemos al archivo que se subio al servidor y lo adjuntamos

$mail->Send(); //Enviamos el correo por PHPMailer
if ($mail->Send()) {//Enviamos el correo por PHPMailer
    $respuesta = "El mensaje a sido enviado desde tu cuenta ";
} else {
    $respuesta = "El mensaje no a sido enviado :(";
    $respuesta .= "Error: " . $mail->ErrorInfo;
}
echo $respuesta;
//jose! ponlo a trabajar, envia algo quiero ver que hace...
//eres una pendeja, y la variable $destino???
// yq ue problema hay si no teine nada
//que va a dar error, porque ahi se supone esta la direccion del archivo a subir o algo asi
//quieres limitarte a hacerlo funcionar. que vea que hace gracias
//7.7
// y ese mesaje dondequeda?

?>

