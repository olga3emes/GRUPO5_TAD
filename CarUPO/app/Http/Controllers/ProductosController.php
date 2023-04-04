<?php

namespace App\Http\Controllers;

use App\Models\Accesorio;
use App\Models\Coche;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function mostrarProductos()
    {
        $accesorios = Accesorio::all();
        $coches = Coche::all();
        return view('productos', @compact('accesorios', 'coches'));
    }
}
