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
}
