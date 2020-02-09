<?php
include_once 'config/config.php';
class IndexController {

    public function __construct() {
        
    }
    public function iniciar(){
        require_once HEADER;
        require_once 'view/inicio.php';
        require_once FOOTER;
        
    }
    public function estatica(){
        $pagina = $_REQUEST['p'];
        require_once HEADER;
        require_once 'view/estaticas/'.$pagina.'.php';
        require_once FOOTER;
    }
    public function login(){
        
        require_once 'view/estaticas/login.php';
        
    }
    public function dinamica(){
        $pagina = $_REQUEST['p'];
        require_once HEADER;
        require_once 'view/dinamicas/'.$pagina.'.php';
        require_once FOOTER;
    }
    public function registro(){
        require_once 'view/estaticas/registro.php';
    }
    public function cerrarSesion(){
        session_start();
        session_destroy();
        require_once 'view/inicio.php/';
        
    }

}
