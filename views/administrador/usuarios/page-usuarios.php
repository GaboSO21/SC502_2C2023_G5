<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Usuarios</title>
    <!-- DataTables css -->
    <link href='../../assets/plugins/datatables/datatables.min.css' rel='stylesheet' />
    
    <!-- Stylesheets & Fonts -->
    <link href="../../assets/css/plugins.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- NAVBAR -->

    <!-- end: NAVBAR -->

    <div class="body-inner">
        <!-- Header -->
        <header id="header" class="dark">
        <div class="header-inner">
            <div class="container">
                <!--Logo-->
                <div id="logo">
                    <a href="index.php">
                        <span class="logo-default"><img src="../../assets/img/logo.png" height="50px" > AURA BOTANICA</span>
                        <span class="logo-dark"><img src="../../assets/img/logo.png" height="50px" > AURA BOTANICA</span>
                    </a>
                </div>
                <!--End: Logo-->
                <!--Navigation-->
                <div id="mainMenu">
                    <div class="container">
                        <nav>
                            <ul>
                                <li><a href="../../../index.php">Home</a></li>
                                <li><a href="">Usuario</a></li>
                                <li><a href="">Productos</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- FIN: NAV -->
            </div>
        </div>
    </header>
        <!-- end: Header -->
        
        <!-- modal editar -->
        <div class="modal fade" id="modal1-editar" tabindex="-1" role="modal" aria-labelledby="modal-label-2" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form class="form-validate" action="" role="form" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="modal-label-3" class="modal-title">Editando el Usuario:</h4>
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                    <input hidden type="number" name="txt_idUsuario" value="">
                                <div class="form-group col-md-6">
                                    <label for="name">Nombre del Usuario</label>
                                    <input type="text" value="" class="form-control" name="txt_nombreUsuario" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Primer Apellido</label>
                                    <input type="text" value="" class="form-control" name="txt_primerApellido" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Segundo Apellido</label>
                                    <input type="text" value="" class="form-control" name="txt_segundoApellido" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Cédula</label>
                                    <input type="text" value="" class="form-control" name="txt_cedula" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Correo</label>
                                    <input type="text" value="" class="form-control" name="txt_correo" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Dirección</label>
                                    <input type="text" value="" class="form-control" name="txt_direccion" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Rol</label>
                                    <input type="number" value="" class="form-control" name="txt_rol" aria-required="true" required class="form-control required name">
                                </div>
                                <!--temporal-->
                                <div class="form-group col-md-6">
                                    <label for="name">Contraseña</label>
                                    <input type="text" value="" class="form-control" name="txt_contrasena" aria-required="true" required class="form-control required name">
                                </div>
                                <!---->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button">Cerrar</button>
                            <button class="btn btn-b" type="submit" id="form-submit">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end: modal -->

        <!-- Page title -->
        <section id="page-title" data-bg-parallax="../../assets/img/planta_wall_usuarios.jpg">
            <div class="container">
                <div class="page-title">
                    <h1>Listado de Usuarios</h1>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="">Inicio</a> </li>
                        <li class="active"><a href="">Listado de Usuarios</a> </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end: Page title -->

        <!-- Page Content -->
        <section id="page-content" class="no-sidebar">
            <div class="container">
                <!-- DataTable -->
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <h4>Tabla de Usuarios</h4>
                        <p>Mostrando todos los usuarios del sistema</p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <a type="button" class="btn btn-light" href="page-registro-usuarios.html"><i class="icon-plus"></i>Agregar Usuario</a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th># Usuario</th>
                                <th>Nombre</th>
                                <th>Primer Apellido</th>
                                <th>Segundo Apellido</th>
                                <th>Cédula</th>
                                <th>Correo</th>
                                <th>Dirección</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $u ): ?>
                            <tr>
                                <td><?php echo $u['idUsuario']; ?> </td>
                                
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td class="text-center">
                                    <span class="badge badge-pill badge-primary">Administrador</span>
                                    <span class="badge badge-pill badge-danger">Usuario</span>
                                </td>
                                <td style="font-size: 20px;">
                                    <a data-target="#modal1-editar" data-toggle="modal" href="#" title="Editar"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th># Usuario</th>
                                <th>Nombre</th>
                                <th>Primer Apellido</th>
                                <th>Segundo Apellido</th>
                                <th>Cédula</th>
                                <th>Correo</th>
                                <th>Dirección</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- end: DataTable -->
        </section>
        <!-- end: Page Content -->
    </div>

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
</body>
</html>