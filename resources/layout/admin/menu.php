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
              <p>Usuarios <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost/AdministracionParqueo/resources/views/administrador/usuarios/usuarios.php" class="nav-link active" style="background-color: #395261; color:#FFFFFF">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Lista de Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost/AdministracionParqueo/resources/views/administrador/usuarios/creacionUsuarios.php" class="nav-link active" style="background-color: #395261; color:#FFFFFF">
                  <i class="nav-icon fas fa-user-plus"></i>
                  <p>Agregar Usuario</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
              <a href="#" class="nav-link active" style="background-color: #F9FA85; color:#324855; margin-top: 3px;">
              <i class="nav-icon fas fa-car"></i>
              <p>Sitios <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active" style="background-color: #395261; color:#FFFFFF">
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
                <a href="#" class="nav-link active" style="background-color: #395261; color:#FFFFFF">
                  <i class="nav-icon fas fa-plus-circle"></i>
                  <p>Agregar Horario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active" style="background-color: #395261; color:#FFFFFF">
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