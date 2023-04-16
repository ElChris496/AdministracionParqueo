<?php include('../../../../config.php');?>
<!DOCTYPE html>
<html lang="es">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <head>
        <?php include('../../../layout/admin/head.php');?>
    </head>
    <body class="hold-transition sidebar-mini" style="background-color:#D9D9D9">
    <div class="wrapper">
        <?php include('../../../layout/admin/menu.php');?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color:#D9D9D9; padding: 20px;">
            <div class="container-xl">
                <div class="table-title">
                     <div class="row">
                            <div class="col-sm-8"><h2><b>Eliminar Usuario</b></h2></div>
                     </div>
                </div>


                <?php
                $id_get = $_GET['id'];
                $query_cliente = $pdo->prepare("SELECT * FROM cliente WHERE id = '$id_get'");
                $query_cliente->execute();
                $clientes = $query_cliente->fetchAll(PDO::FETCH_ASSOC);
                foreach($clientes as $cliente) {
                    $id = $cliente['id'];
                    $nombres = $cliente['nombres'];
                    $apellidos = $cliente['apellidos'];
                    $ci = $cliente['ci'];
                    $correo = $cliente['correo'];
                    $celular = $cliente['celular'];
                }
                ?>

                <div class="container-fluic">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">¿Esta seguro de eliminar este registro?</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Nombres</label>
                                        <input type="text" class="form-control" id="nombres" value="<?php echo $nombres;?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Apellidos</label>
                                        <input type="text" class="form-control" id="apellidos" value="<?php echo $apellidos;?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ci</label>
                                        <input type="text" class="form-control" id="ci" value="<?php echo $ci;?>"disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Correo</label>
                                        <input type="email" class="form-control" id="correo" value="<?php echo $correo;?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Celular</label>
                                        <input type="text" class="form-control" id="celular" value="<?php echo $celular;?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-danger" id="btn_borrar" style="background-color:#53A790; border-color:#53A790;" >Borrar</button>
                                        <a href="../../../../resources/views/administrador/usuarios/usuarios.php" class="btn btn-default" style="background-color:#53A790;border-color:#53A790;color:#FFFFFF;">Cancelar</a>
                                    </div>
                                    <img src="http://localhost/AdministracionParqueo/public/img/parqueo3.jpg">
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
    <?php include('../../../../resources/layout/admin/footerlinks.php'); ?>
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
    $('#btn_borrar').click(function () {

        var id_user = '<?php echo $id_get = $_GET['id'];?>';

        var url = 'controllerborrar.php';
        $.get(url,{id_user:id_user},function (datos) {
            $('#respuesta').html(datos);
        });

    });
</script>
