<?php
    
    $varsession = $_SESSION['usuario'];
    if($varsession == null|| $varsession == ''){
        header('Location: ../../../index.php');
        die();
    }
    
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="ElectroMilitary" />
    <link rel="icon" href="../../IMG/patito.gif" type="image/gif" >   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>ERROR 404</title>
    <!-- Stylesheets & Fonts -->
    <link href="../../css/plugins.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <?php require '../parts/navbar.php'; ?>
        <!-- end: Header -->
        <!-- 404 PAGE -->
        <section class="p-b-200 p-t-200" data-bg-parallax="../../IMG/404.gif">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-error-404" >404</div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-left">
                            <h1  class="text-medium text-dark">Ooops, Esta Pagina No Fue Encontrada!</h1>
                            <p class="text-small text-dark">Es posible que la página que está buscando se haya eliminado, haya cambiado de nombre o no esté disponible temporalmente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end:  404 PAGE -->
        <!-- Footer -->
        <?php require '../parts/footer.php'; ?>
        <!-- end: Footer -->
    </div> <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/plugins.js"></script>
    <!--Template functions-->
    <script src="../../js/functions.js"></script>
</body>

</html>
