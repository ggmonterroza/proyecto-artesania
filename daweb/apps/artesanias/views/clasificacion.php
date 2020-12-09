<?php

class ClasificacionView  {

    public function agregar(){
        echo "Metodo agregar de clase ClasificacionViews";
    } 

    public function listar($list=array()) {
        $str = file_get_contents(
            STATIC_DIR . "html/artesanias/clasificacion_listar.html"); 
        $html = Template($str)->render_regex('LISTADO_CLASIFICACION', $list);
        print Template('Listado de clasificacion')->show($html);
    }

}

?>