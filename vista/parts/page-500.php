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
	<meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" href="../../IMG/patito.gif" type="image/gif" >    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>ERROR 500</title>
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
        <!-- 500 PAGE -->
        <section class="p-b-200 p-t-200" data-bg-parallax="../../IMG/500.gif">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-error-404 text-center">500</div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-left">
                            <h1 class="text-medium">Error de Servidor!</h1>
                            <p class="lead text-dark">Error en el servidor de basse de datos!</p>
                            <div class="seperator m-t-20 m-b-20"></div><button onclick="window.location.reload()" class="btn" type="button">Recargar Pagina</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end:  500 PAGE -->
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
