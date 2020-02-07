<?php
/**
 * Description of FrontController
 *
 * @Luis Pozo Gonzabay
 */
class FrontController {
    
    public function __construct() {}
    public function rutear() {
        $controller = (isset($_REQUEST['c'])) ? $_REQUEST['c']:'index';
        $action = (isset($_REQUEST['a'])) ? $_REQUEST['a']:'iniciar';
         $controller = strtolower($controller); //convierte a minuscula
        $controller = ucwords($controller) . "Controller"; //hace que la primera letra sea mayuscula y concatena
       
        if(strncmp($controller,'Cli',3)===0){
            require_once "controller/funcionesClientes/" . $controller . ".php";
        }elseif(strncmp($controller,'Adm',3)===0){
            require_once "controller/funcionesAdm/" . $controller . ".php";
        }elseif(strncmp($controller,'Usu',3)==0){
            require_once "controller/SesionesUsuario/".$controller.".php";
        }else {
            require_once "controller/" . $controller . ".php"; // require de la clase del controlador
        }
        $controller = new $controller; // creacion del objeto controlador
        $controller->$action();
    }
}
