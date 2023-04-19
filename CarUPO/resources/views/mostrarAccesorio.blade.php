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
    <div class="d-flex justify-content-center mt-3">
        <form action="{{ route('eliminarFavorito') }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="idf" value="{{ $accesorio->fk_producto_id }}">
            <button class="buttonP btn btn-danger btn-block" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
            </button>
        </form>
    </div>
    @else
    <div class="d-flex justify-content-center mt-3">
        <form action="{{ route('addToFavoritos') }}" method="POST">
            @csrf
            <input type="hidden" name="idf" value="{{ $accesorio->fk_producto_id }}">
            <button class="buttonP btn btn-danger btn-block" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
            </button>
        </form>
    </div>
    @endif
    @endif
    <div class="d-flex justify-content-start mt-5">
        <form action="{{ route('mostrarProductos') }}" method="GET">
            @csrf
            <button class="btn btn-danger btn-block" type="submit">
                Atr&aacute;s
            </button>
        </form>
    </div>
    @endsection