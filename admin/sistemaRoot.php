<?php 
    require_once 'includes/redireccion.php';
    require_once 'includes/conexion.php';
    require_once 'includes/helpers.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sub Gerencia de Servicios, Programas Sociales Y Participación Vecinal</title>
        <meta charset="utf-8">
        <!--viewport para hacer responsive design-->
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <!--CDN FONTAWESOME-->
        <script src="https://use.fontawesome.com/9fe761f0b1.js"></script>
        <!--CDN estilos de bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--CDN jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="assets/css/estilosSistema2.css">
        <link rel="shortcut icon" href="assets/img/Icono.ico" type="image/x-icon">
        <script src="assets/js/efectosSistemaEmpleado.js"></script>
    </head>
    <body>
        <?php require_once 'includes/cabecera.php'; ?>

        <section>
            <div class="contenedor ">
            

                    <div class="d-flex align-items-start menu" >
                        <div class="opciones nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            
                            <button class="botones nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">Dashboard</button>
                            
                            <a class="botones nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Datos</a>
                            <ul class="dropdown-menu">
                                <button class="botones nav-link" id="v-pills-datos-tab" data-bs-toggle="pill" data-bs-target="#v-pills-datos" type="button" role="tab" aria-controls="v-pills-datos" aria-selected="false">Modificar Datos</button>
                                <button class="botones nav-link" id="v-pills-datos2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-datos2" type="button" role="tab" aria-controls="v-pills-datos2" aria-selected="false">Modificar Acceso</button>
                            </ul>

                            <a class="botones nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Tramites</a>
                            <ul class="dropdown-menu">
                                <button class="botones nav-link" id="v-pills-tramites-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tramites" type="button" role="tab" aria-controls="v-pills-tramites" aria-selected="false">Fut</button>
                                <button class="botones nav-link" id="v-pills-tramites2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tramites2" type="button" role="tab" aria-controls="v-pills-tramites2" aria-selected="false">Acceso a la info.</button>
                                <button class="botones nav-link" id="v-pills-tramites3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tramites3" type="button" role="tab" aria-controls="v-pills-tramites3" aria-selected="false">Documentos</button>
                                <button class="botones nav-link" id="v-pills-tramites4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tramites4" type="button" role="tab" aria-controls="v-pills-tramites4" aria-selected="false">Archivados</button>
                                <button class="botones nav-link" id="v-pills-tramites5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tramites5" type="button" role="tab" aria-controls="v-pills-tramites5" aria-selected="false">Derivar</button>
                                <button class="botones nav-link" id="v-pills-tramites6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tramites6" type="button" role="tab" aria-controls="v-pills-tramites6" aria-selected="false">Informar</button>
                            </ul>

                            <a class="botones nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Gestion</a>
                            <ul class="dropdown-menu">
                                <button class="botones nav-link" id="v-pills-gestion-tab" data-bs-toggle="pill" data-bs-target="#v-pills-gestion" type="button" role="tab" aria-controls="v-pills-gestion" aria-selected="false">Empleados</button>
                                <button class="botones nav-link" id="v-pills-gestion2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-gestion2" type="button" role="tab" aria-controls="v-pills-gestion2" aria-selected="false">Solicitantes</button>
                                <button class="botones nav-link" id="v-pills-gestion3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-gestion3" type="button" role="tab" aria-controls="v-pills-gestion3" aria-selected="false">Operacion</button>
                                <button class="botones nav-link" id="v-pills-gestion4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-gestion4" type="button" role="tab" aria-controls="v-pills-gestion4" aria-selected="false">Derivaciones</button>
                            </ul>

                            <a href="cerrar.php" class="botones">Cerrar Sesion</a>
                        </div>
                    </div>
                    <div class="dashboard">
                            <div class="tab-content" id="v-pills-tabContent">
                                <!--OPCION DASHBOARD-->
                                <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                                LELE
                                </div>

                                <!--OPCION DATOS-->

                                <!--MODIFICAR DATOS-->
                                <div class="tab-pane fade" id="v-pills-datos" role="tabpanel" aria-labelledby="v-pills-datos-tab">
                                    JAJA
                                </div>
                                <!--MODIFICAR ACCESO-->
                                <div class="tab-pane fade" id="v-pills-datos2" role="tabpanel" aria-labelledby="v-pills-datos2-tab">
                                    JEJE
                                </div>
                                
                                <!--OPCION TRAMITES-->

                                <!--FUT-->
                                <div class="tab-pane fade" id="v-pills-tramites" role="tabpanel" aria-labelledby="v-pills-tramites-tab">
                                    <p>lalapony3</p>
                                </div>
                                <!--Acceso a la informacion-->
                                <div class="tab-pane fade" id="v-pills-tramites2" role="tabpanel" aria-labelledby="v-pills-tramites2-tab">
                                    <p>lalapony3</p>
                                </div>
                                <!--Documentos-->
                                <div class="tab-pane fade" id="v-pills-tramites3" role="tabpanel" aria-labelledby="v-pills-tramites3-tab">
                                    <p>lalapony3</p>
                                </div>
                                <!--Archivados-->
                                <div class="tab-pane fade" id="v-pills-tramites4" role="tabpanel" aria-labelledby="v-pills-tramites4-tab">
                                    <p>lalapony3</p>
                                </div>
                                <!--Derivar-->
                                <div class="tab-pane fade" id="v-pills-tramites5" role="tabpanel" aria-labelledby="v-pills-tramites5-tab">
                                    <p>lalapony3</p>
                                </div>
                                <!--Informar-->
                                <div class="tab-pane fade" id="v-pills-tramites6" role="tabpanel" aria-labelledby="v-pills-tramites6-tab">
                                    <p>lalapony3</p>
                                </div>
                                
                                <!--OPCION GESTION-->

                                <!--EMPLEADOS-->
                                <div class="tab-pane fade" id="v-pills-gestion" role="tabpanel" aria-labelledby="v-pills-gestion-tab">
                                    <h3>GESTIONAR EMPLEADOS</h3>
                                    <table>
                                        <tr>
                                            <th>N</th>
                                            <th>NOMBRES</th>
                                            <th>ORGANO</th>
                                            <th>USUARIO</th>
                                            <th>TIPO E.</th>
                                            <th>CORREO</th>
                                            <th>CELULAR</th>
                                        </tr>
                                        <?php
                                            $empleados = conseguirGerentes($db);
                                            if(!empty($empleados)):
                                                $contador=1;
                                                while($empleado=mysqli_fetch_assoc($empleados)):
                                        ?>
                                            <td><?=$contador;?></td><td><?=$empleado['nombresCompletos'];?></td><td><?=$empleado['organo'];?></td><td><?=$empleado['usuario'];?></td><td><?=$empleado['tipo'];?></td><td><?=$empleado['correo'];?></td><td><?=$empleado['celular'];?></td></tr>
                                        <?php
                                                $contador++;
                                                endwhile;
                                            endif;
                                        ?>
                                    </table>
                                </div>
                                <!--SOLICITANTES-->
                                <div class="tab-pane fade" id="v-pills-gestion2" role="tabpanel" aria-labelledby="v-pills-gestion2-tab">
                                lala
                                </div>
                                <!--OPERACION-->
                                <div class="tab-pane fade" id="v-pills-gestion3" role="tabpanel" aria-labelledby="v-pills-gestion3-tab">
                                    <h3>VER OPERACIONES</h3>
                                    <table>
                                        <tr>
                                            <th>ID</th>
                                            <th>EMPLEADO</th>
                                            <th>DESCRIPCION</th>
                                            <th>FECHA Y HORA</th>
                                        </tr>
                                        <?php
                                            $operaciones = verOperaciones($db);
                                            if(!empty($operaciones)):
                                                while($operacion=mysqli_fetch_assoc($operaciones)):
                                        ?>
                                            <tr><td><?=$operacion['id'];?></td><td><?=$operacion['empleado'];?></td><td><?=$operacion['descripcion'];?></td><td><?=$operacion['fechaHora'];?></td></tr>
                                        <?php
                                                endwhile;
                                            endif;
                                        ?>
                                    </table>
                                </div>
                                <!--DERIVACIONES-->
                                <div class="tab-pane fade" id="v-pills-gestion4" role="tabpanel" aria-labelledby="v-pills-gestion4-tab">
                                
                                </div>

                            </div>
                        
                    </div>
            </div>
        </section>



        <?php require_once 'includes/pie.php'; ?>