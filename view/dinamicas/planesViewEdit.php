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
                <input type="hidden" name="id" value="<?php echo isset($plan) ? $plan->id : ''; ?>"/>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" value="<?php echo isset($plan) ? $plan->nombre : ''; ?> "/>
                </div>
                <div class="form-group">
                    <label>Descripcion</label>
                    <input type="text" name="descripcion" value="<?php echo isset($plan) ? $plan->descripcion : ''; ?> "/>
                </div>
                <div class="text-center">
                    <input type="submit" value="Guardar">

                </div>
            </form>
        </div>

    </body>