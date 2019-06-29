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
        <h1>Registrar Alumno </h1><br>
        <form method="post" action="procesarFormulario.php">
            Nombre;
            <input type="text" name="nombre">
            <br>
            Edad:
            <input type="number" name="edad">
            <br>
            <input type="submit" value="Enviar">
        </form>
        <hr>
        <ul>
            <li><a href="procesarFormulario.php?a=5&b=6">Lorem ipsum dolor.</a></li>
            <li><a href="procesarFormulario.php?id=3">Corporis, architecto, doloremque.</a></li>
            <li><a href="procesarFormulario.php?id=5">Cumque, iure, repudiandae.</a></li>
            <li><a href="procesarFormulario.php?id=7">Ducimus, magni, cupiditate!</a></li>
        </ul>
        
    </body>
</html>
