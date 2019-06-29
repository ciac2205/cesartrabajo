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

   
}
