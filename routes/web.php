<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FincaController;
use App\Http\Controllers\LoteController;


Route::get('/', function () {
    return view('welcome');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

     // Nueva ruta para la pantalla personalizada
     Route::get('/inicio', [InicioController::class, 'inicio'])->name('inicio');

      // Nueva ruta para la gestión de fincas
      Route::resource('fincas', FincaController::class)->names('fincas');

      // Rutas para la gestión de lotes
      Route::resource('lotes', LoteController::class)->names('lotes');
});

