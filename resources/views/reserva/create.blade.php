<h1>Reserva</h1>
<form action="/reservacreado" method="POST" role="form">
{{csrf_field()}}
    <div class="form-goup">
        <label for="">fecha_hora_solicitud</label>
        <input type="text" class="form-control" name="fecha_hora_solicitud" placeholder=""></input>
    </div>
    <div class="form-goup">
        <label for="">fecha_hora_aprobacion</label>
        <input type="text" class="form-control" name="fecha_hora_aprobacion" placeholder=""></input>
    </div>
    <div class="form-goup">
        <label for="">estado</label>
        <input type="text" class="form-control" name="estado" placeholder=""></input>
    </div>
    <div class="form-goup">
        <label for="">id_cliente</label>
        <input type="text" class="form-control" name="id_cliente" placeholder=""></input>
    </div>
    <div class="form-goup">
        <label for="">id_vehiculo</label>
        <input type="text" class="form-control" name="id_vehiculo" placeholder=""></input>
    </div>
    <button type="submit"  class="btn btn-primary">Guardar</button>
</form>

