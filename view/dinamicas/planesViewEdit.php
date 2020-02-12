<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
        <link rel="stylesheet" href="assets/css/index.css">
        <title>Inicio de Sesion</title>
    </head>
    <body>
        <div class="container-planes">
            <form action="index.php?c=Admin&a=guardar" method="post">
                <img src="assets/imagenes/logo.png" alt="">
                <h2>registro del plan</h2>
                <input type="hidden" name="id" value="<?php echo isset($planedit) ? $planedit->id : ''; ?>"/>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" value="<?php echo isset($planedit) ? $planedit->nombre : ''; ?> "/>
                </div>
                <div class="form-group">
                    <label>Descripcion</label>
                    <input type="text" name="descripcion" value="<?php echo isset($planedit) ? $planedit->descripcion : ''; ?> "/>
                </div>
                <div class="text-center">
                    <input type="submit" value="Guardar">
                    <input TYPE="button" VALUE="Volver" onClick="history.back()">
                </div>
            </form>
        </div>

    </body>