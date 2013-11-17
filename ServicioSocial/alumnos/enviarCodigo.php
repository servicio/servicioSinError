<?php
session_start();
include '../Utilerias/class.phpmailer.php';
include './../Utilerias/class.smtp.php';
include '../Utilerias/Utilerias.php';
include '../clases/Correo.php';
$correo = new Correo();
$utilierias = new Utilerias();
$clave = $utilierias->genera_password(3, "alfanumerico");
$correo->setPara($_GET["mail"]);
$correo->setMensaje("Codigo Pacara cambiar la contraseña:<br> $clave" );
$correo->setAsunto("Codigo de Verificacion de Cambio de Contraseña");
$mail = new PHPMailer();
$utilierias->enviarCorreoElectronico($correo, $mail);
$_SESSION["clave"]= $clave;
?>