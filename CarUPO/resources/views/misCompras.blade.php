@extends('plantilla')
@section('titulo', 'INICIO')
@section('contenido')

@if ( sizeof($compras) < 1 ) <div class="alert alert-info">
    <span>No hay compras</span>
    </div>
    @else
    <table class="table m-3 rounded-2 bg-white">
        <thead>
            <tr class="table-row  text-center align-middle">
                <th>FECHA</th>
                <th>PRECIO TOTAL</th>
                <th>ESTADO</th>
            </tr>
        </thead>

        @foreach ($compras as $compra)
        <tr class="table-row text-center align-middle">
            <td>{{ $compra->fecha }}</td>
            <td>{{ $compra->precio_total }}</td>
            <td>{{ $compra->estado }}</td>
        </tr>
        @endforeach
    </table>
    @endif
    @endsection