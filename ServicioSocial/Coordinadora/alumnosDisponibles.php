<?php

include '../DaoConnection/coneccion.php';
$cn = new coneccion();

$sql="SELECT * FROM datospersonales dp where dp.usuario not in (SELECT matricula FROM tutotmaestrosalumnos)";

//$sql = "SELECT historial.usuario, Nombre, apellidoPaterno, apellidoMaterno FROM historial, datosPersonales where historial.usuario = datospersonales.usuario and historial.ingresoCursado=$idIngreso and
//historial.usuario NOT IN (SELECT matricula FROM tutotmaestrosalumnos)";
$datos = mysql_query($sql, $cn->Conectarse());

echo '<select id="alumnos">
        <option value="">Alummno</option>';
while ($rs = mysql_fetch_array($datos)) {
    $nombre = $rs[2]. "&nbsp;". " $rs[3] " ."&nbsp;"."$rs[4]";
    echo '
        <option value="'.$rs["usuario"].'">'.$nombre.'</option>
         ';
}
echo'</select>';
?>
