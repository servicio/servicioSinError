<!--Re:-->
<?php
session_start();
include "../Utilerias/generarPass.php";
include "./class.phpmailer.php";
include "./class.smtp.php";
include '../DaoConnection/coneccion.php';

$usuari = $_GET["nombre"];

$cn = new coneccion();
$sql = "SELECT * FROM datosregistrousuario WHERE usuario='$usuari'";
$datos = mysql_query($sql, $cn->Conectarse());
$genera = new Utilerias();

while ($rs = mysql_fetch_array($datos)) {
   $usuario = $rs["usuario"];
   $nombre =   $rs["nombres"];
   $apellidoP = $rs["apellidoPaterno"];
   $apellidoM = $rs["apellidoMaterno"];
   $correo = $rs["email"];
}
$acepto = $_GET["acepto"];
if($acepto ==1)
    {
    $pass = $genera->genera_password(6, $tipo = "alfanumerico");
    $mensaje = "<h1>Bienvenido $nombre $apellidoP $apellidoM</h1>  <br> 
            Tu Usuario es : $usuario <br>
            Tu password para tu acceso es : $pass<br>
            <h2>Recuerda que los datos que proporcionaste no van a ser accedidos por personas
            ajenas a tí</h2><br>
            <h1>  Exito en este curso</h1>";
    }
    else{
    $mensaje = "<h1>Lo sentimos hubo problemas al autorizar tu contraseña</h1><br>
                por favor pasa a Coordinacion para verificar tus datos<br>
                <h2>Exito en este Curso</h2>";
    }



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