<?php

// Configuración básica
date_default_timezone_set('America/Bogota');

// Datos generales
$fecha = date('Y-m-d H:i:s');
$versionPHP = PHP_VERSION;
$sistema = PHP_OS;
$servidor = $_SERVER['SERVER_SOFTWARE'] ?? 'Desconocido';
$nombreHost = $_SERVER['SERVER_NAME'] ?? 'Desconocido';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Información del servidor PHP</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #f2f4f7;
            color: #333;
        }

        header {
            background: #777bb4;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .contenedor {
            width: 90%;
            max-width: 1000px;
            margin: 30px auto;
        }

        .tarjeta {
            background: white;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .tarjeta h2 {
            color: #5558a6;
            margin-top: 0;
        }

        .dato {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #ddd;
        }

        .dato:last-child {
            border-bottom: none;
        }

        .etiqueta {
            font-weight: bold;
        }

        .valor {
            color: #555;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #777;
        }

        .boton {
            display: inline-block;
            padding: 12px 20px;
            background: #777bb4;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            margin-top: 15px;
        }

        .boton:hover {
            background: #5d6099;
        }
    </style>
</head>

<body>

<header>
    <h1>Panel de información PHP</h1>
    <p>Información básica del servidor y entorno de ejecución</p>
</header>

<div class="contenedor">

    <div class="tarjeta">
        <h2>Información general</h2>

        <div class="dato">
            <span class="etiqueta">Versión de PHP:</span>
            <span class="valor"><?php echo htmlspecialchars($versionPHP); ?></span>
        </div>

        <div class="dato">
            <span class="etiqueta">Sistema operativo:</span>
            <span class="valor"><?php echo htmlspecialchars($sistema); ?></span>
        </div>

        <div class="dato">
            <span class="etiqueta">Servidor:</span>
            <span class="valor"><?php echo htmlspecialchars($servidor); ?></span>
        </div>

        <div class="dato">
            <span class="etiqueta">Nombre del servidor:</span>
            <span class="valor"><?php echo htmlspecialchars($nombreHost); ?></span>
        </div>

        <div class="dato">
            <span class="etiqueta">Fecha y hora:</span>
            <span class="valor"><?php echo htmlspecialchars($fecha); ?></span>
        </div>
    </div>

    <div class="tarjeta">
        <h2>Información adicional</h2>

        <p>
            Esta página está ejecutándose mediante PHP y muestra
            diferentes datos obtenidos directamente del entorno del servidor.
        </p>

        <p>
            PHP permite crear páginas web dinámicas, procesar formularios,
            conectarse a bases de datos y realizar múltiples operaciones
            del lado del servidor.
        </p>

        <a class="boton" href="?info=php">Mostrar información completa de PHP</a>
    </div>

    <?php

    // Si se pulsa el botón, mostrar phpinfo()
    if (isset($_GET['info']) && $_GET['info'] === 'php') {
        echo '<div class="tarjeta">';
        echo '<h2>Información completa</h2>';
        phpinfo();
        echo '</div>';
    }

    ?>

</div>

<footer>
    Página creada con PHP &copy; <?php echo date('Y'); ?>
</footer>

</body>
</html>
