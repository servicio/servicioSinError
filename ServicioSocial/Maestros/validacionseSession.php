<?php

session_start();

class validacionseSession {

    function verificacionDeLogue() {
        $usuario = $_SESSION['Usuario'];
        if ($usuario == null) {
            echo "
        <script>
             document.location.href='LoginAlumno.php';
        </script>
         ";
            header('Location: login.php');
        }
    }

    function verificacionSession() {
        $usuarioSession = $_SESSION['Usuario'];
        if ($usuarioSession != null) {
            header('Location: index.php');
        }
    }

}

?>
