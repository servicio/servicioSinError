<meta http-equiv="conten-type" content="text/html; charset=UTF-8" />
<?php
include '../DaoConnection/coneccion.php';
$cn = new coneccion();

$EscolarCurso = $_GET["EscolarCurso"];
$TipoCursoEsc2 = $_GET["TipoCursoEsc2"];



$sql = "SELECT DISTINCT m.maestro, m.id from maestros m, historial h where anio = $EscolarCurso and curso =$TipoCursoEsc2  and h.idMaestro =  m.id";
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
        <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["maestro"] ?></option>
        <?php
    }
    echo "</select>";
}
?>


