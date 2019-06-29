<?php
include_once './librerias/BD.php';
$bd= new BD();
$resultado= $bd->consultarAlumno(3);
$alumnos = $bd->consultaraAlumnos();
$bd->insertarAlumno("paco sanchez", 66);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
                echo $resultado["id"]." ".$resultado["nombre"]."<br>";
          
        ?>
        <hr>
        <?php
        foreach ($alumnos as $alumno){
            echo $alumno["nombre"]."<br>";
        }
        ?>
        
    </body>
</html>
