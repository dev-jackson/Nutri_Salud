<?php
include_once 'config/config.php';
class IndexController {

    public function __construct() {
        
    }
    public function iniciar(){
        require_once HEADER;
        require_once './view/inicio.php';
        require_once FOOTER;
        
    }

}
