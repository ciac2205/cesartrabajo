<?php
include_once './logica/Alumno.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $alumno= new Alumno("david",25);
        $alumno->agregarCalificaciones("matematicas", 8);
        $alumno->agregarCalificaciones("ingles", 7);
        $alumno->agregarCalificaciones("español", 8);
        echo $alumno->mostrarDatos();
        echo "<hr>";
        $alumno->mostrarCalificaciones();
        ?>
    </body>
</html>
