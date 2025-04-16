<?php
// Definir constante para la raíz del proyecto
define('ROOT', dirname(__DIR__));

// Cargar el autoloader de Composer
require_once ROOT . '/vendor/autoload.php';

// Cargar configuración (crearemos este archivo después)
require_once ROOT . '/app/config/config.php';

// Iniciar la aplicación (crearemos esta clase después)
$app = new App\Core\Application();
$app->run();