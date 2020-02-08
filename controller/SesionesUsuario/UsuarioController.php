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

            if(isset($_POST['usuario'])){
                $usuario=$_POST['usuario'];
                $clave=$_POST['clave'];  
                $rest=$this->usuario->validateUsuario($usuario);
                $a=$rest['clave'];
                echo "<script type='text/javascript'>alert('$a');</script>";
                if(password_verify($clave,$rest['clave'])){
                    session_start();
                    $rest['roles']='C'?$_SESSION['Client']=$rest['nombre']:$_SESSION['Adm']=$rest['nombre'];
                    header("Location: index.php?");
                }else{
                    $message = "wrong answer";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    //header("Location:index.php?c=index&a=login");
                }  
            }
        }
        public function RegiterUsuario(){
            $u=new Usuario();
            $u->setNombre($_POST['nombre']);
            $u->setApellido($_POST['apellido']);
            $u->setCI($_POST['CI']);
            $u->setClave($_POST['clave']);
            $u->setRol('C');
            $this->usuario->insertUsuario($u);
            $result=$this->usuario->validateUsuario($u->getNombre(),$u->getClave());
            require_once HEADER;
            header('Location:index.php?');
            require_once FOOTER;
        }
    }
?>