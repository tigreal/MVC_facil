<?php

class Eror extends Controller{
    function __construct()
    {
        parent::__construct();
        // se manda a llamar un atributo que no esta declarado en la clase
        // "view" pero se le iguala el siguiente texto y en el 
        // error/index.php se hace un echo de este atributo no declarado
        // y se muestra, esto demuestra que php interpreta que si esta 
        // declarada dicho atributo de forma automatica
        $this->view->mensaje = "hubo un error al realizar la solicitud";
        $this->view->render('error/index');
        // echo "<p>error al cargar recurso</p>";
    }
}

?>