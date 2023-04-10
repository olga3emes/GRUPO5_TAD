@extends('plantilla')
@section('contenido')

<div class="container-lg my-3 col-xs-12 col-sm-10 col-md-8 col-lg-8 col-xl-8">
    <div class="justify-content-center d-flex mb-3">
        <h1>Usuarios</h1>
    </div>
    {{-- @if ($coches == '[]' && $accesorios == '[]')
        <div class="alert alert-info">
            <span>No hay productos disponibles</span>
        </div>
    @else --}}
    <div class="table-responsive">
        <table class="table table-striped rounded-2 bg-white">
            <thead>
                <tr class="table-row text-center align-middle">
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Tel&eacute;fono</th>
                </tr>
            </thead>
            @foreach ($usuarios as $usuario)
            <tr class="table-row text-center align-middle">
                <td>{{ $usuario->dni}}</td>
                <td>{{ $usuario->name}}</td>
                <td>{{ $usuario->surname}}</td>
                <td>{{ $usuario->email}}</td>
                <td>{{ $usuario->phone}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    {{-- @endif --}}
</div>
@endsection