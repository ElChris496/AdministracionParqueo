<?php 
include('../../../../config.php');

$id_user = $_GET['id_user'];

$sentencia = $pdo->prepare("DELETE FROM cliente WHERE id = :id");

$sentencia->bindParam(':id',$id_user);

if($sentencia->execute()){
    echo "se elimino el registro de la manera correcta";
    ?>
    <script>location.href = "../clientes/clientes.php";</script>
    <?php
}else{
    echo "error al eliminar el registro";
}