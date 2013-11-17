<link rel="stylesheet" type="text/css" href="jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript" src="lib/alertify.js"></script>
<link rel="stylesheet" href="themes/alertify.core.css" />
<link rel="stylesheet" href="themes/alertify.default.css" />
<script type="text/javascript" src="webcam.js"></script>
<script language="JavaScript">
    webcam.set_api_url('ejecutafoto.php');//PHP adonde va a recibir la imagen y la va a guardar en el servidor
    webcam.set_quality(90); // calidad de la imagen
    webcam.set_shutter_sound(true); // Sonido de flash
</script>
<script language="JavaScript">
    function alerta() {
        alertify.success("La imagen se guardo correctamente");
        return false;
    }

    webcam.set_hook('onComplete', 'my_completion_handler');

    function do_upload() {
        // subir al servidor
        alerta();
        document.getElementById('upload_results');
        webcam.upload();

    }
</script>
<div align="center" id="cuadro_camara">    
    <div id="visualizacionCamara" style="padding-top: 5%">
        <script language="JavaScript">
            document.write(webcam.get_html(250, 250));//dimensiones de la camara
        </script>
    </div>
    <form>
        <br>
        <input type=button value="Tomar foto" onClick="webcam.freeze()" class="btn btn-info">
        &nbsp;&nbsp;
        <!--<input type=button value="Guardar " onClick="do_upload()"  name="dato" class="btn btn-success"/>-->
        &nbsp;&nbsp;
        <input type=button value="Cancelar" onClick="webcam.reset()" class="btn btn-warning">
    </form>
    <div style="float: right" id="upload_results" class="formulario"></div>
</div>