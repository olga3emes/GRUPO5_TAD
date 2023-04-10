@extends('plantilla')
@section('titulo','INICIO')
@section('contenido')

<div class="container-lg my-3 col-xs-12 col-md-6 col-lg-4 col-xl-4">
    <div class="justify-content-center d-flex mb-3">
        <h1>Editar Accesorio</h1>
    </div>
    <form action="{{ route('editar.accesorio') }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
        <input type="text" required name="nombre" value="{{ $accesorio->nombre }}" placeholder="Nombre" class="form-control mb-2" autofocus>
        <input type="text" required name="descripcion" value="{{ $accesorio->producto->descripcion }}" placeholder="Descripción" class="form-control mb-2">
        <input type="file" name="foto" class="form-control mb-2">
        <input type="number" required name="precio" value="{{ $accesorio->producto->precio }}" placeholder="Precio del accesorio" step="0.01" class="form-control mb-2">
        <div class="justify-content-center d-flex">
            <input type="hidden" name="id" value="{{ $accesorio->id }}">
            <button class="buttonP btn btn-primary btn-block m-3" type="submit">
                Editar Accesorio
            </button>
        </div>
    </form>
</div>
@endsection