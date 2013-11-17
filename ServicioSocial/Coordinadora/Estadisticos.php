<?php
require_once ('../jpgraph/src/jpgraph.php');
require_once ('../jpgraph/src/jpgraph_bar.php');
require_once ("../jpgraph/src/jpgraph_pie.php");
include '../Coordinadora/plantillaEncabezado.php';
include '../DaoConnection/coneccion.php';
$coneccion = new coneccion();
//session_start();
?>
<html>
    <head>
        <!--<meta http-equiv="conten-type" content="text/html; charset=UTF-8" />-->
        <script type="text/javascript" src="../bootsTrap2/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap.css"/>
        <script src="../bootsTrap2/js/bootstrap.min.js"></script>
        <script>
            function quitarEspacion(cadena) {
                var palabra = cadena.replace(/\s/g, "%20");
                return palabra;
            }

            $(document).ready(function() {

                var busqueda, opciones, TipoBusca;
                var maestro, anio, SacaMaestros;
                var Curso, TipoCurso, unidad;
                var materia, EscolarCurso, TipoCursoEsc2, banderaBusqueda;
                var bandera = 0;
                $('#maestrosMateria').hide();
                $('#CursoEscolar').hide();
                $('#TipoCursoEsc').hide();
                $('#SelectUnidad').hide();
                $('#EnviarDatos').hide();
                $('#Graficar').hide();
                $('#Buscar').hide();
                $('#materiaBuscar').hide();
                $('#EscolarCurso').hide();
                $('#TipoBusca').hide();
                $('#TipoCursoEsc2').hide();
                $('#SacaMaestros').hide();





                $('#opciones').click(function() {
                    opciones = $('#opciones').val();
                    if (opciones == "Busqueda Semestral") {
                        $('#maestrosMateria').hide();
                        $('#CursoEscolar').hide();
                        $('#TipoCursoEsc').hide();
                        $('#SelectUnidad').hide();
                        $('#EnviarDatos').hide();
                        $('#Graficar').hide();
                        $('#EscolarCurso').hide();
                        $('#TipoBusca').hide();
                        $('#TipoCursoEsc2').hide();
                        $('#SacaMaestros').hide();
                        $('#EscolarCurso').hide('slow');
                        bandera = 1;
                        $('#Buscar').show('slow');
                        $('#materiaBuscar').show('slow');

                    }
                    if (opciones == "Busqueda Especializada") {
                        $('#Buscar').hide('slow');
                        $('#maestrosMateria').hide();
                        $('#CursoEscolar').hide();
                        $('#TipoCursoEsc').hide();
                        $('#SelectUnidad').hide();
                        $('#EnviarDatos').hide();
                        $('#EscolarCurso').hide();
                        $('#TipoBusca').hide();
                        $('#TipoCursoEsc2').hide();
                        $('#SacaMaestros').hide();
                        $('#Graficar').hide();
                        $('#materiaBuscar').hide('slow');
                        bandera = 2;
                        $('#EscolarCurso').load('seleccionCurso.php');
                        $('#EscolarCurso').show('slow');
                    }
                })
                $('#EscolarCurso').change(function() {
                    EscolarCurso = $('#EscolarCurso').val();
                    $('#TipoBusca').hide();
                    $('#TipoCursoEsc2').hide();
                    $('#SacaMaestros').hide();
                    $('#TipoCursoEsc2').load();
                    $('#TipoCursoEsc2').show('slow');
//                     $('#EnviarDatos').show('slow');
                })
                $('#TipoCursoEsc2').change(function() {
                    TipoCursoEsc2 = $('#TipoCursoEsc2').val();
                    $('#TipoBusca').hide();

                    $('#SacaMaestros').hide();
                    $('#TipoBusca').load();
                    $('#TipoBusca').show('slow');
                })
                $('#TipoBusca').change(function() {
                    
                $('#SacaMaestros').hide();
                    TipoBusca = $('#TipoBusca').val();
                    if (TipoBusca == "Busqueda por Maestro") {
                        banderaBusqueda = 1;
                        $('#SacaMaestros').load('sacaMaestros.php?EscolarCurso=' + EscolarCurso + '&TipoCursoEsc2=' + TipoCursoEsc2);
                        $('#SacaMaestros').show('slow');

                    }
                    if (TipoBusca == "Calificacion General") {
                        banderaBusqueda = 2;
                        $('#EnviarDatos').show('slow');
                    }
                })
                $('#SacaMaestros').change(function() {
                    SacaMaestros = $('#SacaMaestros').val();
                    $('#EnviarDatos').show('slow');
                })
                $('#Buscar').click(function() {
                    materia = $('#materiaBuscar').val();
                    busqueda = quitarEspacion(materia);
                    if (materia !== "") {
                        $('#CursoEscolar').load('CursoSeleccion.php');
                        $('#CursoEscolar').show('slow');
                    }
                    else {

                        $('#CursoEscolar').hide('slow');
                    }


                });

                $('#CursoEscolar').change(function() {
                    Curso = $('#CursoEscolar').val();
                    $('#TipoCursoEsc').load();
                    $('#TipoCursoEsc').show('slow');

                });


                $('#TipoCursoEsc').change(function() {
                    TipoCurso = $('#TipoCursoEsc').val();
                    $('#maestrosMateria').load('xxxxxx.php?materia=' + busqueda + '&Curso=' + Curso + '&TipoCurso=' + TipoCurso);
                    $('#maestrosMateria').show('slow');
                });

                $('#maestrosMateria').change(function() {
                    maestro = $('#maestrosMateria').val();
                    $('#SelectUnidad').load('SeleccionDeUnidad.php?maestro=' + maestro + '&materia=' + busqueda);
                    $('#SelectUnidad').show('slow');
                });
                $('#SelectUnidad').change(function() {
                    unidad = $('#SelectUnidad').val();
                    $('#EnviarDatos').show('slow');
                });
                $('#EnviarDatos').click(function() {
                    if (bandera == "1") {
                        $("#Graficar").load('graficas.php?materia=' + busqueda + '&Maestro=' + maestro + '&Curso=' + Curso + '&TipoCurso=' + TipoCurso + '&Unidad=' + unidad + '&bandera=' + bandera + '&EscolarCurso=' + EscolarCurso);
                        $('#Graficar').show('slow');
                    }
                    if (bandera == "2" && banderaBusqueda == "1") {
                        $('#Graficar').load('graficas.php?anio=' + EscolarCurso + '&Curso=' + TipoCursoEsc2 + '&maestro=' + SacaMaestros + '&banderaBusqueda=' + banderaBusqueda + '&bandera=' + bandera);
                        $('#Graficar').show('slow');
                    }
                    if (bandera == "2" && banderaBusqueda == "2") {
                        $('#Graficar').load('graficas.php?anio=' + EscolarCurso + '&Curso=' + TipoCursoEsc2 + '&banderaBusqueda=' + banderaBusqueda + '&bandera=' + bandera);
                        $('#Graficar').show('slow');
                    }
                });

            });

        </script>

    </head>
    <body>
        <div class="container">

            <center>
                <div class="span12"  style="margin: auto; background-color: white; margin-top: -20px">
                    <div>
                        <select name="opciones" id="opciones">
                            <option value="0" >Elija el tipo de Busqueda </option>
                            <option value="Busqueda Semestral">Busqueda Semestral</option>
                            <option value="Busqueda Especializada">Busqueda Especializada</option>

                        </select>
                    </div>

                    <div class="input-append" style="float: left; margin-left: 40px">
                        <input  id="materiaBuscar" type="text" placeholder="asignatura...." list="listaAlumnos" style=" height: 30px" maxlength="30"/>
                        <datalist id="listaAlumnos">
                            <?php
                            $sql = "Select  materia from materias ";
                            $datos = mysql_query($sql, $coneccion->Conectarse());
                            While ($rs = mysql_fetch_array($datos)) {
                                ?>
                                <option value="<?php echo $valor = $rs["materia"]; ?>"> <?php echo $rs["materia"]; ?>   </option>
                                <?php
                            }
                            ?>

                        </datalist>
                        <input type="submit" class="btn btn-primary" value="Buscar" id="Buscar"/>
                    </div ><br><br>



                    <div id="cicloEscolar">
                        <select id="CursoEscolar" style="float: left; margin-left: 40px">

                            <option value="0">Seleccione un Curso</option>
                        </select>            
                    </div>

                    <div id="TipoCurso">
                        <select id="TipoCursoEsc" style="margin-right: 250px; width: 250px">

                            <option value="0">Seleccione un El tipo de Curso</option>
                            <option value="01">Enero-Junio</option>
                            <option value="02">Agosto-Diciembre</option>
                            <option value="03">Verano</option>
                        </select>            
                    </div>

                    <div id="TipoCurso2">
                        <select id="TipoCursoEsc2" style="margin-right: 250px; width: 250px">

                            <option value="0">Seleccione un El tipo de Curso</option>
                            <option value="01">Enero-Junio</option>
                            <option value="02">Agosto-Diciembre</option>
                            <option value="03">Verano</option>
                        </select>            
                    </div>

                    <div id="TipoBusqueda">
                        <select id="TipoBusca" style="margin-right: 250px; width: 250px">

                            <option value="0">Seleccione el tipo de busqueda</option>
                            <option value="Calificacion General"> Calificacion General</option>
                            <option value="Busqueda por Maestro">Busqueda por Maestro</option>

                        </select>            
                    </div>
                    <div id="SacaMaestro">
                        <select id="SacaMaestros" style="margin-right: 250px; width: 250px">

                            <option value="0">Seleccione un maestro</option>


                        </select>            
                    </div>

                    <div id="maestroSelect">
                        <select id="maestrosMateria" style="float: left; margin-left: 40px">

                            <option value="0">Seleccione un Maestro</option>
                        </select>
                        <!--            SELECT m.maestro FROM historial h, maestros m where h.idMateria = 2  and h.idMaestro =  m.id-->
                    </div>

                    <div id="Unidades">
                        <select id="SelectUnidad" style="margin-right: 250px; width: 250px">

                            <option value="0">Seleccione la Unidad</option>
                        </select>            
                    </div>



                    <div id="cicloEscolar2">
                        <select id="EscolarCurso" style="width: 250px">

                            <option value="0">Seleccione un Curso</option>
                        </select>            
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="EnviarDatos" id="EnviarDatos"/>
                    </div>
                    <div id ="Graficar" >


                    </div>

                </div>
            </center>
        </div>
    </body>
</html>
<?php include_once '../Coordinadora/plantillaFooter.php'; ?>