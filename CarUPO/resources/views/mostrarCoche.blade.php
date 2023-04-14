@extends('plantilla')
@section('contenido')
<div class="container-lg my-3 col-xs-12 col-sm-10 col-md-8 col-lg-8 col-xl-8">
    <div class="justify-content-center d-flex mb-3">
        <h1>{{ $coche->marca }} {{ $coche->modelo }}</h1>
    </div>

    <p>
        El precio indicado en la tabla sería el precio por hora de la experiencia con este fantástico coche.
    </p>
    <p>
        {{ $coche->producto->descripcion }}
    </p>

    <div class="justify-content-center d-flex mb-3">
        <img src="{{$coche->producto->foto}}" class="card-img-top h-50 w-50" alt="{{ $coche->marca }} {{ $coche->modelo }} {{ $coche->color }}">
    </div>

    <div class="table-responsive">
        <table class="table table-striped rounded-2 bg-white">
            <tr class="table-row  text-center align-middle">
                <td class="fw-bold">Marca</td>
                <td>{{ $coche->marca }}</td>
            </tr>
            <tr class="table-row  text-center align-middle">
                <td class="fw-bold">Modelo</td>
                <td>{{ $coche->modelo }}</td>
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
                <td class="fw-bold">Cilindrada (cc)</td>
                <td>{{ $coche->cilindrada }}</td>
            </tr>
            <tr class="table-row  text-center align-middle">
                <td class="fw-bold">Potencia (cv)</td>
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
    </div>
    @if (Auth::user()->isAdmin() == false)
    <div class="d-flex justify-content-center">
        <form action="{{ route('addToCarrito') }}" method="POST">
            @csrf
            <label>Cantidad: </label>
            <input type="number" name="cantidad" value="0">
            <input type="hidden" name="id" value="{{ $coche->fk_producto_id }}">
            <button class="buttonP btn btn-danger btn-block" type="submit">
                Añadir al Carrito
            </button>
        </form>
    </div>
    @endif
    <div class="d-flex justify-content-start mt-5">
        <form action="{{ route('mostrarProductos') }}" method="GET">
            @csrf
            <button class="btn btn-danger btn-block" type="submit">
                Atr&aacute;s
            </button>
        </form>
    </div>
</div>
@endsection