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
    <link href='../vista/assets/plugins/datatables/datatables.min.css' rel='stylesheet' />
    <!-- Stylesheets & Fonts -->
    <link href="../vista/assets/css/plugins.css" rel="stylesheet">
    <link href="../vista/assets/css/style.css" rel="stylesheet">
</head>
<body>

    <!-- BODY INNER -->
    <div class="body-inner">

        <!-- NAVBAR -->
        <?php require_once "vista/parts/navbar.php"; ?>
        <!-- end: navbar -->

        <!-- modal tiposProducto -->
        <div class="modal fade" id="modal2-tiposProductos" tabindex="-1" role="modal" aria-labelledby="modal-label-2" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title">Lista de Tipos de Productos</h4>
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    </div>
                    <div class="modal-body">
                        <!-- TABLA -->
                        <div class="col-md-12">
                            <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th># TipoProducto</th>
                                        <th>Nombre</th>
                                        <th>descripcion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($datos as $key => $value) 
                                        foreach($value as $v): ?>
                                    <tr>
                                        <td><?php echo $v['idTipoProducto'] ?></td>
                                        <td><?php echo $v['nombre'] ?></td>
                                        <td><?php echo $v['descripcion'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th># TipoProducto</th>
                                        <th>Nombre</th>
                                        <th>descripcion</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- end: tabla -->
                        <form class="form-validate" action="" role="form" method="get">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nombre de la categoria</label>
                                    <input type="text" value="" class="form-control" name="nombre" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Descrpcion de la categoria</label>
                                    <input type="text" value="" class="form-control" name="descripcion" aria-required="true" required class="form-control required name">
                                </div>
                                <input type="hidden" name="m" value="guardarTipoProducto">
                                <button class="btn btn-b" type="submit" id="form-submit">Guardar</button>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-b" type="button">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: tipoProducto -->


        <!-------------Page title-------------------->
        <section id="page-title" data-bg-parallax="../../assets/img/flores_wall.jpg">
            <div class="container">
                <div class="page-title">
                    <h1>Registro de Productos</h1> 
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="">Inicio</a> </li>
                        <li class="active"><a href="#">Registro Productos</a> </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end: Page title -->

        <!-- Page Content -->
        <section id="page-content">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <a type="button" class="btn btn-light" data-target="#modal2-tiposProductos" data-toggle="modal"><i class="icon-plus"></i>Agregar Categoria</a>
                    </div>
                    <div class="content col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <span class="h4">Detalle del producto</span>
                            </div>
                            <div class="card-body">
                                <form class="form-validate" action="" role="form" method="get">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="text">Nombre</label>
                                            <input type="text" name="nombre" aria-required="true" required class="form-control required name" placeholder="Introduzca el nombre del producto..">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="name">Descripcion</label>
                                            <input type="text" name="descripcion" aria-required="true" required class="form-control required description" placeholder="Introduzca la descripcion del Producto..">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="number">Precio</label>
                                            <input type="number" name="precio" aria-required="true" required class="form-control required number" placeholder="Introduzca el precio del Producto..">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="number">Stock</label>
                                            <input type="number" name="stock" aria-required="true" required class="form-control required number" placeholder="Introduzca el precio del Producto..">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="tipoProducto">Tipo Producto</label>
                                            <select name="idTipoProducto" class="form-control" required="">
                                                <option value="">SELECCION</option>
                                                <?php foreach ($datos as $key => $value) 
                                                    foreach($value as $v): ?>
                                                <option value="<?php echo $v['idTipoProducto']?>"><?php echo $v['nombre'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="m" value="guardarProducto">
                                    <button type="submit" class="btn m-t-30 mt-3" id="form-submit">Guardar Producto</button>
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
    </div>
    <!-- end: DOBY INNER -->
</body>
</html>
