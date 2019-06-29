<?php
include_once './backend/modelo/BD.php';
include_once './backend/modelo/MGaleria.php';
include_once './backend/controlador/CGaleria.php';
$galeria =new CGaleria();
?>
<html>
    <head>
        <title>TODO supply a title</title>
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
    
        

        <div class="container">
            <div class="row">
                <div class="col-12 titulos">
                    <h2>Our Privious Works</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                    <hr>
                    <div>
                        <a class="active2" href="#">Lorem.</a>
                        <a href="#">Ipsam?</a>
                        <a href="#">Doloribus!</a>
                        <a href="#">Sequi.</a>
                        <a href="#">Modi.</a>
                    </div>

                </div>
            </div>
          
            <div class="row">
                <?php echo $galeria->mostrarImagenes()?>
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