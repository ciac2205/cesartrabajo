<?php


class CGaleria {
    private $modelo;
    
    public function __construct() {
        $this->modelo= new MGaleria();
    }
    
    public function mostrarGaleriaAdmin(){
        $galeria= $this->modelo->consultaraGaleria();
        $acu="";
        foreach ($galeria as $foto){
            $acu .= '<h3>'.$foto["titulo"].' | <a href="editar.php?id='.$foto["id"].'"><i class="fa fa-pencil-square-o"></i>Editar</a> | <a href="eliminar.php?id='.$foto["id"].'"><i class="fa fa-trash fa-x2"></i>Eliminar</a></h3>';
            
        }
        return $acu;
    }

    public function subirFoto($nombre,$foto){
        
        copy($foto["tmp_name"], "../multimedia/".$foto["name"]);
        $this->modelo->insertarFoto("multimedia/".$foto["name"], $nombre);
        header("Location: panel.php");
    }
    
    public function mostrarGaleriaPrincipal(){
        $galeria= $this->modelo->consultarGaleriaPrincipal();
        $acu="";
        foreach ($galeria as $foto){
            $acu = $acu. '<div class="col-3">
                    <div class="foto">
                        <img src="'.$foto["url"].'" alt="">
                        <div class="tituloFoto">'.$foto["titulo"].'</div>
                    </div>
                </div>';
        }
        return $acu;
    }
    public function mostrarImagenes(){
        $galeria= $this->modelo->consultaraGaleria();
        $acu="";
        foreach ($galeria as $foto){
            $acu = $acu. '<div class="col-3">
                    <div class="foto">
                        <img src="'.$foto["url"].'" alt="">
                        <div class="tituloFoto">'.$foto["titulo"].'</div>
                    </div>
                </div>';
        }
        return $acu;
    }
    


    public function foto($id){
        $foto= $this->modelo->consultarFoto($id);
        return $foto;
    }
}
