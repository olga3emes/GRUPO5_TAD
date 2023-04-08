@extends('plantilla')
@section('titulo', 'INICIO')
@section('contenido')

<div class="p-5">
    <div class="justify-content-center d-flex mb-3">
        <h1>PRODUCTOS</h1>
    </div>

    {{-- @if ($coches == '[]' && $accesorios == '[]')
        <div class="alert alert-info">
            <span>No hay productos disponibles</span>
        </div>
    @else --}}
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($coches as $coche)
        <div class="col">
            <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $coche->marca }} {{ $coche->modelo }} {{ $coche->cilindrada }}</h5>
                    <p class="card-text">{{ $coche->producto->descripcion }}</p>
                </div>
            </div>
        </div>
        @endforeach
        @foreach ($accesorios as $accesorio)
        <div class="col">
            <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $accesorio->nombre }}</h5>
                    <p class="card-text">{{ $accesorio->producto->descripcion }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>


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
</div>
@endsection