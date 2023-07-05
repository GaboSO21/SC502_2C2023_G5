<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuarios</title>
    <!-- DataTables css -->
    <link href='../../vista/assets/plugins/datatables/datatables.min.css' rel='stylesheet' />
    <!-- Stylesheets & Fonts -->
    <link href="../../vista/assets/css/plugins.css" rel="stylesheet">
    <link href="../../vista/assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- NAVBAR -->
    <!-- end: NAVBAR -->

    <!-- BODY INNER -->
    <div class="body-inner">

        <!-- NAVBAR -->
        <!-- end: navbar -->

        <!-------------Page title-------------------->
        <section id="page-title" data-bg-parallax="../../assets/img/planta_wall_usuarios.jpg">
            <div class="container">
                <div class="page-title">
                    <h1>Registro de Usuarios</h1>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="">Inicio</a> </li>
                        <li class="active"><a href="#">Registro Usuarios</a> </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end: Page title -->

        <!-- Page Content -->
        <section id="page-content">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <h4>Información del Usuario</h4>
                        <p>Mostrando todos los campos de usuario</p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <a type="button" class="btn btn-light" href="/SC502_2C2023_G5/admin/usuarios">Volver al Listado</a>
                    </div>
                </div>
                
                <div class="row">
                    <div class="content col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-validate" action="" role="form" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="text">Nombre del Usuario</label>
                                            <input type="text" name="nombre" aria-required="true" required class="form-control required name" placeholder="Introduzca el nombre del usuario..">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="file">Primer Apellido</label>
                                            <input type="text" name="primerApellido" aria-required="true" required class="form-control required name" placeholder="Introduzca el primer apellido del usuario..">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="file">Segundo Apellido</label>
                                            <input type="text" name="segundoApellido" aria-required="true" required class="form-control required name" placeholder="Introduzca el segundo apellido del usuario..">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="name">Cédula</label>
                                            <input type="text" name="cedula" aria-required="true" required class="form-control required description" placeholder="Introduzca la cedula del usuario..">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="number">Correo</label>
                                            <input type="text" name="correo" aria-required="true" required class="form-control required number" placeholder="Introduzca el correo del usuario..">
                                        </div>
                                        <!--temporal-->
                                        <div class="form-group col-md-6">
                                            <label for="name">Contraseña</label>
                                            <input type="text" name="contrasena" aria-required="true" required class="form-control required name" placeholder="Introduzca la contraseña del usuario..">
                                        </div>
                                        <!---->
                                    </div>
                                    <button type="submit" value="Guardar" class="btn m-t-30 mt-3" id="form-submit">Guardar Usuario</button>
                                    <input type="hidden" name="m" value="guardarUsuario">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Page Content -->

        <!-- FOOTER -->
        <!-- end: FOOTER -->

        <!--Plugins-->
        <script src="../../assets/js/jquery.js"></script>
        <script src="../../assets/js/plugins.js"></script>

        <!--Template functions-->
        <script src="../../assets/js/functions.js"></script>

        <!--Datatables plugin files-->
        <script src='../../assets/plugins/datatables/datatables.min.js'></script>
        <script>
            $(document).ready(function () {
                $('#datatable').DataTable({
                    "scrollY": "500px",
                    "scrollCollapse": true,
                    "paging": true,
                    "order": [ 4, 'asc' ],
                    "language": {
                        "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                    }
                });
            });
        </script>
    </div>
    <!-- end: DOBY INNER -->
</body>
</html>
