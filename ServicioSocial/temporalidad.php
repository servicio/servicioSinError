<script type="text/javascript" src="bootsTrap2/js/jquery.min.js"></script>
<script>
    function  recargar() {
        $(document).ready(function() {
            var refreshId = setInterval(refrescarTablaEstadoSala, 3000);
            $.ajaxSetup({cache: false});


            function refrescarTablaEstadoSala() {
                alert("hola");
//                $("#rolling").toggle();
//                $("#salastatus").css('opacity', 0.4);
//                $("#salastatus").load('estadoSala.do?randval=' + Math.random() + " #resulttable", function() {
//                    //aquí puedes meter más código si necesitas;
//                    $("#salastatus").css('opacity', 1);
//                    $("#rolling").toggle();
//                });
            }
        });
    }

</script>

<html>
    <body onload="recargar()">

    </body>
</html>
