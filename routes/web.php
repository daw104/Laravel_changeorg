<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Ruta para home
Route::get('/', [App\Http\Controllers\PagesController::class, 'home']);
//Ruta para socios
Route::get('/socios', [App\Http\Controllers\PagesController::class, 'socios']);
//Ruta para peticiones
Route::get('/peticiones/',[\App\Http\Controllers\VoyagerPeticionesController::class, 'index']);

Route::get('/peticiones/firmadas',[\App\Http\Controllers\VoyagerUsersController::class, 'peticionesFirmadas'])->middleware(['auth']);

//Ruta para CREAR peticiones
Route::get('/crear/',[\App\Http\Controllers\VoyagerPeticionesController::class, 'create']);

//Ruta para CREAR peticiones
Route::post('/peticiones/',[\App\Http\Controllers\VoyagerPeticionesController::class, 'store']);

//Ruta para peticiones por USARIO
Route::get('/mispeticiones/',[\App\Http\Controllers\VoyagerPeticionesController::class, 'peticionesUser'])->middleware(['auth']);

//Ruta Detalle de Peticion
Route::get('/peticiones/{peticion}',[\App\Http\Controllers\VoyagerPeticionesController::class, 'show']);

//Ruta para Firmar una Peticion
Route::get('/peticiones/firmar/{peticion_id}',[\App\Http\Controllers\VoyagerPeticionesController::class, 'firmar'])->middleware(['auth']);

//Cambiar estado
Route::get('/peticiones/cambiarestado/{peticion_id}',[\App\Http\Controllers\VoyagerPeticionesController::class, 'cambiarEstado']);




// Esto lo crea Voyager, sus Rutas
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

require __DIR__.'/auth.php';




