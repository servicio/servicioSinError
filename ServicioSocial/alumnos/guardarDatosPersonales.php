<?php
session_start();
$url = $_SESSION["url"];
include'../clases/usuario.php';
include '../Dao/daoServicio.php';
$guardar = new usuario();
$dao = new daoServicio();

$guardar->setUsuario($_GET["usuario"]);
$guardar->setNombres($_GET["nombre"]);
$guardar->setApellidoPaterno($_GET["apellidoP"]);
$guardar->setApellidoMaterno($_GET["apellidoM"]);
$guardar->setEmail($_GET["correo"]);
$guardar->setFoto($url);
$_SESSION["usuario"]=$guardar->getUsuario();
$dao->guardarRegistroDatos($guardar);
?>
<script language="javascript">
</script>




