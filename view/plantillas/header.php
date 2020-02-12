<?php session_start();?>
<div>
<html lang="ES">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <!---<link rel="stylesheet" href="./assets/css/bootstrap.min.css" >-->
        <script src="./assets/js/sweetalert.min.js"></script>
        <link rel="stylesheet" href="./assets/css/inicio.css">
        <link rel="stylesheet" href="./assets/css/index.css">
    
        <title>Nutricionista</title>
    </head>
    <body>
    <header class="header-p">
    <a href="index.php" class="icon"><img src="./assets/imagenes/logo.png" alt="" width="45px"></a>
    <ul>
        <li><a href="index.php?c=index&a=iniciar" class="active" id="inicio">INICIO</a></li>
        <li><a href="index.php?c=index&c=Cliente&a=verPlanes" id="planes">PLANES</a></li>
        <li><a href="index.php?c=index&a=estatica&p=nosotros" id="nosotros">NOSOTROS</a></li>
        <li><a  <?php
            if(isset($_SESSION['Adm'])||isset($_SESSION['Client'])){
                echo "href='#' onclick='cerrar();'";
                
            }else{
                echo "href='index.php?c=index&a=login'";
            }
        ?>><?php if(isset($_SESSION['Adm'])){
            echo strtoupper ($_SESSION['Adm'].'(ADM)   Salir');   
        }elseif(isset($_SESSION['Client'])){
            echo strtoupper ($_SESSION['Client'].'  Salir');
        }else{
            echo 'LOGIN';
        }?></a></li>
        
    </ul>
    <div class="respon" onclick="toogle()"><img src="assets/imagenes/logo.png" alt="" width="30px"></div>
        </header>
    <script type="text/javascript">
        function cerrar(){
            swal({
                     closeOnClickOutside:false,
                     title: "Aviso !",
                     text: "Esta seguro de cerrar Sesion",
                     icon: "warning",
                     buttons: {
                     si:{ 
                      text:"si",
                      value:"si"
                      },
                      no:{ 
                      text:"no",
                      value:"no"
                      },
                      },
                })
                .then((value) => {
                switch (value) {                                     
                case "si":

                           window.location.href ="index.php?c=Usuario&a=DestroySession&s='$_SESSION'";    
                  break;
                case "no":
                               
                  break;
            }
          })
        }
    </script>
    </body>
</html>
</div>