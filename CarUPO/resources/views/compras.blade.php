@extends('plantilla')
@section('titulo', 'INICIO')
@section('contenido')

{{-- @if ($compras == '[]')
        <div class="alert alert-info">
            <span>No hay compras</span>
        </div>
    @else --}}
<table class="table m-3 rounded-2 bg-white">
    <thead>
        <tr class="table-row  text-center align-middle">
            <th>USUARIO</th>
            <th>FECHA</th>
            <th>PRECIO_TOTAL</th>
            <th>ESTADO</th>
            <th>Editar</th>
        </tr>
    </thead>

    @foreach ($compras as $compra)
    <tr class="table-row text-center align-middle">
        <td>{{ $compra->user->dni}}</td>
        <td>{{ $compra->fecha }}</td>
        <td>{{ $compra->precio_total }}</td>
        <td>{{ $compra->estado }}</td>
        <td>
            Editar
        </td>
    </tr>
    @endforeach
</table>
{{-- @endif --}}
@endsection