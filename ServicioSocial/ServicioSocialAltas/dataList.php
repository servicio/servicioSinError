<?php
include '../DaoConnection/coneccion.php';
$cn = new coneccion();
$sql = "Select usuario from datosPersonales ";
$datos = mysql_query($sql, $cn->Conectarse());

echo "      <datalist id='listaAlumnos'";
       while($rs = mysql_fetch_array($datos)){
           echo "<option value = '".$rs["usuario"]."'>  
                 ".$rs["usuario"]."
                 </option>";
       }
       echo "</datlist>";

?>
