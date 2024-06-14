<?php
require('../Model/Conexion.php');
require('Constans.php');

if (!isset($_SESSION)) {
    session_start();
}

$idUsuario = $_GET['idUser'];

$con = new conexion();

$onlyUserSession = $con->getOnlyUserData($idUsuario);

foreach ($onlyUserSession as $user) {
    $usuario = $user['login'];
    $password = $user['password'];
    $id_usuario = $user['id_usu'];
}

$userId =  $id_usuario;

$deleteAllPreventa = $con->deleteAllPreventa($$userId);

$urlViews = URL_VIEWS;

require('../Views/RefreshPedido.php');
?>
