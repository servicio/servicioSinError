<?php

session_start();

class validacionseSessionAlumnos {

    function verificacionDeLogueAlumnos() {
        $usuario = $_SESSION['UsuarioAlumno'];
        if ($usuario == null) {
            echo "
        <script>
             document.location.href='LoginAlumno.php';
        </script>
         ";
            header('Location: LoginAlumno.php');
        }
    }

    function verificacionSessionAlumnos() {
        $usuarioSession = $_SESSION['UsuarioAlumno'];
        if ($usuarioSession != null) {
            header('Location: index.php');
        }
    }

}

?>
