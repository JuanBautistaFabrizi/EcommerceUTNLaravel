<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/clientes.css')}}">
    <title>Document</title>
</head>
<body>
    <h1 class="crear">Editar cliente</h1>
<form class="form" method="post" action="clientes/edit">
    @csrf
    @method('PUT')
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
    <button class="btn" type="submit">Editar</button>
</form>
</body>
</html>
