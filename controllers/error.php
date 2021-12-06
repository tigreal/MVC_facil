<?php

class error extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->render('error/index');
        // echo "<p>error al cargar recurso</p>";
    }
}

?>