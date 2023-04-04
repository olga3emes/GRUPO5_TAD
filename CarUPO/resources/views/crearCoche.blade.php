<form action="{{ route('addCoche') }}" method="POST" enctype="multipart/form-data">

    @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
    <input type="text" required name="marca" placeholder="DNI" class="form-control mb-2" autofocus>
    <input type="text" required name="modelo" placeholder="Nombre" class="form-control mb-2">
    <input type="text" required name="descripcion" placeholder="Apellidos" class="form-control mb-2">
    <input type="text" required name="color" placeholder="Correo" class="form-control mb-2">
    <input type="text" required name="combustible" placeholder="Tel&eacute;fonos del empleado" class="form-control mb-2">
    <input type="number" required name="cilindrada" placeholder="Cilindrada del coche" step="0.01" class="form-control mb-2">
    <input type="number" required name="potencia" placeholder="Potencia del coche" step="0.01" class="form-control mb-2">
    <input type="number" required name="nPuertas" placeholder="N&uacute;mero de puertas del coche" step="1" class="form-control mb-2">
    <input type="file" name="foto" >
    <input type="number" required name="precio" placeholder="Precio del coche" step="0.01" class="form-control mb-2">

    <button class="btn btn-success btn-block m-3" type="submit">
        Crear nuevo coche
    </button>
</form>
<div class="d-flex justify-content-end">
    <form action="{{ route('mostrarProductos') }}" method="POST">
        @csrf
        <button class="btn btn-danger btn-block" type="submit">
            Atr&aacute;s
        </button>

    </form>
</div>
