<?php
include '../clases/maestros.php';
$maestros = new maestros();
$maestros->setId($_GET["id"]);
$maestros->setMaestro($_GET["nombre"]);
?>
