@extends('plantilla')
@section('titulo','INICIO')
@section('contenido')
<div class="container-lg my-3 col-xs-12 col-sm-10 col-md-6 col-lg-4 col-xl-4">
    <div class="justify-content-center d-flex mb-3">
        <h1>Editar {{ $coche->marca }} {{ $coche->modelo }}</h1>
    </div>
    <form action="{{ route('editar.coche') }}" method="POST" enctype="multipart/form-data">
        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
        <label for="marca" class="form-label">Marca</label>
        <input type="text" required name="marca" value="{{ $coche->marca }}" placeholder="Marca" class="form-control mb-2" autofocus>

        <label for="modelo" class="form-label">Modelo</label>
        <input type="text" required name="modelo" value="{{ $coche->modelo }}" placeholder="Modelo" value="" class="form-control mb-2">

        <label for="descripcion" class="form-label">Descripción</label>
        <textarea type="text" required name="descripcion" placeholder="Descripción" class="form-control mb-2">{{ $coche->producto->descripcion }}</textarea>

        <label for="color" class="form-label">Color</label>
        <input type="text" required name="color" value="{{ $coche->color }}" placeholder="Color" class="form-control mb-2">

        <label for="combustible" class="form-label">Combustible</label>
        <input type="text" required name="combustible" value="{{ $coche->combustible }}" placeholder="Combustible" class="form-control mb-2">

        <label for="cilindrada" class="form-label">Cilindrada</label>
        <input type="number" required name="cilindrada" value="{{ $coche->cilindrada }}" placeholder="Cilindrada del coche" step="0.01" class="form-control mb-2">

        <label for="potencia" class="form-label">Potencia</label>
        <input type="number" required name="potencia" value="{{ $coche->potencia }}" placeholder="Potencia del coche" step="0.01" class="form-control mb-2">

        <label for="nPuertas" class="form-label">N&uacute;mero de puertas</label>
        <input type="number" required name="nPuertas" value="{{ $coche->nPuertas }}" placeholder="N&uacute;mero de puertas del coche" step="1" class="form-control mb-2">


        <label for="categorias" class="form-label">Categoria</label>

        <select name="categorias[]" class="form-control mb-2" multiple>
            @foreach (DB::table('categorias')->get() as $categoria)
            @if(DB::table('categorias')
            ->join('producto_categorias', 'categorias.id', '=', 'producto_categorias.fk_categoria_id')
            ->where('producto_categorias.fk_producto_id', '=', $coche->fk_producto_id)
            ->exists()){
            <option value="{{ $categoria->id }}" class="form-control mb-2" selected>{{ $categoria->nombre }}</option>
            }
            @else
            <option value="{{ $categoria->id }}" class="form-control mb-2">{{ $categoria->nombre }}</option>
            @endif
            @endforeach
        </select>
        <label for="foto" class="form-label">Foto</label>
        <input type="file" name="foto" class="form-control mb-2">

        <label for="precio" class="form-label">Precio</label>
        <input type="number" required name="precio" value="{{ $coche->producto->precio }}" placeholder="Precio del coche" step="0.01" class="form-control mb-2">

        <div class="justify-content-center d-flex">
            <input type="hidden" name="id" value="{{ $coche->id }}">
            <button class="buttonP btn btn-primary btn-block m-3" type="submit">
                Editar
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