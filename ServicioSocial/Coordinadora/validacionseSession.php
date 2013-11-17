<?php

session_start();

class validacionseSession {

    function verificacionDeLogue() {
        $usuario = $_SESSION['UsuarioAlumno'];
        if ($usuario == null) {
            echo "
        <script>
             document.location.href='LoginAlumno.php';
        </script>";
            header('Location: login.php');
        }
    }

    function verificacionSession() {
        $usuarioSession = $_SESSION['UsuarioAlumno'];
        if ($usuarioSession != null) {
            header('Location: index.php');
        }
    }

}

?>
