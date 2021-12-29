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
<form class="form" method="post" action="{{ route('clientes.update',$id);}}">
    @csrf
    @method('PUT')
    <label for="nombre">nombre: </label>
    <input type="text" name="nombre" autocomplete="off"> <br>
    <label for="apellido">apellido: </label>
    <input type="text" name="apellido" autocomplete="off"> <br>
    <label for="domicilio">domicilio: </label>
    <input type="text" name="domicilio" autocomplete="off"> <br>
    <label for="telefono">telefono: </label>
    <input type="text" name="telefono" autocomplete="off"> <br>
    <label for="email">mail: </label>
    <input type="text" name="email" autocomplete="off"> <br>
    <label for="edad">edad: </label>
    <input type="text" name="edad" autocomplete="off"> <br>
    <button class="btn" type="submit">Editar</button>
    <a class="volver" href="{{ url('clientes')}}">Volver</a>
</form>
</body>
</html>
