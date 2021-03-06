<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/clientes.css')}}">
    <title>Editar producto</title>
</head>
<body>
    <h1 class="crear">Editar producto</h1>
<form class="form" method="post" action="{{ route('productos.update',$id);}}">
    @csrf
    @method('PUT')
    <label for="modelo">modelo: </label>
    <input type="text" name="modelo" autocomplete="off"> <br>
    <label for="color">color: </label>
    <input type="text" name="color" autocomplete="off"> <br>
    <label for="talle">talle: </label>
    <input type="text" name="talle" autocomplete="off"> <br>
    <label for="precio">precio: </label>
    <input type="text" name="precio" autocomplete="off"> <br>
    <label for="imagen">imagen: </label>
    <input type="file" name="imagen" autocomplete="off"> <br>
    <button class="btn" type="submit">Editar</button>
    <a class="volver" href="{{ url('productos')}}">Volver</a>
</form>
</body>
</html>
