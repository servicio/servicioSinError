<?php

include '../DaoConnection/coneccion.php';
$cn = new coneccion();
$id = $_GET["id"];
if ($id == 0) {
    echo '<select id="materia" name="materia"  style="width: 250px">
          <option>Seleccione una materia</option>
          </select>';
} else {


    if ($id == 1) {
        $sql = "SELECt * FROM materias WHERE idEspecialidad = 1";
    } else if ($id == 2) {
        $sql = "SELECt * FROM materias WHERE idEspecialidad =2";
    }
    $datos = mysql_query($sql, $cn->Conectarse());
    echo "<select name='materia' id='materia'  style='width: 250px'>";
    echo"<option>Seleccione una materia</option>";
    while ($fila = mysql_fetch_array($datos)) {

        echo "<option value='" . $fila["id"] . "'>" . utf8_encode($fila["materia"]) . "</option>";
    }
    echo "</select>";
}
?>
