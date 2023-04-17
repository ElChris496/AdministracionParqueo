
<!DOCTYPE html>
<html lang="es">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <head>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/agrergarCliente.css') }}">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Radiador Springs</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="http://localhost/AdministracionParqueo/app/Templates/AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/AdministracionParqueo/app/Templates/AdminLTE-3.2.0/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition sidebar-mini" style="background-color:#D9D9D9 ">
        <div class="wrapper">
            <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-user-circle"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->


   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#324855">
    <!-- Brand Logo -->
    <a href="http://localhost/AdministracionParqueo/resources/views/administrador/ventanaPrincipalAdmin.php" class="brand-link"  style="margin-top: 5px; margin-bottom: 5px;" >
      <img src="http://localhost/AdministracionParqueo/public/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Radiador Springs</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!--
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="http://localhost/AdministracionParqueo/resources/img/userParqueo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrador</a>
        </div>
      </div>-->

      <!-- SidebarSearch Form 
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
              <a href="#" class="nav-link active" style="background-color: #F9FA85; color:#324855; margin-top: 5px;">
              <i class="nav-icon fas fa-user"></i>
              <p>Clientes<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost/AdministracionParqueo/resources/views/administrador/clientes/clientes.php" class="nav-link active" style="background-color: #395261; color:#FFFFFF">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Lista de Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost/AdministracionParqueo/resources/views/administrador/clientes/agregarCliente.php" class="nav-link active" style="background-color: #395261; color:#FFFFFF">
                  <i class="nav-icon fas fa-user-plus"></i>
                  <p>Agregar Cliente</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
              <a href="#" class="nav-link active" style="background-color: #F9FA85; color:#324855; margin-top: 3px;">
              <i class="nav-icon fas fa-parking"></i>
              <p>Parqueo <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost/AdministracionParqueo/resources/views/administrador/parqueo/mapeoParqueo.php" class="nav-link active" style="background-color: #395261; color:#FFFFFF">
                  <i class="nav-icon fas fa-map"></i>
                  <p>Mapeo del parqueo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active" style="background-color: #395261; color:#FFFFFF">
                  <i class="nav-icon fas fa-map-marked-alt"></i>
                  <p>Asignar espacio</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
              <a href="#" class="nav-link active" style="background-color: #F9FA85; color:#324855;  margin-top: 3px;">
              <i class="nav-icon fas fa-clock"></i>
              <p>Horario <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="http://localhost/AdministracionParqueo/resources/views/administrador/horario/agregarHorario.php" class="nav-link active" style="background-color: #395261; color:#FFFFFF">
                  <i class="nav-icon fas fa-plus-circle"></i>
                  <p>Agregar Horario</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="http://localhost/AdministracionParqueo/resources/views/administrador/horario/horarioEmergencia.php" class="nav-link active" style="background-color: #395261; color:#FFFFFF; font-size:14px">
                  <i class="nav-icon fas fa-hard-hat"></i>
                  <p>Horario de emergencia</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
              <a href="#" class="nav-link active" style="background-color: #F9FA85; color:#324855; margin-top: 3px;">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Reservar <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active" style="background-color: #395261; color:#FFFFFF">
                  <i class="nav-icon fas fa-plus-circle"></i>
                  <p>Agregar reserva</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Administrador</h5>
      <p>Esta es la vista para el usuario administrador</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

        <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="background-color:#D9D9D9; padding: 20px;">
                <div class="container-xl">
                <div class="table-title">
                     <div class="row">
                            <div class="col-sm-8"><h2><b>Agregar Cliente</b></h2></div>
                     </div>
                </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="card">
                                    <div class="card-header">
                                        <h4>Nuevo Cliente</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Nombres*</label>
                                            <input type="text" class="form-control" id="nombres">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Apellidos*</label>
                                            <input type="text" class="form-control" id="apellidos">
                                        </div>
                                        <div class="form-group">
                                            <label for="">CI*</label>
                                            <input type="text" class="form-control" id="ci">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Correo*</label>
                                            <input type="email" class="form-control" id="correo">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Celular*</label>
                                            <input type="text" class="form-control" id="celular">
                                        </div>
                                        <div class="form-group2">
                                            <button class="btn btn-primary" id="btn_guardar" style="background-color:#53A790; border-color:#53A790;">Guardar</button>
                                            <a href="../../../../resources/views/administrador/clientes/clientes.php" class="btn btn-default" style="background-color:#53A790;border-color:#53A790;color:#FFFFFF;">Cancelar</a>
                                        </div>
                                        <img src="http://localhost/AdministracionParqueo/public/img/parqueo3.jpg">
                                        <div id="respuesta">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- /.content-wrapper -->
        </div>
        <!-- jQuery -->
<script src="http://localhost/AdministracionParqueo/app/Templates/AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/AdministracionParqueo/app/Templates/AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/AdministracionParqueo/app/Templates/AdminLTE-3.2.0/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
    </body>
<style>
    
</style>
</html>


<script>
    $('#btn_guardar').click(function () {
        var nombres = $('#nombres').val();
        var apellidos = $('#apellidos').val();
        var ci = $('#ci').val();
        var correo = $('#correo').val();
        var celular = $('#celular').val();

        if(nombres == ""){
            alert('Debe de llenar el campo de Nombres');
            $('#nombres').focus();
        }else if(apellidos == ""){
            alert('Debe de llenar el campo de Apellidos');
            $('#apellidos').focus();
        }else if(ci == ""){
            alert('Debe de llenar el campo de CI');
            $('#ci').focus();
        }else if(correo == ""){
            alert('Debe de llenar el campo de Correo');
            $('#correo').focus();
        }else if(celular == ""){
            alert('Debe de llenar el campo de Celular');
            $('#celular').focus();
        }else{
            var url = 'controllercreacion.php';
            $.get(url,{nombres:nombres, apellidos:apellidos, ci:ci, correo:correo, celular:celular},function (datos) {
                $('#respuesta').html(datos);
            });
        }
    });
</script>