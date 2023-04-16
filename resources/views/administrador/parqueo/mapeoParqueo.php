<?php include('../../../../config.php');?>
<!DOCTYPE html>
<html lang="es">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <head>
        <?php include('../../../layout/admin/head.php');?>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <?php include('../../../layout/admin/menu.php');?>

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
    });
</script>