function validarform() {
    if ($('#usser').val() == "") {
        alertify.error("Ingresa tu Usuario Porfavor!");
        $('#usser').focus();
        return false;
    }
    if ($('#pass').val() == "") {
        alertify.error("Ingresa tu Pasword Porfavor!");
        $('#pass').focus();
        return false;
    }
    return true;
}
function enviarDatos() {
    if (validarform()) {
        $.post("login.php", $('#form').serialize(), function(res) {
            var r = $.parseJSON(res);
            if (!r.error) {
                if (r.status == 1) { //administrador
                    window.location = "inicio.php";
                } else { //empleado
                    window.location = "inicioempleado.php";
                }
            } else {
                alertify.error("Credenciales de conexión no válidas");
            }
        });
    }
}
$(document).ready(function() {
    $("#button").click(enviarDatos);

});