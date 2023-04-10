<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio()
    {
        return view('comienzo');
    }

    public function verPerfil()
    {
        return view('miPerfil');
    }

    public function crearCoche()
    {
        return view('crearCoche');
    }

    public function crearAccesorio()
    {
        return view('crearAccesorio');
    }
}
