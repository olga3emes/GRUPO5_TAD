@extends('plantilla')
@section('titulo','INICIO')
@section('contenido')

<div class="container-lg my-3 col-xs-12 col-sm-10 col-md-6 col-lg-4 col-xl-4">
    <div class="justify-content-center d-flex mb-3">
        <h1>Crear nuevo accesorio</h1>
    </div>
    <form action="{{ route('addAccesorio') }}" method="POST">

        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" required name="nombre" placeholder="Nombre" class="form-control mb-2" autofocus>
       
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea type="text" required name="descripcion" placeholder="Descripción" class="form-control mb-2"></textarea>
        
        <label for="foto" class="form-label">Foto</label>
        <input type="text" required name="foto" placeholder="Foto" class="form-control mb-2">
        
        <label for="precio" class="form-label">Precio</label>
        <input type="number" required name="precio" placeholder="Precio del accesorio" step="0.01" class="form-control mb-2">

        <div class="justify-content-center d-flex">
            <button class="buttonP btn btn-primary btn-block m-3" type="submit">
                Crear nuevo accesorio
            </button>
        </div>
    </form>
</div>
@endsection