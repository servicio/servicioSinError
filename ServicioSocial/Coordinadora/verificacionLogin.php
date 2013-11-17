<?php

session_start();
include '../clases/usuario.php';
include '../Dao/daoServicio.php';
$usuario = new usuario();
$dServicio = new daoServicio();
$usuario->setUsuario($_GET["usua"]);
$usuario->setPass($_GET["pass"]);

$paso = $dServicio->verificacion_de_ingreso($usuario);
if ($paso == false) {
    echo '
<div  id="error" style="height: 35px" class="alert-error">
  Ingrese el <Strong>Usuario y Contraseña</Strong> correcta
</div>';
    echo "
         <script>
         $('#error').slideDown('slow');
         $('#error').delay('1500');
         $('#error').slideUp('slow');
         </script>
            ";
} else {
    $_SESSION["UsuarioAlumno"] = $usuario->getUsuario();
    echo "
        <script>
             document.location.href='index.php';
        </script>
         ";
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
