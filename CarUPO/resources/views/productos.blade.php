
    {{-- @if ($coches == '[]' && $accesorios == '[]')
        <div class="alert alert-info">
            <span>No hay productos disponibles</span>
        </div>
    @else --}}
        <table class="table m-3 rounded-2 bg-white">
            <thead>
                <tr class="table-row  text-center align-middle">
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Descripci&oacute;n</th>
                    <th>Color</th>
                    <th>Combustible</th>
                    <th>Cilindrada</th>
                    <th>Potencia</th>
                    <th>N&uacute;mero de puertas</th>
                    <th>Precio</th>
                </tr>
            </thead>
            @foreach ($coches as $coche)
                <tr class="table-row text-center align-middle">
                    <td>{{ $coche->marca}}</td>
                    <td>{{ $coche->modelo}}</td>
                    <td>{{ $coche->producto->descripcion}}</td>
                    <td>{{ $coche->color}}</td>
                    <td>{{ $coche->combustible}}</td>
                    <td>{{ $coche->cilindrada}}</td>
                    <td>{{ $coche->potencia}}</td>
                    <td>{{ $coche->nPuertas}}</td>
                    <td>{{ $coche->producto->precio}}</td>
                </tr>
            @endforeach
        </table>
        <table class="table m-3 rounded-2 bg-white">
            <thead>
                <tr class="table-row  text-center align-middle">
                    <th>Nombre</th>
                    <th>Descripci&oacute;n</th>
                    <th>Precio</th>
                </tr>
            </thead>
            @foreach ($accesorios as $accesorio)
                <tr class="table-row text-center align-middle">
                    <td>{{ $accesorio->nombre }}</td>
                    <td>{{ $accesorio->producto->descripcion}}</td>
                    <td>{{ $accesorio->producto->precio}}</td>
                </tr>
            @endforeach
        </table>
    {{-- @endif --}}
