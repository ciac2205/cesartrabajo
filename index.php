<?php
function imprimir(){
    $arreglo= array("bmw","Volvo","audio","ford");
    $tabla="";
        for($x=0;$x< count($arreglo);$x++) {
                $tabla=$tabla. "<tr><td>".$arreglo[$x]."</td></tr>";            
            }
            return $tabla;
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
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1">
        <?php
            echo imprimir();
        ?>
        </table>
    </body>
</html>
