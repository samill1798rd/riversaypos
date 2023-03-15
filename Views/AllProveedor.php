<?php
include_once('../Model/conexion.php');
$con = new conexion();

$allProveedor = $con->getAllProveedor();

while ($proveedor = mysqli_fetch_array($allProveedor)) {
    echo '<option value="' . utf8_encode($proveedor['proveedor']) . '">' . utf8_encode($proveedor['proveedor']) . '</option>';
}

?>