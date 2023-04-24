<?php include('../../../../config.php');?>
<!DOCTYPE html>
<html lang="es">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet"  type="text/css" href="{{ asset('/css/horario.css') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Radiador Springs</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Theme style -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition sidebar-mini" style="background-color:#D9D9D9 ">
        <div class="wrapper">
            <?php include('../../../layout/admin/menu.php');?>

        <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="background-color:#D9D9D9; padding: 20px;">
                <div class="container-xl">
                <div class="table-title">
                    <div class="row">
                            <div class="col-sm-8"><h2><b>TITULO HORARIO</b></h2></div>
                    </div>
                </div>
                    <div class="container-fluid">
                        <div class="row">
                            <!--ACA PEGAR FORMULARIO O LO QUE SEA DE HORARIO-->
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
                                        <div class="fechai">
                                            <label class = "lfechai" for="">Fecha de inicio</label>
                                            <input type="date" class="cfechai" name="fecha_inicio" placeholder="Ingrese la fecha de inicio"></input>
                                        </div>
                                        <div class= "fechac">
                                            <label for="">Fecha de cierre</label>
                                            <input type="date" class="cfechac" name="fecha_fin" placeholder="Ingrese la fecha de cierre"></input>
                                        </div> 
                                        <div class="horaa">
                                            <label for="">Horario de Apertura</label>
                                            <input type="time" class="choraa" name="hora_inicio" placeholder="Ingrese la hora de apertura de apertura"></input>
                                        </div>
                                        <div class="horac">
                                            <label for="">Horario de Cierre</label>
                                            <input type="time" class="chorac" name="hora_fin" placeholder="Ingrese la hora de cierre"></input>
                                        </div>
                                        <button type="submit"  class="botong">Guardar</button>
                                        <button type="button" class="botonc">Cancelar</button>
                                        </form>
                                    </div>
                                    <img class= "parqueo" src="{{ asset('/img/parqueo.png') }}" >
                            </section>
                            <div class="auton">
                                <img class = "auton" src="{{ asset('/img/auton.png') }}" alt="">
                            </div>
                            <!--termina aqui-->
                        </div>
                    </div>
                </div>
            </div>
        <!-- /.content-wrapper -->
        </div>
        <?php include('../../../../resources/layout/admin/footerlinks.php');?>
    </body>
</html>