<?php include('../../../../config.php');?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include('../../../layout/admin/head.php');?>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <?php include('../../../layout/admin/menu.php');?>

        <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="container">
                <h2>Creación de un nuevo Usuario</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card" style="border: 1px solid #606060">
                                    <div class="card-header" style="background-color: #007bff;color: #ffffff;">
                                        <h4>Nuevo Usuario</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Nombres</label>
                                            <input type="text" class="form-control" id="nombres">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Apellidos</label>
                                            <input type="text" class="form-control" id="apellidos">
                                        </div>
                                        <div class="form-group">
                                            <label for="">CI</label>
                                            <input type="text" class="form-control" id="ci">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Correo</label>
                                            <input type="email" class="form-control" id="correo">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Celular</label>
                                            <input type="text" class="form-control" id="celular">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary" id="btn_guardar">Guardar</button>
                                            <a href="../../../../resources/views/administrador/usuarios/usuarios.php" class="btn btn-default">Cancelar</a>
                                        </div>
                                        <div id="respuesta">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- /.content-wrapper -->
        </div>
        <?php include('../../../../resources/layout/admin/footerlinks.php');?>
    </body>
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