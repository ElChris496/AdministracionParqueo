<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 27/8/2022
 * Time: 00:02
 */

include('../../../../config.php');

$nombres = $_GET['nombres'];
$apellidos = $_GET['apellidos'];
$ci = $_GET['ci'];
$correo = $_GET['correo'];
$celular = $_GET['celular'];

date_default_timezone_set("America/caracas");
$created_at = date("Y-m-d h:i:s");
$updated_at = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("INSERT INTO cliente
        (nombres,  apellidos, ci, correo, celular, created_at, updated_at) 
VALUES (:nombres, :apellidos, :ci, :correo, :celular, :created_at, :updated_at)");

$sentencia->bindParam('nombres',$nombres);
$sentencia->bindParam('apellidos',$apellidos);
$sentencia->bindParam('ci',$ci);
$sentencia->bindParam('correo',$correo);
$sentencia->bindParam('celular',$celular);
$sentencia->bindParam('created_at',$created_at);
$sentencia->bindParam('updated_at',$updated_at);


if($sentencia->execute()){
    echo "registro satisfactorio";
    ?>
    <script>location.href = "../usuarios/usuarios.php";</script>
<?php
}else{
    echo "no se pudo registrar a la base de datos";
}
?>