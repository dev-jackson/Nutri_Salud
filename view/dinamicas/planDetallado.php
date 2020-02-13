<?php
session_start();
?>
<div class="container-table">
    <center><h1>PLANES NUTRICIONALES DETALLADOS</h1></center>
    <div id="main-container">
        <table>
            <tbody>
            <thead>
                
            <a href="index.php?c=index&c=Cliente&a=verPlanes" class="btn-btn-info">   Atras   </a>
            <?php
                if (isset($_SESSION['Adm'])) {
                    echo('<a href="index.php?c=Admin&a=mostrarPlanesDetallados" class="btn-btn-primary">   Crear   </a>');
                   
                } elseif (isset($_SESSION['Client'])) {
                   
                }
                ?>
            
            <br></br>
            <tr >
                <!--<th>Id </th>-->
                <th>Id Plan</th>
                <th>Plan</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
                <th>Sabado</th>
                <th>Domingo</th>
                <th>Operaciones</th>
            </tr>
            </thead>
            <?php
            foreach ($resultado as $gp):
                ?>
                <tr>
<!--                    <td>< ?php echo($gp['iddetalle_plan']); ?></td>-->
                    <td><?php echo($gp['planes_nutri_idplanes_nutri']); ?></td>
                    <td><?php echo($gp['plan']); ?></td>
                    <td><?php echo($gp['lunes']); ?></td>
                    <td><?php echo($gp['martes']); ?></td>
                    <td><?php echo($gp['miercoles']); ?></td>
                    <td><?php echo($gp['jueves']); ?></td>
                    <td><?php echo($gp['viernes']); ?></td>
                    <td><?php echo($gp['sabado']); ?></td>
                    <td><?php echo($gp['domingo']); ?></td>

                    <td >
                        <?php
                        if (isset($_SESSION['Adm'])) {

                            echo('<a href="index.php?c=Admin&a=eliminarPlanesDetallados&id='. $gp['iddetalle_plan']. ' " class="btn-btn-danger" >Eliminar</a>');
                            echo('<a href="index.php?c=Admin&a=mostrarIdDetalle&id='. $gp['iddetalle_plan']. ' " class="btn-btn-modi" >Modificar</a>');
                        } elseif (isset($_SESSION['Client'])) {
                            echo('<a href="" class="btn-btn-danger">Eliminar</a>');
                            
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