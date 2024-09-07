<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FincaController;
use App\Http\Controllers\LoteController;
use App\Http\Controllers\CultivoController;
use App\Http\Controllers\ProduccionController;
use App\Http\Controllers\EstacionController;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\AlertaController;


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

      // Rutas para gestion de cultivos
      Route::resource('cultivos', CultivoController::class);

      //rutas para gestion de Produccion
      Route::resource('producciones', ProduccionController::class)->names('producciones');

      //Rutas para gestion de Estaciones
      Route::resource('estaciones', EstacionController::class);

      //rutas para gestion de Dispositivos
      Route::resource('dispositivos', DispositivoController::class);

      //rutas para gestionar el Registro
      Route::resource('registros', RegistroController::class);

      //rutaas para gestionar los Alertas
      Route::resource('alertas', AlertaController::class);

});

