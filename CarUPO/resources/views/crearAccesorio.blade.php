@extends('plantilla')
@section('titulo','INICIO')
@section('contenido')

<div class="container-lg my-3 col-xs-12 col-md-8 col-lg-6 col-xl-6">
    <div class="justify-content-center d-flex mb-3">
        <h1>Crear nuevo accesorio</h1>
    </div>
    <form action="{{ route('addAccesorio') }}" method="POST">

        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
        <input type="text" required name="nombre" placeholder="Nombre" class="form-control mb-2" autofocus>
        <input type="text" required name="descripcion" placeholder="Descripción" class="form-control mb-2">
        <input type="text" required name="foto" placeholder="Foto" class="form-control mb-2">
        <input type="number" required name="precio" placeholder="Precio del accesorio" step="0.01" class="form-control mb-2">

        <div class="justify-content-center d-flex">
            <button id="button" class="btn btn-primary btn-block m-3" type="submit">
                Crear nuevo accesorio
            </button>
        </div>
    </form>
</div>
@endsection