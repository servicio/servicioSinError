<?php

include '../DaoConnection/coneccion.php';
include '../clases/maestros.php';

class daoServicio {

    function verificacion_de_ingresoMaestros(usuario $u) {
        $cn = new coneccion();
        $paso = false;
        $sql = "SELECT * FROM usuarios  , maestros    WHERE usuarios.usuario='" . $u->getUsuario() . "' AND usuarios.pass='" . $u->getPass() . "' and usuarios.usuario = maestros.usuario";
        $datos = mysql_query($sql, $cn->Conectarse());
        $columnas = mysql_affected_rows();
        while ($rs = mysql_fetch_array($datos)) {
            $_SESSION["idMaestroSession"] = $rs[4];
            $_SESSION["nombreMaestro"] = $rs[5];
        }
        if ($columnas > 0) {
            $paso = true;
        } else {
            $paso = false;
        }
        $cn->cerrarBd();
        return $paso;
    }

    function accesoAlumnos(usuario $u) {
        $cn = new coneccion();
        $paso = false;
        $sql = "SELECT * FROM usuarios WHERE usuario='" . $u->getUsuario() . "' AND pass='" . $u->getPass() . "'";
        mysql_query($sql, $cn->Conectarse());
        $columnas = mysql_affected_rows();
        if ($columnas > 0) {
            $paso = true;
        } else {
            $paso = false;
        }
        $cn->cerrarBd();
        return $paso;
    }

    function loginGeneral(usuario $usu) {
        $cn = new coneccion();
        $sql = "  SELECT * FROM usuarios WHERE usuario= '" . $usu->getUsuario() . "' AND pass='" . $usu->getPass() . "'";

        $datos = mysql_query($sql, $cn->Conectarse());
        $columnas = mysql_affected_rows();
        if ($columnas > 0) {
            session_start();
            $_SESSION['usuario'] = $usu->getUsuario();
            $_SESSION['estado'] = 'Autenticado';
            header("Location: encuestaTutorias.php");
        } else {
            echo 'mal';
        }
        $cn->cerrarBd();
        //return $paso;
    }

    function insertarHistorial(historialAcademico $h) {
        $c = new coneccion();
        $fecha = date("d-m-Y");
        $sql = "INSERT INTO historial (usuario, idMateria, idAcreditacion, calificacion,cursando, ingresoCursado,anio, curso, fecha) VALUES ('" . $h->getMatricula() . "','" . $h->getId_materia() . "','" . $h->getAcredito() . "','" . $h->getCalificacion() . "','" . $h->getCursando() . "','" . $h->getIngresoCursando() . "','" . $h->getAnio() . "','" . $h->getCurso() . "', '$fecha')";
        $conn = $c->Conectarse();
        try {
            $paso = mysql_query($sql, $conn);
        } catch (Exception $e) {
            $e->getMessage();
        }

        $c->cerrarBd();
    }

