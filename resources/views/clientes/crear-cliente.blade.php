<h1>{{ $titulo }}</h1>
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<form class="form" method="post" action={{ route('cliente.store');}}>
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
    <button  type="submit">Agregar</button>
</form>

<script type="text/javascript" src="{{ assets('js/function.js')}}"></script>