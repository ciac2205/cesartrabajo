<?php
include_once './backend/modelo/BD.php';
include_once './backend/modelo/MNoticias.php';
include_once './backend/controlador/CNoticia.php';
$noticia= new CNoticia();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Noticias</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/font-awesome.min.css">
        <link rel="stylesheet" href="style/estilo.css"/>
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
                                   <li class="active"><a href="index.php">Inicio.</a></li>
                                    <li><a href="noticias.php">Noticias</a></li>
                                    <li><a href="galeria.php">Galeria</a></li>
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
                <div class="col-12">
                <?php echo $noticia->mostrarNoticias()?>
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
