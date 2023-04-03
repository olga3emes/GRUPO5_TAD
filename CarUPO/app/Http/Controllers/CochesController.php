<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use App\Models\Producto;
use Illuminate\Http\Request;

class CochesController extends Controller
{
    public function crearCoche(Request $request)
    {

        $producto = new Producto();
        $producto->descripcion = $request->descripcion;
        $producto->foto = $request->foto;
        $producto->precio = $request->precio;
        $producto->save();
        $coche = new Coche();
        $coche->marca = $request->marca;
        $coche->modelo = $request->modelo;
        $coche->color = $request->color;
        $coche->combustible = $request->combustible;
        $coche->cilindrada = $request->cilindrada;
        $coche->potencia = $request->potencia;
        $coche->nPuertas = $request->nPuertas;
        $coche->fk_producto_id = $producto->id;
        $coche->save();
        return back()->with('mensaje', 'Coche creado');
    }

    public function verBorrarCoche(Request $request)
    {
        $coche = Coche::findOrFail($request->id);
        return view('borrarCoche', @compact('coche'));
    }

    public function eliminarCoche(Request $request)
    {
        $coche = Coche::findOrFail($request->id);
        $coche->delete();
        return app()->make(ProductosController::class)->callAction('mostrarProductos', []);
    }

    public function verEditarCoche(Request $request)
    {
        $coche = Coche::findOrFail($request->id);
        return view('editarCoche', @compact('coche'));
    }

    public function editarCoche(Request $request)
    {
        $coche = Coche::findOrFail($request->id);
        $producto = Producto::findOrFail($coche->fk_producto_id);
        $producto->descripcion = $request->descripcion;
        $producto->foto = $request->foto;
        $producto->precio = $request->precio;
        $producto->save();
        $coche->marca = $request->marca;
        $coche->modelo = $request->modelo;
        $coche->color = $request->color;
        $coche->combustible = $request->combustible;
        $coche->cilindrada = $request->cilindrada;
        $coche->potencia = $request->potencia;
        $coche->nPuertas = $request->nPuertas;
        $coche->save();
        return app()->make(ProductosController::class)->callAction('mostrarProductos', []);
    }
}
