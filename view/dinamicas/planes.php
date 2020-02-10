<?php session_start() ?>
<div class="container-table">
    <h1>PLANES DISPONIBLES</h1>
    <div id="main-container">
        <table>
            <tbody>
            <thead>
                <tr>
                    <th>Nombre de Plan</th><th>Descripcion</th><th>Operaciones</th>
                </tr>
            </thead>
            <?php
            foreach ($resultado as $gp):
                ?>
                <tr>
                    <td><?php echo($gp['nombre']); ?></td>
                    <td><?php echo($gp['descripcion']) ?></td>
                    <td >
                        <?php
                        if (isset($_SESSION['Adm'])) {
                            echo('<a href="index.php?c=Admin&a=mostrar" class="btn-btn-primary">Crear</a>');
                            echo('<a href="index.php?c=Admin&a=eliminar" class="btn-btn-danger">Eliminar</a>');
                            echo('<a href="" class="btn-btn-modi">Modificar</a>');
                            echo('<a href="" class="btn-btn-info">Informacion</a>');
                        } elseif (isset($_SESSION['Client'])) {
                            echo('<a href="" class="btn-btn-primary">Comprar</a>');
                            echo('<a href="" class="btn-btn-info">Informacion</a>');
                        } else {
                            echo('<a href="" class="btn-btn-info">Informacion</a>');
                        }
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>