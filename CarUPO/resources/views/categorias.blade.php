@extends('plantilla')
@section('titulo', 'INICIO')
@section('contenido')

<div class="container-lg my-3 col-xs-10 col-md-8 col-lg-8 col-xl-8">
    <div class="justify-content-center d-flex mb-3">
        <h1>Lista de categorias</h1>

    </div>
    <div class="justify-content-center d-flex">
        <form action="{{ route('addToCategorias') }}" method="POST">
            @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
            <div class="input-group">
                <input type="text" required name="nombre" placeholder="Nombre" class="form-control mb-2" autofocus>
                <input class="buttonP btn btn-primary m-2" type="submit" value="Crear categoria" />
            </div>
        </form>
    </div>
    @if ( sizeof($categorias) < 1 ) <div class="alert alert-info">
        <span>No hay categorias</span>
</div>
@else

<div class="table-responsive">
    <table class="table table-striped rounded-2 bg-white">
        <thead>
            <tr class="table-row  text-center align-middle">
                <th>Categoria</th>
            </tr>
        </thead>


        @foreach ($categorias as $categoria)
        <tr class="table-row text-center align-middle">
            <form action="{{ route('editarCategoria') }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $categoria->id }}">

                <td> <input type="text" name="nombre" value="{{ $categoria->nombre }}"></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-warning btn-block" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                            </svg>
                        </button>


            </form>
            <form action="{{ route('removeToCategorias') }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{ $categoria->id }}">
                <button class="btn btn-danger btn-block" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                    </svg>
                </button>
            </form>
</div>
</td>
</tr>
@endforeach
</table>
@endif
</div>


</div>
@endsection