@extends('plantilla')
@section('titulo', 'Borrar accesorio')
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
    <form action="{{ route('accesorio.borrar') }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{ $accesorio->id }}">
        <button class="btn btn-danger btn-block" type="submit">
            Eliminar accesorio
        </button>
    </form>
    <div class="d-flex justify-content-end">
        <form action="{{ route('mostrarProductos') }}" method="POST">
            @csrf
            <button class="btn btn-danger btn-block" type="submit">
                Atr&aacute;s
            </button>
        </form>
    </div>
@endsection
