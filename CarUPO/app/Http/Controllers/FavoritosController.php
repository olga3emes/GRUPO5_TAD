<?php

namespace App\Http\Controllers;

use App\Models\Accesorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favoritos;
use App\Models\Favorito_producto;
use App\Models\Coche;
use App\Models\Producto;

class FavoritosController extends Controller
{
    public function addToFavoritos(Request $request)
    {
        $id = Auth::user()->id;
        $mi_favoritos = Favoritos::findOrFail($id);
        $favorito_producto = new Favorito_producto();
        $producto = Producto::findOrFail($request->idf);
        $favorito_producto->fk_producto_id = $producto->id;
        $favorito_producto->fk_favorito_id = $mi_favoritos->id;
        $favorito_producto->save();
        $mi_favoritos->save();
        if ($producto->coche != null) {
            $coche = $producto->coche;
            return view('mostrarCoche', @compact('coche'));
        } else {
            $accesorio = $producto->accesorio;
            return view('mostrarAccesorio', @compact('accesorio'));
        }
    }
}
