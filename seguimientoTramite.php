<?php 
	require_once 'includes/redireccion.php';
	require_once 'includes/conexion.php'; 
	require_once 'includes/helpers.php';
	$fut= array();
	$fut = $_SESSION['codigoCargo'];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sub Gerencia de Tramite Documentario</title>
        <meta charset="utf-8">
        <!--viewport para hacer responsive design-->
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
        <!--CDN FONTAWESOME-->
        <script src="https://use.fontawesome.com/9fe761f0b1.js"></script>
        <link rel="stylesheet" href="assets/css/estilosSeguimientoFut.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="assets/img/Icono.ico" type="image/x-icon">
    </head>
    <body>
        <?php require_once 'includes/cabecera.php'; ?>

        <section>

		<div class="contenedor">
            <div class="titulo-contenedor">
                <a href="seguimiento.php">
                    <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                </a>
                <h3>Seguimiento a <?=$fut['codigoCargo'];?></h3>
            </div>
            <div class="seguimiento">
                <table>
                    <tr>
                        <th>CODIGO<br>CARGO</th>
                        <th>ESTADO</th>
                        <th>RUTA</th>
                        <th>FECHA</th>
                        <th>DESCRIPCION</th>
                    </tr>
					<tr>
                        <td><?=$fut['codigoCargo'];?></td>
                        <td><i class="fa fa-clock-o" aria-hidden="true" style="color:#746a6a;"></i></td>
                        <td>En espera a ser atendido por SGTDyAG.</td>
                        <td><?=$fut['fechaHora'];?></td>
                        <td></td>
                    </tr>
			<?php
					$tramiteActual = listarFut($db,$fut['codigoCargo']);
					if(!is_numeric($tramiteActual)):
						while($tramite = mysqli_fetch_assoc($tramiteActual)):
				?>
							<tr>
								<td><?=$tramite['codigoCargo']?></td>
								<?php
									if($tramite['estado'] == 2):
								?>
									<td><i class="fa fa-eye" aria-hidden="true" style="color:#001a57;"></i></td>
								<?php
									elseif($tramite['estado'] == 3):
								?>
									<td><i class="fa fa-share" aria-hidden="true" style="color: #e9ec3a;"></i></td>
								<?php
									elseif($tramite['estado'] == 4):
								?>
									<td><i class="fa fa-exclamation-circle" aria-hidden="true" style="color: #dc10e3;"></i></td>
								<?php
									elseif($tramite['estado'] == 5):
								?>
									<td><i class="fa fa-check-circle" aria-hidden="true" style="color:#37e310;"></i></td>
								<?php
									elseif($tramite['estado'] == 6):
								?>
									<td><i class="fa fa-times-circle" aria-hidden="true" style="color: #e31010;"></i></td>
								<?php
									elseif($tramite['estado'] == 7):
								?>
									<td><i class="fa fa-folder" aria-hidden="true" style="color: #10e3c0;"></i></td>
								<?php
									endif;
								?>
								<td><?=$tramite['ruta']?></td>
								<td><?=$tramite['fechaHora']?></td>
								<td><?=$tramite['descripcion']?></td>
							</tr>
				<?php
						endwhile;
					endif;
			?>
				</table>
			</div>


		</section>
        <?php require_once 'includes/pie.php'; ?>
    </body>
</html>