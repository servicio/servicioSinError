<meta http-equiv="conten-type" content="text/html; charset=UTF-8" />
<?php
include '../DaoConnection/coneccion.php';
$cn = new coneccion();
$materia =$_GET["materia"];
$maestro = $_GET["maestro"];
//utf8_decode($materia);
//$sql = "SELECT * from materias WHERE materia = 'Taller de Herramientas Intelectuales'";
$sql = "SELECT id from materias WHERE materia = '$materia'";
$datos = mysql_query($sql, $cn->Conectarse());

//$dato = "";
while ($fila = mysql_fetch_assoc($datos)) {
$id =   $fila["id"];
}



 $sql = "SELECT unidad from calificacionesactual WHERE idMateria = '$id' and  idMaestro = '$maestro'";
    $datos = mysql_query($sql, $cn->Conectarse());
    if($datos == 0){                       
     echo '<select id="materia" name="materia" ">
          <option>Seleccione una unidad</option>
          </select>';
    }
    else
    {
        
        echo "<select name='materia' id='materia'  '>";
    echo"<option>Seleccione una unidad</option>";
        While ($rs = mysql_fetch_array($datos)) {
                                ?>

                                <option value="<?php echo $rs["unidad"]; ?>"><?php echo $rs["unidad"] ?></option>
                                <?php
                            }
                            echo "</select>";
//   para el actual curso    SELECT *
//FROM calificacionesactual c
//JOIN maestros m
//ON m.id = c.idMaestro
//JOIN materiasmaestros mm
//ON mm.idMaestro = m.id and c.idMateria = mm.idMaterias
//WHERE c.CursoEscolar = 2011 and c.idMateria = 2
                            
                            
                            
    }
?>