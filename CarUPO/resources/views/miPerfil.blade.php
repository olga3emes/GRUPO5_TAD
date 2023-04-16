@extends('plantilla')
@section('contenido')

<div class="container-lg my-3 col-xs-10 col-md-8 col-lg-8 col-xl-8">
    <div class="justify-content-center d-flex mb-3">
        <h1>Mi perfil</h1>
    </div>
    <form action="{{ route('updatePerfil') }}" method="POST">
        @method('PUT')
        @csrf
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
            <tr class="table-row  text-center align-middle">
                <td class="fw-bold">Idioma</td>
                <td>{{ Auth::user()->language }}</td>
            </tr>
        </table>
        <div class="justify-content-center d-flex">
            <button class="buttonP btn btn-primary btn-block m-3" type="submit">
                Actualizar usuario
            </button>
        </div>
    </form>
</div>
@endsection