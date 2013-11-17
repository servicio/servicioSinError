<?php

include '../clases/sessionTutorias.php';
include '../Dao/daoServicio.php';
$sesion = new sessionTutorias();
$dao = new daoServicio();
$_GET;
$sesion->setMatricula($_GET["usuarios"]);
$sesion->setFecha($_GET["fecha"]);
$sesion->setDescripcionSesion($_GET["descripcion"]);
$sesion->setObjetivos($_GET["objetivos"]);
$sesion->setObservaciones($_GET["observaciones"]);
$sesion->setTareasAsignadas($_GET["tareasAsignadas"]);
$sesion->setNumeroSession($_GET["numeroSession"]);
$dao->guardarSessionTutorado($sesion);

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
