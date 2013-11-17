<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * Para que el correo pueda ser enviado se require de un servidor con SMTP configurado
 * Esta url nos dirige a un archivo cargado en un server de prueba para este ejercicio http://bextlan.com/recursos/curso-PHP/enviar-mail.php (Ya no funciona! >_<)
 */
$de = $_POST["txtDe"];
$para = $_POST["txtPara"];
$asunto = $_POST["txtAsunto"];
$mensaje = $_POST["txaMensaje"];
$cabeceras = "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$cabeceras .= "From: $de \r\n";

if (mail($para, $asunto, $mensaje, $cabeceras)) {
    $respuesta = "El mensaje a sido enviado :)";
} else {
    $respuesta = "No se enviaronn los datos :(";
}
header("Location: formularioMail.php?respuesta=$respuesta");
?>
