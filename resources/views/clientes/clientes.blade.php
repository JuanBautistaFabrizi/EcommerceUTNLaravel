<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="{{ asset('js/function.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/clientes.css')}}">

    <title>Document</title>
</head>
<body>

    <h2 class="buscador">Buscador</h2>

<form class="form" method="get" action="clientes">
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
    <button class="btn" type="submit">Buscar</button>
</form>

<h1 class="titulo">{{$titulo}}</h1>

<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>domicilio</th>
            <th>telefono</th>
            <th>email</th>
            <th>edad</th>
            <th>Editar</th>
            <th>Borrar</th>
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
                    <a href="{{ url('clientes/'.$cliente->idCliente.'/edit')}}">Editar</a>
                </td>
                <td>
                    <form method="POST" action="clientes/{{$cliente->idCliente}}">
                        @csrf
                        {{@method_field('DELETE')}}
                        <input id="btn" type="submit" name="submit" value="Borrar">
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>

<h2 class="crear">Crear cliente nuevo</h2>

@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<form class="form" method="post" action={{ route('clientes.store');}}>
    @csrf
    <label for="nombre">nombre: </label>
    <input type="text" name="nombre"> <br>
    <label for="apellido">apellido: </label>
    <input type="text" name="apellido"> <br>
    <label for="domicilio">domicilio: </label>
    <input type="text" name="domicilio"> <br>
    <label for="telefono">telefono: </label>
    <input type="text" name="telefono"> <br>
    <label for="email">mail: </label>
    <input type="text" name="email"> <br>
    <label for="edad">edad: </label>
    <input type="text" name="edad"> <br>
    <button class="btn"  type="submit">Agregar</button>
</form>
</body>
</html>





