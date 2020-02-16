
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
        <link rel="stylesheet" href="assets/css/index.css">
        <title>Nutricionista</title>
    </head>
    <body>
        <div class="container-planes-d">
            <form action="index.php?c=Admin&a=guardarPlanDetallado" method="post">
                <img src="assets/imagenes/logo.png" alt="">
                <h2>registro de plan Detallado</h2>
                <input type="hidden" name="idPlanDetallado" value="<?php echo isset($DetalleEdit) ? $DetalleEdit->iddetalle_plan : ''; ?>"/>
                <!--                <div class="form-group">
                                    <label>Id Plan</label>
                                    <input type="text" size="40" name="idplanNutri" value="< ?php echo isset($DetalleEdit) ? $DetalleEdit->planes_nutri_idplanes_nutri : ''; ?>"/>
                
                                </div>-->
                <div class="form-group">
                    <label>Tipo</label>
                    <select name="idplanNutri"  class="form-control">
                        <option value="0" >seleccionar</option>
                        <?php foreach ($tipoP as $tipos) {?>
                            <option value="<?php echo $tipos['idplanes_nutri']; ?>"
                            <?php
                            if (isset($DetalleEdit)) {
                                if ($tipos['idplanes_nutri'] == $DetalleEdit->planes_nutri_idplanes_nutri) {
                                    echo 'selected';
                                }
                            }
                            ?>    
                                    ><?php echo $tipos['nombre']; ?></option>
                                <?php }?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Plan</label>
                    <input type="text" size="40" name="plan" value="<?php echo isset($DetalleEdit) ? $DetalleEdit->plan : ''; ?>"/>
                </div>
                <div class="form-group">
                    <label>Lunes</label>
                    <input type="text" size="45" name="lunes" value="<?php echo isset($DetalleEdit) ? $DetalleEdit->lunes : ''; ?>"/>
                </div>
                <div class="form-group">
                    <label>Martes</label>
                    <input type="text" size="45" name="martes" value="<?php echo isset($DetalleEdit) ? $DetalleEdit->martes : ''; ?>"/>
                </div>
                <div class="form-group">
                    <label>Miercoles</label>
                    <input type="text" size="45" name="miercoles" value="<?php echo isset($DetalleEdit) ? $DetalleEdit->miercoles : ''; ?>"/>
                </div>
                <div class="form-group">
                    <label>Jueves</label>
                    <input type="text" size="45" name="jueves" value="<?php echo isset($DetalleEdit) ? $DetalleEdit->jueves : ''; ?>"/>
                </div>
                <div class="form-group">
                    <label>Viernes</label>
                    <input type="text" size="45" name="viernes" value="<?php echo isset($DetalleEdit) ? $DetalleEdit->viernes : ''; ?>"/>
                </div>
                <div class="form-group">
                    <label>Sabado</label>
                    <input type="text" size="45" name="sabado" value="<?php echo isset($DetalleEdit) ? $DetalleEdit->sabado : ''; ?>"/>
                </div>
                <div class="form-group">
                    <label>Domingo</label>

                    <input type="textarea" size="45" name="domingo" value="<?php echo isset($DetalleEdit) ? $DetalleEdit->domingo : ''; ?>"/>
                </div>
                <div class="text-center">
                    <input type="submit" value="Guardar">
                    <input TYPE="button" VALUE="Volver" onClick="history.back()">
                </div>
            </form>
        </div>

    </body>