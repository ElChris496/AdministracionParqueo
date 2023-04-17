<h1>Reservar</h1>
<form action="/reservacreado" method="POST" role="form">
{{csrf_field()}}
    <div class="form-goup">
        <label for="">Vehiculo</label>
        <input type="text" class="form-control" name="id_vehiculo" placeholder=""></input>
    </div>
    <div class="form-goup">
        <label for="">Sitio</label>
        <input type="text" class="form-control" name="id_sitio" placeholder=""></input>
    </div>
    <div class="form-goup">
        <label for="">Fecha ingreso </label>
        <input type="text" class="form-control" name="fecha_ingreso" placeholder=""></input>
    </div>
    
     <button type="submit"  class="btn btn-primary">Reservar</button>
</form>

