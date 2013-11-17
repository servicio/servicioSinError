<?php

include '../DaoConnection/coneccion.php';

class dao {

    function guardarAlumnoGrupo(alumnosinscritos $A) {
        $cn = new coneccion();
        $sql = "INSERT INTO alumnosinscritos(idGrupo,usuario, idMateria) 
VALUES (
'" . $A->getIdGrupo() . "', '" . $A->getUsuario() . "','" . $A->getIdMateria() . "'
)";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }

    function guardarNuevoGrupo(crearGrupo $C) {
        $cn = new coneccion();
        $sql = "INSERT INTO gruposalumnos( nombreGrupo,idMateria, idMaestro) 
VALUES (
'" . $C->getNombreGrupo() . "', '" . $C->getIdMateria() . "','" . $C->getIdMaestro() . "'
)";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }

    function Intercambiomaterias($matricula, $materia, $semestre, $control, $obligatorias, $idMateria) {
        $cn = new coneccion();
        $fecha = date("Y-m-d");
        utf8_encode($materia);
        if ($control == "aceptar") {
            $sql = "INSERT INTO temporalcargadas( matricula,materias, semestre, obligatoria, idMateria, fecha ) 
VALUES (
'$matricula','$materia', '$semestre','$obligatorias','$idMateria','$fecha'
)";

            mysql_query($sql, $cn->Conectarse());
            $sql = "DELETE FROM temporalseleccionar where materias = '$materia' and matricula= '$matricula'";
            mysql_query($sql, $cn->Conectarse());
            $cn->cerrarBd();
            return;
        }
        if ($control == "cancelar") {
            $sql2 = "INSERT INTO temporalseleccionar( matricula,materias, semestre, obligatoria, idMateria ) 
VALUES (
'$matricula','$materia', '$semestre','$obligatorias','$idMateria'
)";
            mysql_query($sql2, $cn->Conectarse());
            $sql2 = "DELETE FROM temporalcargadas where materias = '$materia' and matricula= '$matricula'";
            mysql_query($sql2, $cn->Conectarse());
            $cn->cerrarBd();
            return;
        }
    }

    function consultatablaseleccionar($matricula) {
        $cn = new coneccion();
        $sql = "select materias,semestre,obligatoria, idMateria from temporalseleccionar where matricula='$matricula' order by semestre asc    ";
        $consulta = mysql_query($sql, $cn->Conectarse());
        $registro = array();
        if ($consulta != false) {
            while ($renglon = mysql_fetch_array($consulta, MYSQL_ASSOC)) {
                $registro[] = $renglon;
            }
            mysql_free_result($consulta);
        }

        $cn->cerrarBd();
        return $registro;
    }

    function consultatablaObligadas($matricula) {
        $cn = new coneccion();
        $sql = "select materias,semestre,obligatoria,idMateria from temporalcargadas where matricula='$matricula' order by semestre asc ";
        $consulta = mysql_query($sql, $cn->Conectarse());
        $registro = array();
        if ($consulta != false) {
            while ($renglon = mysql_fetch_array($consulta, MYSQL_ASSOC)) {
                $registro[] = $renglon;
            }
            mysql_free_result($consulta);
        }

        $cn->cerrarBd();
        return $registro;
    }

    function tablatemporalcargadas($materias, $matricula) {

        $cn = new coneccion();
        //setencia sql para crear la tabla
        $renglon = $materias[0];
        $sql = "create table IF NOT EXISTS temporalcargadas (id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,matricula varchar(20), materias varchar(20),semestre varchar(20), obligatoria int(1),idMateria int(20), fecha DATE) \n"
                . " ";
        mysql_query($sql, $cn->Conectarse());
        $sql = "DELETE FROM temporalcargadas WHERE matricula='$matricula'";
        mysql_query($sql, $cn->Conectarse());
        $fecha = date("Y-m-d");
        foreach ($materias as $renglon) {

            foreach ($renglon as $campo => $valor) {
                if ($campo == "materia") {
                    $materia = $valor;
                }
                if ($campo == "semestre") {
                    $semestre = $valor;
                }
                if ($campo == "id") {
                    $idMateria = $valor;
                }
                if (($materia && $semestre && $idMateria) != "") {

                    $sql = "INSERT INTO temporalcargadas (matricula, materias, semestre, obligatoria,idMateria, fecha) VALUES ('$matricula','$materia',' $semestre', 1 , '$idMateria', '$fecha') ";
                    mysql_query($sql, $cn->Conectarse());
                    $cn->cerrarBd();
                    $materia = "";
                    $semestre = "";
                    $idMateria = "";
                }



                $paso = false;
            }
        }

        //ejecuto la sentencia
    }

    function tablatemporalSeleccionar($materias, $matricula) {

        $cn = new coneccion();
        //setencia sql para crear la tabla
        $renglon = $materias[0];

        $sql = "create table IF NOT EXISTS temporalseleccionar (id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY, matricula varchar(20),materias varchar(20),semestre varchar(20),obligatoria int(1), idMateria int(20))";
        mysql_query($sql, $cn->Conectarse());
        $sql = "DELETE FROM temporalseleccionar WHERE matricula='$matricula'";
        mysql_query($sql, $cn->Conectarse());
        foreach ($materias as $renglon) {

            foreach ($renglon as $campo => $valor) {
//                if ($campo == "materia") {
//                    $materia = $valor;
//                }
                if ($campo == "semestre") {
                    $semestre = $valor;
                }
                if ($campo == "id") {
                    $idMateria = $valor;
                }
                if ($campo == "Ligada") {
                    $liga = $valor;
                }
                if ($campo == "materia" && $liga == 1) {


                    if (utf8_encode($valor) == "Cálculo Diferencial") {
                        $materia = $valor;
                        $control = 1;
                    } else {
                        if ((utf8_encode($valor) == "Cálculo Integral") && $control != 1) {
                            $materia = $valor;
                            $control = 1;
                        } else {
                            if (utf8_encode($valor) == "Cálculo Vectorial" && $control != 1) {
                                $materia = $valor;
                                $control = 1;
                            }
                            if (utf8_encode($valor) == "Física" && $control != 1) {
                                $materia = $valor;
                                $control = 1;
                            }
                        }
                    }
                    if (utf8_encode($valor) == "Fundamentos de Investigación") {
                        $materia = $valor;
                        $control1 = 1;
                    } else {
                        if (utf8_encode($valor) == "Taller de Investigación I" && $control != 1) {
                            $materia = $valor;
                            $control1 = 1;
                        } else {

                            if (utf8_encode($valor) == "Taller de Investigación II" && $control != 1) {
                                $materia = $valor;
                                $control1 = 1;
                            }
                        }
                    }

                    if (utf8_encode($valor) == "Propiedad de los Materiales") {
                        $materia = $valor;
                        $control2 = 1;
                    } else {
                        if (utf8_encode($valor) == "Procesos de Fabricación" && $control2 != 1) {
                            $materia = $valor;
                            $control2 = 1;
                        }
                    }

                    if (utf8_encode($valor) == "Probabilidad y Estadística") {
                        $materia = $valor;
                        $control3 = 1;
                    } else {
                        if (utf8_encode($valor) == "Estadística Inferencial I" && $control3 != 1) {
                            $materia = $valor;
                            $control3 = 1;
                        } else {
                            if (utf8_encode($valor) == "Control Estadístico de la Calidad" && $control3 != 1) {
                                $materia = $valor;
                                $control3 = 1;
                            }
                        }
                    }

                    if (utf8_encode($valor) == "Estudio del Trabajo I") {
                        $materia = $valor;
                        $control4 = 1;
                    } else {
                        if (utf8_encode($valor) == "Estudio del Trabajo II" && $control4 != 1) {
                            $materia = $valor;
                            $control4 = 1;
                        } else {
                            if (utf8_encode($valor) == "Ergonomia" && $control4 != 1) {
                                $materia = $valor;
                                $control4 = 1;
                            }
                        }
                    }

                    if (utf8_encode($valor) == "Administración de las Operaciones II") {
                        $materia = $valor;
                        $control5 = 1;
                    } else {
                        if (utf8_encode($valor) == "Administración de las Operaciones I" && $control5 != 1) {
                            $materia = $valor;
                            $control5 = 1;
                        } else {
                            if (utf8_encode($valor) == "Planeación y Diseño de Instalaciones" && $control5 != 1) {
                                $materia = $valor;
                                $control5 = 1;
                            }
                        }
                    }

                    if (utf8_encode($valor) == "Álgebra Lineal" || utf8_encode($valor) == "Economia") {

                        $materia = $valor;
                        $control6 = 1;
                    } else {
                        if (utf8_encode($valor) == "Investigación de Operaciones I" && $control6 != 1) {
                            $materia = $valor;
                            $control6 = 1;
                        } else {
                            if (utf8_encode($valor) == "Investigación de Operaciones II" && $control6 != 1) {
                                $materia = $valor;
                                $control6 = 1;
                            }
                        }
                    }

                    if ((utf8_encode($valor) == "Investigación de Operaciones II")) {
                        $carga = 1;
                    }
                    if (utf8_encode($valor) == "Ergonomia") {
                        $materia = $valor;
                        $control7 = 1;
                    } else {
                        if (utf8_encode($valor) == "Planeación y Diseño de Instalaciones" && $carga == 1) {
                            $materia = $valor;
                            $control7 = 1;
                        }
                    }

                    if (utf8_encode($valor) == "Algoritmos y Lenguajes de Programación") {
                        $materia = $valor;
                        $control8 = 1;
                    } else {
                        if (utf8_encode($valor) == "Simulación" && $control8 != 1) {
                            $materia = $valor;
                            $control8 = 1;
                        } else {
                            if (utf8_encode($valor) == "Atomatización Industrial" && $control8 != 1) {
                                $materia = $valor;
                                $control8 = 1;
                            }
                        }
                    }

                    if (utf8_encode($valor) == "Gestión de Costos") {
                        $materia = $valor;
                        $control9 = 1;
                    } else {
                        if (utf8_encode($valor) == "Ingeniería Económica" || utf8_encode($valor) == "Mercadotecnia" && $control9 != 1) {
                            $materia = $valor;
                            $control9 = 1;
                        } else {
                            if (utf8_encode($valor) == "Planeación Financiera" || utf8_encode($valor) == "Planeación y Diseño de Instalaciones" && $control9 != 1) {
                                $materia = $valor;
                                $control9 = 1;
                            } else {
                                if (utf8_encode($valor) == "Formulación y Evaluación de Proyectos" && $control9 != 1) {
                                    $materia = $valor;
                                    $control9 = 1;
                                }
                            }
                        }
                    }
                } else {
                    if ($campo == "materia") {
                        $materia = $valor;
                    }
                }


                if (($materia && $semestre && $idMateria) != "") {
                    $sql = "INSERT INTO temporalseleccionar (matricula, materias, semestre, obligatoria, idMateria) VALUES ('$matricula','$materia',' $semestre',2,'$idMateria') ";
                    mysql_query($sql, $cn->Conectarse());
                    $cn->cerrarBd();
                    $materia = "";
                    $semestre = "";
                    $idMateria = "";
                    $liga = "";
                }



                $paso = false;
            }
        }

        //ejecuto la sentencia
    }

    function consultaMateriasObligatorias($matricula) {
        $cn = new coneccion();
        $paso = false;
        $sql = "SELECT m.materia, m.semestre, m.id FROM historial h, materias m where h.usuario = '$matricula' and h.idAcreditacion <=2 and h.calificacion < 70 and m.id = h.idMateria";
        $consulta = mysql_query($sql, $cn->Conectarse());
        $registro = array();
        if ($consulta != false) {
            while ($renglon = mysql_fetch_array($consulta, MYSQL_ASSOC)) {
                $registro[] = $renglon;
            }
            mysql_free_result($consulta);
        }

        $cn->cerrarBd();
        return $registro;
    }

    function consultaMateriasSeleccionadas($matricula) {
        $cn = new coneccion();
        $paso = false;
        $sql = "SELECT distinct m.materia, m.semestre, m.id FROM materias m,historial h WHERE idAcreditacion <=2 and h.calificacion > 70 and m.id NOT IN (SELECT idMateria FROM historial where usuario='$matricula')";
        $consulta = mysql_query($sql, $cn->Conectarse());
        $registro = array();
        if ($consulta != false) {
            while ($renglon = mysql_fetch_array($consulta, MYSQL_ASSOC)) {
                $registro[] = $renglon;
            }
            mysql_free_result($consulta);
        }
        $cn->cerrarBd();
        return $registro;
    }

    function verificacion_de_ingreso(usuario $u) {
        $cn = new coneccion();
        $paso = false;
        $sql = "SELECT * FROM usuarios WHERE usuario='" . $u->getUsuario() . "' AND pass='" . $u->getPass() . "'";
        $datos = mysql_query($sql, $cn->Conectarse());
        $columnas = mysql_affected_rows();
        while ($rs = mysql_fetch_array($datos)) {
            $_SESSION["idMaestroSession"] = $rs["id"];
            $_SESSION["nombreMaestro"] = $rs["Nombre"] . "&nbsp;" . $rs["ApellidoPaterno"] . "&nbsp;" . $rs["ApellidoMaterno"];
        }
        if ($columnas > 0) {
            $paso = true;
        } else {
            $paso = false;
        }
        $cn->cerrarBd();
        return $paso;
    }
    
    function ActualizarContraseña(Usuario $u){
        $sql= "UPDATE usuarios set pass ='".$u->getPass()."' WHERE usuario ='".$u->getUsuario()."'";
        $cn = new coneccion();
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }
    
    

}

?>
