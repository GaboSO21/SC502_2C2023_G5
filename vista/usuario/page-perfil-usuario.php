<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Perfil</title>
    <link href="vista/assets/css/plugins.css" rel="stylesheet">
    <link href="vista/assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="body-inner">
        <!-- NAVBAR -->
        <!-- FIN NAVBAR -->

        <!-- MODAL EDITAR DATOS PERSONALES -->
        <div class="modal fade" id="modal1-editarDatos" tabindex="-1" role="modal" aria-labelledby="modal-label-2" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form class="form-validate" action="" role="form" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="modal-label-3" class="modal-title">Editando mis datos:</h4>
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="idUsuario" value="<?php echo $datosUsuario['idUsuario'] ?>">
                            <input type="hidden" name="contrasena" value="<?php echo $datosUsuario['contrasenna'] ?>">
                            <input type="hidden" name="idRol" value="<?php echo $datosUsuario['idRol'] ?>">
                            <input type="hidden" name="m" value="actualizarPerfil" >
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="username">Nombre</label>
                                    <input value="<?php echo $datosUsuario['nombre'] ?>" type="text" class="form-control" name="nombre" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="primApellido">Primer Apellido</label>
                                    <input value="<?php echo $datosUsuario['primApellido'] ?>" type="text" class="form-control" name="primerApellido" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="segApellido">Segundo Apellido</label>
                                    <input value="<?php echo $datosUsuario['segApellido'] ?>" type="text" class="form-control" name="segundoApellido" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Correo Electronico</label>
                                    <input value="<?php echo $datosUsuario['correo'] ?>" type="email" class="form-control" name="correo" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="gender">Cedula</label>
                                    <input value="<?php echo $datosUsuario['cedula'] ?>" type="text" class="form-control" name="cedula" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button">Cerrar</button>
                            <input class="btn btn-b" type="submit" id="form-submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- FIN MODAL EDITAR DATOS PERSONALES -->

        <!-- MODAL EDITAR DATOS PERSONALES -->
        <div class="modal fade" id="modal2-editarDireccion" tabindex="-1" role="modal" aria-labelledby="modal-label-2" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form class="form-validate" action="" role="form" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="modal-label-3" class="modal-title">Editando mis datos:</h4>
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="idUsuario" value="<?php echo $datosUsuario['idUsuario'] ?>">
                            <input type="hidden" name="m" value="actualizarDireccion">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="city">Provincia</label>
                                    <input value="<?php echo $datosUsuario['provincia'] ?>" type="text" class="form-control" name="provincia" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="address">Distrito</label>
                                    <input value="<?php echo $datosUsuario['distrito'] ?>" type="text" class="form-control" name="distrito" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Codigo Postal</label>
                                    <input value="<?php echo $datosUsuario['codPostal'] ?>" type="number" class="form-control" name="codPostal" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="address">Address</label>
                                    <input value="<?php echo $datosUsuario['senalesExactas'] ?>" type="text" class="form-control" name="senalesExactas" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Canton">Canton</label>
                                    <input value="<?php echo $datosUsuario['canton'] ?>" type="text" class="form-control" name="canton" required>
                                </div>
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
        <!-- FIN MODAL EDITAR DATOS PERSONALES -->

        <!-- MODAL LISTA DE PRODUCTOS -->
        <div class="modal fade" id="modal3-lista" tabindex="-1" role="modal" aria-labelledby="modal-label-2" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title">Listado de Usuarios</h4>
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    </div>
                    <div class="modal-body">
                        <div id="page-content" class="no-sidebar">
                            <div class="container">
                                <!-- DataTable -->
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <h4>Lista de Producto</h4>
                                    </div>
                                </div>
                
                                <div class="col-lg-12">
                                    <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Cantidad</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Cantidad</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- end: DataTable -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-b" type="button">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: modal -->

        <!-- MODAL EDITAR DATOS PERSONALES -->
        <div class="modal fade" id="modal4-camPass" tabindex="-1" role="modal" aria-labelledby="modal-label-2" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form class="form-validate" action="" role="form" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="modal-label-3" class="modal-title">Editando mis datos:</h4>
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="idUsuario" value="<?php echo $datosUsuario['idUsuario'] ?>">
                            <input type="hidden" name="m" value="cambiarContrasenna">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="contraactual">Contraseña Actual </label>
                                    <input type="text" class="form-control" name="contrasena" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="text">Nueva Contraseña </label>
                                    <input type="text" class="form-control" name="nuevacontra" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cedula">Confirmacion Contraseña</label>
                                    <input type="text" class="form-control" name="confirmacontra" required>
                                </div>
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
        <!-- FIN MODAL EDITAR DATOS PERSONALES -->




        <!-- Page title -->
        <section id="page-title" data-bg-parallax="../assets/img/cbd-wall.jpg">
            <div class="container">
                <div class="page-title">
                    <h1> Bienvenido de Nuevo </br><?php echo $datosUsuario['nombre'] ?></h1>
                    <span>Perfil de Usuario</span>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="/SC502_2C2023_G5/">Inicio</a> </li>
                        <li class="active"><a href="">Perfil</a> </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end: Page title -->

        <!-- DATOS PERSONALES -->
        <section id="page-content" class="no-sidebar">
            <div class="container">
                <div class="row">
                    <!---SIDEBAR-->
                    <div class="sidebar col-lg-3">
                        <!--Tabs with Posts-->
                        <div class="widget">
                            <div class="tabs">
                                <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#usuario" role="tab" aria-controls="popular" aria-selected="false">Usuario</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#compras" role="tab" aria-controls="featured" aria-selected="false">Compras</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Recent</a>
                                    </li>
                                </ul>
                            

                                <div class="tab-content" id="tabs-posts-content">
                                    <div class="tab-pane fade show active list-icon list-icon-colored" id="usuario" role="tabpanel" aria-labelledby="popular-tab">
                                        <ul>
                                            <li class="nav-item">
                                                <a class="nav-link" data-target="#modal1-editarDatos" data-toggle="modal" href="#"><i class="fa fa-pen"></i>Editar mis datos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-target="#modal2-editarDireccion" data-toggle="modal" href="#"><i class="fa fa-pen"></i>Editar mi Direccion</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-target="#modal4-camPass" data-toggle="modal" href="#"><i class="fa fa-pen"></i>Cambiar mi Contraseña</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane fade active list-icon list-icon-colored" id="compras" role="tabpanel" aria-labelledby="featured-tab">
                                        <div class="post-thumbnail-list">
                                            <p>a</p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade active list-icon list-icon-colored" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                                        <div class="post-thumbnail-list">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End: Tabs with Posts-->
                    </div>
                    <!-- end: sidebar-->
                    <div class="content col-lg-9">
                        <div class="accordion accordion-shadow">
                            <!-- ACORDEON DATOS PERSONALES-->
                            <div class="ac-item">
                                <h5 class="ac-title"><i class="fa fa-user"></i>Datos Personales</h5>
                                <div class="ac-content">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="h5 mb-4"> Datos</div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="username">Nombre Completo</label>
                                                    <input value="<?php echo $datosUsuario['nombre'].' '.$datosUsuario['primApellido'].' '.$datosUsuario['segApellido']  ?>" type="text" class="form-control" name="NombreCompleto" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="email">Correo Electronico</label>
                                                    <input value="<?php echo $datosUsuario['correo'] ?>" type="email" class="form-control" name="email" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="gender">Cedula</label>
                                                    <input value="<?php echo $datosUsuario['cedula'] ?>" type="text" class="form-control" name="cedula" readonly>
                                                </div>
                                            </div>
                                            <div class="line"></div>
                                            <div class="h5 mb-4">Direccion de Entrega</div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="city">Provincia</label>
                                                    <input value="<?php echo $datosUsuario['provincia'] ?>" type="text" class="form-control" name="city" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="address">Distrito</label>
                                                    <input value="<?php echo $datosUsuario['distrito'] ?>" type="text" class="form-control" name="district" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Codigo Postal</label>
                                                    <input value="<?php echo $datosUsuario['codPostal'] ?>" type="number" class="form-control" name="zip" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="address">Address</label>
                                                    <input value="<?php echo $datosUsuario['senalesExactas'] ?>" type="text" class="form-control" name="address" readonly>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="Canton">Canton</label>
                                                    <input value="<?php echo $datosUsuario['canton'] ?>" type="text" class="form-control" name="canton" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- ACORDEON DATOS PERSONALES-->
                            <div class="line"></div>
                            <!-- ACORDEON COMPRAS -->
                            <div class="ac-item">
                                <h5 class="ac-title"><i class="fa fa-money-bill"></i>COMPRAS</h5>
                                <div class="ac-content">
                                    <div class="col-lg-12">
                                        <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#Compra</th>
                                                    <th>Número de Tracking</th>
                                                    <th>Estatus</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td class="text-center">
                                                        <span class="badge badge-pill badge-secondary">Pendiente</span>
                                                        <span class="badge badge-pill badge-primary">En Proceso</span>
                                                        <span class="badge badge-pill badge-warning">Revisión</span>
                                                        <span class="badge badge-pill badge-danger">Cancelado</span>
                                                        <span class="badge badge-pill badge-success">Entregado</span>
                                                    </td>
                                                    <td style="font-size: 20px;">
                                                        <a data-target="#modal3-lista" data-toggle="modal" href="#" title="Listado Producto"><i class="fa fa-list"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#Compra</th>
                                                    <th>Número de Tracking</th>
                                                    <th>Estatus</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN: ACORDEON COMPRAS PERSONALES-->
                            <div class="line"></div>

                            <!-- ACORDEON CURSO -->
                            <div class="ac-item">
                                <h5 class="ac-title"><i class="fa fa-school"></i>SERVICIOS</h5>
                                <div class="ac-content">
                                    <div class="col-lg-12">
                                        <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Imagen</th>
                                                    <th>Nombre</th>
                                                    <th>Fecha</th>
                                                    <th>Estatus</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td class="text-center">
                                                        <span class="badge badge-pill badge-secondary">Pendiente</span>
                                                        <span class="badge badge-pill badge-primary">En Proceso</span>
                                                        <span class="badge badge-pill badge-warning">Revisión</span>
                                                        <span class="badge badge-pill badge-danger">Cancelado</span>
                                                        <span class="badge badge-pill badge-success">Entregado</span>
                                                    </td>
                                                    <td style="font-size: 20px;">
                                                        <a data-target="#modal4-detalles" data-toggle="modal" href="#" title="Detalles"><i class="fa fa-list"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Imagen</th>
                                                    <th>Nombre</th>
                                                    <th>Fecha</th>
                                                    <th>Estatus</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FIN DATOS PERSONALES -->

        <!-- FOOTER -->
        <!-- FIN FOOTER -->
    </div>
    <!---------------SCRIPTS---------------------->
    <script src="vista/assets/js/jquery.js"></script>
    <script src="vista/assets/js/plugins.js"></script>
    <script src="vista/assets/js/functions.js"></script>
    <!--Datatables plugin files-->
    <script src='vista/assets/plugins/datatables/datatables.min.js'></script>
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
