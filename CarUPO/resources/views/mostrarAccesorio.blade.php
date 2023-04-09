@extends('plantilla')
@section('titulo', 'Datos del producto')
@section('contenido')
<p class="h4">Detalle del accesorio</p>
<table class="table m-3 rounded-2 bg-white">
    <tr class="table-row  text-center align-middle">
        <td class="fw-bold">Nombre</td>
        <td>{{ $accesorio->nombre }}</td>
    </tr>
    <tr class="table-row  text-center align-middle">
        <td class="fw-bold">Descripci&oacute;n</td>
        <td>{{ $accesorio->producto->descripcion }}</td>
    </tr>
    <tr class="table-row  text-center align-middle">
        <td class="fw-bold">Precio</td>
        <td>{{ $accesorio->producto->precio }}</td>
    </tr>
</table>
<form action="{{ route('addToCarrito') }}" method="POST">
    @csrf
    <label>Cantidad: </label>
    <input type="number" name="cantidad" value="0">
    <input type="hidden" name="id" value="{{ $accesorio->fk_producto_id }}">
    <button class="btn btn-danger btn-block" type="submit">
        Añadir al carrito
    </button>
</form>
<div class="d-flex justify-content-end">
    <form action="{{ route('mostrarProductos') }}" method="GET">
        @csrf
        <button class="btn btn-danger btn-block" type="submit">
            Atr&aacute;s
        </button>
    </form>
</div>
@endsection