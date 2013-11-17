<!--<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>-->
<!-- Modal -->
<link rel="stylesheet" type="text/css" href="jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript" src="lib/alertify.js"></script>
<link rel="stylesheet" href="themes/alertify.core.css" />
<link rel="stylesheet" href="themes/alertify.default.css" />
<script type="text/javascript" src="webcam.js"></script>
<!--<script type="text/javascript" src="../"></script>-->
<script language="JavaScript">
    webcam.set_api_url('ejecutafoto.php');//PHP adonde va a recibir la imagen y la va a guardar en el servidor
    webcam.set_quality(90); // calidad de la imagen
    webcam.set_shutter_sound(true); // Sonido de flash
</script>
<script language="JavaScript">
    webcam.set_hook('onComplete', 'my_completion_handler');
    function do_upload() {
        // subir al servidor
        document.getElementById('upload_results');
        webcam.upload();
    }
    $(document).ready(function() {
        $("#guardar").click(function() {
            do_upload();
            var usuario = $("#usuario").val();
            var nombre = $("#nombres").val();
            var apellidoM = $("#apellidoM").val();
            var apellidoP = $("#apellidoP").val();
            var correo = $("#email").val();
            var info = "usuario=" + usuario + "&nombre=" + nombre + "&apellidoM=" + apellidoM + "&apellidoP=" + apellidoP + "&correo=" + correo;
            $.get('guardarDatosPersonales.php', info, function() {
                alertify.success("La imagen se guardo correctamente");
            });
        });
    });
</script>
<div id="myModal" class="modal hide fade"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h3 id="myModalLabel">Regitro de Usuario</h3>
    </div>
    <form class="alguna" name="guardar">
        <div class="modal-body" ><center>
                <div class="row-fluid">
                    <div class="span6">
                        <input style="height: 30px" id="usuario" type="text" name="usuario" placeholder="Usuario" /> 
                    </div> 
                    <div>
                        <input  style="height: 30px" id="nombres" type="text" name="nombres" placeholder="Nombre(s)"/> 
                    </div>
                </div> 
                <div class="row-fluid">
                    <div class="span6">
                        <input style="height: 30px" id="apellidoP" type="text" name="ApellidoPaterno" placeholder="Apellido Paterno" /> 
                    </div> 
                    <div>
                        <input style="height: 30px" id="apellidoM" type="text" name="ApellidoMaterno" placeholder="Apellido Materno"/> 
                    </div>
                </div> 
                <div class="row-fluid">
                    <div class="span6">
                        <input  style="height: 30px" id="email" type="email" name="Email" placeholder="Email"/> </div> 
                </div>
                <div class="row-fluid">
                    <div align="center" id="cuadro_camara">    
                        <div id="visualizacionCamara" style="padding-top: 1%">
                            <script language="JavaScript">
                                document.write(webcam.get_html(250, 250));//dimensiones de la camara
                            </script>
                        </div>
                        <br>
                        <input type=button value="Tomar Foto" onClick="webcam.freeze()" class="btn btn-info">
                        <input type=button value="Borrar" onClick="webcam.reset()" class="btn btn-warning">
                        <br>
                        <br>
                    </div>
                </div> 
        </div> 
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
            <input id="guardar" type=button value="Guardar "  name="dato" class="btn btn-success" data-dismiss="modal"/>
        </div>
</div>

