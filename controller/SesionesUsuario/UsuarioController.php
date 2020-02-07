<?php
    require_once 'config/config.php';
    require_once 'model/DAO/UsuarioDAO.php';
    require_once 'model/DTO/Usuario.php';

    class UsuarioController{
        private $usuario;
        public function __construct(){
            $this->usuario = new UsuarioDAO();
        }
        public function Login(){
            $usuario=$_POST['usuario'];
            $claves=$_POST['clave'];
        }
        public function RegiterUsuario(){
            require_once HEADER;
            $u=new Usario();
            $u->setNombre($_POST['nombre']);
            $u->setApellido($_POST['apellido']);
            $u->setCI($_POST['CI']);
            $u->setCalve($_POST['clave']);
            $u->setRol('');
            $resultado=$this->usuario->insertUsuario($u);
            //require_once 'view/index.php';
            require_once FOOTER;
        }
    }
?>