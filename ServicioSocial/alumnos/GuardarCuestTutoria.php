<?php
session_start();
include '../Dao/daoServicio.php';
include '../clases/CuestionarioTutoria.php';
$dao = new daoServicio();
$guardar = new CuestionarioTutoria();
$usuario=$_SESSION["UsuarioAlumno"];
?>
<?php
$guardar->setMatricula($usuario);
$guardar->setPregunta1($_GET["disposicion"]);
$guardar->setPregunta2($_GET["cordialidad"]);
$guardar->setPregunta3($_GET["respeto"]);
$guardar->setPregunta4($_GET["interes"]);
$guardar->setPregunta5($_GET["capacidad"]);
$guardar->setPregunta6($_GET["disposicion"]);
$guardar->setPregunta7($_GET["resolver"]);
$guardar->setPregunta8($_GET["orientar"]);
$guardar->setPregunta9($_GET["dificultades"]);
$guardar->setPregunta10($_GET["estimular"]);
$guardar->setPregunta11($_GET["formacion"]);
$guardar->setPregunta12($_GET["dominio"]);
$guardar->setPregunta13($_GET["localizar"]);
$guardar->setPregunta14($_GET["normativa"]);
$guardar->setPregunta15($_GET["seleccion"]);
$guardar->setPregunta16($_GET["canaliza"]);
$guardar->setPregunta17($_GET["mejorado"]);
$guardar->setPregunta18($_GET["programa"]);
$guardar->setPregunta19($_GET["satisfactorio"]);
$guardar->setPregunta20($_GET["asignado"]);

$dao->guardarEncuestaTUTO($guardar);

include './class.phpmailer.php';
include './class.smtp.php';

//$de = "shanaxchornos@gmail.com";//$_GET["email"];
$para = "shanaxchornos@gmail.com"; 
$asunto = "Cuestionario Respondido";
$mensaje = "El alumno $usuario ha respondido el Cuestionario";
$cabeceras = "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-type: text/html; charset=ISO-8859-1\r\n";
//$cabeceras .= "From: $de \r\n";


////Trabajando con PHPMailer
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->IsHTML = true;
$mail->SMTPAuth = true; //Autentificacion de SMTP
$mail->SMTPSecure = "ssl"; //SSL socket layer
$mail->Host = "smtp.gmail.com"; //Servidor de SMTP 
$mail->Port = 465; // 465
//$mail->From = $de; //Remitente (En mi variable)
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


header('Location: index.php');

?>
