
<html>
    <head>
        <meta charset=" utf-8" />
        <title>Registrar Horario</title>
        <link rel="stylesheet"  type="text/css" href="https://localhost/github.com/ElChris496/AdministracionParqueo/blob/master/resources/css/horario.css">
    </head>
    <body>
        <div id="formulario">
            <head>
                <h1>Registrar Horario</h1>
            </head>
            <form action="/parqueocreado" method="POST" role="form">    
            {{csrf_field()}}
            <div class= "form-goup">
                <label for="">Espacios</label>
                <input type="number" class="form-control" name="cantidad_sitios" placeholder="Ingrese la cantidad de sitios"></input>
            </div>
            <div class="form-goup">
                <label for="">Fecha de inicio</label>
                <input type="date" class="form-control" name="fecha_inicio" placeholder="Ingrese la fecha de inicio"></input>
            </div>
            <div class= "form-goup">
                <label for="">Fecha de cierre</label>
                <input type="date" class="form-control" name="fecha_fin" placeholder="Ingrese la fecha de cierre"></input>
            </div> 
            <div class="form-goup">
                <label for="">Horario de Apertura</label>
                <input type="time" class="form-control" name="hora_inicio" placeholder="Ingrese la hora de apertura de apertura"></input>
            </div>
            <div class="form-goup">
                <label for="">Horario de Cierre</label>
                <input type="time" class="form-control" name="hora_fin" placeholder="Ingrese la hora de cierre"></input>
            </div>
            <button type="submit"  class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </body>
</html>
