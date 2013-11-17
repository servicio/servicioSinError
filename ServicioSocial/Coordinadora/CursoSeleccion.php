<?php
include '../DaoConnection/coneccion.php';
$cn = new coneccion();
$materia =$_GET["materia"];
$maestro=$_GET["maestro"];
$sql = "SELECT Distinct CursoEscolar FROM `calificacionesactual`";
$datos = mysql_query($sql, $cn->Conectarse());
    if($datos == ""){                       
     echo '<select id="materia" name="materia" ">
          <option>Seleccione un Curso</option>
          </select>';
    }
    else
    {
        echo "<select name='materia' id='materia' >";
    echo"<option>Seleccione el año</option>";
        While ($rs = mysql_fetch_array($datos)) {
                                ?>
                                <option value="<?php echo $rs["CursoEscolar"]; ?>"><?php echo $rs["CursoEscolar"] ?></option>
                                <?php
                            }
       echo "</select>";
    }

?>
