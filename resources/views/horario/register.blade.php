<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrar Horario</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet"  type="text/css" href="{{ asset('/css/fontawesome.min.css') }}">
  <link rel="stylesheet"  type="text/css" href="{{ asset('/css/horario.css') }}">
</head>
<body class="registro">
<div class="tituloc">
      <h1>Registrar Horario</h1>
      </div>
  <section class="borde-formulario">
      <div class=" titulob">
      <h2> Ingrese el horario </h2>
      </div>
      <!-- Form -->
      <div class="formulario">
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
            <button type="submit"  class="botong">Guardar</button>
            </form>
        </div>
  </section>
  <!-- nav -->
  <aside class="nav">
    <div class="opciones">
    <ul>
      <li><a href= "#">Usuarios</a></li>
      <li><a href= "#">Sitios</a></li>
      <li><a href= "#">Mapeo de parqueo</a></li>
      <li class="horariob"><a href= "#">Horario <span><i class= "icono fa-solid fa-chevron-down" aria-hidden="true"></i></span></a>
        <ul class="subhorario">
            <li><a href="#">Agregar Horario</a></li>
            <li><a href="#">Horario de Emergencia</a></li>
        </ul>
      </li>
      <li><a href= "#">Reservar</a></li>
    </ul>   
    </div>
  </aside>
  <!-- Main Footer -->
  <footer class="abajof">
    <!-- To the right -->
    <div class="abajo">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
  <script src="{{ asset('/js/horario.js') }}"></script>
</body>
</html>


