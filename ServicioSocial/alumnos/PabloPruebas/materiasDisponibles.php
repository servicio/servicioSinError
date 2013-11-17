<?php

include '../../Dao/daoServicio.php';
include '../../DaoConnection/coneccion.php';
$cn = new coneccion();
$daoServicio = new daoServicio();
$paso = $daoServicio->verificacionInsertarPrecarga('12345678');

$sql = "INSERT INTO precarga (usuario, idMateria)
select datospersonales.usuario, idMateria FROM historial, datospersonales
WHERE calificacion < 70 and idAcreditacion =1 
and historial.usuario = datospersonales.usuario";
mysql_query($sql, $cn->Conectarse());

$sqlDatos = "SELECT * FROM precarga, materias WHERE precarga.idMateria=materias.id";
$datos = mysql_query($sqlDatos, $cn->Conectarse());

while ($rs = mysql_fetch_array($datos)) {
   echo '  <input type="checkbox" 
           id="check" 
           value=' . $rs[0] . '/>' . utf8_encode($rs[6]) . ';
           <br>';
}
echo '<input type="submit" class="btn btn-danger" id="eliminar" value="Eliminar"/>';
?>
