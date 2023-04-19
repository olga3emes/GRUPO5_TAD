<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    function mostrarCategorias()
    {
        $categorias = Categoria::all();
        return view('categorias', @compact('categorias'));
    }

    public function addToCategorias(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->save();
        return app()->make(CategoriasController::class)->callAction('mostrarCategorias', []);
    }


    public function removeToCategorias(Request $request)
    {
        $categoria = Categoria::findOrFail($request->id);
        $categoria->delete();
        return app()->make(CategoriasController::class)->callAction('mostrarCategorias', []);
    }
    public function editarCategoria(Request $request)
    {
        $categoria = Categoria::findOrFail($request->id);
        $categoria->nombre = $request->nombre;
        $categoria->save();
        return app()->make(CategoriasController::class)->callAction('mostrarCategorias', []);
    }
}
