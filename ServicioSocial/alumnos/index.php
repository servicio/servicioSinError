<?php
include './validacionseSessionAlumnos.php';
$validacion = new validacionseSessionAlumnos();
$validacion->verificacionDeLogueAlumnos();
include './plantilla.php';
session_start();
include '../DaoConnection/coneccion.php';
$cn = new coneccion();
$sql = "select * from  tutotmaestrosalumnos t , maestros m , avisostutor  av where matricula ='e09080264' 
    and t.idMaestro = m.id and m.usuario = av.usuario and av.control = 3";
$usuario = $_SESSION["Usuario"];
$datos = mysql_query($sql, $cn->Conectarse());
$cn->cerrarBd();
?>
<div class="container">

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

<?php
include './plantillaFooter.php';
?>
