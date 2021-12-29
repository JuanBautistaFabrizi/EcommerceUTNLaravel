<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/clientes.css')}}">
    <title>Tabla productos</title>
</head>
<body>
    <h1 class="titulo">Productos</h1>

<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>modelo</th>
            <th>color</th>
            <th>talle</th>
            <th>precio</th>
            <th>imagen</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
         @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->idproducto}}</td>
            <td>{{$producto->modelo}}</td>
            <td>{{$producto->color}}</td>
            <td>{{$producto->talle}}</td>
            <td>{{$producto->precio}}</td>
            <td ><img class="img" src="{{ asset('img/'.$producto->imagen) }}" /></td>
            <td>
                    <a href="{{ url('productos/'.$producto->idproducto.'/edit')}}">Editar</a>
            </td>
            <td>
                    <form method="POST" action="productos/{{$producto->idproducto}}">
                        @csrf
                        {{@method_field('DELETE')}}
                        <input type="submit" name="submit" value="Delete">
                    </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<h2 class="buscador">Buscador de productos</h2>

<form class="form" method="get" action="productos">
    <label for="idproducto">id: </label>
    <input type="text" name="idproducto" autocomplete="off"><br>
    <label for="modelo">modelo: </label>
    <input type="text" name="modelo" autocomplete="off"><br>
    <label for="color">color: </label>
    <input type="text" name="color" autocomplete="off"><br>
    <label for="talle">talle: </label>
    <input type="text" name="talle" autocomplete="off"><br>
    <label for="precio">precio: </label>
    <input type="text" name="precio" autocomplete="off"><br>
    <button class="btn" type="submit">Buscar</button>
</form>

<h2 class="crear">Crear producto nuevo</h2>

<form class="form" method="post" action="{{ route('productos.store');}}">
    @csrf
    <label for="modelo">modelo: </label>
    <input type="text" name="modelo" autocomplete="off"> <br>
    <label for="color">color: </label>
    <input type="text" name="color" autocomplete="off"> <br>
    <label for="talle">talle: </label>
    <input type="text" name="talle" autocomplete="off"> <br>
    <label for="precio">precio: </label>
    <input type="text" name="precio" autocomplete="off"> <br>
    <label for="imagen">imagen: </label>
    <input type="file" name="imagen"> <br>
    <button class="btn" type="submit">Agregar</button>
</form>
<div>
    <a style="margin-bottom: 30px;font-size: 1.5rem" href="https://localhost/TP-UTN/tiendaDeRopaUTN/public/clientes">Clientes</a>
</div>
<div>
    <a style="margin-bottom: 30px;font-size: 1.5rem" href="https://localhost/TP-UTN/tiendaDeRopaUTN/public/login">Salir</a>
</div>
</body>
</html>
