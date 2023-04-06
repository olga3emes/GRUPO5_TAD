<?php

use Illuminate\Support\Facades\Route;

// Aqui estan todos los controllers que se usarán
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AccesoriosController;
use App\Http\Controllers\Carrito_comprasController;
use App\Http\Controllers\CochesController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\Linea_carritosController;
use App\Http\Controllers\Linea_comprasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsersController;
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


// Todas las redirecciones se controlan en la clase de app/models/PagesController

Route::get('/', [PagesController::class, 'inicio'])->name('inicio');

// Es como viene por defecto, no tocar por el momento
Route::get('/home', function () {
    return view('auth.dashboard');
})->middleware(['auth', 'verified']);

//PRODUCTOS
Route::get('/productos', [ProductosController::class, 'mostrarProductos'])->name('mostrarProductos');


//ACCESORIOS

Route::get('/crearAccesorio', [PagesController::class, 'crearAccesorio'])->name('crearAccesorio');

Route::post('/addAccesorio', [AccesoriosController::class, 'crearAccesorio'])->name('addAccesorio');

Route::post('/borrarAccesorio', [AccesoriosController::class, 'verBorrarAccesorio'])->name('ver.accesorio.borrar');

Route::delete('/borrarAccesorio', [AccesoriosController::class, 'eliminarAccesorio'])->name('accesorio.borrar');


//COCHES

Route::get('/crearCoche', [PagesController::class, 'crearCoche'])->name('crearCoche');

Route::post('/addCoche', [CochesController::class, 'crearCoche'])->name('addCoche');

Route::post('/borrarCoche', [CochesController::class, 'verBorrarCoche'])->name('ver.coche.borrar');

Route::delete('/borrarCoche', [CochesController::class, 'eliminarCoche'])->name('coche.borrar');

//USUARIOS
Route::get('/usuarios', [UsersController::class, 'mostrarUsuarios'])->name('mostrarUsuarios');
