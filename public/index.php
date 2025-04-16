<?php
// Definir constante para la raíz del proyecto
define('ROOT', dirname(__DIR__));

// Cargar el autoloader de Composer
require_once ROOT . '/vendor/autoload.php';

// Cargar configuración
require_once ROOT . '/app/config/config.php';

// Crear directorio Core si no existe
if (!is_dir(ROOT . '/app/Core')) {
    mkdir(ROOT . '/app/Core', 0755, true);
}

// Verificar si el archivo Application.php existe
if (!file_exists(ROOT . '/app/Core/Application.php')) {
    die('El archivo Application.php no existe en ' . ROOT . '/app/Core/');
}

// Iniciar la aplicación
$app = new App\Core\Application();
$app->run();