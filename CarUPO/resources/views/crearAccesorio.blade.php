@extends('plantilla')
@section('titulo','INICIO')
@section('contenido')
<form action="{{ route('addAccesorio') }}" method="POST" >

    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
    <input type="text" required name="nombre" placeholder="Nombre" class="form-control mb-2" autofocus>
    <input type="text" required name="descripcion" placeholder="Descripción" class="form-control mb-2">
    <input type="text" required name="foto" placeholder="Foto" class="form-control mb-2">
    <input type="number" required name="precio" placeholder="Precio del accesorio" step="0.01" class="form-control mb-2">

    <button class="btn btn-success btn-block m-3" type="submit">
        Crear nuevo accesorio
    </button>
</form>

@endsection