<h1>Registrar Horario de Cierre de Emergencia</h1>
<form action="/horarioemergencia" method="POST" role="form">
{{csrf_field()}}
    <div class="form-goup">
        <label for="">Horario de Cierre</label>
        <input type="text" class="form-control" name="horarioc" placeholder="Ingrese la hora de apertura de apertura"></input>
    </div>
    <div class="form-goup">
        <label for="">Motivo</label>
        <input type="text" class="form-control" name="Motivo" placeholder="Ingrese la hora de cierre"></input>
    </div>
    <div class="form-goup">
        <label for="">Fecha</label>
        <input type="text" class="form-control" name="fecha" placeholder="Ingrese la fecha del dia"></input>
    </div>
    <button type="submit"  class="btn btn-primary">Guardar</button>
</form>