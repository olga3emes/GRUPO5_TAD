@extends('plantilla')
@section('contenido')

<div class="container-lg my-3 col-10">
    <div class="justify-content-center d-flex mb-3">
        <h1>Mis favoritos</h1>
    </div>

    @if ($productosFavoritos->isEmpty())
    <div class="alert alert-info">
        <span>No hay productos disponibles</span>
    </div>
    @else
    <div class="row row-cols-1 row-cols-xs-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
        @foreach ($productosFavoritos as $producto)
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
                        <button class="buttonP btn btn-primary" type="submit">
                            Ver producto
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endif
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
                        <button class="buttonP btn btn-primary" type="submit">
                            Ver producto
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    @endif
</div>
@endsection