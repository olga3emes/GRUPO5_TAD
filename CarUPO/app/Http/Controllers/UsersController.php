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

    public function crearUsuario(Request $request)
    {

        $user = new User();
        $user->dni = $request->dni;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = hash("sha256", $request->password);
        $user->save();
        return back()->with('mensaje', 'Usuario creado');
    }

    public function verBorrarUsuario(Request $request)
    {
        $usuario = User::findOrFail($request->id);
        return view('borrarUsuario', @compact('usuario'));
    }

    public function eliminarUsuario(Request $request)
    {
        $usuario = User::findOrFail($request->id);
        $usuario->delete();
        return app()->make(UsersController::class)->callAction('mostrarUsuarios', []);
    }

    public function verEditarUsuario(Request $request)
    {
        $usuario = User::findOrFail($request->id);
        return view('editarUsuario', @compact('usuario'));
    }

    public function editarUsuario(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->dni = $request->dni;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return app()->make(ProductosController::class)->callAction('mostrarProductos', []);
    }
}
