<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function mostrarUsuarios()
    {
        $usuarios = User::all();
        return view('usuarios', @compact('usuarios'));
    }

    public function actualizarPerfil(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->phone = $request->phone;
        $user->save();
        return app()->make(PagesController::class)->callAction('verPerfil', []);
    }
}
