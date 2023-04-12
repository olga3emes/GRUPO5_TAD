@extends('plantilla')
@section('titulo', 'Datos del usuario')
@section('contenido')
<form action="{{ route('updatePerfil') }}" method="POST">
    @method('PUT')
    @csrf
    <p class="h4">Usuario</p>
    <table class="table m-3 rounded-2 bg-white">
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">DNI</td>
            <td>{{ Auth::user()->dni }}</td>
        </tr>
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">Nombre</td>
            <td>{{ Auth::user()->name }}</td>
        </tr>
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">Apellidos</td>
            <td>{{ Auth::user()->surname }}</td>
        </tr>
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">Email</td>
            <td>{{ Auth::user()->email }}</td>
        </tr>
        <tr class="table-row  text-center align-middle">
            <td class="fw-bold">Tel&eacute;fono</td>
            <td>
                <input type="text" name="phone" value="{{ Auth::user()->phone }}">
                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
            </td>
        </tr>
    </table>
    <button class="btn btn-danger btn-block" type="submit">
        Actualizar usuario
    </button>
</form>
@endsection