<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
$uri = $_SERVER['REQUEST_URI'];
?>

<?php 
switch ($uri):
        case '/test/': ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Index</title>
            <!-- Stylesheets & Fonts -->
            <link href="vista/assets/css/plugins.css" rel="stylesheet">
            <link href="vista/assets/css/style.css" rel="stylesheet">
            <!-- ICO -->
            <link rel="shortcut icon" href="vista/assets/img/logo.png" type="image/x-icon">
        </head>
    <?php break; ?>
    <?php case str_contains($uri, '/test/admin/productos'): ?>
    <?php case str_contains($uri, '/test/admin/usuarios'): ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Index</title>
            <!-- Stylesheets & Fonts -->
            <link href="../vista/assets/css/plugins.css" rel="stylesheet">
            <link href="../vista/assets/css/style.css" rel="stylesheet">
            <!-- ICO -->
            <link rel="shortcut icon" href="./views/assets/img/logo.png" type="image/x-icon">
        </head>
    <?php break; ?>
    <?php case '/test/login': ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio Sesion</title>
        <link rel="stylesheet" href="vista/assets/css/login.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Pacifico&display=swap" rel="stylesheet">
        </head>
    <?php break; ?>
 
<?php endswitch; ?>


