<?php include './plantillaEncabezado.php'; ?>
<html>
    <head>
        <script>
            $(document).ready(function() {
                $('#guardar').click(function() {
                    var checkboxValues = new Array();
                    //recorremos todos los checkbox seleccionados con .each
                    $('input[name="orderBox[]"]:checked').each(function() {
                        //$(this).val() es el valor del checkbox correspondiente
                        checkboxValues.push($(this).val());
                    });
                    alert(checkboxValues.length);
                    var MateriasA = JSON.stringify(checkboxValues);
//                    var ajaxData = { myArray: JSON.stringify(myArray) };
                    $.ajax({
                        type: "POST",
                        url: "materias.php",
                        data: {data: MateriasA},
                        cache: false,
                        success: function() {
                            alert("OK");
                        }
                    });
                });
            });
        </script>
    </head>
<!--    <input id="orderBox1" type="checkbox" name="orderBox[]" value="1" />1
    <br>
    <input id="orderBox2" type="checkbox" name="orderBox[]" value="2" />2
    <br>
    <input id="orderBox3" type="checkbox" name="orderBox[]" value="3" />3
    <br>
    <input id="orderBox4" type="checkbox" name="orderBox[]" value="4" />4
    <br>
    <input id="orderBox5" type="checkbox" name="orderBox[]" value="5" />5
    <br>-->

    <?php
    include '../DaoConnection/coneccion.php';
    $cn = new coneccion();
    $sql = "SELECT * FROM materias 
    WHERE materias.id NOT IN (SELECT idMateria FROM historial where usuario='e09080264')
    order by semestre 
    limit 20";
    $datos = mysql_query($sql, $cn->Conectarse());
    ?>
    <?php
    while ($rs = mysql_fetch_array($datos)) {
        ?>
        <input type="checkbox" 
               name="orderBox[]"
               value= <?php echo $rs[0]; ?> /><?php echo utf8_encode($rs[2]); ?>
        <br>
        <?php
    }
    ?>
    <input type = "submit" value = "Guardar" id = "guardar" class = "btn btn-info"/>
</html>