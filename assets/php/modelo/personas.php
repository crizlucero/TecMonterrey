<?php

class Personas{
    public $idPersona;
    public $Nombre;
    public $Email;
    public $idCiudad;

    function __construct($nombre, $email, $ciudad){
        $this->Nombre = $nombre;
        $this->Email = $email;
        $this->idCiudad = $ciudad;
    }

    function getidPersona(){
        return $this->idPersona;
    }

    function setidPersona($id){
        $this->idPersona = $id;
    }

    function getNombre(){
        return $this->Nombre;
    }

    function setNombre($nombre){
        $this->Nombre = $nombre;
    }

    function getEmail(){
        return $this->Email;
    }

    function setEmail($email){
        $this->Email = $email;
    }

    function getidCiudad(){
        return $this->idCiudad;
    }

    function setidCiudad($id){
        $this->idCiudad = $id;
    }
}