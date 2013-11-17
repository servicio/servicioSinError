<?php
session_start();
include './validacionseSessionAlumnos.php';
$validacion = new validacionseSessionAlumnos();
$validacion->verificacionDeLogueAlumnos();

$usuario = $_SESSION["UsuarioAlumno"];
include './plantilla.php';
include '../Dao/daoServicio.php';
include '../clases/cargaArchivos.php';

$cn = new coneccion();
if ($_REQUEST['guardaarchivo'] != null) {
    $nombre = $_FILES['buscaarchivo']['name'];
    $ruta = $_FILES['buscaarchivo']['tmp_name'];
    $tamañoarchivo = $_FILES['buscaarchivo']['size'];
    $tamañomaximo = 7000000;
    $ubicacion = "../alumnos/subidas/" . $nombre;

    if (is_uploaded_file($ruta) && $tamañoarchivo >= $tamañomaximo) {
        echo "Archivo muy grnade<BR>";
        echo "El tamaÑo de tu archivo = " . $tamañoarchivo;
        echo "K";
    } else {
//        if (is_uploaded_file($ruta)) {
        if (copy($ruta, $ubicacion)) {
            $cargar = new cargaArchivos();
            $cargando = new daoServicio();
            $cargar->setHubicacion($ubicacion);
            $cargar->setUsuario($usuario);
            $cargar->setNombreArchivo($nombre);
            $cargando->guardaArchivos($cargar);
        }
//        }
    }
}
?>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="../bootsTrap2/js/bootstrap.file-input.js"></script>
    <script>$(document).ready(function() {
            $('input[type=file]').bootstrapFileInput();
        });</script>
    <style>
        .stlconten{
            background-color: white;
            -webkit-background-size: cover; 
            -moz-background-size: cover; 
            -o-background-size: cover; 
            background-size: cover;
            margin-top: -20px
        }
    </style>

    <div class="container stlconten">
        <div class="span12" style="margin: auto">
            <form name="subearchivos" action="cargaArchivos.php" method="post" enctype="multipart/form-data" style="margin: 3% 3% 3% 3%">
                <h3>Tamaño maximo de los archivos: 700kb</h3>
                <div class="btn-group">
                    <input type="file" name="buscaarchivo" size="200" accept="application/pdf" title="Buscar Archivo">
                    <input type="submit" name="guardaarchivo" value="Enviar" class="btn btn-primary">
                </div>

                <div class="well well-sm" style="margin-top: 20px">
                    <!-----------------------Mostrar archivos subidos--------------------------------------->
                    <?php
                    $sql = "SELECT * FROM cargaarchivos WHERE usuario='$usuario'";
                    $datos = mysql_query($sql, $cn->Conectarse());
                    while ($rs = mysql_fetch_array($datos)) {
                        echo "<li><a target='_blank' href='" . $rs[2] . "'</a>" . $rs[3] . "</li>\n";
                    }
                    $cn->cerrarBd();
                    ?>
                    <!-------------------------------------------------------------->
                </div>

        </div>
    </form>
</div>
</div>
</html>
<?php
include './plantillaFooter.php';
?>
