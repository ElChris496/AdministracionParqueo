<?php include('../../../../config.php');?>
<!DOCTYPE html>
<html lang="es">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Radiador Springs</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="http://localhost/AdministracionParqueo/app/Templates/AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/AdministracionParqueo/app/Templates/AdminLTE-3.2.0/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <link rel="http://localhost/AdministracionParqueo/app/Templates/AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/jquery/jquery.min.js">
    </head>
    <body class="hold-transition sidebar-mini">
    <script src="http://localhost/AdministracionParqueo/app/Templates/AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
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
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color:#D9D9D9; padding: 20px;">
                <div class="container-xl">
                <div class="table-title">
                     <div class="row">
                            <div class="col-sm-8"><h2><b>Mapeo del parqueo</b></h2></div>
                     </div>
                </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!--ModalIngresarEspacio-->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="background-color:#324855; border-color:#324855">Agregar Espacio</button>
                                <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Agregar Espacio</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form group">
                                                <label for="">Estado</label>
                                                <select name="" id="estado" class="form-control">
                                                    <option value="Libre">Libre</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="modal-body"> ¿Esta seguro de que desea añadir un nuevo espacio?</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #567C93; border-color: #567C93" >Cancelar</button>
                                                <button type="button" id="btn_nuevoEspacio" class="btn btn-primary" data-dismiss="modal" style="background-color: #567C93; border-color: #567C93">Confirmar</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    <!--ModalIngresarEspacioFin-->
                                <div class="card-body">
                                    <div class ="row">
                                    <?php
                                    $query_mapeos = $pdo->prepare("SELECT * FROM sitio");
                                    $query_mapeos->execute();
                                    $mapeos = $query_mapeos->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($mapeos as $mapeo){
                                        $id = $mapeo['id'];
                                        $estado = $mapeo['estado'];

                                        if($estado == "Libre"){ ?>
                                        <!--INICIOLIBRE-->
                                            <div class="col">
                                                <center>
                                                    <h2><?php echo $id;?></h2>
                                                    <button class="btn btn-success" style="width: 64px; height: 114px; background-color:#53A790; border-color:#53A790;" data-toggle="modal" data-target="#modal<?php echo $id;?>">
                                                        <p><?php echo $estado;?></p>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modal<?php echo $id;?>" tabindex="-1"
                                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">INGRESO DEL VEHICULO</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                <div class="form-group row">
                                                                        <label for="staticEmail" class="col-sm-3 col-form-label">Placa: <span><b style="color: red">*</b></span></label>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" style="text-transform: uppercase" class="form-control" id="placa_buscar<?php echo $id;?>">
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <button class="btn btn-primary" id="btn_buscar_cliente<?php echo $id;?>" type="button">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                                                </svg>
                                                                                 Buscar
                                                                            </button>
                                                                            <script>
                                                                                $('#btn_buscar_cliente<?php echo $id;?>').click(function () {
                                                                                    var placa = $('#placa_buscar<?php echo $id;?>').val();
                                                                                    var id = "<?php echo $id;?>";
                                                                                    
                                                                                    if(placa == ""){
                                                                                        alert('Debe de llenar el campo placa');
                                                                                        $('#placa_buscar<?php echo $id;?>').focus();
                                                                                    }else{
                                                                                        var url = 'http://localhost/AdministracionParqueo/resources/views/administrador/parqueo/controller_buscar_cliente.php';
                                                                                        $.get(url,{placa:placa,id:id},function (datos) {
                                                                                            $('#respuesta_buscar_cliente<?php echo $id;?>').html(datos);
                                                                                        });
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                    </div>

                                                                    <div id="respuesta_buscar_cliente<?php echo $id;?>">

                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="staticEmail" class="col-sm-4 col-form-label">Fecha de ingreso:</label>
                                                                        <div class="col-sm-8">
                                                                            <?php
                                                                            date_default_timezone_set("America/caracas");
                                                                            $fechaHora = date("Y-m-d h:i:s");
                                                                            $dia = date('d');
                                                                            $mes = date('m');
                                                                            $ano = date('Y');
                                                                            ?>
                                                                            <input type="date" class="form-control" id="fecha_ingreso<?php echo $id;?>" value="<?php echo $ano."-".$mes."-".$dia; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="staticEmail" class="col-sm-4 col-form-label">Hora de ingreso:</label>
                                                                        <div class="col-sm-8">
                                                                            <?php
                                                                            date_default_timezone_set("America/caracas");
                                                                            $fechaHora = date("Y-m-d h:i:s");
                                                                            $hora = date('H');
                                                                            $minutos = date('i');
                                                                            ?>
                                                                            <input type="time" class="form-control" id="hora_ingreso<?php echo $id;?>"  value="<?php echo $hora.":".$minutos; ?>">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </center>
                                            </div>
                                            <!--FINLIBRE-->
                                        <?php
                                        }
                                        if($estado == "Ocupado"){
                                        ?>
                                            <!--OCUPADO-->
                                            <div class="col">
                                                <center>
                                                    <h2><?php echo $id;?></h2>
                                                    <button class="btn btn-info" id="btn_ocupado<?php echo $id;?>" data-toggle="modal"
                                                            data-target="#exampleModal<?php echo $id;?>" style="width: 64px; height: 114px; background-color:#FFFFFF; border-color:#FFFFFF;">
                                                            <img src="http://localhost/AdministracionParqueo/public/img/parqueo4.png" style="width: 64px; height:114px; margin-left:-2px" alt="">
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modal<?php echo $id;?>" tabindex="-1"
                                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">INGRESO DEL VEHICULO</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </center>
                                            </div>
                                            <!--FINOCUPADO-->
                                        <?php
                                        }
                                        ?>
                                        <div class="col"></div>
                                        <?php
                                        }
                                        ?>
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
    .container-xl{
        width: auto;
        background: #ffff;
        padding: 40px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
        border-radius: 10px;
        margin-top: 1%;
    }
body {
    color: #566787;
    background-color:#D9D9D9;
    font-family: 'Poppins', sans-serif;
}
h2{
    font-family: 'Poppins', sans-serif;
    color: #324855;
}
.content-wrapper{
    background-color:#D9D9D9;
    padding: 20px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #ffff;
    padding: 40px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
    border-radius: 10px;
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-width: 100%;
}
img {
    width: 20%;
    height:auto;
    margin-top: 2%;
    margin-left: 81%;
    margin-bottom: -1%;
}
</style>
</html>

<script>
    $('#btn_nuevoEspacio').click(function () {
        var estado= $('#estado').val();
        var id_parqueo = '1';
        var id_cliente = '1';

            var url = 'controllercreacion.php';
            $.get(url,{estado:estado, id_parqueo:id_parqueo, id_cliente:id_cliente},function(datos){
                $('#respuesta').html(datos);
            });
            window.location.reload();
    });
</script>