<?php

use Illuminate\Support\Facades\Route;

// Aqui estan todos los controllers que se usarán
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AccesoriosController;
use App\Http\Controllers\Carrito_comprasController;
use App\Http\Controllers\CochesController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\FavoritosController;
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


// REDIRECCIONES (La unica funcionalidad es llevarte a una pagina web)

Route::get('/', [PagesController::class, 'inicio'])->name('inicio');
Route::get('/crearAccesorio', [PagesController::class, 'crearAccesorio'])->name('crearAccesorio');
Route::get('/crearCoche', [PagesController::class, 'crearCoche'])->name('crearCoche');
Route::get('/perfil', [PagesController::class, 'verPerfil'])->name('miPerfil');




// AUTENTIFICACIÓN
Route::get('/home', function () {
    return view('auth.dashboard');
})->middleware(['auth', 'verified']);

//PRODUCTOS
Route::get('/productos', [ProductosController::class, 'mostrarProductos'])->name('mostrarProductos');



//ACCESORIOS


Route::post('/addAccesorio', [AccesoriosController::class, 'crearAccesorio'])->name('addAccesorio');

Route::post('/accesorio', [AccesoriosController::class, 'verMostrarAccesorio'])->name('verAccesorio');

Route::post('/editarAccesorio', [AccesoriosController::class, 'verEditarAccesorio'])->name('ver.accesorio.editar');

Route::put('/updateAccesorio', [AccesoriosController::class, 'editarAccesorio'])->name('editar.accesorio');

Route::post('/borrarAccesorio', [AccesoriosController::class, 'verBorrarAccesorio'])->name('ver.accesorio.borrar');

Route::delete('/delAccesorio', [AccesoriosController::class, 'eliminarAccesorio'])->name('accesorio.borrar');


//COCHES


Route::post('/addCoche', [CochesController::class, 'crearCoche'])->name('addCoche');

Route::post('/coche', [CochesController::class, 'verMostrarCoche'])->name('verCoche');

Route::post('/editarCoche', [CochesController::class, 'verEditarCoche'])->name('ver.coche.editar');

Route::put('/updateCoche', [CochesController::class, 'editarCoche'])->name('editar.coche');

Route::post('/borrarCoche', [CochesController::class, 'verBorrarCoche'])->name('ver.coche.borrar');

Route::delete('/delCoche', [CochesController::class, 'eliminarCoche'])->name('coche.borrar');


//COMPRAS

Route::get('/compras', [ComprasController::class, 'mostrarCompras'])->name('mostrarCompras');

Route::get('/misCompras', [ComprasController::class, 'misCompras'])->name('misCompras');

Route::put('/estadoActualizado', [ComprasController::class, 'actualizarEstado'])->name('actualizarEstado');


//CARRITO

Route::get('/carrito', [Carrito_comprasController::class, 'mostrarCarrito'])->name('mostrarCarrito');

Route::post('/comprarCarrito', [Carrito_comprasController::class, 'comprarCarrito'])->name('comprarCarrito');


//LINEA DE CARRITO

Route::post('/addAlCarrito', [Carrito_comprasController::class, 'addToCarrito'])->name('addToCarrito');

Route::delete('/deleteToCarrito', [Carrito_comprasController::class, 'eliminarLineaCarrito'])->name('eliminarLineaCarrito');

//FAVORITOS
Route::post('/addFavorito', [FavoritosController::class, 'addToFavoritos'])->name('addToFavoritos');



//USUARIOS

Route::get('/usuarios', [UsersController::class, 'mostrarUsuarios'])->name('mostrarUsuarios');

Route::put('/actualizaPerfil', [UsersController::class, 'actualizarPerfil'])->name('updatePerfil');
