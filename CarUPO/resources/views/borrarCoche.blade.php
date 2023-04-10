@extends('plantilla')
@section('contenido')

<div class="container-lg my-3 col-xs-12 col-sm-10 col-md-8 col-lg-8 col-xl-8">
    <div class="justify-content-center d-flex mb-3">
        <h1>{{ $coche->marca }} {{ $coche->modelo }}</h1>
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
    </div>

    <div class="d-flex justify-content-center">
        <form action="{{ route('coche.borrar') }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" value="{{ $coche->id }}">
            <button class="btn btn-danger btn-block" type="submit">
                Eliminar coche
            </button>
        </form>
    </div>
    <div class="d-flex justify-content-start mt-5">
        <form action="{{ route('mostrarProductos') }}" method="GET">
            @csrf
            <button class="buttonP btn btn-danger btn-block" type="submit">
                Atr&aacute;s
            </button>
        </form>
    </div>
</div>
@endsection