    function guardarEncuesta(tutorias $t) {
        $c = new coneccion();
        $sqlguardar = "INSERT INTO TUTORIAS (Matricula, lugarViviendo, estCivilPadres, escPadre, escMadre, ingresosMenFam, NumHermanos, PerPlaticar, relacionPadre, relacionMadre, fuenteIngreso, habMaterias, estudiosExtTec, cualExtTec, pasatiempos, trabajas, dondeTrabajas, ocupacionTrab, porqTrab, ingresastRazTec, ingresastRazCar, alergias, cualAlergia, cronica, cronicaCual, atencionPsi, cualAtencionPsi, atencionMedica, bebidasAlc, fumador, problemLegal, motivo, deporte, cualDep, frecuenciaDep, realizado, lugarOcupas, especialidad, promedioFinalPrepa, hereditaria, hereditariaQuien, enfermedadMental, enfermedadMentalCual, escuela1, estado1, grado1, escuela2, estado2, grado2, escuela3, estado3, grado3) VALUES('" . $t->getUsuario() . "','" . $t->getLugarViviendo() . "','" . $t->getEstCivilPadre() . "',
            '" . $t->getEscPadre() . "','" . $t->getEscMadre() . "','" . $t->getIngresosMenFam() . "','" . $t->getNumHermanos() . "','" . $t->getPerPlaticar() . "','" . $t->getRelacionPadre() . "','" . $t->getRelacionMadre() . "','" . $t->getFuenteIngreso() . "','" . $t->getHabMaterias() . "','" . $t->getEstudiosExtTec() . "','" . $t->getCualExtTec() . "','" . $t->getPasatiempos() . "','" . $t->getTrabajas() . "','" . $t->getDondeTrabajas() . "','" . $t->getOcupacionTrab() . "','" . $t->getPorqTrab() . "','" . $t->getIngresastRazTec() . "','" . $t->getIngresastRazCar() . "','" . $t->getAlergias() . "','" . $t->getCualAlergia() . "','" . $t->getCronica() . "','" . $t->getCronicaCual() . "','" . $t->getAtencionPsi() . "','" . $t->getCualAtencionPsi() . "','" . $t->getAtencionMedica() . "','" . $t->getBebidasAlc() . "','" . $t->getFumador() . "','" . $t->getProblemLegal() . "','" . $t->getMotivo() . "','" . $t->getDeporte() . "','" . $t->getCualDep() . "','" . $t->getFrecuenciaDept() . "','" . $t->getRealizado() . "','" . $t->getLugarOcupas() . "','" . $t->getEspecialidad() . "','" . $t->getPromedio() . "','" . $t->getHereditaria() . "','" . $t->getHereditariaQuien() . "','" . $t->getMental() . "','" . $t->getMentalCual() . "','" . $t->getEscuela1() . "','" . $t->getEstado1() . "','" . $t->getGrado1() . "','" . $t->getEscuela2() . "','" . $t->getEstado2() . "','" . $t->getGrado2() . "','" . $t->getEscuela3() . "','" . $t->getEstado3() . "','" . $t->getGrado3() . "')";
        mysql_query($sqlguardar, $c->Conectarse());
        $c->cerrarBd();
    }

    function guardarAlumnos(datosPersonales $datosP) {
        $cn = new coneccion();
        $sql = "INSERT INTO datosPersonales(usuario, nombre, apellidoPaterno, apellidoMaterno)
         VALUES('" . ucwords(strtolower($datosP->getUsuario())) . "','" . ucwords(strtolower($datosP->getNombre())) . "','" . ucwords(strtolower($datosP->getApellidoPaterno())) . "'
             ,'" . ucwords(strtolower($datosP->getApellidoMaterno())) . "')";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }

    function guardarRegistroDatos(usuario $usuario) {
        $cn = new coneccion();
        $sql = "INSERT INTO datosregistrousuario(usuario, Nombres, ApellidoMaterno,ApellidoPaterno,Email)
         VALUES('" . $usuario->getUsuario() . "','" . $usuario->getNombres() . "','" . $usuario->getApellidoMaterno() . "'
             ,'" . $usuario->getApellidoPaterno() . "','" . $usuario->getEmail() . "')";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }

//JOSE!!!!!!!!
    function guardarTutorias(avisosTutor $avisosT) {
        $cn = new coneccion();
        $sql = "INSERT INTO avisos (titulo,detalles,usuario,control,leido) 
                VALUES ('" . $avisosT->getTitulo() . "','" . $avisosT->getDetalle() . "','" . $avisosT->getUsuario() . "','" . $avisosT->getControl() . "','" . $avisosT->getLeido() . "')";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }

    //JOSE!!!!
    function mandarPassAutorizado(usuario $u) {
        $cn = new coneccion();
        $sql = "INSERT INTO usuarios (usuario,pass,tipo) VALUES ('" . $u->getUsuario() . "','" . $u->getPass() . "','" . $u->getTipo() . "' )";
        mysql($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }
    //jose!!!!!!!!!!!!!!!!!!!!!!!!!
function guardarEncuestaTUTO(CuestionarioTutoria $t) {
        $cn = new coneccion();
        $sql = "INSERT INTO cuestionariotutorias (matricula, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, pregunta7, pregunta8, pregunta9, pregunta10, pregunta11, pregunta12, pregunta13, pregunta14, pregunta15, pregunta16, pregunta17, pregunta18, pregunta19, pregunta20) VALUES ('" . $t->getMatricula() . "','" . $t->getpregunta1() . "','" . $t->getpregunta2() . "','" . $t->getpregunta3() . "','" . $t->getpregunta4() . "','" . $t->getpregunta5() . "','" . $t->getpregunta6() . "','" . $t->getpregunta7() . "','" . $t->getpregunta8() . "','" . $t->getpregunta9() . "','" . $t->getpregunta10() . "','" . $t->getpregunta11() . "','" . $t->getpregunta12() . "','" . $t->getpregunta13() . "','" . $t->getpregunta14() . "','" . $t->getpregunta15() . "','" . $t->getpregunta16() . "','" . $t->getpregunta17() . "','" . $t->getpregunta18() . "','" . $t->getpregunta19() . "','" . $t->getpregunta20() . "')";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }

    function guardarSessionTutorado(sessionTutorias $sesion) {
        $cn = new coneccion();
        $sql = "INSERT INTO sesiontutorias(matricula, fecha, descripcionSesion, objetivos, observaciones, tareasAsignadas, numeroSesion)
            VALUES('" . $sesion->getMatricula() . "','" . $sesion->getFecha() . "','" . $sesion->getDescripcionSesion() . "','" . $sesion->getObjetivos() . "','" . $sesion->getObservaciones() . "','" . $sesion->getTareasAsignadas() . "','" . $sesion->getNumeroSession() . "')";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }

//<!--JOEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEELLLLLLLLLLLLLL-->
    function guardaArchivos(cargaArchivos $cargar) {
        $cn = new coneccion();
        $sql = "INSERT INTO cargaarchivos (usuario,ubicacion,nombre) 
           VALUES ('" . $cargar->getUsuario() . "','" . $cargar->getHubicacion() . "','" . $cargar->getNombreArchivo() . "')";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }

    //<!--JOEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEELLLLLLLLLLLLLL-->   
    function dameNumeroSession($matricula) {
        $cn = new coneccion();
        $numeroSession = 0;
        $sql = "SELECT count(*) as numeroSession from sesiontutorias where matricula ='$matricula';";
        $datos = mysql_query($sql, $cn->Conectarse());
        while ($rs = mysql_fetch_array($datos)) {
            $numeroSession = $rs["numeroSession"];
        }
        $numeroSession+=1;
        $cn->cerrarBd();
        return $numeroSession;
    }

    function consultavalidar(historialAcademico $h) {
        $cn = new coneccion();
        $sql = "SELECT * FROM historial WHERE usuario='" . $h->getMatricula() . "'and idMateria='" . $h->getId_materia() . "'";
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

    function verificacionInsertarPrecarga($usuario) {
        $paso = false;
        $sql = "SELECT * FROM precarga WHERE usuario = '$usuario'";
        $datos = mysql_affected_rows();
        if ($datos > 0) {
            $paso = true;
        }
        return $paso;
    }

    function dameInfoMaestro($id) {
        $cn = new coneccion();
        $maestro = new maestros();
        $sql = "SELECT * FROM maestros WHERE id = $id";
        $datos = mysql_query($sql, $cn->Conectarse());
        while ($rs = mysql_fetch_array($datos)) {
            $maestro->setId($rs[0]);
            $maestro->setMaestro($rs[1]);
        }
        $cn->cerrarBd();
        return $maestro;
    }

    function asignarAlumnoTutor(tutotMaestrosAlumnos $tutorAlumno) {
        $cn = new coneccion();
        $sql = "INSERT INTO tutotmaestrosalumnos(matricula, idMaestro) VALUES('" . $tutorAlumno->getMatricula() . "', '" . $tutorAlumno->getIdMaestro() . "')";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }

    function dameMaterias($idSemestre) {
//        include '../clases/historialAcademico.php';
        try {
              $cn = new coneccion();
        } catch (Exception $e) {
            $e->getMessage();
        }
        $historial = new historialAcademico();
        $materias = array($historial);
        $sql = "SELECT * FROM materias WHERE semestre = $idSemestre";
        $contador = 0;
        $datos = mysql_query($sql, $cn->Conectarse());
        while ($rs = mysql_fetch_array($datos)) {
            $historial->setMateria(utf8_decode($rs["materia"]));
            $materias[$contador] = $historial;
            $contador++;
        }
        return materias;
    }
    
    //---------------------------------------------------------------------
    function actulizarRegistroDatos(usuario $usuario) {
        $cn = new coneccion();
        $sql = "UPDATE datosregistrousuario  SET nombres ='" . $usuario->getNombres() . "',apellidoPaterno='" . $usuario->getApellidoPaterno() . "',apellidoMaterno='" . $usuario->getApellidoMaterno() . "',email='" . $usuario->getEmail() . "' WHERE usuario = '".$usuario->getUsuario()."'";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }

    //---------------------------------------------------------------------
    

}
?>

