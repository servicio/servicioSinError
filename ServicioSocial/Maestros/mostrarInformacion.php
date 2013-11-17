<?php

include '../DaoConnection/coneccion.php';
$cn = new coneccion();
$busqueda = $_GET["datos"];
$sql = "select * from datospersonales where usuario ='$busqueda'";
$datos = mysql_query($sql, $cn->Conectarse());
$sqlDatos = "SELECT * FROM cargaarchivos WHERE usuario = '$busqueda'";
while ($rs = mysql_fetch_array($datos)) {
    echo '<a title="Generar Organigrama" target="_blank" href="./organigrama/Dinamicamente.php?usuario=' . $busqueda . '"><img src="imagenes/orgaICO.png"/></a>
        <br>';
    echo"<div class='well well-sm' style=width: 400px; margin-left: 40px;>";
    echo "<div style='float:left'><font size='4' face='Bookman Old Style'>Usuario: $rs[1].</font></div>";
    echo '<br>';
    echo "<div><font size='4' face='Bookman Old Style'>Nombre: $rs[2] &nbsp $rs[3] &nbsp $rs[4].</font></div>";
    echo"</div>";
}
$datosArchivos = mysql_query($sqlDatos, $cn->Conectarse());
echo '<div>';
echo '<br>';
echo "<font size='5' face='Bookman Old Style'>Actividades Extraescolares</font>";
echo '<br>';
while ($rsDatos = mysql_fetch_array($datosArchivos)) {
    echo "<div style='float:left'><font size='4' face='Bookman Old Style'><a href='$rsDatos[2]' target='blank'>Documento</a></font></div>";
    echo '<br>';
}
if (mysql_affected_rows() ==0) {
    echo "<font size='2' face='Bookman Old Style'>No Hay Actividades Extraescolares</font>";
}
echo '</div>';
echo"<script>
     $('#Informacion').slideDown('slow');
     </script>";
?>
