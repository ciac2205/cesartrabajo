<?php

class MFormulario extends BD {
    public function  insertarDatos ($nombre,$telefono,$asunto,$comentario) {
        try {
            $stmt = $this->conn->prepare("insert into formulario (nombre,telefono,asunto,comentario) values (:nombre,:telefono,:asunto,:comentario)");
            $stmt->bindParam(":nombre", $nombre);
            $stmt->bindParam(":telefono", $telefono);
            $stmt->bindParam(":asunto", $asunto);
            $stmt->bindParam(":comentario", $comentario);
            return $stmt->execute();
            
        } catch (PDOException $e) {
            echo "Error:" .$e->getMessage();

        }

    }
}