<?php

class CNoticia {
    private $modelo;
    
    public function __construct() {
        $this->modelo = new MNoticias();
    }
    
    public function noticiasPrincipal(){
        $noticias= $this->modelo->consultarNoticiasPrincipal();
        $acu="";
        foreach ($noticias as $notocia){
            $acu = $acu .'
                    <div class="row borde">
                        <div class="col-4"><img src="'.$notocia["url"].'" alt=""></div>
                        <div class="col-8 margen-80">
                            <span>'.$notocia["titulo"].'</span><br>
                            <p>'.substr($notocia["noticia"],0,50).'</p>
                                <a href="noticia.php?id='.$notocia["id"].'">Leer Mas</a>
                        </div>

                    </div>



                ';
        }
        return $acu;
        
    }
    public function noticia($id){
        $noticia= $this->modelo->consultarNoticia($id);
        return $noticia;
    }
    public function  mostrarNoticias(){
        $noticia= $this->modelo->consultaraNoticias();
         $acu="";
        foreach ($noticia as $notocia){
            $acu = $acu .'<div class="col-12">
                    <div class="row borde">
                        <div class="col-6"><img src="'.$notocia["url"].'" alt=""></div>
                        <div class="col-6 margen-80">
                            <span>'.$notocia["titulo"].'</span><br>
                            <p>'.substr($notocia["noticia"],0,50).'</p>
                                <a href="noticia.php?id='.$notocia["id"].'">Leer Mas</a>
                        </div>

                    </div>



                </div>';
        }
        return $acu;
        
    
}
}

