<?php

session_start();
include './validacionseSession.php';
$verificar = new validacionseSession;
$verificar ->verificacionDeLogue();
?>
<script src="../bootsTrap2/js/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#avisosaMostrar').change(function() {
            var opciones = $('#avisosaMostrar').val();
            $('#avisos').load('avisos.php?opciones=' + opciones);
        });
    });
</script>

<div class="container">
    <?php include './plantillaEncabezado.php';?>
    <center>
        <div    class="span12"  style="overflow-y: scroll; height: 335px;  margin: auto; background-color: white; margin-top: -20px">
            <br/>
            <select id="avisosaMostrar"name="mostrar">
                <option value="0">Seleccione avisos a mostrar</option>
                <option value="2">Maestros</option>
                <option value="3">Alumnos</option>
            </select>
            <div id="avisos"> 
            </div>
        </div>
    </center>
</div>
<?php

include './plantillaFooter.php';
?>