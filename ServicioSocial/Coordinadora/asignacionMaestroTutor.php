<?php
include './plantillaEncabezado.php';
include '../DaoConnection/coneccion.php';
?>
<html>
    <script>

        $(document).ready(function() {
            $('#error').hide();
            $('#exito').hide();
            $("#actualizar").hide();
            $("#aparecer").hide();
            $("#actualizarAlumno").hide();
            var maestro = $('#maestro').val();
            $('#alumnos').load("alumnosDisponibles.php");
            var idMaestro;
            $('#maestro').change(function() {

                if (maestro > 0) {
                    $("#actualizar").show('slow');
                    $("#agregar").hide('slow');

                }
                else {
                    $("#agregar").show('slow');
                    $("#actualizar").hide('slow');
                }
            });
            $("#actualizar").click(function() {
                var dato = $("#maestro").val();
                $("#myModal").load("dameValorMaestro.php?dato=" + dato, function() {
                    $("#aparecer").trigger('click');
                });
            });
            $("#agregar").click(function() {
                $("#myModal").load("dameNuevoMaestro.php", function() {
                    $("#aparecer").trigger('click');
                });
            });

            $("#alumnos").change(function() {
                var alumno = $("#alumnos").val();
                if (alumno != '') {

                    $("#actualizarAlumno").show('slow');
                }
                else {
                    $("#actualizarAlumno").hide('slow');
                }
            });

            $("#asignarTutor").click(function() {
                var info = $("#alumnos").val();
                var maestro = $("#maestro").val();
                if (info == '' || maestro && maestro == 0) {
                    $('#error').slideDown('slow');
                    $('#error').delay('1500');
                    $('#error').slideUp('slow');
                }
                else {
                    var informacion = "maestro=" + $("#maestro").val() + "&alumnos=" + info;
                    $.get('asignar.php', informacion, function() {
                        $('#alumnos').load("alumnosDisponibles.php");
                        $('#exito').slideDown('slow');
                        $('#exito').delay('1500');
                        $('#exito').slideUp('slow');
                    });
                }
            });
        });
    </script>

    <body>
        <div class="container">
            <div    class="span12"  style="overflow-y: scroll; height:230px ;margin: auto; background-color: white; margin-top: -20px">
                <div id="error"class="alert alert-error">
                    <center><strong>Seleccione todos los campos correspondientes</strong></center>
                </div>
                <div  id="exito" class="alert alert-success">
                    <center><strong> Alumno Asignado Exitosamente</strong></center>
                </div>
                <center>
                    <h2>Asignacion Maestro Tutor</h2>
                    <br>
                    <div class="form-inline">
                        <select id="maestro" style="width: 260px; height: 30px" >
                            <option value="0">Seleccione Maestro</option>
                            <?php
                            $cn = new coneccion();
                            $sql = "SELECT * FROM maestros";
                            $datos = mysql_query($sql, $cn->Conectarse());
                            while ($rs = mysql_fetch_array($datos)) {
                                ?>
                                <option value="<?php echo $rs[0]; ?>"><?php echo $rs[1]; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <!--<button type="submit" class="btn-info" style="height: 25px"></button>-->
                        <a id="agregar" data-toggle="modal" style="height: 20px" class="btn btn-info"><i class="icon-plus"></i></a>
                        <a id="aparecer"  href="#myModal" data-toggle="modal" style="height: 20px;" class="btn btn-info"><i class="icon-plus"></i></a>
                        <a id="actualizar" data-toggle="modal" style="height: 20px" class="btn btn-warning"><i class="icon-pencil"></i></a>
                    </div>
                    <br>
                    <div class="form-inline">
                        <select id="alumnos" style="width: 260px;">
                        </select>
                        <a id="actualizarAlumno" data-toggle="modal" style="height: 20px" class="btn btn-warning"><i class="icon-pencil"></i></a>
                    </div>
                    <br>
                    <input id="asignarTutor" type="submit" value="Asignar" class="btn btn-success"/>
                    <input type="submit" value="Cancelar"  class="btn btn-danger"/> 
                </center>
            </div>
        </div>
    </body>
</html>
<?php
include './plantillaFooter.php';
?>

<div  id="myModal" class="modal hide fade"   aria-labelledby="myModalLabel" aria-hidden="true">
</div>
