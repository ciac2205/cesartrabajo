<?php
include_once './logica/Alumno.php';
$a="";
if(isset($_POST["nombre"]) && isset($_POST["edad"])){
$nombre=$_POST["nombre"];
$edad = $_POST["edad"];
$alumno = new Alumno($nombre, $edad);
$a= $alumno->mostrarDatos();
}
$suma="";
if(isset($_GET["a"]) && isset($_GET["b"])){
    $suma=$_GET["a"]+$_GET["b"];
}
$ide="";
if(isset($_GET["id"])){
    $ide=$_GET["id"];
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<h1>". $a."</h1>";
        ?>
        <hr>
        <?php
        echo "<h1>suma=". $suma."</h1>";
        ?>
        <hr>
        <?php
        echo "<h1>id tiene =". $ide."</h1>";
        ?>
    </body>
</html>
