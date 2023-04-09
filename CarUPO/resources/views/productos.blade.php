@extends('plantilla')
@section('titulo', 'INICIO')
@section('contenido')

<div class="container-lg my-3 col-xs-10 col-md-8 col-lg-8 col-xl-8">
    <div class="justify-content-center d-flex mb-3">
        <h1>Productos</h1>
    </div>

    @if ($productos->isEmpty())
    <div class="alert alert-info">
        <span>No hay productos disponibles</span>
    </div>
    @else

    @if (Auth::user()->isAdmin())
    <div class="justify-content-center d-flex">
        <a href="{{route('crearCoche')}}" class="buttonP btn btn-primary m-2">Crear coche</a>
        <a href="{{route('crearAccesorio')}}" class="buttonP btn btn-primary m-2">Crear accesorio</a>
    </div>

    <table class="table m-3 rounded-2 bg-white">
        <thead>
            <tr class="table-row  text-center align-middle">
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Cilindrada</th>
                <th>Potencia</th>
                <th>Precio/Hora</th>
                <th>Acciones</th>
            </tr>
        </thead>
        @foreach ($productos as $producto)

        @if ($producto->coche != null)
        <tr class="table-row text-center align-middle">
            <td>{{ $producto->coche->marca }}</td>
            <td>{{ $producto->coche->modelo }}</td>
            <td>{{ $producto->coche->color }}</td>
            <td>{{ $producto->coche->cilindrada }}</td>
            <td>{{ $producto->coche->potencia }}</td>
            <td>{{ $producto->precio }}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <form action="{{ route('ver.coche.borrar') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $producto->coche->id }}">
                        <button class="btn btn-outline-success btn-block" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
                        </button>
                    </form>
                    <form action="{{ route('ver.coche.borrar') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $producto->coche->id }}">
                        <button class="btn btn-outline-warning btn-block" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                            </svg>
                        </button>
                    </form>
                    <form action="{{ route('ver.coche.borrar') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $producto->coche->id }}">
                        <button class="btn btn-outline-danger btn-block" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                            </svg>
                        </button>
                    </form>
                </div>

            </td>
        </tr>
        @endif
        @endforeach

    </table>
    <table class="table m-3 rounded-2 bg-white">
        <thead>
            <tr class="table-row  text-center align-middle">
                <th>Nombre</th>
                <th>Descripci&oacute;n</th>
                <th>Precio</th>
                <th>Borrar</th>
            </tr>
        </thead>
        @foreach ($productos as $producto)

        @if ($producto->accesorio != null)

        <tr class="table-row text-center align-middle">
            <td>{{ $producto->accesorio->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->precio }}</td>
            <td>
                <button class="btn btn-success btn-block" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                </button>
                <button class="btn btn-warning btn-block" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                    </svg>
                </button>
                <form action="{{ route('ver.accesorio.borrar') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $producto->accesorio->id }}">
                    <button class="btn btn-danger btn-block" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                        </svg>
                    </button>
                </form>
            </td>
        </tr>
        @endif
        @endforeach

    </table>

    @else
    <div class="row row-cols-1 row-cols-xs-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 g-4">
        @foreach ($productos as $producto)
        @if ($producto->coche != null)
        <div class="col">
            <div class="card h-100">
                <img src="{{$producto->foto}}" class="card-img-top" alt="{{ $producto->coche->marca }} {{ $producto->coche->modelo }} {{ $producto->coche->color }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->coche->marca }} {{ $producto->coche->modelo }} {{ $producto->coche->cilindrada }}</h5>
                    <p class="card-text">{{ $producto->coche->producto->descripcion }}</p>
                </div>
                <div class="card-footer justify-content-center d-flex">
                    <a href="#" class="buttonP btn btn-primary">Ver producto</a>
                </div>
            </div>
        </div>
        @endif
        @endforeach

        @foreach ($productos as $producto)
        @if ($producto->accesorio != null)
        <div class="col">
            <div class="card h-100">
                <img src="{{$producto->foto}}" class="card-img-top" alt="{{ $producto->accesorio->nombre }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->accesorio->nombre }}</h5>
                    <p class="card-text">{{ $producto->descripcion }}</p>

                </div>
                <div class="card-footer justify-content-center d-flex">
                    <a href="#" class="buttonP btn btn-primary">Ver producto</a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>

    @endif
    @endif
</div>
@endsection