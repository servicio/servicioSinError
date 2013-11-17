<?php //
include '../DaoConnection/coneccion.php';
include '../Coordinadora/plantillaEncabezado.php';
$coneccion = new coneccion();
//session_start();
?>
<style>


</style>

<html>
    <head>
        
<!--        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> -->
        <script type="text/javascript" src="../bootsTrap2/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap.css"/>
        <script src="../bootsTrap2/js/bootstrap.min.js"></script>
        <script>
    $(document).ready(function() {
        $('#bien').hide();

        $('#GuardarDatos').click(function() {
         
            var datos = 'Asignatura=' + $('#Asignatura').val() +
                            '&Grupo=' + $('#Grupo').val()+ 
                            '&Usuario='+ $('#usuario').val();
                    $.get('GrupoAlumno.php', datos, function(){
                        $('#Grupo').val("");
                         $('#Asignatura').val("");
                          $('#Usuario').val("");
                        
                    });
             
$('#bien').show('slow');
$('#bien').hide('slow');
        })
    });
</script>
    </head> 

    <body style="background-color:  #e5e5e5">
    <center>
        <div id="bien" class="alert alert-success">
            <strong>Se ha creado el grupo satisfactoriamente</strong>
        </div>
        
        <div class="input-append" style="float: left; margin-left: 40px">
            <input  id="Grupo" type="text" placeholder="Grupo...." list="listaGrupo" style=" height: 30px"/>
            <datalist id="listaGrupo">
                <?php
                $sql = "Select  nombreGrupo from gruposAlumnos ";
                $datos2 = mysql_query($sql, $coneccion->Conectarse());
                While ($rs2 = mysql_fetch_array($datos2)) {
                    ?>
                    <option value="<?php echo utf8_encode($rs2["nombreGrupo"]); ?>"><?php echo utf8_encode($rs2["nombreGrupo"]) ?></option>
                    <?php
                }
                ?>

            </datalist>
        </div>
        
        <div class="input-append" style="float: left; margin-left: 40px">
            <input  id="Asignatura" type="text" placeholder="Asignatura...." list="listaAsignaturas" style=" height: 30px"/>
            <datalist id="listaAsignaturas">
                <?php
                $sql = "Select materia from materias ";
                $datos = mysql_query($sql, $coneccion->Conectarse());
                While ($rs = mysql_fetch_array($datos)) {
                    ?>
                    <option value="<?php echo $rs["materia"] ?>"><?php echo $rs["materia"] ?></option>
                    <?php
                }
                ?>

            </datalist>

        </div>

        
            <div class="input-append" style="float: left; margin-left: 40px">
            <input  id="usuario" type="text" placeholder="usuario...." list="listaUsuario" style=" height: 30px"/>
            <datalist id="listaUsuario">
                <?php
               $sql = "Select concat_ws(' ', Nombre, apellidoPaterno, apellidoMaterno) as persona, usuario from datospersonales";
                $datos2 = mysql_query($sql, $coneccion->Conectarse());
                While ($rs2 = mysql_fetch_array($datos2)) {
                    ?>
                    <option value="<?php echo utf8_encode($rs2["usuario"]); ?>"><?php echo utf8_encode($rs2["persona"]) ?></option>
                    <?php
                }
                ?>

            </datalist>

        </div>
        <div>
        <input type="submit" class="btn btn-primary" value="EnviarDatos" id="GuardarDatos"/>
        </div>
    </center>
</body> 
<?php 
        include '../Coordinadora/plantillaFooter.php';
?>
</html>
