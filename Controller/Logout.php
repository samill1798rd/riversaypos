<?php
require ('../Model/Conexion.php');
require ('Constans.php');

if (!isset($_SESSION)) {
    session_start();
}

$usuario = $_GET['usuario'];
$password = $_GET['password'];

$con = new Conexion();


$searchUser = $con->getUser($usuario,$password);


foreach ($searchUser as $user) {
    $tipo = $user['tipo'];
    $id_usuario = $user['id_usu'];
    $nombres = $user['nombre'];
    $password = $user['password'];
    $foto = $user['foto'];
    $_SESSION['nombres'] =$user['nombre'];
}

$urlViews = URL_VIEWS;
$userLogueado = $nombres;
$imageUser =$foto;

$menuMain = $con->getMenuMain();

require ('../Views/LogoutViews.php');

?>