<?php //
include '../DaoConnection/coneccion.php';
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
                            '&IdentificadorGrupo=' + $('#IdentificadorGrupo').val()+ 
                            '&Maestro='+ $('#Maestro').val();
                    $.get('Asignatura.php', datos, function(){
                        
                        
                    });
             
$('#bien').show('slow');
$('#bien').hide('slow');
        })
    });
</script>
    </head> 

    <body style="background-color:  #e5e5e5">
    <center>
        c
        <div class="input-append" style="float: left; margin-left: 40px">
            <input  type="text" id="IdentificadorGrupo" id="Grupo" placeholder="Identificador del Grupo"  height: 30px">
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
            <input  id="Maestro" type="text" placeholder="Maestro...." list="listaMaestro" style=" height: 30px"/>
            <datalist id="listaMaestro">
                <?php
                $sql = "Select  maestro from maestros ";
                $datos2 = mysql_query($sql, $coneccion->Conectarse());
                While ($rs2 = mysql_fetch_array($datos2)) {
                    ?>
                    <option value="<?php echo utf8_encode($rs2["maestro"]); ?>"><?php echo utf8_encode($rs2["maestro"]) ?></option>
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
</html>
