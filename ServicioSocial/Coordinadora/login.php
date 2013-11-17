<?php
session_start();
include './validacionseSession.php';
$validacion = new validacionseSession();
$validacion->verificacionSession();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap.css"/>
        <script src="../bootsTrap2/js/jquery.min.js"></script>
        <script src=../"bootsTrap/js/bootstrap.js"></script>
    </head>
    <script>
        $(document).ready(function() {
            $('#error').hide();
            $('#verificacion').click(function() {
                var usua = $('#usuario').val();
                var pass = $('#pass').val();
                $('#error').load('verificacionLogin.php?usua=' + usua + '&pass=' + pass);
            });
        });
    </script>
    <body>
        <div class="container">
            <?php include './plantillaEncabezado.php'; ?>
            <center>
                <div   class="span12"  style="margin: auto; background-color: white; margin-top: -20px">
                    <div  id="error" style="height: 35px" class="alert-error">
                        Ingrese el <Strong>Usuario y Contraseña</Strong> correcta
                    </div>
                    <br>
                    <input id="usuario" type="text" placeholder="Usuario">
                    <br>
                    <input id="pass" type="password" placeholder="Contraseña">
                    <br>
                    <button id="verificacion" type="submit" class="btn btn-primary"> <i class="icon-ok">&nbsp;</i>&nbsp;&nbsp;Iniciar</button>
                    <button id="verificacion" type="submit" class="btn btn-danger"> <i class="icon-remove">&nbsp;</i>&nbsp;&nbsp;Cancelar</button>
                    <br>
                    <br>
                </div>
            </center>

            <?php include './plantillaFooter.php'; ?>
        </div>
    </body>
</html>
