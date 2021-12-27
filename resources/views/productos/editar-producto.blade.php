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
<form class="form" method="post" action="productos/edit">
    @csrf
    @method('PUT')
    <label for="modelo">modelo: </label>
    <input type="text" name="modelo"> <br>
    <label for="color">color: </label>
    <input type="text" name="color"> <br>
    <label for="talle">talle: </label>
    <input type="text" name="talle"> <br>
    <label for="precio">precio: </label>
    <input type="text" name="precio"> <br>
    <label for="imagen">imagen: </label>
    <input type="file" name="imagen"> <br>
    <button type="submit">Agregar</button>
</form>
</body>
</html>
