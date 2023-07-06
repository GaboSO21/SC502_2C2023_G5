<?php 
session_start();
if(!empty($_SESSION['id'])){

    echo $_SESSION['id']." ";
    echo $_SESSION['correo'].' ';
    echo $_SESSION['idRol'].' ';

}
?>
<?php require_once "vista/parts/header.php" ?>
<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- navbar -->
        <?php 
        require_once "vista/parts/navbar.php"; 
        ?>
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


        <!-- FOOTER --><?php require_once "vista/parts/footer.php"; ?><!-- END: FOOTER -->
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

