<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CAdmin
 *
 * @author christian
 */
class CAdmin {
    private $modelo;
    
    public function __construct() {
        $this->modelo= new MAdmin();
    }
    
    
    public function validarUsuario($nombre, $password){
        $nombre=$this->modelo->consultarUsuario($nombre, $password);
        if(isset($nombre)){
          $_SESSION["autentificado"] = $nombre;
          header("Location: panel.php");
        }else{
            echo "<br><br><br><br><h1>Usuario incorrecto</h1>";
        }
    }
    
    
}
