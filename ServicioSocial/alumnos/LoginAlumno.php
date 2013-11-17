<?php
include './plantillaEncabezado.php';
include './validacionseSessionAlumnos.php';
$validacion = new validacionseSessionAlumnos();
$validacion->verificacionSessionAlumnos();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <script>
        $(document).ready(function() {
            $('#error').hide();
            $('#verificacion').click(function() {
                var usua = $('#usa').val();
                var pass = $('#pass').val();
                $('#error').load('verificacionLogin.php?usua=' + usua + '&pass=' + pass);
            });
        });
    </script>
    <body>
        <div class="container">
            <center>
                <div class="span12"  style="margin: auto; background-color: white; margin-top: -20px">
                    <div id="error" style="height: 35px" class="alert-error">
                        Ingrese el <Strong>Usuario y Contraseña</Strong> correcta
                    </div>
                    <br>
                    <input style="height: 30px" id="usa" type="text" placeholder="Usuario">
                    <br>
                    <input style="height: 30px" id="pass" type="password" placeholder="Contraseña">
                    <br>
                    <button id="verificacion" type="submit" class="btn btn-primary"> <i class="icon-ok">&nbsp;</i>&nbsp;&nbsp;Iniciar</button>
                    <button id="verificacion" type="submit" class="btn btn-danger"> <i class="icon-remove">&nbsp;</i>&nbsp;&nbsp;Cancelar</button>
                    <br>
                    <br>
                </div>
            </center>

        </div>
    </body>
</html>
<?php include './plantillaFooter.php'; ?>

