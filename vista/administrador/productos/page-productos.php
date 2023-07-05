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
        
        <!-- modal editar -->
        <?php foreach ($datos as $key => $value) 
            foreach($value as $v): ?>
        <div class="modal fade" id="modal<?php echo $v['idProducto'] ?>-editar" tabindex="-1" role="modal" aria-labelledby="modal-label-2" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form class="form-validate" action="" role="form" method="get">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="modal-label-3" class="modal-title">Editando el Producto:</h4>
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <input hidden type="number" name="idProducto" value="<?php echo $v['idProducto'] ?>">
                                <div class="form-group col-md-6">
                                    <label for="name">Nombre del Articulo</label>
                                    <input type="text" value="<?php echo $v['nombre'] ?>" class="form-control" name="nombre" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Descripcion del Articulo</label>
                                    <input type="text" value="<?php echo $v['descripcion'] ?>" class="form-control" name="descripcion" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Precio del Articulo</label>
                                    <input type="number" value="<?php echo $v['precio'] ?>" class="form-control" name="precio" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="gender">Status del Articulo</label>
                                    <select class="form-control" name="estatus" type="text" aria-required="true" required class="form-control required select" type="email" aria-required="true" required class="form-control required status" >
                                            <option value="0" selected>Inactivo</option>
                                            <option value="1" selected>Sin Stock</option>
                                            <option value="2" >Activo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button">Cerrar</button>
                            <input type="hidden" name="m" value="actualizarProducto">
                            <button class="btn btn-b" type="submit" id="form-submit">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- modal agregar stock -->
        <div class="modal fade" id="modal<?php echo $v['idProducto'] ?>-agregaStock" tabindex="-1" role="modal" aria-labelledby="modal-label-2" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <form class="form-validate" action="" role="form" method="get">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="modal-label-3" class="modal-title">Agregnado stock el Producto:</h4>
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <input hidden type="number" name="idProducto" value="<?php echo $v['idProducto'] ?>">
                                <div class="form-group col-md-6">
                                    <label for="name">Cantidad a agregar</label>
                                    <input type="number" value="" class="form-control" name="stock" aria-required="true" required class="form-control required name">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button">Cerrar</button>
                            <input type="hidden" name="m" value="agregarStock">
                            <button class="btn btn-b" type="submit" id="form-submit">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end: agregar stock -->
        <?php endforeach; ?>
        <!-- end: modal -->

        <!-- Page title -->
        <section id="page-title" data-bg-parallax="../../assets/img/flores_wall.jpg">
            <div class="container">
                <div class="page-title">
                    <h1>Inventario de Productos</h1>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="">Inicio</a> </li>
                        <li class="active"><a href="">Inventario de Productos</a> </li>
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
                        <h4>Tabla de Productos</h4>
                        <p>Mostrando todos los productos del sistema</p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <a type="button" class="btn btn-light" href="/test/admin/productos?m=agregarProducto"><i class="icon-plus"></i>Agregar Producto</a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th># Producto</th>
                                <th>Nombre</th>
                                <th>descripcion</th>
                                <th>Tipo</th>
                                <th>Stock</th>
                                <th>Precio</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($datos as $key => $value) 
                                    foreach($value as $v): ?>
                            <tr>
                                <td><?php echo $v['idProducto'] ?></td>
                                <td><?php echo $v['nombre'] ?></td>
                                <td><?php echo $v['descripcion'] ?></td>
                                <td><?php echo $v['TipoNombre'] ?></td>
                                <td><?php echo $v['stock'] ?></td>
                                <td><?php echo $v['precio'] ?></td>
                                <td class="text-center">
                                <?php switch($v['estatus']): 
                                          case 2: ?>
                                        <span class="badge badge-pill badge-primary">Activo</span>
                                    <?php break; ?>
                                    <?php case 1: ?>
                                        <span class="badge badge-pill badge-danger">Sin stock</span>
                                    <?php break; ?>
                                    <?php case 0: ?>
                                        <span class="badge badge-pill badge-secondary">Inactivo</span>
                                    <?php break; ?>
                                <?php endswitch; ?>
                                </td>
                                <td style="font-size: 20px;">
                                    <a data-target="#modal<?php echo $v['idProducto'] ?>-editar" data-toggle="modal" title="Editar"><i class="fa fa-edit"></i></a>
                                    <a data-target="#modal<?php echo $v['idProducto'] ?>-agregaStock" data-toggle="modal" href="#" title="Agregar Stock"><i class="fa fa-plus"></i></a>
                                    <a href="/test/admin/productos?m=eliminarProducto&idProducto=<?php echo $v['idProducto'] ?>"><i class="fa fa-plus"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th># Producto</th>
                                <th>Nombre</th>
                                <th>descripcion</th>
                                <th>Tipo</th>
                                <th>Stock</th>
                                <th>Precio</th>
                                <th>Estado</th>
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
