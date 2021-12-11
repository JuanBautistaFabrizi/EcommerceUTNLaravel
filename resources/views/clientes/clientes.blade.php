<h1>{{$titulo}}</h1>
<form  method="get" action="cliente">
    <label for="idCliente">id: </label>
    <input type="text" name="idCliente"> <br>
    <label for="nombre">nombre: </label>
    <input type="text" name="nombre"> <br>
    <label for="apellido">apellido: </label>
    <input type="text" name="apellido"> <br>
    <label for="domicilio">domicilio: </label>
    <input type="text" name="domicilio"> <br>
    <label for="telefono">telefono: </label>
    <input type="text" name="telefono"> <br>
    <label for="email">email: </label>
    <input type="text" name="email"> <br>
    <label for="edad">edad: </label>
    <input type="text" name="edad"> <br>
    <button type="submit">Buscar</button>
</form>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>domicilio</th>
            <th>telefono</th>
            <th>email</th>
            <th>edad</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente->idCliente}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->domicilio}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->edad}}</td>
                <td>
                    <form method="POST" action="cliente/{{$cliente->idCliente}}">
                        @csrf
                        {{@method_field('DELETE')}}
                        <input type="submit" name="submit" value="Delete">
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>



