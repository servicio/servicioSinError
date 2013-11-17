<?php
include '../clases/alumnosinscritos.php';
include '../Dao/dao.php';
$cn = new coneccion();
$GrupoAlumno = new alumnosinscritos();
$dao= new dao();
$asignatura =$_GET["Asignatura"];
$Grupo = $_GET["Grupo"];
$usuario = $_GET["Usuario"];
$idmaterias = "SELECT id from materias where materia= '$asignatura'";
$datosid = mysql_query($idmaterias, $cn->Conectarse());
While ($rs = mysql_fetch_array($datosid)) {
                          $idmateria = $rs["id"];     
                            }
                            

                            $cn->cerrarBd();
$GrupoAlumno ->setIdGrupo($Grupo);
$GrupoAlumno->setIdMateria($idmateria);
$GrupoAlumno->setUsuario($usuario);
$dao->guardarAlumnoGrupo($GrupoAlumno);
?>
