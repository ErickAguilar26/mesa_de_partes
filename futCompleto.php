<?php require_once 'includes/conexion.php'; 
    require_once 'includes/helpers.php'; 
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
        <link rel="stylesheet" href="assets/css/estilosFutCompleto.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="assets/img/Icono.ico" type="image/x-icon">
    </head>
    <body>
        <?php require_once 'includes/cabecera.php'; ?>

        <section>
            <div class="contenedor">
                <div class="titulo-contenedor">
                    <h3>Trámite generado con éxito</h3>
                </div>
                <div class="info">
                    <div class="codigoCargo">
                        <h3>Tu código de cargo: </h3><a href="seguimientoTramite.php"><?=$fut['codigoCargo'];?></a>
                    </div>
                    <div class="descargarFut">
                        <h3>Descargar Fut: </h3><a href="#">DESCARGAR</a>
                    </div>
                </div>
                
                <div class="boton">
                    <a href="../mesa_de_partes">VOLVER AL MENU</a>
                </div>
            </div>
            <?php borrarErrores(); ?>
        </section>

        <?php require_once 'includes/pie.php'; ?>
    </body>
</html>