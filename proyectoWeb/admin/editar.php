<?php 
include_once '../backend/modelo/BD.php';
include_once '../backend/modelo/MAdmin.php';
include_once '../backend/modelo/MGaleria.php';
include_once '../backend/controlador/CAdmin.php';
include_once '../backend/controlador/CGaleria.php';
$admin = new CAdmin();
$galeria = new CGaleria();
session_start();
if (!isset($_SESSION["autentificado"])){
     header("Location: index.php");
}


if(isset($_POST["nombre"]) && $_FILES["foto"] && $_POST["ide"]){
    
    $galeria->editarFoto($_POST["nombre"], $_FILES["foto"],$_POST["ide"]);
}
$foto = $galeria->foto($_GET["id"])
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
                    <h2>Bienvenido <?php echo $_SESSION["autentificado"]["nombre"] ?></h2>
                    
                    <hr>
                    <div style="border: 1px solid red"> 
                        <h1>Subir Galeria</h1>
                        
                        <form method="post" action="editar.php" enctype="multipart/form-data">
                            Nombre foto:<br><input type="text" name="nombre" value="<?php echo $foto["nombre"] ?>" >
                            <br>
                            Foto: <br>
                            <input type="file" name="foto" accept="image/*">
                            <img src="../<?php echo $foto["url"] ?>" width="100">
                            <br>
                        
                            <input type="hidden" name="ide" value="<?php echo $foto["id"] ?>">
                            <input type="submit" value="Modificar foto">
                        </form>
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
