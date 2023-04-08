@extends('plantilla')
@section('titulo', 'INICIO')
@section('contenido')

@if ($productos->isEmpty())
<div class="alert alert-info">
    <span>No hay productos disponibles</span>
</div>
@else
<table class="table m-3 rounded-2 bg-white">
    <thead>
        <tr class="table-row  text-center align-middle">
            <th>Marca</th>
            <th>Modelo</th>
            <th>Descripci&oacute;n</th>
            <th>Color</th>
            <th>Combustible</th>
            <th>Cilindrada</th>
            <th>Potencia</th>
            <th>N&uacute;mero de puertas</th>
            <th>Precio</th>
            <th>Borrar</th>
        </tr>
    </thead>
    @foreach ($productos as $producto)

    @if ($producto->coche != null)


    <tr class="table-row text-center align-middle">
        <td>{{ $producto->coche->marca }}</td>
        <td>{{ $producto->coche->modelo }}</td>
        <td>{{ $producto->coche->producto->descripcion }}</td>
        <td>{{ $producto->coche->color }}</td>
        <td>{{ $producto->coche->combustible }}</td>
        <td>{{ $producto->coche->cilindrada }}</td>
        <td>{{ $producto->coche->potencia }}</td>
        <td>{{ $producto->coche->nPuertas }}</td>
        <td>{{ $producto->precio }}</td>
        <td>
            <form action="{{ route('ver.coche.borrar') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $producto->coche->id }}">
                <button class="btn btn-danger btn-block" type="submit">
                    Eliminar
                </button>
            </form>
        </td>
    </tr>
    @endif
    @endforeach

</table>
<table class="table m-3 rounded-2 bg-white">
    <thead>
        <tr class="table-row  text-center align-middle">
            <th>Nombre</th>
            <th>Descripci&oacute;n</th>
            <th>Precio</th>
            <th>Borrar</th>
        </tr>
    </thead>
    @foreach ($productos as $producto)

    @if ($producto->accesorio != null)

    <tr class="table-row text-center align-middle">
        <td>{{ $producto->accesorio->nombre }}</td>
        <td>{{ $producto->descripcion }}</td>
        <td>{{ $producto->precio }}</td>
        <td>
            <form action="{{ route('ver.accesorio.borrar') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $producto->accesorio->id }}">
                <button class="btn btn-danger btn-block" type="submit">
                    Eliminar
                </button>
            </form>
        </td>
    </tr>
    @endif
    @endforeach

</table>


@endif

@endsection