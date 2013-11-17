<?php

include '../DaoConnection/coneccion.php';
$matricula = $_GET["matricula"];
$cn = new coneccion();
$sql = "SELECT * FROM historial, materias, acreditacion
WHERE  historial.idMateria = materias.id and historial.idAcreditacion = acreditacion.id and usuario = '$matricula' ORDER BY semestre";
//mysql_query("SET materia 'utf8'");
$datos = mysql_query($sql, $cn->Conectarse());
echo "
<table id='tablaMateriasCargadas' class='table table-hover'>
<thead>
 <th style='width:100px'>Semestre</th>
 <th style='width:100px'>Materias</th>
 <th style='width:100px'>Aprobado</th>
 <th style='width:100px'>Calificación</th>
 <th style='width:100px'>Cursando</th>
 <th style='width:100px'>Ingreso</th>
 <th style='width:100px'>Eliminar</th>
 </thead>

";
while ($rs = mysql_fetch_array($datos)) {
    echo"<tr>
        <td><center>" . $rs["semestre"] . "</center></td>
        <td><center>" . utf8_encode($rs["materia"]) . "</center></td>
        <td><center>" . $rs["acredito"] . "</center></td>
        <td><center>" . $rs["calificacion"] . "</center></td>
        <td><center>" . $rs["cursando"] . "</center></td>
        <td><center>" . $rs["ingresoCursado"] . "</center></td>
        <td><center><a href='eliminar.php?id=" . $rs[2] . "&usuario=" . $rs["1"] . "'><i class='icon-remove'></i></a></center></td>
        </tr>";
}
echo"</table>";
?>
