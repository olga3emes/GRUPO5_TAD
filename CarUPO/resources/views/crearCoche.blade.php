@extends('plantilla')
@section('titulo','INICIO')
@section('contenido')
<div class="container-lg my-3 col-xs-12 col-md-6 col-lg-4 col-xl-4">
    <div class="justify-content-center d-flex mb-3">
        <h1>Crear nuevo coche</h1>
    </div>
    <form action="{{ route('addCoche') }}" method="POST">

        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
        <input type="text" required name="marca" placeholder="Marca" class="form-control mb-2" autofocus>
        <input type="text" required name="modelo" placeholder="Modelo" class="form-control mb-2">
        <input type="text" required name="descripcion" placeholder="Descripción" class="form-control mb-2">
        <input type="text" required name="color" placeholder="Color" class="form-control mb-2">
        <input type="text" required name="combustible" placeholder="Combustible" class="form-control mb-2">
        <input type="number" required name="cilindrada" placeholder="Cilindrada del coche" step="0.01" class="form-control mb-2">
        <input type="number" required name="potencia" placeholder="Potencia del coche" step="0.01" class="form-control mb-2">
        <input type="number" required name="nPuertas" placeholder="N&uacute;mero de puertas del coche" step="1" class="form-control mb-2">
        <input type="text" required name="foto" placeholder="Foto" class="form-control mb-2">
        <input type="number" required name="precio" placeholder="Precio del coche" step="0.01" class="form-control mb-2">

        <div class="justify-content-center d-flex">
            <button class="buttonP btn btn-primary btn-block m-3" type="submit">
                Crear nuevo coche
            </button>
        </div>

    </form>
</div>

@endsection