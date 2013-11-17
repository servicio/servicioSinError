<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Envío de correo de la función MAIL de php</title>
        <style>
            form{
                margin: 1em auto;
                text-align: center;
            }

            span{
                color: #F60;
                font-size: 1.5em;
            }
        </style>
        <!--        Scrip para validar las cajas de texo-->
        <script>
            function validarForm() {
                var verificar = true;
                var exRegEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/; //Expresion regular para validar direccion de correo
                //---------------> Verificando que el txtDe tenga contenido y sea una direccion de correo valida
                if (!document.frmMail.txtDe.value) {
                    alert("El campo 'DE:' es obligatorio");
                    document.frmMail.txtDe.focus();
                    verificar = false;
                }
                else if (!exRegEmail.exec(document.frmMail.txtDe.value)) { //El metodo ".exec" evalua una expersion regular
                    alert("El campo 'DE:' no es valido");
                    document.frmMail.txtDe.focus();
                    verificar = false;
                }
                //----------------> Verificando que el txtPara tenga contenido y sea una direccion de correo valida
                else if (!document.frmMail.txtPara.value) {
                    alert("El campo 'PARA:' es obligatorio");
                    document.frmMail.txtPara.focus();
                    verificar = false;
                }
                else if (!exRegEmail.exec(document.frmMail.txtPara.value)) { //El metodo ".exec" evalua una expersion regular
                    alert("El campo 'PARA:' no es valido");
                    document.frmMail.txtPara.focus();
                    verificar = false;
                }
                //----------------> Verificando que el txtAsunto tenga contenido 
                else if (!document.frmMail.txtAsunto.value) {
                    alert("El campo 'ASUNTO:' es obligatorio");
                    document.frmMail.txtAsunto.focus();
                    verificar = false;
                }
                //----------------> Verificando que el txaMensaje tenga contenido
                else if (!document.frmMail.txaMensaje.value) {
                    alert("El campo 'MENSAJE:' es obligatorio");
                    document.frmMail.txaMensaje.focus();
                    verificar = false;
                }

                if (verificar) {
                    document.frmMail.submit();
                }
            }

            window.onload = function() {
                document.frmMail.btnEnviar.onclick = validarForm;
            }
        </script>
    </head>
    <body>
        <form name="frmMail" action="enviarMail.php" method="post" enctype="application/x-www-form-urlencoded">
            De:<input type="text" name="txtDe"/><br>
            Para:<input type="text" name="txtPara"/><br>
            Asunto:<input type="text" name="txtAsunto"/><br>
            Mensaje:<br><textarea name="txaMensaje"></textarea><br>
            <input type="button" name="btnEnviar" value="Enviar"/><br>
            <?php
            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
            if (isset($_GET["respuesta"])) {
                echo"<span>" . $_GET["respuesta"] . "</span>";
            }
            ?>
        </form>
    </body>
</html>
