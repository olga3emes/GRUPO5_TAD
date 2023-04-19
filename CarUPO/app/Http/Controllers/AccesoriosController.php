<?php

namespace App\Http\Controllers;

use App\Models\Accesorio;
use App\Models\Producto;
use App\Models\Producto_categoria;
use Illuminate\Http\Request;

class AccesoriosController extends Controller
{

    public function crearAccesorio(Request $request)
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
        $nfoto = $_FILES['foto']['name'];
        if ($nfoto != "") {
            move_uploaded_file($_FILES['foto']['tmp_name'], 'images/' . $nfoto);
            $producto->foto = 'images/' . $nfoto;
        }
        $producto->precio = $request->precio;
        $producto->save();


        $categorias_usadas = Producto_categoria::where('fk_producto_id', '=', $producto->id)->get();



        if ($request->categorias != null) {
            foreach ($request->categorias as $categoria) {
                $producto_categoria = new Producto_categoria();
                $producto_categoria->fk_producto_id = $producto->id;
                $producto_categoria->fk_categoria_id = $categoria;
                $producto_categoria->save();
            }
        }
        foreach ($categorias_usadas as $categoria) {
            $categoria->delete();
        }


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
