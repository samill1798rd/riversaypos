<?php
require('../Model/Conexion.php');
require('Constans.php');

if (!isset($_SESSION)) {
    session_start();
}

$usuario = $_GET['usuario'];
$password = $_GET['password'];

$con = new Conexion();


$searchUser = $con->getUser($usuario, $password);
$allUsuarios = $con->getAllUserData();

foreach ($searchUser as $user) {
    $tipo = $user['tipo'];
    $id_usuario = $user['id_usu'];
    $nombres = $user['nombre'];
    $password = $user['password'];
    $foto = $user['foto'];
}

$tipoDeAlerta = $con->getMensajeAlerta();
foreach ($tipoDeAlerta as $tipoAlerta) {
    $alerta = $tipoAlerta['tipoAlerta'];
    $mensaje = $tipoAlerta['mensaje'];
}

if (!isset($_GET['estado'])) {
    $mensaje = "";
    $alerta = "";

    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);
}


$urlViews = URL_VIEWS;
$userLogueado = $nombres;
$imageUser = $foto;


$tipoProductos = $con->getAllTipoProducto();

$menuMain = $con->getMenuMain();
require("../Views/TipoProductoViews.php");


?>