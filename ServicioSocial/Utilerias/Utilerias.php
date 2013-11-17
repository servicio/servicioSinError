<?php

class Utilerias {

    function genera_password($longitud, $tipo) {

        if ($tipo == "alfanumerico") {
            $exp_reg = "[^A-Z0-9]";

//        return substr(eregi_replace($exp_reg, "", md5(rand())) .
//                eregi_replace($exp_reg, "", md5(rand())) .
//                eregi_replace($exp_reg, "", md5(rand())), 0, $longitud);
            return substr(eregi_replace($exp_reg, "", md5(rand())), 0, $longitud);
        }
    }

    function genera_md5($clave) {
        $codificado = md5($clave);
        return $codificado;
    }

    function enviarCorreoElectronico(Correo $correo, PhPMailer $mail) {
        $de = "shanaxchornos@gmail.com";
        $para = "comodoro_21@hotmail.com"; //$_GET["email"];
        $asunto = $correo->getAsunto();
        $cabeceras = "MIME-Version: 1.0\r\n";
        $cabeceras .= "Content-type: text/html; charset=ISO-8859-1\r\n";
        $cabeceras .= "From: $de \r\n";
        ////Trabajando con PHPMailer
        ////Trabajando con PHPMailer
        //$mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->IsHTML = true;
        $mail->SMTPAuth = true; //Autentificacion de SMTP
        $mail->SMTPSecure = "ssl"; //SSL socket layer
        $mail->Host = "smtp.gmail.com"; //Servidor de SMTP 
        $mail->Port = 465; // 465
        $mail->From = $de; //Remitente (En mi variable)
        $mail->AddAddress($correo->getPara()); //Destinatario
        $mail->Username = "shanaxchornos@gmail.com";
        $mail->Password = "catscagats"; //Aqui va la contraseña valida de tu correo
        $mail->Subject = $asunto; //El asunto de correo
        $mail->Body = $pass; //$mensaje; //El mensaje de correo
        $mail->WordWrap = 50; //# de columnas
        $mail->MsgHTML($correo->getMensaje()); //Se indica que el cuerpo del correo tendra formato HTML

        if ($mail->Send()) {//Enviamos el correo por PHPMailer
            $respuesta = "El mensaje a sido enviado desde tu cuenta de Gmail :)";
        } else {
            $respuesta = "El mensaje no a sido enviado :(";
            $respuesta .= "Error: " . $mail->ErrorInfo;
        }
    }

}

?>