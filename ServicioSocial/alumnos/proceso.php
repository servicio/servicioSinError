<?php
include './cambioMaterias.php';

extract($_REQUEST);
 extract($_POST);
	extract($_GET);
     
//include './validacionseSessionAlumnos.php';
$validar=new validacionseSessionAlumnos();
$validar->verificacionDeLogueAlumnos();
$usuario = $_SESSION["UsuarioAlumno"];
$matricula = $usuario;
$valor=$_GET['algo'];
$semestre=$_GET['semestre'];
$obligatoria=$_GET['obligatoria'];
$idMateria=$_GET['idMateria'];
$control=$_GET['aceptar'];
$dao=new dao();
$dao->Intercambiomaterias($matricula,$valor,$semestre, $control,$obligatoria,$idMateria);
echo"<script>
             location.href='cambioMaterias.php';
        </script>";

    


?>
