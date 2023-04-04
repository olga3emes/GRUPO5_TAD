<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body class="vh-100 bg-dark">

    <header class="fixed-top" style="font-size: x-large;">
        <nav class="navbar navbar-expand-md navbar-light  bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand me-auto" href="{{route('inicio')}}"><img src="/logo.png" style="width: 100px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#elementos" aria-controls="elementos" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="elementos">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('inicio')}}">INICIO</a>
                        </li>
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link text-white">Home</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link text-white">Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link text-white">Register</a>
                        </li>
                        @endif
                        @endauth
                        @endif
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <main class="min-vh-100  p-5  m-5">
        <div class="container-fluid col-10 p-4 bg-dark bg-opacity-75  text-white fs-5">
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