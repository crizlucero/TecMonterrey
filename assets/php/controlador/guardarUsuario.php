<?php
/**
    Servicio para guardar un candidato y enviarle el correo electrónico
*/
include_once("../modelo/personas.php");
include_once("../modelo/Mail.php");
include_once("../modelo/bd.php");

$persona = new Personas($_POST['nombre'],$_POST['email'],$_POST['ciudad']);
//Inicia instancia para agregar personas en la base de datos
$db = new BD();
$db->addPersonas($persona);
//Inicia la clase para el envio de correos electrónicos
$mail = new Mail();

$mail->sendMail($persona->Email);