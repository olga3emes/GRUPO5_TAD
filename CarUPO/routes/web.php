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

//PRODUCTOS
Route::get('/', [ProductosController::class, 'mostrarProductos'])->name('mostrarProductos');

//COCHES
Route::get('/crearCoche', function () {
    return view('crearCoche');
})->name('crearCoche');

Route::post('/addCoche', [CochesControlador::class, 'crearCoche'])->name('addCoche');

//USUARIOS
Route::get('/usuarios', [UsersController::class, 'mostrarUsuarios'])->name('verMostrarUsuarios');

