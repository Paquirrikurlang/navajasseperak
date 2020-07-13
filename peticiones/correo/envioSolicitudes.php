<?php
//require_once '../modelos/AfiliacionSocio.php';
require_once("../../EnviarCorreo.php");
require_once("../../util/credentialsEmail.php");
require_once("../../util/mensajes.php");



switch ($_GET["op"]) {

    case 'enviarSolicitudPedido':
        $nombres = isset($_POST["nombres"]) ? htmlspecialchars($_POST["nombres"]) : "";

        $apellidos = isset($_POST["apellidos"]) ? htmlspecialchars($_POST["apellidos"]) : "";
        $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";

        // $destinatario =  $email;
        $destinatario =  SMTP_USUARIO_RECIBE;
        $smtpHost = SMTP_HOST;
        $smtpUsuario = SMTP_USUARIO;
        $smtpClave =  SMTP_CLAVE;
        $subject = MSN_SUBJECTCRIADOR;
        $EnviarCorreo = new EnviarCorreo($destinatario, $smtpHost, $smtpUsuario, $smtpClave);
        $rptaCorreo = $EnviarCorreo->enviarCorreo($nombre, $apellidos,  $subject);
        // echo $rspta ? "Solicitud " . ($respuestaSolicitud == 1 ? "Aceptada" : "Rechazada") : "No se pudo realizar esta operaci��n";
        echo $rptaCorreo;
        // $EnviarCorreo->prueba();
        //$nombres  . $apellidos .  $email  .  $destinatario .  $smtpHost  .  $smtpUsuario . $smtpClave . $subject;
        break;
}
