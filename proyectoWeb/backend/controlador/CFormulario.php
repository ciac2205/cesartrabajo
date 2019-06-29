<?php

class CFormulario {
    private $modelo;
    
    public function __construct() {
        $this->modelo= new MFormulario();
    }

public function subirDatos($nombre,$telefono,$asunto,$comentario){
        
        
        $this->modelo->insertarDatos($nombre,$telefono,$asunto,$comentario);
        header("Location: index.php");
    }
}


    