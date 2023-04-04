<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio()
    {
        return view('comienzo');
    }

    public function crearCoche()
    {
        return view('crearCoche');
    }
}
