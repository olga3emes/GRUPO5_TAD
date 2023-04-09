@extends('plantilla')
@section('contenido')

<div class="container-lg my-3 col-xs-10 col-md-8 col-lg-8 col-xl-8">
    <div class="justify-content-center d-flex mb-3">
        <h1>CarUPO</h1>
    </div>

    <div>
        <p>
            Bienvenido/a a nuestra página de alquiler de experiencias con coches de lujo. Si estás buscando una aventura emocionante
            y única, has llegado al lugar adecuado. Ofrecemos una selección impresionante de los mejores coches de lujo del mercado,
            para que puedas experimentar la emoción de conducir un vehículo de alto rendimiento en algunos de los paisajes más impresionantes del mundo.
        </p>
        <p>
            Nuestro objetivo es proporcionar a nuestros clientes una experiencia inolvidable, y por eso nos esforzamos por ofrecer un
            servicio excepcional en todo momento. Desde la selección de los vehículos hasta la compra de merchandising de los coches y la atención al
            detalle en cada aspecto de la experiencia, nos aseguramos de que todo sea perfecto para nuestros clientes.
        </p>
        <p>
            Ya sea que quieras sorprender a alguien especial con un regalo único, celebrar una ocasión especial o
            simplemente experimentar la adrenalina de conducir un coche de lujo, nuestro equipo está listo para ayudarte a
            planificar una experiencia que nunca olvidarás. Explora nuestra página para descubrir más sobre nuestros servicios
            y coches de lujo disponibles para alquilar. ¡Empecemos la aventura!
        </p>
    </div>

    <div id="carouselIndicators" class="carousel slide pt-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('carrusel/c1.png') }}" class="d-block w-100" alt="Coche">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('carrusel/c2.png') }}" class="d-block w-100" alt="Coche">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('carrusel/c3.png') }}" class="d-block w-100" alt="Coche">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('carrusel/c4.png') }}" class="d-block w-100" alt="Coche">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('carrusel/c5.png') }}" class="d-block w-100" alt="Coche">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('carrusel/c6.png') }}" class="d-block w-100" alt="Coche">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>

@endsection