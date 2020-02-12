<?php
session_start();

if (isset($_SESSION['mensaje'])) {
    echo $_session['mensaje'];
    unset($_session['mensaje']); //elimina una variable de sesion
}
?>
<div class="container-table">
    <h1>PLANES DISPONIBLES</h1>
    <div id="main-container">
        <table>
            <tbody>
            <thead>

                <?php
                if (isset($_SESSION['Adm'])) {
                    echo('<a href="index.php?c=Admin&a=mostrar" class="btn-btn-primary">   Crear   </a>');
                    echo('<a href="index.php?c=Admin&a=mostrarDetallePlan" class="btn-btn-info">Ver Planes Detallados</a>');
                } elseif (isset($_SESSION['Client'])) {
                    echo('<a href="index.php?c=Admin&a=mostrarDetallePlan" class="btn-btn-modi"">   Ver Planes adquiridos   </a>');
                }
                ?>
            <br></br>
            <tr>
                <th>Id Plan</th><th>Nombre de Plan</th><th>Descripcion</th><th>Operaciones</th>
            </tr>
            </thead>
            <?php
            foreach ($resultado as $gp):
                ?>
                <tr>
                    <td><?php echo($gp['idplanes_nutri']); ?></td>
                    <td><?php echo($gp['nombre']); ?></td>
                    <td><?php echo($gp['descripcion']); ?></td>
                    

                    <td >
                        <?php
                        if (isset($_SESSION['Adm'])) {

                            echo('<a href="index.php?c=Admin&a=eliminar&id=' . $gp['idplanes_nutri'] . '" class="btn-btn-danger" >Eliminar</a>');
                            echo('<a href="index.php?c=Admin&a=mostrarid&id=' . $gp['idplanes_nutri'] . '" class="btn-btn-modi" >Modificar</a>');
                        } elseif (isset($_SESSION['Client'])) {
                            echo('<a href="" class="btn-btn-primary">Comprar</a>');
                        } else {
                            echo('<a href="index.php?c=Cliente&a=informacion" class="btn-btn-info">Informacion</a>');
                        }
                        ?>
                    </td>
                </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>