<?php
/*

*/
importar('core/mvc_engiene/helper');

abstract class Controller{
public function __construct($resource='', $arg='', $api=false) {
    $this->api      = $api;
    $this->apidata  = '';
    $this->model    = MVCEngieneHelper::get_model($this);
    $this->view     = MVCEngieneHelper::get_view($this);

    if (method_exists($this, $resource)) {
        //---llamar la clase con su metodo correspondiente,
        //---y le manda los argumentos correspondientes en caso de 
        call_user_func(array($this, $resource), $arg);
    } else {
        HTTPHelper::go(DEFAULT_VIEW);
    }
}
}
?>