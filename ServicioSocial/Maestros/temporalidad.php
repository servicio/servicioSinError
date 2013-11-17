<script type="text/javascript" src="../bootsTrap2/js/jquery.min.js"></script>
<script>
    function  recargar() {
        $(document).ready(function() {
            var refreshId = setInterval(refrescarTablaEstadoSala, 3000);
            $.ajaxSetup({cache: false});
            function refrescarTablaEstadoSala() {
                alert("hola");
            }
        });
    }

</script>

<html>
    <body onload="recargar()">

    </body>
</html>
