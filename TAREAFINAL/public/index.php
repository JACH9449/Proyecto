<?php

// Habilitar errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Cargar autoload.php

require __DIR__ . '/../vendor/autoload.php';

// Usar el enrutador

use App\Core\Router;

try {
   $router = new Router();
    $router->dispatch();
} catch (Exception $e) {
    // Mostrar el error
    echo "Error: " . $e->getMessage();
}