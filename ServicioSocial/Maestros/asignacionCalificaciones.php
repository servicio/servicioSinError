<?php
session_start();
include './validacionseSession.php';
$validacion = new validacionseSession();
$validacion->verificacionSession();
?>
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
        });
    </script>
    <body>
        <div class="container">
            <?php include './plantillaEncabezado.php'; ?>
            <center>
                <div   class="span12"  style="margin: auto; background-color: white; margin-top: -20px">
                   
                </div>
            </center>
            <?php include './plantillaFooter.php'; ?>
        </div>
    </body>
</html>