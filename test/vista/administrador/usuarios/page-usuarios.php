<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

?>
<?php require_once "vista/parts/header.php" ?>
<body>
    <!-- NAVBAR -->
    <?php require_once "vista/parts/navbar.php"; ?>
    <!-- end: NAVBAR -->

    <div class="body-inner">
        <!-- Header -->
        <!-- end: Header -->
        
        <!-- modal editar -->
        <?php foreach ($datos as $key => $value) 
            foreach($value as $v): ?>
        <div class="modal fade" id="modal<?php echo $v['idUsuario'] ?>-editar" tabindex="-1" role="modal" aria-labelledby="modal-label-2" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form class="form-validate" action="" role="form" method="get">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="modal-label-3" class="modal-title">Editando el Usuario:</h4>
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <input hidden type="number" name="idUsuario" value="<?php echo $v['idUsuario'] ?>">
                                <div class="form-group col-md-6">
                                    <label for="name">Nombre del Usuario</label>
                                    <input type="text" value="<?php echo $v['nombre'] ?>" class="form-control" name="nombre" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Primer Apellido</label>
                                    <input type="text" value="<?php echo $v['primApellido'] ?>" class="form-control" name="primerApellido" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Segundo Apellido</label>
                                    <input type="text" value="<?php echo $v['segApellido'] ?>" class="form-control" name="segundoApellido" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Cédula</label>
                                    <input type="text" value="<?php echo $v['cedula'] ?>" class="form-control" name="cedula" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Correo</label>
                                    <input type="text" value="<?php echo $v['correo'] ?>" class="form-control" name="correo" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Rol</label>
                                    <input type="number" max="2" min="1" value="" class="form-control" name="idRol" aria-required="true" required class="form-control required name">
                                </div>
                                <!--temporal-->
                                <div class="form-group col-md-6">
                                    <label for="name">Contraseña</label>
                                    <input type="text" value="<?php echo $v['contrasenna'] ?>" class="form-control" name="contrasena" aria-required="true" required class="form-control required name">
                                </div>
                                <!---->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button">Cerrar</button>
                            <button class="btn btn-b" type="submit" id="form-submit">Guardar</button>
                            <input type="hidden" name="m" value="actualizarUsuario">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php endforeach; ?>
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
                        <a type="button" class="btn btn-light" href="/test/admin/usuarios?m=agregarUsuario"><i class="icon-plus"></i>Agregar Usuario</a>
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
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($datos as $key => $value) 
                                    foreach($value as $v): ?>
                            <tr>
                                <td><?php echo $v['idUsuario']; ?> </td>
                                <td><?php echo $v['nombre']; ?> </td>
                                <td><?php echo $v['primApellido']; ?> </td>
                                <td><?php echo $v['segApellido']; ?> </td>
                                <td><?php echo $v['cedula']; ?> </td>
                                <td><?php echo $v['correo']; ?> </td>
                                <td class="text-center">
                                <?php if ($v['idRol'] == 1): ?>
                                    <span class="badge badge-pill badge-primary">Administrador</span>
                                <?php else: ?>
                                    <span class="badge badge-pill badge-danger">Usuario</span>
                                <?php endif; ?>
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-primary">
                                        <a data-target="#modal<?php echo $v['idUsuario'] ?>-editar" data-toggle="modal" title="Editar">Editar</a>
                                    </span>
                                    <span class="badge badge-pill badge-danger"><a href="/test/admin/usuarios?m=eliminarUsuario&idUsuario=<?php echo $v['idUsuario'] ?>">Eliminar</a></span>
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
    <script src="../vista/assets/js/jquery.js"></script>
    <script src="../vista/assets/js/plugins.js"></script>

    <!--Template functions-->
    <script src="../vista/assets/js/functions.js"></script>

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
