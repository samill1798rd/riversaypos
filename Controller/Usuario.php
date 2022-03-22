<?PHP
require('../Model/Conexion.php');
require('Constans.php');

if(!isset($_SESSION)){
    session_start();
}

$usuario = $_GET['usuario'];
$password = $_GET['password'];

$con = new Conexion();
$searchUser = $con->getUser($usuario,$password);
$allUsuarios = $con->getAllUserData();


foreach($searchUser as $user){
    $idUsuario = $user['id_usuario'];
    $tipo = $user['tipo'];
    $login = $user['login'];
    $nombre = $user['nombre'];
    $password = $user['passwordC'];
    $foto = $user['foto'];
}

$tipoDeAlerta = $con->getMensajeAlerta();

foreach($tipoDeAlerta as $tipoAlerta){
    $alerta = $tipoAlerta['tipoAlerta'];
    $mensaje = $tipoAlerta['mensaje'];
}

if(!isset($_GET['estado'])){

    $mensaje = "";
    $alerta = "";
    
    $updateMensaje = $con->updateMensajeAlert($mensaje, $alerta);
}

$userLogueado = $nombre;
$imageUser = $foto;
$urlViews = URL_VIEWS;
$menuMain = $con->getMenuMain();
require('../Views/UsuarioViews.php');

?>