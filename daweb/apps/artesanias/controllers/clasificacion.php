
<?php

importar('apps/artesanias/models/clasificacion');
importar('apps/artesanias/views/clasificacion');

class ClasificacionController extends Controller  {

    public function agregar(){
        $this->view->agregar();
    }
    public function listar(){
        $sql = "SELECT * FROM clasificacion";
        $data = $this->model->query($sql);
        $this->view->listar($data);
    }

}

?>


