<?php include "../model/DAO/PlanesDAO.php";
 include "../model/DAO/Planes.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!---<link rel="stylesheet" href="../assets/css/style.css">--->
    <title>Planes</title>
</head>
<body>
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
</body>
</html>