<?php

namespace App\Http\Controllers;

use App\Models\Carrito_compra;
use App\Models\Linea_carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Carrito_comprasController extends Controller
{

    public function mostrarCarrito()
    {
        $id = Auth::user()->id;
        $mi_carrito = Carrito_compra::findOrFail($id);
        return view('carrito', @compact('mi_carrito'));
    }


    public function eliminarLineaCarrito(Request $request)
    {
        $linea_carrito = Linea_carrito::findOrFail($request->id);
        $linea_carrito->delete();
        return app()->make(Carrito_comprasController::class)->callAction('mostrarCarrito', []);
    }
}
