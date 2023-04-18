<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CarUPO</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body class="vh-100 container-fluid g-0 bg-light">
    <header class="fixed-top" style="font-size: x-large;">
        <nav id="azul" class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid px-4">
                <a class="navbar-brand me-auto" href="{{route('inicio')}}">
                    <img src={{ asset('logo.png') }} alt="Logo" style="width: 100px; font-size: x-large;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#elementos" aria-controls="elementos" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="elementos">
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            
                        <li class="nav-item justify-content-center d-flex">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('messages.login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item justify-content-center d-flex">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('messages.registro') }}</a>
                        </li>
                        @endif
                        @else
                            {{ app()->setLocale('es') }}
                            @if (Auth::user()->language == 'Español')
                                {{ app()->setLocale('es') }}
                            @else
                                {{ app()->setLocale('en') }}
                            @endif
                        <li class="nav-item justify-content-center d-flex">
                            <a class="nav-link text-white" href="{{route('miPerfil')}}">{{ __('messages.perfil') }}</a>
                        </li>
                        <li class="nav-item justify-content-center d-flex">
                            <a class="nav-link text-white" href="{{route('mostrarProductos')}}">{{ __('messages.productos') }}</a>
                        </li>

                        @if (Auth::user()->isAdmin())
                        <li class="nav-item justify-content-center d-flex">
                            <a class="nav-link text-white" href="{{route('mostrarUsuarios')}}">{{ __('messages.usuarios') }}</a>
                        </li>
                        <li class="nav-item justify-content-center d-flex">
                            <a class="nav-link text-white" href="{{route('mostrarCompras')}}">{{ __('messages.compras') }}</a>
                        </li>
                        @else
                        <li class="nav-item justify-content-center d-flex">
                            <a class="nav-link text-white" href="{{route('misCompras')}}">{{ __('messages.misCompras') }}</a>
                        </li>
                        <li class="nav-item justify-content-center d-flex">
                            <a class="nav-link text-white" href="{{route('mostrarCarrito')}}">{{ __('messages.carrito') }}</a>
                        </li>
                        @endif
                    </ul>
                </div>
                <div class="dropdown justify-content-center d-flex">
                    <button class="buttonP btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('messages.logout') }}</a>
                        </li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @endguest

            </div>
        </nav>
    </header>
    <main id="main" class="min-vh-100 py-5 my-5">
        <div class="container-fluid col-12 fs-5">
            @yield('contenido')
        </div>
    </main>
    <footer id="azul" class="fixed-sticked">
        <div class=" bg-grey p-4 py-3 text-white">
            <p class="justify-content-center d-flex">{{ __('messages.derechos') }}</p>
        </div>
    </footer>
</body>

</html>