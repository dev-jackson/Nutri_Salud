<?php session_start()?>
<div>
<html lang="ES">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <!---<link rel="stylesheet" href="assets/css/bootstrap.min.css" >--->
        <link rel="stylesheet" href="./assets/css/inicio.css">
        <link rel="stylesheet" href="./assets/css/index.css">
        <title>Nutricionista</title>
    </head>
    <body>
    <header id="header">
    <a href="index.php" class="icon"><img src="./assets/imagenes/logo.png" alt="" width="45px"></a>
    <ul>
        <li><a href="index.php?" class="active">INICIO</a></li>
        <li><a href="index.php?c=index&c=Cliente&a=verPlanes">PLANES</a></li>
        <li><a href="index.php?c=index&a=estatica&p=nosotros">NOSOTROS</a></li>
        <li><a href="index.php?c=index&a=login"><?php if(isset($_SESSION['Adm'])){
            echo strtoupper ($_SESSION['Adm'])."ADM";   
        }else{
            echo strtoupper ($_SESSION['Client']);
        }?></a></li>
    </ul>
    <div class="respon" onclick="toogle()"><img src="assets/imagenes/logo.png" alt="" width="30px"></div>
        </header>
    </body>
</html>
</div>