@extends('plantilla')
@section('titulo','INICIO')
@section('contenido')
<div class="container-lg my-3 col-xs-12 col-md-6 col-lg-4 col-xl-4">
    <div class="justify-content-center d-flex mb-3">
        <h1>Editar Coche</h1>
    </div>
    <form action="{{ route('editar.coche') }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
        <input type="text" required name="marca" value="{{ $coche->marca }}" placeholder="Marca" class="form-control mb-2" autofocus>
        <input type="text" required name="modelo" value="{{ $coche->modelo }}" placeholder="Modelo" value="" class="form-control mb-2">
        <input type="text" required name="descripcion" value="{{ $coche->producto->descripcion }}" placeholder="Descripción" class="form-control mb-2">
        <input type="text" required name="color" value="{{ $coche->color }}" placeholder="Color" class="form-control mb-2">
        <input type="text" required name="combustible" value="{{ $coche->combustible }}" placeholder="Combustible" class="form-control mb-2">
        <input type="number" required name="cilindrada" value="{{ $coche->cilindrada }}" placeholder="Cilindrada del coche" step="0.01" class="form-control mb-2">
        <input type="number" required name="potencia" value="{{ $coche->potencia }}" placeholder="Potencia del coche" step="0.01" class="form-control mb-2">
        <input type="number" required name="nPuertas" value="{{ $coche->nPuertas }}" placeholder="N&uacute;mero de puertas del coche" step="1" class="form-control mb-2">
        <input type="file" name="foto" class="form-control mb-2">
        <input type="number" required name="precio" value="{{ $coche->producto->precio }}" placeholder="Precio del coche" step="0.01" class="form-control mb-2">

        <div class="justify-content-center d-flex">
            <input type="hidden" name="id" value="{{ $coche->id }}">
            <button class="buttonP btn btn-primary btn-block m-3" type="submit">
                Editar Coche
            </button>
        </div>

    </form>
</div>

@endsection