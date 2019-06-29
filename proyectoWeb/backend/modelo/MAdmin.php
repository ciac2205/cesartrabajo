<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MAdmin
 *
 * @author christian
 */
class MAdmin  extends BD{
    public function consultarUsuario($nombre,$password){
        try {
            $pass= md5($password);
            $stmt = $this->conn->prepare("select * from admin where nombre=:nombre and password=:password");
            $stmt->bindParam(":nombre", $nombre);
            $stmt->bindParam(":password", $pass);
            $stmt->execute();
            foreach ($stmt->fetchAll() as $reg) {
                return $reg;
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
   /* public function consultarUsuario($usuario,$password){
        try {
            $pass= md5($password);
            $stmt = $this->conn->prepare("select * from usuario where usuario='".$usuario."'and password='".$pass."'");

            $stmt->execute();
            foreach ($stmt->fetchAll() as $reg) {
                return $reg;
            }

            return null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }*/
}
