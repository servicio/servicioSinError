<?php
session_start();
$_SESSION['log'] = '';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Monedero</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <link rel="stylesheet"  type="text/css" href="css/login.css"/>
        <link rel="stylesheet" href="css/alertify.default.css">
        <link rel="stylesheet" href="css/alertify.core.css">

        <script src="js/jquery.js"></script>
        <script src="js/conexion.js"></script>
        <script src="js/alertify.js"></script>

    </head>
    <body>
        <!--<h1>Bienvenido al sistema </h1>-->
        <div id="login">
            <h1>Login</h1>
            <form id="form">
                <label for="nombre">Usuario</label>
                <input type="text" name="usser" id="usser" class="text"/><br/>
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass"  class="text"/>

                <input type="button" name="boton" value="Entrar" id="button"/>
                <!--<a href="registro.html">Registro</a>-->
            </form>
        </div>


    </body>
</html>