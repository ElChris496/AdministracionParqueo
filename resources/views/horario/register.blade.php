<h1>Registrar Horario</h1>
<form action="/parqueocreado" method="POST" role="form">
{{csrf_field()}}
    <div class= "form-goup">
        <label for="">Espacios</label>
        <input type="number" class="form-control" name="espacios" placeholder="Ingrese la cantidad de sitios"></input>
    </div>
    <div class="form-goup">
        <label for="">Fecha de inicio</label>
        <input type="date" class="form-control" name="fechai" placeholder="Ingrese la fecha de inicio"></input>
    </div>
    <div class= "form-goup">
        <label for="">Fecha de cierre</label>
        <input type="date" class="form-control" name="fechac" placeholder="Ingrese la fecha de cierre"></input>
    </div> 
    <div class="form-goup">
        <label for="">Horario de Apertura</label>
        <input type="time" class="form-control" name="horarioa" placeholder="Ingrese la hora de apertura de apertura"></input>
    </div>
    <div class="form-goup">
        <label for="">Horario de Cierre</label>
        <input type="time" class="form-control" name="horarioc" placeholder="Ingrese la hora de cierre"></input>
    </div>
    <button type="submit"  class="btn btn-primary">Guardar</button>
</form>
