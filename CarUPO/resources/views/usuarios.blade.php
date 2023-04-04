
    {{-- @if ($coches == '[]' && $accesorios == '[]')
        <div class="alert alert-info">
            <span>No hay productos disponibles</span>
        </div>
    @else --}}
        <table class="table m-3 rounded-2 bg-white">
            <thead>
                <tr class="table-row text-center align-middle">
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Tel&eacute;fono</th>
                </tr>
            </thead>
            @foreach ($usuarios as $usuario)
                <tr class="table-row text-center align-middle">
                    <td>{{ $usuario->dni}}</td>
                    <td>{{ $usuario->name}}</td>
                    <td>{{ $usuario->surname}}</td>
                    <td>{{ $usuario->email}}</td>
                    <td>{{ $usuario->phone}}</td>
                </tr>
            @endforeach
        </table>
    {{-- @endif --}}
