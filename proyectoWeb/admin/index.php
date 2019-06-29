<?php 
include_once '../backend/modelo/BD.php';
include_once '../backend/modelo/MAdmin.php';
include_once '../backend/controlador/CAdmin.php';
$admin = new CAdmin();
session_start();
if( isset($_POST["usuario"]) && isset($_POST["password"])){
$admin->validarUsuario($_POST["usuario"], $_POST["password"]);    
}

if (isset($_SESSION["autentificado"])){
     header("Location: panel.php");
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
                                    <li ><a href="../">Lorem.</a></li>
                                    
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
                    <h2>Adminitrador</h2>
                    <form method="post" action="index.php">
                    Usuario:<br>
                    <input type="text" name="usuario">
                    <br>
                    Password:<br>
                    <input type="password" name="password">
                    <input type="submit" value="Entrar">
                    </form>
                    <hr>
                    

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
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Follow us on</h2>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        
    </body>
</html>
