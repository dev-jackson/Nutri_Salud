<?php include "../model/DAO/PlanesDAO.php";
 include "../model/DAO/Planes.php";?>
    <?php include_once "../view/plantillas/header.php";?>
    <section id="inicio">
    <div class="container-table">
    <h1>PLANES DISPONIBLES</h1>
    <table>
        <tbody>
        <thead>
				<tr>
					<th>Nombre de Plan</th><th>Descripcion</th><th>Costo</th>
				</tr>
			</thead>
            <?php 
                $p = new PlanesDAO();
                foreach($p->getPlanesAll() as $gp):
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
    </section>