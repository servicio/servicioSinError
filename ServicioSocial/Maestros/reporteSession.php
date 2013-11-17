<?php
session_start();
include '../Dao/daoServicio.php';
include './validacionseSession.php';
$validacion = new validacionseSession();
$validacion->verificacionDeLogue();
$daoServicio = new daoServicio();
$id = $_SESSION["idMaestroSession"];
$nombreMaestro = $_SESSION["nombreMaestro"];

$cn = new coneccion();
?>
<html>
    <head>
        <script src="../bootsTrap2/js/jquery.min.js"></script>
        <link rel="stylesheet" href="themes/alertify.core.css" />
        <link rel="stylesheet" href="themes/alertify.default.css" />
        <script src="lib/alertify.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
        <script>
            $(document).ready(function() {
                $('#descripcion').val('');
                $('#objetivos').val('');
                $('#observaciones').val('');
                $('#tareasAsignadas').val('');
                $("#guardar").click(function() {
//                    alert("Hola");
                    var datos = 'usuarios=' + $('#usuarios').val() +
                            '&fecha=' + $('#fecha').val() +
                            '&numeroSesion=' + $('#numeroSesion').val() +
                            '&descripcion=' + $('#descripcion').val() +
                            '&objetivos=' + $('#objetivos').val() +
                            '&observaciones=' + $('#observaciones').val() +
                            '&tareasAsignadas=' + $('#tareasAsignadas').val() +
                            '&numeroSession=' + $('#numeroSession').val();
                    $.get('guardarSession.php', datos, function() {
                        alertify.success("Exito! Datos insertados Satisfactoriamente");
//                      alert("Datos Agregados");
                    });
                });

                $('#usuarios').change(function() {
                    $var = $('#usuarios').val();

                });

            });
        </script>
    </head>
    <div>
        <div class="container">
            <?php include './plantillaEncabezado.php'; ?>
            <div class="span12"  style="margin: auto; background-color: white; margin-top: -20px">
                <div>
                    <div style="float: right ; margin-right: 40px"><strong>Bienvenido: <?php echo $nombreMaestro; ?></strong></div>
                </div>
                <br>
                <br>
                <div style="float: left; margin-left: 40px">
                    <input style="height: 30px; width: 220px" type="date" id="fecha"/>
                    <br>
                    <select id="usuarios">
                        <option value="0">Seleccione un Usuario</option>
                        <?php
                        $sql = "SELECT * from tutotmaestrosalumnos, datosPersonales WHERE idMaestro = $id and matricula = usuario";
                        $datos = mysql_query($sql, $cn->Conectarse());
                        while ($rs = mysql_fetch_array($datos)) {
                            ?>
                            <option value="<?php echo $rs["matricula"]; ?>"><?php echo $rs["Nombre"] . "&nbsp;" . $rs["apellidoPaterno"] . "&nbsp;" . $rs["apellidoMaterno"]; ?></option>
                            <?php
                        }
                        $cn->cerrarBd()
                        ?>
                    </select>
                </div>
                <div id="numeroSesion" style="float: right; margin-right:40px"><strong>Session #:<?php echo $numero = $daoServicio->dameNumeroSession(); ?></strong></div>
                <br><br><br><br>
                <div data-spy="scroll">
                    <strong>Tareas Anteriores:</strong>
                    <div id="tareasAnteriores">
                    </div>
                    <center>
                        <table>
                            <tr>
                                <td>
                                    <textarea id="descripcion" placeholder="Descripcion de la Session.." style="min-width: 200px;  min-height: 100px; max-width: 200px; max-height: 100px;" >
                                    </textarea>
                                </td>
                                <td>
                                    <textarea id="objetivos" placeholder="Objetivos..." style="min-width: 200px;  min-height: 100px; max-width: 200px; max-height: 100px;">
                                    </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea id="observaciones" placeholder="Observaciones..." style="min-width: 200px;  min-height: 100px; max-width: 200px; max-height: 100px;">
                                    </textarea>
                                </td>
                                <td>
                                    <textarea id="tareasAsignadas" placeholder="Tareas Asignadas..."style="min-width: 200px;  min-height: 100px; max-width: 200px; max-height: 100px;">
                                    </textarea>
                                </td>
                            </tr>
                        </table>
                        <input type="submit" class="btn btn-danger" value="Cancelar"/>
                        <input type="submit" id="guardar" class="btn btn-success" value="Guardar"/>
                        <br>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <?php include './plantillaFooter.php'; ?>
</html>
