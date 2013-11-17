<?php
include './excelwriter.inc.php';
include '../DaoConnection/coneccion.php';
$dao = new coneccion();
$excel = new ExcelWriter("prueba.xls");
if ($excel == false) {
    echo $excel->error;
}
//Escribimos la primera fila con las cabeceras
$myArr = array("ID", "Titulo", "Detalles");
$excel ->writeLine($myArr);
$sql2 = "SELECT * FROM avisos";
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
$excel->close();
$dao ->cerrarBd();
echo "exitoso"
//Abrimos el fichero excel que acabamos de crear

?>