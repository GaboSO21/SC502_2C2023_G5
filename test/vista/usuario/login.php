<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

?>
<?php require_once "vista/parts/header.php" ?>
<body>
    
    <div class="container">
       
            <div class="msj">
                <h2>Bienvenido,<br> Inicia sesión para continuar</h2>
            </div>
    
        <form class="forms">

            <img src="../../views/assets/img/logo.png" alt="">
            <h2>AuraBotanica</h2>

            <div class="inputs">

                <input class="email" type="email" placeholder="Correo Electronico">
                <input class="psw" type="password" placeholder="Contraseña">

                <input class="submit" type="submit" value="Continuar">

            </div>
        </form>
    </div>
    
</body>
</html>