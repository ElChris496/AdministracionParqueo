<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="http://localhost/administracionparqueo/resources/css/style.css">
  <script src="https://kit.fontawesome.com/d5d7b1b62a.js" crossorigin="anonymous"></script>
  <title>Crear Reserva</title>
</head>
<body>
    <!--<header>
        <div class="icon__menu">
            <i class="fas fa-bars"></i>
        </div>
        <div class="icon__notificacion">
        <i class="fa-solid fa-envelope" title="Notificaciones"></i>
        </div>
        <div class="icon__perfil">
        <i class="fa-solid fa-circle-user" title="Perfil"></i>
        </div>
    </header>

        <div class="menu__side">

              <div class="namepage">

              <i class="fa-solid fa-car-tunnel"></i>
              <h4>Administracion Parqueo</h4>
              </div>
              -opciones del menu el menu en si
        <div class="options__menu">

              <a href="#" >
                  <div class="option">
                      <i class="fa-solid fa-car" title="Vehiculo"></i>
                      <h4>Vehiculo</h4>
                  </div>
              </a>

              <a href="#">
                  <div class="option">
                  <i class="fa-solid fa-square-parking" title="Sitio"></i>
                      <h4>Sitio</h4>
                  </div>
              </a>
              <a href="#">
                  <div class="option">
                  <i class="fa-solid fa-money-bill"  title="Pagos"></i>
                      <h4>Pagos</h4>
                  </div>
              </a>
              <a href="#" class="selected">
                  <div class="option">
                  <i class="fa-solid fa-suitcase" title="Reserva"></i>
                      <h4>Reserva</h4>
                  </div>
              </a>
        </div>
        </div>
        -->

    <section class="form-register">
    <h4>Reserva un sitio</h4>
        <input class="controls" type="text" placeholder="Carlos Fernando Siles Mendez">
    <h1>Vehiculo</h1>
            <select name="vehiculo" class="controls"></select>
    
    <!--<input class="controls" type="date" name="fecha_solicitud" id="fecha_soolicitud" placeholder="Ingrese su Nombre" min="2023-01-01" max="2023-12-12">-->

    <h1>Sitio</h1>
            <select name="sitio" id="" class="controls"></select>
    
    <!--<input class="controls" type="time" name="hora_soliciutd" id="hora_solictud" placeholder="Ingrese su Apellido" >-->

    <h1>Fecha ingreso</h1>
    <input class="controls" type="date" name="fecha_aprobacion" id="fecha_aprobacion" placeholder="Ingrese su Correo"min="2023-01-01" max="2023-12-12">
    <!--<h1>Hora Aprobacion</h1>
    <input class="controls" type="time" name="hora_aprobacion" id="hora_aprobacion" placeholder="Ingrese su Contraseña">
    -->
    <input class="botons" type="submit" value="Reservar">
    <input class="cancelar" type="submit"  value="Cancelar">
    <!--<p><a href="#">¿Ya tengo Reserva?</a></p>-->
  </section>
</body>
</html>