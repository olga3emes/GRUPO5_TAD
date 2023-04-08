@extends('plantilla')
@section('titulo', 'INICIO')
@section('contenido')

@if ($mi_carrito == '[]')
<div class="alert alert-info">
    <span>No hay nada en el carrito</span>
</div>
@else
<table class="table m-3 rounded-2 bg-white">
    <thead>
        <tr class="table-row  text-center align-middle">


            <th>PRODUCTO</th>
            <th>CANTIDAD</th>
            <th>PRECIO PARCIAL</th>
            <th>Editar</th>
        </tr>
    </thead>

    @foreach ($mi_carrito->lineas_de_carrito as $linea)
    <tr class="table-row text-center align-middle">
        <td>
            <img width="20%" height="20%" src="{{ $linea->producto->foto}}" />
        </td>
        <td>{{ $linea->cantidad}}</td>

        <td>{{ $linea->precio_parcial * $linea->cantidad}}€</td>
        <td>
            <form action="{{ route('eliminarLineaCarrito') }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{$linea->producto->id }}">
                <button class="btn btn-danger btn-block" type="submit">
                    Eliminar
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endif
@endsection