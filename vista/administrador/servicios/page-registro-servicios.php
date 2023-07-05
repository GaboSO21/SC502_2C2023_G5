<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Prodcutos</title>
    <!-- Stylesheets & Fonts -->
    <link href="../../assets/css/plugins.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- NAVBAR -->
    <?php require_once "vista/parts/navbar.php"; ?>
    <!-- end: navbar -->

    <!-- BODY INNER -->
    <div class="body-inner">

        <!-- NAVBAR -->
        <!-- end: navbar -->

        <!-- modal tiposServicio -->
        <div class="modal fade" id="modal2-tiposServicios" tabindex="-1" role="modal" aria-labelledby="modal-label-2" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-3" class="modal-title">Lista de Tipos de Servicios</h4>
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    </div>
                    <div class="modal-body">
                        <!-- TABLA -->
                        <div class="col-md-12">
                            <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th># TipoServicio</th>
                                        <th>Nombre</th>
                                        <th>descripcion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th># TipoServicio</th>
                                        <th>Nombre</th>
                                        <th>descripcion</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- end: tabla -->
                        <form class="form-validate" action="" role="form" method="post"></form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nombre de la categoria</label>
                                    <input type="text" value="" class="form-control" name="txt_nombreCategoria" aria-required="true" required class="form-control required name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Descrpcion de la categoria</label>
                                    <input type="text" value="" class="form-control" name="txt_descripcionCategoria" aria-required="true" required class="form-control required name">
                                </div>
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
        <!-- end: tipoServicio -->

        <!-------------Page title-------------------->
        <section id="page-title" data-bg-parallax="../../assets/img/flores_wall.jpg">
            <div class="container">
                <div class="page-title">
                    <h1>Registro de Servicios</h1> 
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="">Inicio</a> </li>
                        <li class="active"><a href="#">Registro Servicios</a> </li>
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
                        <a type="button" class="btn btn-light" data-target="#modal2-tiposServicios" href="#" data-toggle="modal"><i class="icon-plus"></i>Agregar Categoria</a>
                    </div>
                    <div class="content col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <span class="h4">Detalle del Servicio</span>
                            </div>
                            <div class="card-body">
                                <form class="form-validate" action="" role="form" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="text">Nombre</label>
                                            <input type="text" name="txt_nomServicio" aria-required="true" required class="form-control required name" placeholder="Introduzca el nombre del servicio..">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="file">IMAGEN</label>
                                            <input type="file" name="imgServicio" aria-required="true" required class="form-control required name" placeholder="Introduzca el nombre del servicio..">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="name">Descripcion</label>
                                            <input type="text" name="txt_descServicio" aria-required="true" required class="form-control required description" placeholder="Introduzca la descripcion del Servicio..">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="number">Cupos</label>
                                            <input type="number" name="txt_cuposServicio" aria-required="true" required class="form-control required number" placeholder="Introduzca los cupos del Servicio..">
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="tipoServicio">Tipo Servicio</label>
                                            <select name="tipoServicio" class="form-control" required="">
                                                <option value="">SELECCION</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="date">Fecha del servicio</label>
                                            <input type="date" name="txt_fechaServicio" aria-required="true" required class="form-control required name" placeholder="Introduzca el codigo de barras..">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn m-t-30 mt-3" id="form-submit">Guardar Servicio</button>
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