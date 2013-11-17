<?php
session_start();
include '../clases/usuario.php';
include '../Utilerias/Utilerias.php';
include '../Dao/dao.php';
$usuario = new usuario();
$utilierias = new Utilerias();
$dao = new dao();
$usuario->setPass($utilierias->genera_md5($_POST["pass"]));
$usuario->setUsuario($_SESSION["UsuarioAlumno"]);
$dao->ActualizarContraseña($usuario);
?>
