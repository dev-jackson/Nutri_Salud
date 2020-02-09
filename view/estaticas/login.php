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
    <div class="container-login">
    <form action="index.php?c=Usuario&a=Login" method="POST">
    <a href="index.php"><img class="icon-back" src="assets/imagenes/espalda.png" alt=""></a>
        <img src="assets/imagenes/logo.png" alt="">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="usuario" aria-describedby="emailHelp" placeholder="Ingrese Usuario">
    <small id="emailHelp" class="form-text text-muted">
Nunca compartiremos su correo electrónico con nadie más...</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="clave" placeholder="Ingrese Contraseña">
  </div>
 
  <button type="submit" class="btn btn-primary">Entrar</button>
  <a href="index.php?c=index&a=registro" class="btn btn-secondary">Registro</a>
</form>
    </div>
</body>
</html>