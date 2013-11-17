<?php
session_start();
include './validacionseSession.php';
$verificar = new validacionseSession;
$verificar ->verificacionDeLogue();

include '../DaoConnection/coneccion.php';
include '../clases/usuario.php';

$usuario = new usuario();
$usuario->setUsuario($_SESSION["Usuario"]);
$cn = new coneccion();
//relacionar avisos, 
//tutotmaestrosalumnos, id,matricula,idmaestro,control
//maestros->id,maestro,usuario
$sql = "SELECT * FROM tutotmaestrosalumnos t, maestros m, avisos a
where t.idMaestro = m .id 
and a.control = 2
and a.usuario = t.matricula
and m.usuario = '".$usuario->getUsuario()."'";
$datos = mysql_query($sql, $cn->Conectarse());
$cn->cerrarBd();
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap.css"/>
        <script src="../bootsTrap2/js/jquery.min.js"></script>
        <script src=../"bootsTrap/js/bootstrap.js"></script>
    </head>
    <body>

        <div class="container">
            <?php include './plantillaEncabezado.php'; ?>
            <center>
                <div    class="span12"  style="overflow-y: scroll; height: 335px;  margin: auto; background-color: white; margin-top: -20px">
                    <?php
                    while ($row = mysql_fetch_array($datos)) {
                        echo "<div style='float:left ; margin-left: 100px'>
                            <h3>"
                        . $row["titulo"] .
                        "</h3>
                                </div>
                                <br> <br>
                            ";

               echo "<center>
                            <div style='width:60%'>
                                <p align='justify'>"
                                    . $row["detalles"] . "
                                </p>
                            </div>
                     </center>
                              <br/>                                
                              ";
                    }
                    ?>

                </div>
            </center>
        </div>

    </body>
</html>
<?php include './plantillaFooter.php'; ?>