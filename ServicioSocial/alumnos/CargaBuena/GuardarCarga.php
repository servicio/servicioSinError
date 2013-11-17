<?php
include '../../Dao/dao.php';
include '../../DaoConnection/coneccion.php';

$matricula = "E12081126";
//$Asignaturas[] = $_POST["Asignatura"];
$valor = $_GET["valor"];
$cn = new coneccion();
$tamanio = count($Asignaturas);



$seleccionados = explode(',',$_GET['Asignatura']); // convierto el string a un array.
 
    for ($i=0;$i<count($seleccionados);$i++) { 
        
    $sql = "INSERT INTO `precarga` (`Matricula`, `IdMateria`, `Horario`) VALUES ( '$matricula', '$seleccionados[$i]', '$valor');";
mysql_query($sql, $cn->Conectarse());
    } 



       

//$cn->cerrarBd();
?>
