<?php

session_start();
include '../DaoConnection/coneccion.php';
$cn = new coneccion();
$id = $_SESSION["idMaestroSession"];
$sql = "SELECT * from tutotmaestrosalumnos, datosPersonales WHERE idMaestro = $id and matricula = usuario";
$datos = mysql_query($sql, $cn->Conectarse());
echo "<datalist>";
while ($rs = mysql_fetch_array($datos)) {
    echo"<option>" . $rs[5] . "</option>";
}
echo "</datalist>";
$cn->cerrarBd();
?>
