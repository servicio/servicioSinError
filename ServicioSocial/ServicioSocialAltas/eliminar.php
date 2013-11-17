<?php
include '../DaoConnection/coneccion.php';
$cn = new coneccion();
$idMateria = $_GET["id"];
$usuario = $_GET["usuario"];
$usuario = $_GET["usuario"];
$sql = "DELETE FROM historial WHERE idMateria = $idMateria and usuario = '$usuario'";
mysql_query($sql, $cn->Conectarse());
$cn->cerrarBd();
header('Location: index.php');
?>
