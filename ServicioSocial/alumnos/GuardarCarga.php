<?php
include '../Dao/dao.php';
session_start();
include './validacionseSessionAlumnos.php';
$validacion = new validacionseSessionAlumnos();
$validacion->verificacionDeLogueAlumnos();
$matricula = $_SESSION["UsuarioAlumno"];
//$Asignaturas[] = $_POST["Asignatura"];
$valor = $_GET["valor"];
$cn = new coneccion();
$tamanio = count($Asignaturas);



$seleccionados = explode(',',  utf8_decode($_GET['Asignatura'])); // convierto el string a un array.
 
    for ($i=0;$i<count($seleccionados);$i++) { 
      $sql2 = "SELECT id FROM materias where materia = '$seleccionados[$i]'";  
         $datos = mysql_query($sql2, $cn->Conectarse());
         While ($rs = mysql_fetch_array($datos)) { 
             $idMa=$rs["id"];
             
         }   
         
    $sql = "INSERT INTO `precarga` (`Matricula`, `IdMateria`, `Horario`) VALUES ( '$matricula', '$idMa', '$valor');";
mysql_query($sql, $cn->Conectarse());
    } 



       

//$cn->cerrarBd();
?>
