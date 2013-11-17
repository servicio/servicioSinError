<?php include './plantillaEncabezado.php'; ?>
<html>
    <head>
        <script>

            $(document).ready(function() {
                $('#materiasCargadas').load("materiasDisponibles.php");
//                $('#materiasDisponibles').load("materiasParaCargar.php");
                $('#guardar').click(function() {
                    var checkboxValues = new Array();
                    //recorremos todos los checkbox seleccionados con .each
                    $('input[name="orderBox[]"]:checked').each(function() {
                        //$(this).val() es el valor del checkbox correspondiente
                        checkboxValues.push($(this).val());
                    });
                    var MateriasA = JSON.stringify(checkboxValues);
//                    var ajaxData = { myArray: JSON.stringify(myArray) };
                    $.ajax({
                        type: "POST",
                        url: "materias.php",
                        data: {data: MateriasA},
                        cache: false,
                        success: function() {
//                            $('#materiasDisponibles').load("materiasParaCargar.php");
                            $('#materiasCargadas').load("materiasDisponibles.php");
//                            alert("OK");
                        }
                    });
                });
            });
        </script>
    </head>
    <center>
        <div style="width: 400px;">
            <div id="materiasCargadas" style="float: left; width: 200px">
            </div>
            <?php
            include '../../DaoConnection/coneccion.php';
            $cn = new coneccion();
            $sql = "SELECT * FROM materias 
                    WHERE materias.id NOT IN (SELECT idMateria FROM historial where usuario='e09080264')
                    order by semestre 
                    limit 10";
            $datos = mysql_query($sql, $cn->Conectarse());
            while ($rs = mysql_fetch_array($datos)) {
                echo '   <input type="checkbox" 
                       name="orderBox[]"
                       value="' . $rs[0] . '"/>' . utf8_encode($rs[2]) . '
                <br>';
            }
            echo '<input type = "submit" value = "Guardar" id="guardar" class = "btn btn-info"/>';
            ?>
        </div>
    </center>
</html>