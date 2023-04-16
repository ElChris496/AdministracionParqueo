<?php
include('../../../../config.php');

$estado= $_GET['estado'];
$id_parqueo = $_GET['id_parqueo'];
$id_cliente = $_GET['id_cliente'];


date_default_timezone_set("America/caracas");
$created_at = date("Y-m-d h:i:s");
$updated_at = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("INSERT INTO sitio
        (estado, id_parqueo, id_cliente, created_at, updated_at) 
VALUES (:estado, :id_parqueo, :id_cliente,  :created_at, :updated_at)");

$sentencia->bindParam('estado',$estado);
$sentencia->bindParam('id_parqueo',$id_parqueo);
$sentencia->bindParam('id_cliente',$id_cliente);
$sentencia->bindParam('created_at',$created_at);
$sentencia->bindParam('updated_at',$updated_at);

if($sentencia->execute()){
    echo "registro satisfactorio";
    ?>
    <script>location.href = "mapeoParqueo.php";</>
    <?php
}else{
    echo "no se pudo registrar a la base de datos";
}
$sentencia2 = $pdo->prepare("UPDATE parqueo SET cantidad_sitios= cantidad_sitios+1");
$sentencia2->execute();
?>
