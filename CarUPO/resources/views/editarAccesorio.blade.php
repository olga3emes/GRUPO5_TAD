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
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" required name="nombre" value="{{ $accesorio->nombre }}" placeholder="Nombre" class="form-control mb-2" autofocus>

        
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea type="text" required name="descripcion" placeholder="Descripción" class="form-control mb-2">{{ $accesorio->producto->descripcion }}</textarea>
        
        <label for="foto" class="form-label">Foto</label>
        <input type="file" name="foto" class="form-control mb-2">
        
        <label for="precio" class="form-label">Precio</label>

        <input type="number" required name="precio" value="{{ $accesorio->producto->precio }}" placeholder="Precio del accesorio" step="0.01" class="form-control mb-2">
        <div class="justify-content-center d-flex">
            <input type="hidden" name="id" value="{{ $accesorio->id }}">
            <button class="buttonP btn btn-primary btn-block m-3" type="submit">
                Editar Accesorio
            </button>
        </div>
    </form>
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