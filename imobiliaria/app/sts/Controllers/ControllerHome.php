<?php

namespace Sts\Controllers;

class ControllerHome {

    public function index() {
       
        $listardados = new \Sts\Models\ModelHome();
        $listardados->index();
    }
    

}
