<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Core\Database;

$db = new Database();
$connection = $db->getConnection();

echo "Conexión exitosa a la base de datos!";