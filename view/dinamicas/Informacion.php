<div class="container-table">
    <h1>PLANES DISPONIBLES</h1>
    <div id="main-container">
        <table>
            <a href="index.php?c=Cliente&a=verPlanes" class="btn-btn-info">   Atras   </a>
            <tbody>
            <thead>
            <br></br>
                <tr>
                    <th>Nombre de Plan</th><th>Informacion Plan</th>
                </tr>
            </thead>
            <?php
            foreach ($resultado as $gp):
                ?>
                <tr>
                    <td><?php echo($gp['nombre']); ?></td>
                    <td><?php echo($gp['descripcion']); ?></td>
                    
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>