<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sub Gerencia de Tramite Documentario</title>
        <meta charset="utf-8">
        <!--viewport para hacer responsive design-->
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
        <!--CDN FONTAWESOME-->
        <script src="https://use.fontawesome.com/9fe761f0b1.js"></script>
        <link rel="stylesheet" href="assets/css/estilosSeguimiento.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="assets/img/Icono.ico" type="image/x-icon">
    </head>
    <body>
        <?php require_once 'includes/cabecera.php'; ?>

        <section>
            <form action="segui.php" method="POST">
                <div class="contenedor">
                    <div class="titulo-contenedor">
                        <a href="index.php">
                            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                        </a>
                        <h3>Seguimiento</h3>
                    </div>
                    <div class="tipoEstados">
                        <h3>TIPOS DE ESTADOS:</h3>
                        <p><i class="fa fa-clock-o" aria-hidden="true" style="color:#746a6a;"></i>En espera = Esperando ser recepcionado por Mesa de Partes.</p>
                        <p><i class="fa fa-eye" aria-hidden="true" style="color:#001a57;"></i>En revisión = Esperando ser revisado por Secretaría General.</p>
                        <p><i class="fa fa-share" aria-hidden="true" style="color: #e9ec3a;"></i>Derivado = Documento llegó a su gerencia destino.</p>
                        <p><i class="fa fa-exclamation-circle" aria-hidden="true" style="color: #dc10e3;"></i>En corrección = El FUT necesita corregirse. A la espera.</p>
                        <p><i class="fa fa-check-circle" aria-hidden="true" style="color:#37e310;"></i>Tramitado = FUT tramitado exitosamente.</p>
                        <p><i class="fa fa-times-circle" aria-hidden="true" style="color: #e31010;"></i>Cancelado = Cuando no respondió a las notificaciones.</p>
                        <p><i class="fa fa-folder" aria-hidden="true" style="color: #10e3c0;"></i>Archivado = Documento archivado por haberse completado o cancelado.</p>
                    </div>
                    <div class="contenedor-codigo-cargo">
                        <label for="codigoCargo">Ingresa tu código de cargo:</label>
                        <input type="text" name="codigoCargo" id="codigoCargo">
                        <?php echo isset($_SESSION['error_login']) ? mostrarError($_SESSION['error_login'], 'codigoCargo') : ''; ?>
                    </div>
                    <div class="boton">
                        <input type="submit" value="SEGUIMIENTO" class="botonaso">
                    </div>
                </div>
            </form>
            <?php borrarErrores(); ?>
        </section>



        <?php require_once 'includes/pie.php'; ?>
    </body>
</html>