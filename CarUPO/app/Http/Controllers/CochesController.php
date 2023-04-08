<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use App\Models\Producto;
use Illuminate\Http\Request;

class CochesController extends Controller
{

    // public function procesar(Request $request)
    // {
    //     // Comprobar si se ha seleccionado una imagen
    //     if ($request->hasFile('foto')) {
    //         $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    //         $extension = $request->file('imagen')->getClientOriginalExtension();
    //         if (in_array($extension, $allowed_extensions)) {
    //             // Mover la imagen a una ubicación en el servidor
    //             $path = $request->file('imagen')->store('images');
    //             return "La imagen se ha subido correctamente.";
    //         } else {
    //             return "Error: El tipo de archivo no está permitido.";
    //         }
    //     } else {
    //         return "Error: No se ha seleccionado ninguna imagen.";
    //     }
    // }

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
        return app()->make(ProductosController::class)->callAction('mostrarProductos', []);
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

    /** 
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
     */
}
