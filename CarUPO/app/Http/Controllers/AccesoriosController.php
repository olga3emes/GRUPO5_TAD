<?php

namespace App\Http\Controllers;

use App\Models\Accesorio;
use App\Models\Producto;
use Illuminate\Http\Request;

class AccesoriosController extends Controller
{

    public function crearAccesorio(Request $request)
    {

        $producto = new Producto();
        $producto->descripcion = $request->descripcion;
        $producto->foto = $request->foto;
        $producto->precio = $request->precio;
        $producto->save();
        $accesorio = new Accesorio();
        $accesorio->nombre = $request->nombre;
        $accesorio->fk_producto_id = $producto->id;
        $accesorio->save();
        return app()->make(ProductosController::class)->callAction('mostrarProductos', []);
    }


    public function verBorrarAccesorio(Request $request)
    {
        $accesorio = Accesorio::findOrFail($request->id);
        return view('borrarAccesorio', @compact('accesorio'));
    }

    public function verMostrarAccesorio(Request $request)
    {
        $accesorio = Accesorio::findOrFail($request->id);
        return view('mostrarAccesorio', @compact('accesorio'));
    }

    public function verEditarAccesorio(Request $request)
    {
        $accesorio = Accesorio::findOrFail($request->id);
        return view('editarAccesorio', @compact('accesorio'));
    }

    public function editarAccesorio(Request $request)
    {
        $accesorio = Accesorio::findOrFail($request->id);
        $producto = $accesorio->producto;
        $producto->descripcion = $request->descripcion;
        $producto->foto = $request->foto;
        $producto->precio = $request->precio;
        $producto->save();
        $accesorio->nombre = $request->nombre;
        $accesorio->save();
        return app()->make(ProductosController::class)->callAction('mostrarProductos', []);
    }

    public function eliminarAccesorio(Request $request)
    {
        $accesorio = Accesorio::findOrFail($request->id);
        $accesorio->delete();
        return app()->make(ProductosController::class)->callAction('mostrarProductos', []);
    }
}
