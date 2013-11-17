<link rel="stylesheet" type="text/css" href="../css/css.css">
<link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap-responsive.css"/>

<script src="../bootsTrap2/js/jquery.min.js"></script>
<script src="../bootsTrap2/js/bootstrap.js"></script>
<?php $usuario = $_GET["idusuario"]; ?>
<script language="JavaScript">
    $(document).ready(function() {
        $("#Aceptar").click(function() {
            var nombre = '<?php echo $usuario; ?>';
            var info = "nombre=" + nombre+"&acepto=1";
            //load('verificacionLogin.php?usua=' + usua + '&pass=' + pass);
            $.get('enviarPHPMail.php', info, function() {
            });
        });
        $("#Rechazar").click(function() {
            var nombre = '<?php echo $usuario; ?>';
            var info = "nombre=" + nombre+"&acepto=0";
            //load('verificacionLogin.php?usua=' + usua + '&pass=' + pass);
            $.get('enviarPHPMail.php', info, function() {
            });
        });
    });
</script>

<?php
include '../DaoConnection/coneccion.php';
include './plantillaEncabezado.php';
?>
<div class="container" style="background-color: white; margin-top: -20px;">
    <!--<img src="" class="img-rounded" width="140px;" height="140px;">-->
    <div style="height: 283px; width: 50%; float: left">
        <center>
            <br />
            <?php
            $cn = new coneccion();
            $sql = "SELECT * FROM datosregistrousuario where usuario = '$usuario'";
            $datos = mysql_query($sql, $cn->Conectarse());
            while ($row = mysql_fetch_array($datos)) {
                echo "<center><div style='width:60%'>
                    <p align='justify'>";
                echo '<table><tr><td>';
                echo "<img src=" . $row['foto'] . " class='img-thumbnail' width='140px;' height='140px;'></td>";

                echo '<td>' . $row["nombres"] . "<br />";

                echo $row["apellidoPaterno"] . "<br />";

                echo $row["apellidoMaterno"] . "<br />";

                echo $row["email"] . "<br /></td></tr></table>";



                echo "</p></div></center><br/>";
            }
            ?>

        </center>
    </div>



    <div style="height: 283px; width: 50%; float: right">
        <center>
            <br />
            <?php
            $cn2 = new coneccion();
            $sql2 = "SELECT * FROM datospersonales where usuario = '$usuario' ";
            $datos2 = mysql_query($sql2, $cn2->Conectarse());
            while ($row = mysql_fetch_array($datos2)) {
                echo "<center><div style='width:60%'>
                    <p align='justify'>";

                echo $row["idDatosPersonales"] . "<br />";

                echo $row["usuario"] . "<br />";

                echo $row["Nombre"] . "<br />";

                echo $row["apellidoPaterno"] . "<br />";

                echo $row["apellidoMaterno"] . "<br />";

                echo "</p></div></center><br/>";
            }
            ?>
        </center>
    </div>
    <center>
        <button id="Aceptar" class="btn btn-large btn-primary btn btn-success" type="button">Validar</button>            
        <button id="Rechazar" class="btn btn-large btn-primary btn btn-danger" type="button">No Validar</button>            
    </center>
</div>

<?php
include './plantillaFooter.php';
?>