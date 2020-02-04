<?php

//rutas generales
define("SERVIDOR","localhost");
define("NOMBREAPP","Proyecto2par");
define("RUTAAPP","http://".SERVIDOR."/".NOMBREAPP);

//RUTA RECURSOS
define("RUTACSS",NOMBREAPP.'/assets/css');
//define("RUTAJS",RUTAAPP.'/assets/js');

//ENCABEZADO Y PIE
define('HEADER','view/plantillas/header.php');
define('FOOTER','view/plantillas/footer.php');

//RUTAS PARA BASE DE DATOS
define("SERVIDORBD","localhost");
define("PUERTO","3306");
define("NOMBREBD", "nutricion");
define("USUARIO", "root");
define("PASSWORD", "");
