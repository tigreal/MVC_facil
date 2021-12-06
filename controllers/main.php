<?php

class main extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->view->render('main/index');
        
        echo "<p>nuevo controlador main</p>";
    }
    public function saludo(){
        echo "<p>ejecutaste el metodod saludo</p>";
    }
}
?>