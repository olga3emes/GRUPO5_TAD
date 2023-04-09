@extends('plantilla')
@section('titulo', 'INICIO')
@section('contenido')

<div class="justify-content-center d-flex mb-3">
    <h1>Productos</h1>
</div>

@if ($productos->isEmpty())
<div class="alert alert-info">
    <span>No hay productos disponibles</span>
</div>
@else


<div class="row row-cols-1 row-cols-xs-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 g-4">
    @foreach ($productos as $producto)
    @if ($producto->coche != null)
    <div class="col">
        <div class="card h-100">
            <img src="{{$producto->foto}}" class="card-img-top" alt="{{ $producto->coche->marca }} {{ $producto->coche->modelo }} {{ $producto->coche->color }}">
            <div class="card-body">
                <h5 class="card-title">{{ $producto->coche->marca }} {{ $producto->coche->modelo }} {{ $producto->coche->cilindrada }}</h5>
                <p class="card-text">{{ $producto->coche->producto->descripcion }}</p>

            </div>
            <div class="card-footer justify-content-center d-flex">
                <form action="{{ route('verCoche') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $producto->coche->id }}">
                    <button class="btn btn-primary" type="submit">
                        Ver producto
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endif
    @endforeach

    @foreach ($productos as $producto)
    @if ($producto->accesorio != null)
    <div class="col">
        <div class="card h-100">
            <img src="{{$producto->foto}}" class="card-img-top" alt="{{ $producto->accesorio->nombre }}">
            <div class="card-body">
                <h5 class="card-title">{{ $producto->accesorio->nombre }}</h5>
                <p class="card-text">{{ $producto->descripcion }}</p>

            </div>
            <div class="card-footer justify-content-center d-flex">
                <form action="{{ route('verAccesorio') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $producto->accesorio->id }}">
                    <button class="btn btn-primary" type="submit">
                        Ver producto
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endif
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