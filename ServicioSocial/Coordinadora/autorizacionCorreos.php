<?php
include '../DaoConnection/coneccion.php';
include './plantillaEncabezado.php';
?>
<div class="container">
    <center>
        <div    class="span12"  style="overflow-y: scroll; height: 335px;  margin: auto; background-color: white; margin-top: -20px">
            <br>
           <div class="input-append" style="float: left; margin-left: 40px">
                <input  id="datosBuscar" type="text" placeholder="Matricula" list="listaAlumnos" style=" height: 30px"/>
                    <datalist id="listaAlumnos">
                    <?php
                    $cn = new coneccion();
                    $sql = "SELECT usuario FROM datosregistrousuario";
                    $dato = mysql_query($sql, $cn->Conectarse());
                    while ($rs = mysql_fetch_array($dato)) {
                    ?>
                    <option><?php echo $rs[0];?></option>
                    <?php
                       }
                    ?>
                    <option></option>
                </datalist>
                    
                <input type="submit" class="btn btn-primary" value="Buscar" id="Buscar"/>
            </div>
            <br />
            <br />
            <?php
            $cn = new coneccion();
            $sql = "SELECT * FROM `datosregistrousuario` where autorizado = 0";
            $datos = mysql_query($sql, $cn->Conectarse());
            echo '<div>';
            while ($rs = mysql_fetch_array($datos)) {
                ?>
                <a href="autorizarOrechazar.php?idusuario=<?php echo $rs[1]; ?>">Contraseña pedida por el usuario: <?php echo $rs[1]; ?></a><br />
                <?php
            }
            echo '</div>'
            ?>
        </div>
    </center>
</div>

<?php
include './plantillaFooter.php';
?>