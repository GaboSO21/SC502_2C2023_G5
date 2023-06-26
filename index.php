<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- Stylesheets & Fonts -->
    <link href="views/assets/css/plugins.css" rel="stylesheet">
    <link href="views/assets/css/style.css" rel="stylesheet">
    <!-- ICO -->
    <link rel="shortcut icon" href="./views/assets/img/logo.png" type="image/x-icon">
</head>
<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- navbar -->
        <?php 
        // require_once "views/parts/navbar.php"; 
        ?>
        <header id="header" class="dark">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo">
                <a href="index.php">
                    <span class="logo-default"><img src="./views/assets/img/logo.png" height="50px" > AURA BOTANICA</span>
                    <span class="logo-dark"><img src="./views/assets/img/logo.png" height="50px" > AURA BOTANICA</span>
                </a>
            </div>
            <!--End: Logo-->
            <!--Navigation-->
            <div id="mainMenu">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="./views/administrador/usuarios/page-usuarios.php">Usuario</a></li>
                            <li><a href="">Productos</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
        <!-- End: navbar -->
        
        <!-- Page title -->
        <section id="page-title" data-bg-parallax="./views/assets/img/flores_wall.jpg">
            <div class="container">
                <div class="page-title">
                    <h1>INDEX</h1>
                </div>

            </div>
        </section>
        <!-- end: Page title -->


        <!-- FOOTER --><?php require_once "views/parts/footer.php"; ?><!-- END: FOOTER -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="views/assest/js/jquery.js"></script>
    <script src="views/assest/js/plugins.js"></script>
    <script src="views/assest/js/functions.js"></script>
</body>
</html>