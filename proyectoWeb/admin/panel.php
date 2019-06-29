<?php
include_once '../backend/modelo/BD.php';
include_once '../backend/modelo/MAdmin.php';
include_once '../backend/modelo/MGaleria.php';
include_once '../backend/controlador/CAdmin.php';
include_once '../backend/controlador/CGaleria.php';
$admin = new CAdmin();
$galeria = new CGaleria();
session_start();
if (!isset($_SESSION["autentificado"])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../style/font-awesome.min.css">
        <link rel="stylesheet" href="../style/estilo.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body >
        <div class="fixed">
            <div class="container">
                <div class="row">
                    <header>
                        <div class="col-6">
                            <h1>tempo</h1>
                        </div>
                        <div  class="col-6">
                            <nav>
                                <ul>
                                    <li ><a href="../">Regresar.</a></li>

                                    <li> <a href="salir.php"><i class="fa fa-power-off"></i></a>
                                </ul>
                            </nav>
                        </div>
                    </header>
                </div>
            </div>
        </div>


        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12 titulos">
                    <h2>Bienvenido <?php echo $_SESSION["autentificado"]["nombre"] ?></h2>

                    <hr>
                    <div style="border: 1px solid red"> 
                        <h1>Galeria</h1>
                        <a href="nuevafoto.php"><i class="fa fa-plus-circle"></i>Nueva foto</a>
                        <hr>
                        <?php echo $galeria->mostrarGaleriaAdmin() ?>
                    </div>

                </div>
            </div>


        </div>

        <div class="fondoRojo">
            <div class="container">
                <div class="row newsletter">
                    <div class="col-9">

                        <h3>Full Responsive HTML5 Bootstrap Template.</h3>

                    </div>
                    <div class="col-3">
                        <a href="#">Request A Quote</a>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <script>
                setInterval (function () {
                $.ajax({url:"servicio.php",
                        success: function (result){
                var r = JSON.parse(result);
                var comentarios = r.comentarios;
                var acu = '';
                for (var i = 0; i<comentarios.length; i++) {
                acu = acu + '<tr><td>' + comentarios[i].id + '</td><td><a href="#">'+comentarios[i].comentarios' < /a></td > </tr>';

}
$("#numNot").html("Comentarios"+r.total);
$("#tablaCom").html(acu)
        }});
        },2000);
        </script>
    </body>
</html>
