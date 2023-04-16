<?php
include('../../../../config.php');

$nombres = $_GET['nombres'];
$apellidos = $_GET['apellidos'];
$ci = $_GET['ci'];
$correo = $_GET['correo'];
$celular = $_GET['celular'];
$id_user = $_GET['id_user'];

date_default_timezone_set("America/caracas");
//$created_at = date("Y-m-d h:i:s");
$updated_at = date("Y-m-d h:i:s");


$sentencia = $pdo->prepare("UPDATE cliente SET
nombres = :nombres,
apellidos = :apellidos,
ci = :ci,
correo = :correo,
celular = :celular,
updated_at = :updated_at 
WHERE id = :id");

$sentencia->bindParam(':nombres',$nombres);
$sentencia->bindParam(':apellidos',$apellidos);
$sentencia->bindParam(':ci',$ci);
$sentencia->bindParam(':correo',$correo);
$sentencia->bindParam(':celular',$celular);
$sentencia->bindParam(':updated_at',$updated_at);
$sentencia->bindParam(':id',$id_user);

if($sentencia->execute()){
    echo "se actualizo el registro de la manera correcta";
    ?>
    <script>location.href = "../clientes/clientes.php";</script>
    <?php
}else{
    echo "error al actualizar el registro";
}