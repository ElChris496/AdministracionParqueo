<h1>Reserva</h1>
<form action="/reservacreado" method="POST" role="form">
{{csrf_field()}}
    <div class="form-goup">
        <label for="">Fecha solicitud</label>
        <input type="text" class="form-control" name="fecha_hora_solicitud" placeholder=""></input>
    </div>
    <div class="form-goup">
        <label for="">Hora solicitud</label>
        <input type="text" class="form-control" name="fecha_hora_solicitud" placeholder=""></input>
    </div>
    <div class="form-goup">
        <label for="">Fecha aprobacion</label>
        <input type="text" class="form-control" name="fecha_hora_aprobacion" placeholder=""></input>
    </div>
    <div class="form-goup">
        <label for="">Hora aprobacion</label>
        <input type="text" class="form-control" name="fecha_hora_aprobacion" placeholder=""></input>
    </div>
    <div class="form-goup">
        <label for="">Estado</label>
        <input type="text" class="form-control" name="estado" placeholder=""></input>
    </div>
</div>
<div class="form-goup">
    <label for="">id cliente</label>
    <input type="text" class="form-control" name="fecha_hora_aprobacion" placeholder=""></input>
</div>
     <button type="submit"  class="btn btn-primary">Reservar</button>
</form>

