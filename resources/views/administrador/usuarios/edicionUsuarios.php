<?php include('../../../../config.php');?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('../../../layout/admin/head.php');?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include('../../../layout/admin/menu.php');?>
    <div class="content-wrapper">
        <br>
        <div class="container">


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

            <h2>Actualización del Usuario</h2>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="card card-success" style="border: 1px solid #777777">
                            <div class="card-header">
                                <h3 class="card-title">Edición del Usuario</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nombres</label>
                                    <input type="text" class="form-control" id="nombres" value="<?php echo $nombres;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidos" value="<?php echo $apellidos;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Ci</label>
                                    <input type="text" class="form-control" id="ci" value="<?php echo $ci;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Correo</label>
                                    <input type="email" class="form-control" id="correo" value="<?php echo $correo;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Celular</label>
                                    <input type="text" class="form-control" id="celular" value="<?php echo $celular;?>">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success" id="btn_editar">Actualizar</button>
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
<?php include('../../../../resources/layout/admin/footerlinks.php'); ?>
</body>
</html>


<script>
    $('#btn_editar').click(function () {
        var nombres = $('#nombres').val();
        var apellidos = $('#apellidos').val();
        var ci = $('#ci').val();
        var correo = $('#correo').val();
        var celular = $('#celular').val();
        var id_user = '<?php echo $id_get = $_GET['id'];?>';

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
            var url = 'controlleredicion.php';
            $.get(url,{nombres:nombres, apellidos:apellidos, ci:ci, correo:correo, celular:celular,id_user:id_user},function (datos) {
                $('#respuesta').html(datos);
            });
        }
    });
</script>