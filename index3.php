<?php
function imprimir($min=2,$max=15){
    $tabla=""; 
        for($x=$min;$x< $max;$x++) {
                $tabla=$tabla. "<tr><td>".$x."</td></tr>";            
            }
            return $tabla;
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1">
        <?php
            echo imprimir(3);
        ?>
        </table>
    </body>
</html>
