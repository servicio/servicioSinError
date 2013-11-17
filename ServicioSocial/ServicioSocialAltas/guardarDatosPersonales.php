<?php

include '../clases/datosPersonales.php';
include '../Dao/daoServicio.php';
$daoServicio = new daoServicio();
$datosPersonales = new datosPersonales();
$datosPersonales->setUsuario($_GET["matricula"]);
$datosPersonales->setNombre($_GET["nombre"]);
$datosPersonales->setApellidoPaterno($_GET["apellidoP"]);
$datosPersonales->setApellidoMaterno($_GET["apellidoM"]);
$daoServicio->guardarAlumnos($datosPersonales);

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
