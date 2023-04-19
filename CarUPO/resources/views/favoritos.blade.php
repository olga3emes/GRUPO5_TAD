@extends('plantilla')
@section('titulo', 'INICIO')
@section('contenido')



<div class="container-lg my-3 col-xs-10 col-md-8 col-lg-8 col-xl-8">
    <div class="justify-content-center d-flex mb-3">
        <h1>Ranking de Productos Favoritos</h1>
    </div>
    @if ($productos->isEmpty())
    <div class="alert alert-info">
        <span>No hay productos favoritos marcados por usuarios.</span>
    </div>
    @else
    <div class="table-responsive">
        <table class="table table-striped rounded-2 bg-white">
            <thead>
                <tr class="table-row  text-center align-middle">
                    <th>ID</th>
                    <th>PRODUCTO</th>
                    <th>FAVORITO</th>
                </tr>
            </thead>
            @foreach ($productos as $producto)
            <tr class="table-row text-center align-middle">
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ count($producto->favoritos_productos) }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    @endif
</div>
@endsection