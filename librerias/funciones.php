<?php
function arreglo(){
    $cars = array("Volvo", "BMW", "Toyota");
    $tabla="";
        for($x=0;$x< count($cars);$x++) {
                $tabla=$tabla. "<tr><td>".$cars[$x]."</td></tr>";            
            }
            return $tabla;
}
function arreglo2(){
    $cars[] ="Volvo";
    $cars[]= "BMW";
    $cars[]= "Toyota";
    $tabla="";
    foreach ($cars as $car){
                $tabla=$tabla. "<tr><td>".$car."</td></tr>";            
            }
            return $tabla;
}
function arreglo3(){
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    // $age["Peter"]
    // $age["Peter"]=38;
    $tabla="";
    foreach ($age as $key=>$a){
                $tabla=$tabla. "<tr><td>".$key." tiene ".$a."</td></tr>";            
            }
            return $tabla;
}
?>

