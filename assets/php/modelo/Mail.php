<?php
class Mail{
    public $to = "crizlucer@gmail.com";
    public $subject = "My subject";
    public $txt = "Hello world!";
    public $headers = "From: webmaster@example.com" . "\r\n" .
    "CC: somebodyelse@example.com";

    function sendMail(){
        mail($to,$subject,$txt,$headers);
    }
}