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
    <form action="index.php?c=Usuario&a=RegiterUsuario" method="POST">
    <a href="index.php?c=index&a=login"><img class="icon-back" src="assets/imagenes/espalda.png" alt=""></a>
        <img src="assets/imagenes/logo.png" alt="">
  <div class="form-group">
    <label for="">Ingrese Nombre y Apellido</label>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="nombre"  placeholder="Nombre">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="apellido" placeholder="Apellido">
    </div>
  </div>
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="clave" placeholder="Password">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Cedula</label>
    <input type="input" class="form-control" name ="CI" placeholder="Ingrese Cedula">
  </div>
 
  <button type="submit" class="btn btn-primary">Registrarse</button>
</form>
    </div>
</body>
</html>