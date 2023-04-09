@extends('plantilla')
@section('titulo', 'Datos del producto')
@section('contenido')
<p class="h4">Detalle del coche</p>
<table class="table m-3 rounded-2 bg-white">
    <tr class="table-row  text-center align-middle">
        <td class="fw-bold">Marca</td>
        <td>{{ $coche->marca }}</td>
    </tr>
    <tr class="table-row  text-center align-middle">
        <td class="fw-bold">Modelo</td>
        <td>{{ $coche->modelo }}</td>
    </tr>
    <tr class="table-row  text-center align-middle">
        <td class="fw-bold">Descripci&oacute;n</td>
        <td>{{ $coche->producto->descripcion }}</td>
    </tr>
    <tr class="table-row  text-center align-middle">
        <td class="fw-bold">Color</td>
        <td>{{ $coche->color }}</td>
    </tr>
    <tr class="table-row  text-center align-middle">
        <td class="fw-bold">Combustible</td>
        <td>{{ $coche->combustible }}</td>
    </tr>
    <tr class="table-row  text-center align-middle">
        <td class="fw-bold">Cilindrada</td>
        <td>{{ $coche->cilindrada }}</td>
    </tr>
    <tr class="table-row  text-center align-middle">
        <td class="fw-bold">Potencia</td>
        <td>{{ $coche->potencia }}</td>
    </tr>
    <tr class="table-row  text-center align-middle">
        <td class="fw-bold">N&uacute;mero de puertas</td>
        <td>{{ $coche->nPuertas }}</td>
    </tr>
    <tr class="table-row  text-center align-middle">
        <td class="fw-bold">Precio</td>
        <td>{{ $coche->producto->precio }}</td>
    </tr>
</table>
<form action="{{ route('addToCarrito') }}" method="POST">
    @csrf
    <label>Cantidad: </label>
    <input type="number" name="cantidad" value="0">
    <input type="hidden" name="id" value="{{ $coche->fk_producto_id }}">
    <button class="btn btn-danger btn-block" type="submit">
        Añadir al Carrito
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