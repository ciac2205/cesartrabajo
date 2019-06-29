<?php
class Alumno {
    private $nombre;
    private $edad;
    private $calificaciones;
    private $cont=0;
    
    public function __construct($nombre,$edad) {
        $this->nombre=$nombre;
        $this->edad=$edad;
    }
    
    public function mostrarDatos(){
        return $this->nombre . " Edad ". $this->edad; 
    }
    
    public function agregarCalificaciones($materia,$califacion){
        $this->calificaciones[$this->cont]["materia"]=$materia;
        $this->calificaciones[$this->cont]["calificacion"]=$califacion;
        $this->cont++;
    }
    public function mostrarCalificaciones(){
        foreach ($this->calificaciones as $cal) {
            echo $cal["materia"]."=".$cal["calificacion"]."<br>";
        }
    }
    
    
}
