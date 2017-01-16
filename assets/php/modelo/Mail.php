<?php
/**
    @author Christian Lucero
    @date 2017/01/10

    Clase para mandar el correo electrónico a los alumnos que requieran información
*/
class Mail{
    public $subject = "Envío de información";
    public $txt = "Texto de la información";
    public $headers = "From: webmaster@example.com" . "\r\n" .
    "CC: somebodyelse@example.com";

    function sendMail($to){
        mail($to,$this->subject,$this->txt,$this->headers);
    }
}