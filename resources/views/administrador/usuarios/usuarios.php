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
                
            <!--INICIO CRUD -->
                <div class="container-xl">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8"><h2>Lista de <b>Usuarios</b></h2></div>
                                    <div class="col-sm-4">
                                        <div class="search-box">
                                            <i class="nav-icon fas fa-search">&#xE8B6;</i>
                                            <input type="text" class="form-control" placeholder="Search&hellip;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                            <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>CI</th>
                                        <th>Correo</th>
                                        <th>Celular</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <?php
                                    $contador=0;
                                        $query_cliente = $pdo->prepare("SELECT * FROM cliente");
                                        $query_cliente->execute();
                                        $clientes = $query_cliente->fetchAll(PDO::FETCH_ASSOC);
                                        foreach($clientes as $cliente){
                                            $id = $cliente['id'];
                                            $nombres = $cliente['nombres'];
                                            $apellidos = $cliente['apellidos'];
                                            $ci = $cliente['ci'];
                                            $correo = $cliente['correo'];
                                            $celular = $cliente['celular'];
                                            $contador = $contador + 1;
                                ?>
                                    <tr>
                                        <td><?php echo $contador;?></td>
                                        <td><?php echo $nombres;?></td>
                                        <td><?php echo $apellidos;?></td>
                                        <td><?php echo $ci;?></td>
                                        <td><?php echo $correo;?></td>
                                        <td><?php echo $celular;?></td>
                                    <td>
                                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                        ?>
                            </table>
                        </div>
                    </div>  
                </div>
                <!-- FIN CRUD-->
            </div>
        </div>
        <!-- /.content-wrapper -->
        </div>
        <?php include('../../../../resources/layout/admin/footerlinks.php');?>
    </body>

<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-width: 100%;
}
.table-title h2 {
    margin: 8px 0 0;
    font-size: 22px;
}
.search-box {
    position: relative;        
    float: right;
}
.search-box input {
    height: 34px;
    border-radius: 20px;
    padding-left: 35px;
    border-color: #ddd;
    box-shadow: none;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    position: absolute;
    font-size: 19px;
    top: 8px;
    left: 10px;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}   
</style>
</html>