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

<?php endswitch; ?>


