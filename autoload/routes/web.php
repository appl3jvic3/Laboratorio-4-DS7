<?php

use Illuminate\Support\Facades\Route;
use App\Services\AuthService; // Sustituye a cualquier include_once

Route::get('/prueba-autoload', function () {
    $servicio = new AuthService(); // Instanciación automática
    return $servicio->verificarEstado();
});

Route::get('/', function () {
    return view('welcome');
});
