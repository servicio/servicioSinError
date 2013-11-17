<?php

include '../DaoConnection/coneccion.php';
$matricula = $_GET["matricula"];
$cn = new coneccion();
$cn->Conectarse();
$sql = "SELECT * FROM datosPersonales WHERE usuario = '$matricula'";
$datos = mysql_query($sql, $cn->Conectarse());
$d = mysql_affected_rows();
if ($d > 0) {


    while ($datos = mysql_fetch_array($datos)) {
        echo "<div>    
                        <input id='matricula' style='width: 250px; padding: 15px;' type='text' placeholder='Matricula...' name='matricula' value='" . $datos[1] . "'/>
                        <input id='nombre' onkeypress='return val(event)' type='text' style='width: 250px; padding: 15px;' placeholder='Nombre' value='" . $datos["Nombre"] . "' />
                        <br>
                        <input id='apellidoP' onkeypress='return val(event)' type='text' style='width: 250px; padding: 15px;'  placeholder='Apellido Paterno' value='" . $datos["apellidoPaterno"] . "'/>
                        <input id='apellidoM' onkeypress='return val(event)' type='text' style='width: 250px; padding: 15px;' placeholder='ApellidoMaterno' value='" . $datos["apellidoMaterno"] . "'/>
         </div>";
        break;
    }
}
else{
  echo "<div>    
                        <input id='matricula' style='width: 250px; padding: 15px;' type='text' placeholder='Matricula...' name='matricula'/>
                        <input id='nombre' onkeypress='return val(event)' type='text' style='width: 250px; padding: 15px;' placeholder='Nombre'' />
                        <br>
                        <input id='apellidoP' onkeypress='return val(event)' type='text' style='width: 250px; padding: 15px;'  placeholder='Apellido Paterno'/>
                        <input id='apellidoM' onkeypress='return val(event)' type='text' style='width: 250px; padding: 15px;' placeholder='ApellidoMaterno'/>
         </div>";  
}
?>
