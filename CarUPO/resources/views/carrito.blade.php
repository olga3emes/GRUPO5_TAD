@extends('plantilla')
@section('contenido')

<div class="container-lg my-3 col-xs-10 col-sm-10 col-md-8 col-lg-8 col-xl-8">
    <div class="justify-content-center d-flex mb-3">
        <h1>Carrito</h1>
    </div>

    @if ( sizeof( $mi_carrito->lineas_de_carrito) < 1 ) <div class="alert alert-info">
        <span>No hay nada en el carrito</span>
</div>
<form>
    @csrf
    <button class="btn btn-danger btn-block disabled" type="submit">
        Comprar
    </button>
</form>
@else
<div class="table-responsive">
    <table class="table table-striped rounded-2 bg-white">
        <thead>
            <tr class="table-row  text-center align-middle">
                <th>PRODUCTO</th>
                <th>CANTIDAD</th>
                <th>PRECIO PARCIAL</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        @foreach ($mi_carrito->lineas_de_carrito as $linea)
        <tr class="table-row text-center align-middle">
            <td>
                <img width="20%" height="20%" src="{{ $linea->producto->foto}}" />
            </td>
            <td>{{ $linea->cantidad}}</td>
            <td>{{ $linea->precio_parcial}}€</td>
            <td>
                <form action="{{ route('eliminarLineaCarrito') }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" value="{{$linea->id}}">
                    <button class="btn btn-danger btn-block" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                        </svg>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<div class="justify-content-center d-flex mt-5">
    <h3>PRECIO TOTAL: {{ $mi_carrito->precio_total}} €</h3>
</div>
<div class="justify-content-center d-flex mt-3">
    <form action="{{ route('comprarCarrito') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{}}">
        <button class="buttonP btn btn-danger btn-block" type="submit">
            Comprar
        </button>
    </form>
</div>
@endif
@endsection