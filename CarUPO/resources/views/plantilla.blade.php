<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body class="vh-100 bg-dark">

    <header class="fixed-top" style="font-size: x-large;">
        <nav class="navbar navbar-expand-md navbar-light  bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand me-auto" href="{{route('inicio')}}"><img src={{ asset('prueba.jpeg') }} style="width: 100px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#elementos" aria-controls="elementos" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="elementos">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('inicio')}}">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('crearAccesorio')}}">A</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('crearCoche')}}">C</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('mostrarProductos')}}">P</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('mostrarUsuarios')}}">U</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        @if (Auth::user()->email_verified_at)
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                </li>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            @endif
                        </div>
                        @endguest
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <main class="min-vh-100  p-5  m-5">
        <div class="container-fluid col-10 p-4 bg-dark bg-opacity-75 fs-5">
            @yield('contenido')
        </div>
    </main>
    <footer class="fixed-sticked">
        <div class="container-fluid bg-grey p-4 py-3 text-white bg-primary" style="font-size: xx-large;">
            <p>Derechos reservados © 2023 GRUPO 5</p>
        </div>
    </footer>
</body>

</html>