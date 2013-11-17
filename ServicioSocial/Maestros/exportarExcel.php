<?php

include './excelwriter.inc.php';
include '../DaoConnection/coneccion.php';
//header("location:prueba.xls");
$dao = new coneccion();
$excel = new ExcelWriter("documentosExcel/prueba.xls");

if ($excel == false) {
    echo $excel->error;
}
//
//Escribimos la primera fila con las cabeceras
//$myArr=array("Nombre Comercial","Direccion","CP","Localidad","Telefono","Email");
$myArr = array("ID", "Titulo", "Detalles");
$excel ->writeLine($myArr);

//REALIZAMOS LA CONSULTA
//$dbhost = "localhost";
//$dbuser = "usuario";
//$dbpassword = "password";$dbpassword
//$dbname = "base_de_datos";

//$db2 = mysql_connect($dbhost, $dbuser ); //or die("Connection Error: " . mysql_error());
$sql2 = "select materia, historial.calificacion, ingresoCursado
from historial, materias
where usuario='E13080477'
and materias.id = historial.idMateria";
$result2 = mysql_query($sql2, $dao ->Conectarse());
//Escribimos todos los registros de la base de datos
//en el fichero EXCEL
while ($Rs2 = mysql_fetch_array($result2)) {
    $myArr = array(
        $Rs2[0],
        $Rs2[1],
        $Rs2[2], 
    );
    $excel->writeLine($myArr);
//Otra forma es
//$excel->writeLine($Rs2);
//De este modo volcariamos todos los registros seleccionados
//Sin necesidad de colocarlos/filtrar previamente en $myArr
}

$excel->open($excel);
$excel->close();
$dao ->cerrarBd();
echo "exitoso"
//Abrimos el fichero excel que acabamos de crear

?>