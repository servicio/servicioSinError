<?php
session_start();
include'../clases/usuario.php';
include '../Dao/daoServicio.php';
$usuario = $_SESSION["UsuarioAlumno"];
$actulizar = new usuario();
$dao = new daoServicio();

$actulizar->setUsuario($usuario);
$actulizar->setNombres($_GET["nombre"]);
$actulizar->setApellidoPaterno($_GET["app"]);
$actulizar->setApellidoMaterno($_GET["apm"]);
$actulizar->setEmail($_GET["mail"]);
$dao->actulizarRegistroDatos($actulizar);
?>
