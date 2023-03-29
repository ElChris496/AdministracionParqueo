
<h1>Crear cliente</h1>
<form action="/clientecreado" method="POST" role="form">
{{csrf_field()}}
    <div class="form-goup">
        <label for="">NOMBRES</label>
        <input type="text" class="form-control" name="nombres" placeholder="Ingrese su(s) nombre(s)"></input>
    </div>
    <div class="form-goup">
        <label for="">APELLIDOS</label>
        <input type="text" class="form-control" name="apellidos" placeholder="Ingrese su(s) apellido(s)"></input>
    </div>
    <div class="form-goup">
        <label for="">CI</label>
        <input type="text" class="form-control" name="ci" placeholder="Ingrese su ci"></input>
    </div>
    <div class="form-goup">
        <label for="">CORREO ELECTRONICO</label>
        <input type="text" class="form-control" name="correo" placeholder="Ingrese su correo electronico"></input>
    </div>
    <div class="form-goup">
        <label for="">CELULAR</label>
        <input type="text" class="form-control" name="celular" placeholder="Ingrese su celular"></input>
    </div>
    <button type="submit"  class="btn btn-primary">Guardar</button>
</form>

