<?php

// 1. Único archivo que debemos requerir: el autoload de Composer
require_once __DIR__ . '/vendor/autoload.php';

// 2. Usamos el Namespace
use App\Controllers\ClienteController;

// 3. Instanciamos la clase
$cliente = new ClienteController();

echo "<h1>Prueba de Autoload PSR-4</h1>";
echo "<p>" . $cliente->obtenerDatos() . "</p>";