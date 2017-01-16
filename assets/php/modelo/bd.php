<?php
/**
    @author Christian Lucero
    @date 2017/01/09

    Clase de control de la base de datos
*/
include_once(dirname(__FILE__) . "/ciudades.php");
include_once(dirname(__FILE__) . "/personas.php");
class BD{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "root";
    private $dbname = "tecnologico";
    private $conn = null;
    function __construct(){
        //Crea la conexión
        $this->conn = new mysqli($this->host, $this->user, $this->pwd, $this->dbname);
        // Checa la conexión
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } 
    } 
    //Obtiene las ciudades almacenadas en la base de datos
    function getCiudades(){
        $query = "select * from Ciudad";
        $result = $this->conn->query($query);
        $ciudades = array();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $ciudad = new Ciudades();
                $ciudad->setidCiudad($row["idCiudad"]);
                $ciudad->setCiudad($row["Ciudad"]);
                $ciudad->setFecha($row["Fecha"]);
                $ciudades[] = $ciudad;
            }
        }
        return json_encode($ciudades);
    }  
//Agrega las personas interesadas en la base de datos
//Se podría dar la opcion de tipo de contacto, sea vía telefónica o por correo electrónico.
    function addPersonas($persona){
        $sql = "INSERT INTO Persona (Nombre, Email, idCiudad) VALUES ('$persona->Nombre', '$persona->Email', '$persona->idCiudad')";

        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
}