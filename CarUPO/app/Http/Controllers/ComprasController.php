<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;

class ComprasController extends Controller
{
    public function mostrarCompras()
    {
        $compras = Compra::all();
        return view('compras', @compact('compras'));
    }

    public function actualizarEstado(Request $request)
    {
        $compra = Compra::findOrFail($request->id);
        $cadena_estado = $compra->estado;

        if ($cadena_estado == "Pendiente") {
            $cadena_estado = "Aceptado";
        } elseif ($cadena_estado == "Aceptado") {
            $cadena_estado = "En Camino";
        } elseif ($cadena_estado == "En Camino") {
            $cadena_estado = "Entregado";
        } elseif ($cadena_estado == "Entregado") {
            $cadena_estado = "Cerrado";
        }
        $compra->estado = $cadena_estado;

        $compra->save();

        return app()->make(ComprasController::class)->callAction('mostrarCompras', []);
    }
}
