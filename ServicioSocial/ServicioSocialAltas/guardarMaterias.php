<?php

include '../clases/historialAcademico.php';
include '../Dao/daoServicio.php';
$historial = new historialAcademico();
$dao = new daoServicio();
$dato1 = $_GET["materia"];
$historial->setMatricula($_GET["matricula"]);
$dato = $_GET["materiaComunes"];
if ($_GET["materiaComunes"] > 0) {
    $historial->setId_materia($_GET["materiaComunes"]);
} else {
    $historial->setId_materia($_GET["materia"]);
}

$historial->setAcredito($_GET["acreditacion"]);
$historial->setCalificacion($_GET["calificacion"]);
$historial->setIdCurso($_GET["tipoCurso"]);
$historial->setCursando($_GET["cursando"]);
$historial->setIngresoCursando($_GET["ingreso"]);
$historial->setCurso($_GET["c"]);
$historial->setAnio($_GET["a"]);
$verifica = $dao->consultavalidar($historial);
    $dao->insertarHistorial($historial);


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
