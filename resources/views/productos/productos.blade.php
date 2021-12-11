<form method="get" action="producto">
    <label for="idproducto">id: </label>
    <input type="text" name="idproducto"><br>
    <label for="modelo">modelo: </label>
    <input type="text" name="modelo"><br>
    <label for="color">color: </label>
    <input type="text" name="color"><br>
    <label for="talle">talle: </label>
    <input type="text" name="talle"><br>
    <label for="precio">precio: </label>
    <input type="text" name="precio"><br>
    <button type="submit">Buscar</button>
</form>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>modelo</th>
            <th>color</th>
            <th>talle</th>
            <th>precio</th>
            <th>imagen</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->$idproducto}}</td>
            <td>{{$producto->$modelo}}</td>
            <td>{{$producto->$color}}</td>
            <td>{{$producto->$talle}}</td>
            <td>{{$producto->$precio}}</td>
            <td background={{$producto->$imagen}}>
        </tr>
        @endforeach
    </tbody>
</table>