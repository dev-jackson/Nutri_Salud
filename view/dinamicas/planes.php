    <div class="container-table">
    <h1>PLANES DISPONIBLES</h1>
    <div id="main-container">

    <table>
        <tbody>
        <thead>
				<tr>
					<th>Nombre de Plan</th><th>Descripcion</th><th>Costo</th>
				</tr>
			</thead>
            <?php 
                foreach($resultado as $gp):
            ?>
            <tr>
                    <td><?php echo($gp['nombre']); ?></td>
                    <td><?php echo($gp['descripcion'])?></td>
                    <td><a href="" class="">Comprar</a></td>
            </tr>
                <?php endforeach;?>
        </tbody>
    </table>
    </div>
    </div>