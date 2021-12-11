<h1>Editar producto</h1>
<form method="post" action="producto/{{ $producto->id}}">
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