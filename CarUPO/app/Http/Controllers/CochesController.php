<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use App\Models\Producto;
use App\Models\Producto_categoria;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CochesController extends Controller
{

    public function crearCoche(Request $request)
    {

        $producto = new Producto();
        $producto->descripcion = $request->descripcion;
        $nfoto = 'images/' . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], $nfoto);
        $producto->foto = $nfoto;
        $producto->precio = $request->precio;
        $producto->save();

        foreach ($request->categorias as $categoria) {
            $producto_categoria = new Producto_categoria();
            $producto_categoria->fk_producto_id = $producto->id;
            $producto_categoria->fk_categoria_id = $categoria;
            $producto_categoria->save();
        }

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

    public function verMostrarCoche(Request $request)
    {
        $coche = Coche::findOrFail($request->id);
        return view('mostrarCoche', @compact('coche'));
    }

    public function verEditarCoche(Request $request)
    {
        $coche = Coche::findOrFail($request->id);
        return view('editarCoche', @compact('coche'));
    }

    public function editarCoche(Request $request)
    {
        $coche = Coche::findOrFail($request->id);
        $producto = $coche->producto;
        $producto->descripcion = $request->descripcion;
        $nfoto = $_FILES['foto']['name'];
        if ($nfoto != "") {
            move_uploaded_file($_FILES['foto']['tmp_name'], 'images/' . $nfoto);
            $producto->foto = 'images/' . $nfoto;
        }
        $producto->precio = $request->precio;
        $producto->save();

        $categorias_usadas = Producto_categoria::where('fk_producto_id', '=', $request->id);

        foreach ($categorias_usadas as $categoria) {
            $categoria->delete();
        }

        if ($request->categorias != null) {
            foreach ($request->categorias as $categoria) {
                $producto_categoria = new Producto_categoria();
                $producto_categoria->fk_producto_id = $producto->id;
                $producto_categoria->fk_categoria_id = $categoria;
                $producto_categoria->save();
            }
        }

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
    public function eliminarCoche(Request $request)
    {
        $coche = Coche::findOrFail($request->id);
        $coche->delete();
        return app()->make(ProductosController::class)->callAction('mostrarProductos', []);
    }
}
