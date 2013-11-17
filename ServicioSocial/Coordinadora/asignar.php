<?php
include '../clases/tutotMaestrosAlumnos.php';
include '../Dao/daoServicio.php';
$servicio = new daoServicio();

$asignacion = new tutotMaestrosAlumnos();
$asignacion->setIdMaestro($_GET["maestro"]);
$asignacion->setMatricula($_GET["alumnos"]);
$servicio->asignarAlumnoTutor($asignacion);
?>
