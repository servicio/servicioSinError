
<?php 
include './validacionseSession.php';
$verif = new validacionseSession();
$verif->verificacionDeLogue();
include './plantillaEncabezado.php';
?>
<script>

    function quitarEspacion(cadena) {
        var palabra = cadena.replace(/\s/g, "%20");
        return palabra;
    }
    $(document).ready(function() {
        $('#listaAlumnos').load('listaMatricula.php');
        $('#Informacion').hide();
        $('#Buscar').click(function() {
            $('#Informacion').slideUp('slow');
            var informacion = $('#datosBuscar').val();
            informacion = quitarEspacion(informacion);
            $('#Informacion').load('mostrarInformacion.php?datos=' + informacion);
        });
    });
</script>
<div class="container">
    <div    class="span12"  style="overflow-y: scroll; height: 335px;  margin: auto; background-color: white; margin-top: -20px">
        <center>
            <br>
            <div class="input-append" style="float: left; margin-left: 40px">
                <input  id="datosBuscar" type="text" placeholder="Matricula o Nombre...." list="listaAlumnos" style=" height: 30px"/>
                <datalist id="listaAlumnos">
                </datalist>
                <input type="submit" class="btn btn-primary" value="Buscar" id="Buscar"/>
            </div>
            <br>
            <br>
            <br>
            <br>
        </center>
        <div id="Informacion" style="float: left; width: 400px; margin-left: 40px; ">
        </div>
    </div>
</div>
<?php
include './plantillaFooter.php';
?>