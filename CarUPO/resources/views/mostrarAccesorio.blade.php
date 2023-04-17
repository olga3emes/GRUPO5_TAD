@extends('plantilla')
@section('contenido')

<div class="container-lg my-3 col-xs-12 col-sm-10 col-md-8 col-lg-8 col-xl-8">
    <div class="justify-content-center d-flex mb-3">
        <h1>{{ $accesorio->nombre }}</h1>
    </div>

    <p>
        {{ $accesorio->producto->descripcion }}
    </p>

    <div class="justify-content-center d-flex mb-3">
        <img src="{{$accesorio->producto->foto}}" class="card-img-top h-50 w-50" alt="{{ $accesorio->nombre }}">
    </div>
    <div class="table-responsive">
        <table class="table table-striped rounded-2 bg-white">
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
    </div>
    <div class="d-flex justify-content-center">
        <form action="{{ route('addToCarrito') }}" method="POST">
            @csrf
            <label>Cantidad: </label>
            <input type="number" name="cantidad" value="0">
            <input type="hidden" name="id" value="{{ $accesorio->fk_producto_id }}">
            <button class="buttonP btn btn-danger btn-block" type="submit">
                Añadir al carrito
            </button>
        </form>

    </div>
    @if (Auth::user()->isAdmin() == false)
    @if(DB::table('favoritos')
    ->join('favorito_productos', 'favoritos.id', '=', 'favorito_productos.fk_favorito_id')
    ->where('favorito_productos.fk_producto_id', '=', $accesorio->fk_producto_id)
    ->where('favoritos.fk_user', '=', Auth::id())
    ->exists())
    <div class="d-flex justify-content-center">

        <form action="{{ route('eliminarFavorito') }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="idf" value="{{ $accesorio->fk_producto_id }}">
            <button class="buttonP btn btn-danger btn-block" type="submit">
                Quitar de favoritos
            </button>
        </form>
    </div>
    @else
    <div class="d-flex justify-content-center">

        <form action="{{ route('addToFavoritos') }}" method="POST">
            @csrf
            <input type="hidden" name="idf" value="{{ $accesorio->fk_producto_id }}">
            <button class="buttonP btn btn-danger btn-block" type="submit">
                Añadir a favoritos
            </button>
        </form>
    </div>
    @endif
    @endif
    <div class="d-flex justify-content-center">

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