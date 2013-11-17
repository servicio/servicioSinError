<?php

session_start();
include '../clases/tutorias.php';
include '../Dao/daoServicio.php';
$tutorias = new tutorias();
$dao = new daoServicio();

$tutorias->setLugarViviendo($_GET["LugarViviendo"]);
if ($tutorias->getLugarViviendo() == "Otro") {
    $tutorias->setLugarViviendo($_GET["opcion1"]);
}

$tutorias->setEstCivilPadre($_GET["EstCivilPadre"]);
if ($tutorias->getEstCivilPadre() == "Otro") {
    $tutorias->setEstCivilPadre($_GET["opcion2"]);
}
$tutorias->setEscPadre($_GET["EscPadre"]);
if ($tutorias->getEscPadre() == "Otro") {
    $tutorias->setEscPadre($_GET["opcion3"]);
}
$tutorias->setEscMadre($_GET["EscMadre"]);
if ($tutorias->getEscMadre() == "Otro") {
    $tutorias->setEscMadre($_GET["opcion3y2"]);
}
$tutorias->setIngresosMenFam($_GET["IngresosMenFam"]);
$tutorias->setRelacionPadre($_GET["RelacionPadre"]);
$tutorias->setRelacionMadre($_GET["RelacionMadre"]);
$tutorias->setFuenteIngreso($_GET["FuenteIngreso"]);
if ($tutorias->getFuenteIngreso() == "Otro") {
    $tutorias->setFuenteIngreso($_GET["opcion7"]);
}

$tutorias->setNumHermanos($_GET["NumHermanos"]);
//Agregado
$tutorias->setLugarOcupas($_GET["txtLugarOcupas"]);
$tutorias->setEspecialidad($_GET["txtEspecialidad"]);
$tutorias->setPromedio($_GET["txtPromedio"]);
$tutorias->setHereditaria($_GET["rbtHereditaria"]);
$tutorias->setHereditariaQuien($_GET["txtHereditariaQuien"]);
$tutorias->setMental($_GET["rbtMental"]);
$tutorias->setMentalCual($_GET["txtMentalCual"]);
//-----
$tutorias->setPerPlaticar($_GET["PerPlaticar"]);
if ($tutorias->getPerPlaticar() == "Otro") {
    $tutorias->setPerPlaticar($_GET["opcion6"]);
}
//---
$tutorias->setEscuela1($_GET["txtEscuela1"]);
$tutorias->setEstado1($_GET["txtEstado1"]);
$tutorias->setGrado1($_GET["txtGrado1"]);
$tutorias->setEscuela2($_GET["txtEscuela2"]);
$tutorias->setEstado2($_GET["txtEstado2"]);
$tutorias->setGrado2($_GET["txtGrado2"]);
$tutorias->setEscuela3($_GET["txtEscuela3"]);
$tutorias->setEstado3($_GET["txtEstado3"]);
$tutorias->setGrado3($_GET["txtGrado3"]);
//---
$tutorias->setHabMaterias($_GET["HabMaterias"]);
$tutorias->setEstudiosExtTec($_GET["EstudiosExtTec"]);
$tutorias->setCualExtTec($_GET["CualExtTec"]);
$tutorias->setPasatiempos($_GET["Pasatiempos"]);
$tutorias->setTrabajas($_GET["Trabajas"]);
$tutorias->setDondeTrabajas($_GET["DondeTrabajas"]);
$tutorias->setOcupacionTrab($_GET["OcupacionTrab"]);
$tutorias->setPorqTrab($_GET["PorqTrab"]);
$tutorias->setIngresastRazTec($_GET["IngresastRazTec"]);
if ($tutorias->getIngresastRazTec() == "Otro") {
    $tutorias->setIngresastRazTec($_GET["opcion13"]);
}
$tutorias->setIngresastRazCar($_GET["IngresastRazCar"]);
if ($tutorias->getIngresastRazCar() == "Otro") {
    $tutorias->setIngresastRazCar($_GET["opcion14"]);
}
$tutorias->setAlergias($_GET["Alergias"]);
$tutorias->setCualAlergia($_GET["CualAlergia"]);
$tutorias->setCronica($_GET["Cronica"]);
$tutorias->setCronicaCual($_GET["CronicaCual"]);
$tutorias->setAtencionPsi($_GET["AtencionPsi"]);
$tutorias->setCualAtencionPsi($_GET["CualAtencionPsi"]);
$tutorias->setAtencionMedica($_GET["AtencionMedica"]);
$tutorias->setBebidasAlc($_GET["BebidasAlc"]);
$tutorias->setFumador($_GET["Fumador"]);
$tutorias->setProblemLegal($_GET["ProblemLegal"]);
$tutorias->setMotivo($_GET["Motivo"]);
$tutorias->setDeporte($_GET["Deporte"]);
$tutorias->setCualDep($_GET["CualDep"]);
$tutorias->setFrecuenciaDept($_GET["FrecuenciaDept"]);
$tutorias->setRealizado(1);
$tutorias->setUsuario($_SESSION["UsuarioAlumno"]);
$dao->guardarEncuesta($tutorias);
?>