<?php

class BD {

    private $server = "localhost";
    private $database = "programa3b";
    private $user = "root";
    private $passw = "";
    protected $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->server;dbname=$this->database", $this->user, $this->passw);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully"; 
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    //consulta insegura pero facil de usar
    public function consultaraAlumnos() {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM alumnos");
            $stmt->execute();
            //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function consultarAlumno($id) {
        try {
            $stmt = $this->conn->prepare("select * from alumnos where id=:id");
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $reg) {
                return $reg;
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    public function insertarAlumno($nombre,$edad) {
        try {
            $stmt = $this->conn->prepare("insert into alumnos (nombre,edad) values(:nombre,:edad)");
            $stmt->bindParam(":nombre", $nombre);
            $stmt->bindParam(":edad", $edad);
            return $stmt->execute();
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    

}
