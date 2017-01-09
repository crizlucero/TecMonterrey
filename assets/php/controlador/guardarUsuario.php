<?php
include_once("../modelo/personas.php");
include_once("../modelo/Mail.php");
include_once("../modelo/bd.php");

$persona = new Personas($_POST['nombre'],$_POST['email'],$_POST['ciudad']);
$db = new BD();
$db->addPersonas($persona);
$mail = new Mail();

$mail->sendMail();