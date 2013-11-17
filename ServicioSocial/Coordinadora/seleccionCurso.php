<?php
include '../DaoConnection/coneccion.php';
$cn = new coneccion();

$sql = "SELECT DISTINCT anio FROM `historial`";
$datos = mysql_query($sql, $cn->Conectarse());
if ($datos == "") {
    echo '<select id="materia" name="materia"  >
          <option>Seleccione un Curso</option>
          </select>';
} else {
    echo "<select name='materia' id='materia' >";
    echo"<option>Seleccione el año</option>";
    While ($rs = mysql_fetch_array($datos)) {
        ?>
        <option value="<?php echo $rs["anio"]; ?>"><?php echo $rs["anio"] ?></option>
        <?php
    }
    echo "</select>";
}
?>