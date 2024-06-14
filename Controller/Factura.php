<?php
require('../Model/Conexion.php');
require('Constans.php');

if (!isset($_SESSION)) {
    session_start();
}

$usuario = $_GET['usuario'];
$password = $_GET['password'];


$con = new conexion();

$onlyUserSession = $con->getUser($usuario,$password);

foreach ($onlyUserSession as $user) {
    $usuario = $user['login'];
    $password = $user['password'];
    $tipoUsuserio = $user['tipo'];
    $id_usuario = $user['id_usu'];

}

$userId =  $id_usuario;
$urlViews = URL_VIEWS;

$getTotalPreventa = $con->getTotalPreventa($userId);

foreach ($getTotalPreventa as $preVentaTotal){
    $preventa = $preVentaTotal['total'];
}

require('../Views/FacturaViews.php');
?>