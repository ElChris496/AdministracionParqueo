<?php include('../../../../config.php');?>
<!DOCTYPE html>
<html lang="es">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <head>
        <?php include('../../../layout/admin/head.php');?>
    </head>
    <body class="hold-transition sidebar-mini" style="background-color:#D9D9D9 ">
        <div class="wrapper">
            <?php include('../../../layout/admin/menu.php');?>

        <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="background-color:#D9D9D9; padding: 20px;">
                <div class="container-xl">
                <div class="table-title">
                     <div class="row">
                            <div class="col-sm-8"><h2><b>Agregar Usuario</b></h2></div>
                     </div>
                </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="card">
                                    <div class="card-header">
                                        <h4>Nuevo Usuario</h4>
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
                                            <a href="../../../../resources/views/administrador/usuarios/usuarios.php" class="btn btn-default" style="background-color:#53A790;border-color:#53A790;color:#FFFFFF;">Cancelar</a>
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
        <?php include('../../../../resources/layout/admin/footerlinks.php');?>
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
    h2{
        font-family: 'Poppins', sans-serif;
        color: #324855;
    }
    .card{
        margin-top: 5px;
        border: 5px solid #53A790;
        border-radius : 15px;
        margin-bottom: 0%;
    }
    .card-header{
        background-color:#53A790;
        color: #ffffff;
    }
    img {
        width: 20%;
        height:auto;
        margin-top: -4%;
        margin-left: 81%;
        margin-bottom: -1%;
    }
    input{
        margin-top: -1%;
    }
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