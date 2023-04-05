@extends('plantilla')
@section('titulo', 'INICIO')
@section('contenido')

    {{-- @if ($coches == '[]' && $accesorios == '[]')
        <div class="alert alert-info">
            <span>No hay productos disponibles</span>
        </div>
    @else --}}
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
        @foreach ($coches as $coche)
            <tr class="table-row text-center align-middle">
                <td>{{ $coche->marca }}</td>
                <td>{{ $coche->modelo }}</td>
                <td>{{ $coche->producto->descripcion }}</td>
                <td>{{ $coche->color }}</td>
                <td>{{ $coche->combustible }}</td>
                <td>{{ $coche->cilindrada }}</td>
                <td>{{ $coche->potencia }}</td>
                <td>{{ $coche->nPuertas }}</td>
                <td>{{ $coche->producto->precio }}</td>
                <td>
                    <form action="{{ route('ver.coche.borrar') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $coche->id }}">
                        <button class="btn btn-danger btn-block" type="submit">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
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
        @foreach ($accesorios as $accesorio)
            <tr class="table-row text-center align-middle">
                <td>{{ $accesorio->nombre }}</td>
                <td>{{ $accesorio->producto->descripcion }}</td>
                <td>{{ $accesorio->producto->precio }}</td>
                <td>
            <form action="{{ route('ver.accesorio.borrar') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $accesorio->id }}">
                <button class="btn btn-danger btn-block" type="submit">
                    Eliminar
                </button>
            </form>
        </td>
            </tr>
        @endforeach
    </table>
    {{-- @endif --}}
@endsection
