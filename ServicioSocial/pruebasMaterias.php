<html>
    <head>
        <script type="text/javascript" src="bootsTrap2/js/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#guardar').click(function() {
                    //            var checkboxValues = new Array();
                    alert("entro");
                    //recorremos todos los checkbox seleccionados con .each
                    $('input[name="orderBox[]"]:checked').each(function() {
                        //$(this).val() es el valor del checkbox correspondiente
                        checkboxValues.push($(this).val());
                    });

                });



                //        $('#materiasDisponibles').load('cargarMateriasFaltantes.php');
                //        $('#check').on("change", function() {
                //            $('#check').each(function() {
                //                alert("1");
                //                var checkbox = $(this);
                //                log('El checkbox ' + checkbox.attr('check') + ' está checkeado? ' + checkbox.is(':checked'));
                //             });
                ////                if ($("#check").is(':checked')) {
                ////                    alert("Está activado");
                ////                } else {
                ////                    alert("No está activado");
                ////                }
                //        });
            });
        </script>
    </head>
    <input id="orderBox1" type="checkbox" name="orderBox[]" value="1" />1
    <br>
    <input id="orderBox2" type="checkbox" name="orderBox[]" value="2" />2
    <br>
    <input id="orderBox3" type="checkbox" name="orderBox[]" value="3" />3
    <br>
    <input id="orderBox4" type="checkbox" name="orderBox[]" value="4" />4
    <br>
    <input id="orderBox5" type="checkbox" name="orderBox[]" value="5" />5
    <br>
    <input type="submit" value="Guardar" id="guardar "/>
</html>