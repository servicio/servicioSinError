<?php
session_start();
include '../clases/avisosTutor.php';
include '../Dao/daoServicio.php';

$dao = new daoServicio();
$avisosTutor = new avisosTutor();

$avisosTutor->setTitulo($_GET["titulo"]);
$avisosTutor->setDetalle($_GET["detalle"]);
$usuario=$_SESSION["Usuario"];
$avisosTutor->setUsuario($usuario);
$avisosTutor->setControl($_GET["para"]);//maestro=2
$avisosTutor->setLeido(0);//no leido=0


$dao->guardarTutorias($avisosTutor);

echo 'Guardar';

?>